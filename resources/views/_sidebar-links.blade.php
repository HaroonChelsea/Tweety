<ul>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="{{route('home')}}"><i class="fas fa-home text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Home
            </p>
        </a>
    </li>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="/explore"><i class="fas fa-hashtag text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Explore
            </p>
        </a>
    </li>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="/"><i class="fas fa-bell text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Notifications
            </p>
        </a>
    </li>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="/"><i class="fas fa-envelope text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Messages
            </p>
        </a>
    </li>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="/"><i class="fas fa-bookmark text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Bookmarks
            </p>
        </a>
    </li>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="/"><i class="fas fa-clipboard-list text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Lists
            </p>
        </a>
    </li>
    <li>
        <a class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
            href="{{route('profile',auth()->user())}}"><i class="fas fa-user text-2xl mr-4 text-left"></i>
            <p class="text-lg font-semibold text-left">
                Profile
            </p>
        </a>
    </li>
    <li>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="focus:outline-none hover:text-blue-400 flex items-center py-2 px-4 hover:bg-blue-100 rounded-full mr-auto mb-3"
               ><i class="fas fa-ellipsis-h text-2xl mr-4 text-left"></i>
                <p class="text-lg font-semibold text-left">
                    Logout
                </p>
            </button>
        </form>
    </li>
</ul>
