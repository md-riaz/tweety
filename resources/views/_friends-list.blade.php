<div class="bg-blue-100 py-4 px-6 border border-gray-300 rounded-lg">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse(current_user()->follows as $user )
            <li class="{{ $loop->last ? '' : 'mb-4'}}">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt="avatar"
                            class="rounded-full mr-2"
                            width="40"
                            height="40"
                        >

                        {{ $user->name }}</a>
                </div>
            </li>
        @empty
            <li>No friend's yet!</li>
        @endforelse
    </ul>
</div>
