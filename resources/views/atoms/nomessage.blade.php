@if (!$books->count() > 0)
    <div class="p-2 my-4">
        {{ __('表示する作品がありません') }}
    </div>
@endif
