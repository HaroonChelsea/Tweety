@component('components.master')
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex justify-between">
                @if(auth()->check())
                <div class="lg:w-1/6">
                    @include('_sidebar-links')
                </div>
                @endif
                <div class="flex-1 lg:mx-10">
                    {{ $slot }}
                </div>
                @if(auth()->check())
                <div class="lg:w-1/6">
                    @include('_friend-list')
                </div>
                @endif
            </div>
        </main>
    </section>
@endcomponent
