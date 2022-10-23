@extends('app')

@section('title', 'オトナマンガ - ランキング')

@section('content')
    @include('atoms._nav', ['tab' => 1])

    <div class="flex w-full mx-auto justify-center">
        <div class="w-full flex flex-col md:flex-row justify-around mx-auto p-4 lg:p-8 mb-8">
            <div class="mb-4">
                @include('books.atoms.tabs')
            </div>

            <div class="w-full md:w-4/5 rounded-lg md:ml-8">
                {{-- ランキング --}}
                <div class="w-full flex flex-col mb-4">
                    <div class="w-full max-w-8xl mx-auto mb-4">
                        <div class="w-full flex flex-col">
                            @include('search.atoms._term_tabs', [
                                'todays_new' => false,
                                'ranking' => true,
                                'genre' => $genre_id,
                            ])

                            {{-- フィルター --}}
                            @isset($books)
                                <div class="inline-block border-b border-ddd dark:border-dark-1 pb-2">
                                    @include('search.atoms._filter')
                                    <form class="acd-content" method="POST" action="{{ route('ranking.adult.search') }}">
                                        @csrf
                                        @include('search.ranking._form', [
                                            'sort' => $sort,
                                            'feature' => $feature,
                                        ])
                                    </form>
                                </div>
                            @endisset
                        </div>
                    </div>

                    @include('search.atoms._content')
                </div>

                <div class="w-full flex justify-center mt-8">{{ $books->appends(Request::except('page'))->links() }}</div>
            </div>
        </div>
    </div>

    @include('atoms._footer')
@endsection
