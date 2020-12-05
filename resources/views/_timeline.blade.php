@forelse ($tweets as $tweet)
    @include('_tweet')
@empty
    <div class="bg-red-100 border-l-4 border-red-500 text-red-500 p-4 my-4" role="alert">
        <p>No tweets found!</p>
    </div>
@endforelse
{{$tweets->links()}}
