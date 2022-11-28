@extends('app')

@section('title')
    @switch($genre_id)
        @case(1)
            少年 - 今日の新作
        @break

        @case(2)
            青年 - 今日の新作
        @break

        @case(3)
            少女 - 今日の新作
        @break

        @case(4)
            女性 - 今日の新作
        @break

        @case(5)
            オトナ - 今日の新作
        @break

        @default
            今日の新作
    @endswitch
@endsection

@section('content')
    @include('atoms._nav', ['tab' => 2])

    <div class="flex w-full mx-auto justify-center">
        <div class="w-full flex flex-col md:flex-row justify-around mx-auto px-4 lg:p-8 mb-8">

            <div class="lg:mb-4">
                @include('books.atoms.tabs')
            </div>

            <div class="w-full md:w-4/5 rounded-lg md:ml-8">
                @include('atoms._error_card_list')
                @include('atoms.success')


                {{-- ランキング --}}
                <div class="w-full flex flex-col mb-4">
                    <div class="w-full max-w-8xl mx-auto mb-4">
                        <div class="w-full flex flex-col">
                            @include('search.atoms._term_tabs', [
                                'todays_new' => true,
                                'ranking' => false,
                                'genre' => $genre_id,
                            ])

                            {{-- フィルター --}}
                            @isset($books)
                                <div class="inline-block border-b border-ddd dark:border-dark-1 pb-2">
                                    @include('search.atoms._filter')
                                    <form class="acd-content" method="POST"
                                        @switch($genre_id)
                                            @case(1) action="{{ route('todays_new.boys.search') }}" @break
                                            @case(2) action="{{ route('todays_new.youth.search') }}" @break
                                            @case(3) action="{{ route('todays_new.girls.search') }}" @break
                                            @case(4) action="{{ route('todays_new.woman.search') }}" @break
                                            @case(5) action="{{ route('todays_new.adult.search') }}" @break
                                            @default action="{{ route('todays_new.search') }}"
                                        @endswitch>
                                        @csrf
                                        @include('search.todays_new._form', [
                                            'sort' => $sort,
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
