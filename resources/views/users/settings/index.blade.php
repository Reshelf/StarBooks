@extends('app')

@section('title', '設定')

@section('content')
    @include('atoms._nav', ['tab' => 0]))
    <div class="bg-white dark:bg-dark">
        @include('users.atoms.user', [
            'mypage' => false,
            'settings' => true,
        ])
    </div>
    <div class="flex max-w-6xl w-full mx-auto mt-4 px-12 md:px-0 justify-center">
        <div class="w-full mx-12">
            <div class="w-full flex flex-wrap">
                @if ($books->count())
                    @foreach ($books as $book)
                        @include('users.atoms.card')
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    @include('atoms._footer')
@endsection
