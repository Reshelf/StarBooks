@extends('app')

@section('title', $user->name . 'さんのプロフィール')

@section('head')
    <script src="{{ asset('js/dragdrop/user-profile.js') }}"></script>
@endsection

@section('content')
    @include('atoms._nav', ['tab' => 4])
    <div class="bg-white dark:bg-dark">
        @include('users.atoms.user', [
            'mypage' => true,
            'settings' => false,
        ])
    </div>
    <div class="flex max-w-6xl w-full mx-auto mt-4 px-4 md:px-0 justify-center">
        <div class="w-full md:mx-12">

            {{-- 成功 --}}
            @include('atoms.success')

            <div class="w-full flex flex-wrap justify-center md:justify-start">
                @if ($books->count() > 0)
                    @foreach ($books as $book)
                        @include('users.atoms.card')
                    @endforeach
                @endif
                @include('atoms.nomessage')
            </div>
        </div>
    </div>

    @include('atoms._footer')
@endsection
