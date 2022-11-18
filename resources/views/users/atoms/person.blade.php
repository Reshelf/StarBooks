<div class="flex items-center mb-2">
    <a href="{{ route('users.show', ['username' => $person->username]) }}" class="flex items-center mr-6">
        @empty($person->avatar)
            <img src="{{ asset('/img/noimage-user.svg') }}" alt="" class="h-12 w-12 object-cover rounded-full">
        @else
            <img src="{{ Auth::user()->avatar }}" alt="avatar" class="h-12 w-12 object-cover rounded-full">
        @endempty
        <span class="ml-4 font-semibold truncate max-w-[140px]">{{ $person->name }}</span>
    </a>

    @if (Auth::id() !== $person->id)
        <follow-button class="ml-auto" :initial-is-followed-by='@json($person->isFollowedBy(Auth::user()))'
            :authorized='@json(Auth::check())'
            endpoint="{{ route('users.follow', ['username' => $person->username]) }}">
        </follow-button>
    @endif
</div>
