<div class="w-full rounded-lg bg-lightest my-4">
    <div class=" p-3">
        <p class="text-xl font-bold">Following</p>
    </div>
    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="w-full flex border-t p-3">
                <a href="{{route('profile',$user)}}" ><img src="{{ $user->avatar }}" class="h-12 w-12 rounded-full flex-none" /></a>
            <div class="hidden lg:block ml-4">
                <a href="{{route('profile',$user)}}" ><h5 class="hover:text-gray-700 text-sm font-bold leading-tight"> {{ $user->name }} </h5></a>
                <p class="text-sm leading-tight">{{'@' . $user->username}}</p>
            </div>
        </li>
        @empty
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 my-4" role="alert">
                <p>No friends found!</p>
            </div>
        @endforelse
    </ul>
</div>
