@component('components.app')
    <div>
        @foreach ($users as $user)
            <a href="{{ route('profile', $user->username) }}" class="flex items-center mb-5 border border-gray-300 p-4">
                <img class="h-20 w-20 rounded-full rounded-full mr-4" src="{{ $user->avatar }}"
                    alt="{{ $user->username }}'s avatar">
                <div>
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>
        @endforeach
        {{ $users->links() }}
    </div>
@endcomponent
