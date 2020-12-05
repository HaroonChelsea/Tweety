@component('components.app')
    <header class="mb-6 relative">
        <div class="relative mb-10 sm:mb-0">
            <img class="mb-3" src="/images/default-profile-banner.jpg" alt="">
            <img src="{{ $user->avatar }}" class="h-24 w-24 sm:h-40 sm:w-40 rounded-full bottom-0 absolute transform -translate-x-1/2 translate-y-1/2" style="left: 50%" width="150" />
        </div>
        <div class="flex justify-between items-center mb-4">
            <div>
                <p class="font-bold text-2xl mb-0">{{$user->name}}</p>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @if(current_user()->is($user))
                <a href="/profile/{{$user->username}}/edit" class="px-3 mx-1 py-2 text-xs text-dark font-semibold shadow bg-white hover:bg-gray-100 border border-black rounded-full">
                    Edit Profile
                </a>
                @endif
            @unless(current_user()->is($user))
                <form action="/profile/{{$user->username}}/follow" method="POST">
                    @csrf
                    <button type="submit" class="px-6 mx-1 py-2 text-xs text-white font-semibold shadow bg-blue-400 hover:bg-blue-500 focus:outline-none rounded-full">
                        {{current_user()->following($user)? 'Unfollow' : 'Follow'}}
                    </button>
                </form>
                @endunless
            </div>
        </div>
        <p class="text-xs text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet asperiores culpa ea ex exercitationem fugit incidunt nam, perferendis quasi quo repudiandae totam ut! Accusamus deserunt dicta dolorem expedita fugit libero modi odio optio provident tempora. Consectetur illum, inventore ipsa iusto laudantium nemo, placeat quia, ratione sit tempore ullam vero?</p>
    </header>
    @include('_timeline',[
    'tweets' => $tweets
    ])
@endcomponent
