<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-grey-400' }} ">
    <div class="mr-2 lg:flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt="avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div class="">
        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-dislike-buttons :tweet="$tweet"></x-like-dislike-buttons>
    </div>
</div>
