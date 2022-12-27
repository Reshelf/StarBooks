@extends('app')

@section('title', __('新規登録'))

@section('content')
  @include('atoms._simple_nav')
  <div class="max-w-md m-8 md:mx-auto bg-white rounded border border-eee dark:border-none">
    <h2 class="card-title">
      {{ __('新規登録') }}
    </h2>

    <form method="POST" action="{{ route('register', app()->getLocale()) }}" class="px-6 dark:bg-dark-1 pt-6"
      onsubmit="submit_btn()">
      @csrf

      {{-- エラー文 --}}
      @include('atoms._error_card_list')
      @include('atoms.success')


      <div class="w-full mb-3">
        <input class="card-input" type="email" name="email" required placeholder="{{ __('メールアドレス') }}">
      </div>
      <div class="w-full mb-6">
        <p class="mb-2 bg-primary bg-opacity-10 text-primary px-4 py-2 font-semibold">
          {{ __('8文字以上の数字、大文字小文字を含むパスワード') }}
        </p>
        <input class="card-input" type="password" name="password" required placeholder="{{ __('パスワード') }}">
      </div>

      <label class="light-checkbox my-4">
        <input type="checkbox" class="light-checkbox-Input" checked required>
        <span class="light-checkbox-DummyInput">
          <svg width="10" height="8" class="stroke-white" viewBox="0 0 10 8" fill="none">
            <path d="M0.75 3.99998L3.58 6.82998L9.25 1.16998" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </span>
        <span class="light-checkbox-LabelText"><a href="{{ route('others.terms', app()->getLocale()) }}"
            class="text-primary" target="_blank" rel="noopener noreferrer">{{ __('利用規約') }}</a>
          {{ __('と') }} <a href="{{ route('others.privacy', app()->getLocale()) }}" class="text-primary"
            target="_blank" rel="noopener noreferrer">{{ __('プライバシーポリシー') }}</a> {{ __('に同意する') }}</span>
      </label>
      <div class="relative">
        <button class="submit_btn2 btn-primary px-6 py-3 md:py-4 w-full" type="submit">
          {{ __('メールアドレスで登録') }}
          <span class="load loading"></span>
        </button>
      </div>
    </form>

    <div class="flex justify-end dark:bg-dark-1">
      <a href="/login" class="inline-block text-xs cursor-pointer py-4 px-6 hover:text-primary">{{ __('またはログイン') }}</a>
    </div>
  </div>
@endsection
