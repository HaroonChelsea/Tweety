<div class="w-full border border-gray-200 rounded-2xl mt-4">
    <div class="flex flex-col-reverse">
        <div class="w-full p-4 hover:bg-lighter flex">
            <div class="flex-none mr-4">
                <a href="{{route('profile',$tweet->user)}}" ><img src="{{ $tweet->user->avatar }}" class="h-12 w-12 rounded-full flex-none" /></a>
            </div>
            <div class="w-full">
                <div class="flex items-center w-full">
                    <a href="{{route('profile',$tweet->user)}}" ><h5 class="hover:text-gray-700 font-semibold text-sm sm:text-base"> {{ $tweet->user->name }} </h5></a>
                    <a href="{{route('profile',$tweet->user)}}" ><p class="text-xs sm:text-base text-dark ml-2">{{'@'. $tweet->user->username}} </p></a>
                    <p class="text-xs sm:text-base text-dark ml-2"> {{ $tweet->created_at->diffForHumans() }} </p>
                </div>
                <p class="py-2">
                    {{ $tweet->body }}
                </p>
                <div class="flex items-center justify-between w-full">
                    <div class="flex items-center text-sm text-dark">
                        <i class="far fa-comment mr-3"></i>
                        <p> 0 </p>
                    </div>
                    <div class="flex items-center text-sm text-dark">
                        <i class="fas fa-retweet mr-3"></i>
                        <p> 0 </p>
                    </div>
                    <div class="flex items-center text-sm text-dark">
                        @if($tweet->isLikedBy(current_user()))
                            <form method="POST" action="/tweets/{{$tweet->id}}/removeLike" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" ><i class="fas fa-heart fa-2x text-red-500 focus:border-transparent mr-2"></i></button>
                                <span class="text-xs">{{$tweet->likes}}</span>
                            </form>
                        @else
                            <form method="POST" action="/tweets/{{$tweet->id}}/like" >
                                @csrf
                                <button type="submit" ><i class="far fa-heart fa-2x text-red-500 focus:border-transparent mr-2"></i></button>
                                <span class="text-xs">{{$tweet->likes?:0}}</span>
                            </form>
                        @endif

                    </div>
                    <div class="flex items-center text-sm text-dark">
                        <i class="fas fa-share-square mr-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

