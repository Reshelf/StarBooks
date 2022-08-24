@extends('app')

@section('title', 'Starbooks - 漫画プラットホーム')

@section('content')
    @include('_patials._nav')
    @include('_patials._genre_nav')
    {{-- <div class="w-full mx-auto">
        <div class="st-show">
            <img class="st-show-bg-img" src="/img/manga.jpeg" alt="">
            <div class="st-show-bg"></div>
            <div class="st-show-contents">
                <h1 class="st text-6xl text-white">世はまさに漫画時代。</h1>
            </div>
        </div>
    </div> --}}

    <div class="flex w-full mx-auto justify-center">
        <div class="w-full flex flex-col md:flex-row mx-auto p-4 lg:p-8 mb-8">
            <div class="mb-4" style="width: 200px;">
                @include('books._patials.tabs')
            </div>

            <div class="w-full md:w-4/5 rounded-lg md:ml-8">
                {{-- ランキング --}}
                <div class="w-full flex flex-col mb-4">
                    <div class="w-full flex justify-between mb-2">
                        <h3 class="text-xl font-semibold">ランキング</h3>
                        <a href="" class="font-semibold hover:text-primary">もっと見る</a>
                    </div>
                    <div class="w-full flex flex-wrap justify-between">
                        @if (!empty($books))
                            @foreach ($books as $book)
                                <div class="pb-4">
                                    <a href="{{ route('book.show', ['book' => $book]) }}">
                                        <img src="https://placehold.jp/200x200.png" alt="thumbnail" class="thumbnail">
                                        <span class="thumbnail-title">{{ $book->title }}</span>
                                    </a>

                                    <book-like :initial-is-liked-by='@json($book->isLikedBy(Auth::user()))'
                                        :initial-count-likes='@json($book->count_likes)'
                                        :authorized='@json(Auth::check())'
                                        endpoint="{{ route('book.like', ['book' => $book]) }}">
                                    </book-like>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- 今日の新作 --}}
                <div class="w-full flex flex-col mb-4">
                    <div class="w-full flex justify-between mb-2">
                        <h3 class="text-xl font-semibold">今日の新作</h3>
                        <a href="" class="font-semibold hover:text-primary">もっと見る</a>
                    </div>
                    <div class="w-full flex flex-wrap justify-between">
                        @if (!empty($books))
                            @foreach ($books as $book)
                                <div class="pb-4">
                                    <a href="{{ route('book.show', ['book' => $book]) }}">
                                        <img src="https://placehold.jp/200x200.png" alt="thumbnail" class="thumbnail">
                                        <span class="thumbnail-title">{{ $book->title }}</span>
                                    </a>

                                    <book-like :initial-is-liked-by='@json($book->isLikedBy(Auth::user()))'
                                        :initial-count-likes='@json($book->count_likes)'
                                        :authorized='@json(Auth::check())'
                                        endpoint="{{ route('book.like', ['book' => $book]) }}">
                                    </book-like>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- 購読中の作品 --}}
                <div class="w-full flex flex-col mb-4">
                    <div class="w-full flex justify-between mb-2">
                        <h3 class="text-xl font-semibold">購読中の作品</h3>
                        <a href="" class="font-semibold hover:text-primary">もっと見る</a>
                    </div>
                    <div class="w-full flex flex-wrap justify-between">
                        @if (!empty($books))
                            @foreach ($books as $book)
                                <div class="pb-4">
                                    <a href="{{ route('book.show', ['book' => $book]) }}">
                                        <img src="https://placehold.jp/200x200.png" alt="thumbnail" class="thumbnail">
                                        <span class="thumbnail-title">{{ $book->title }}</span>
                                    </a>

                                    <book-like :initial-is-liked-by='@json($book->isLikedBy(Auth::user()))'
                                        :initial-count-likes='@json($book->count_likes)'
                                        :authorized='@json(Auth::check())'
                                        endpoint="{{ route('book.like', ['book' => $book]) }}">
                                    </book-like>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- あなたへのオススメ --}}
                <div class="w-full flex flex-col">
                    <div class="w-full flex justify-between mb-2">
                        <h3 class="text-xl font-semibold">あなたへのオススメ</h3>
                        <a href="" class="font-semibold hover:text-primary">もっと見る</a>
                    </div>
                    <div class="w-full flex flex-wrap justify-between">
                        @if (!empty($books))
                            @foreach ($books as $book)
                                <div class="pb-4">
                                    <a href="{{ route('book.show', ['book' => $book]) }}">
                                        <img src="https://placehold.jp/200x200.png" alt="thumbnail" class="thumbnail">
                                        <span class="thumbnail-title">{{ $book->title }}</span>
                                    </a>

                                    <book-like :initial-is-liked-by='@json($book->isLikedBy(Auth::user()))'
                                        :initial-count-likes='@json($book->count_likes)'
                                        :authorized='@json(Auth::check())'
                                        endpoint="{{ route('book.like', ['book' => $book]) }}">
                                    </book-like>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                {{-- <div class="w-full flex justify-center mt-8">{{ $books->links() }}</div> --}}
            </div>
        </div>
    </div>
@endsection
