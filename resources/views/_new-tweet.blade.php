<div class="border border-blue-400 rounded rounded-lg p-8 flex">
    <div class="flex-none">
        <img src="{{ auth()->user()->avatar }}" class="flex-none w-12 h-12 rounded-full border border-lighter" />
    </div>
    <form method="POST" action="/tweets" class="w-full px-4 relative">
        @csrf
        <textarea name="body" placeholder="What's up?" class="mt-3 pb-3 w-full focus:outline-none"></textarea>
        <div class="flex">
            <div class="flex items-center">
                <i class="text-lg text-blue mr-4 far fa-image"></i>
                <i class="text-lg text-blue mr-4 fas fa-film"></i>
                <i class="text-lg text-blue mr-4 far fa-chart-bar"></i>
                <i class="text-lg text-blue mr-4 far fa-smile"></i>
            </div>
            <button type="submit"
                class="h-10 px-4 text-white font-semibold bg-blue-400 hover:bg-blue-500 focus:outline-none rounded-full bottom-0 right-0 ml-auto">
                Tweet
            </button>
        </div>
        @error('body')
            <p class="text-red-500 text-xs font-bold italic">{{ $message }}</p>
        @enderror
    </form>
</div>
