{{-- https://raddy.dev/blog/how-to-create-responsive-side-navigation-using-tailwindcss-alpinejs/ --}}

<nav id="mobile-navigation" class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10" :class="openMenu ? 'visible' : 'invisible' " x-cloak>

    <ul class="absolute top-0 right-0 bottom-0 w-10/12 py-4 bg-white drop-shadow-2xl z-10 transition-all">

        <li class="border-b border-inherit">
            <a href="{{ route('home') }}" class="block p-4" aria-current="true">{{ __('Home') }}</a>        
        </li>
        <li class="border-b border-inherit">
            <a href="{{ route('notifications') }}" class="block p-4">{{ __('Notifications') }}</a>
        </li>
        <li class="border-b border-inherit">
            <a href="{{ route('messages') }}" class="block p-4">{{ __('Messages') }}</a>
        </li>
        <li class="border-b border-inherit">
            <a href="{{ route('friends') }}" class="block p-4">{{ __('Friends') }}</a>
        </li>
        <li class="border-b border-inherit">
            <a href="{{ route('profile.show') }}" class="block p-4">{{ __('Profile') }}</a>
        </li>
        <li class="border-b border-inherit">
            <form method="POST" action="{{ route('logout') }}" x-data class="w-full">
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="block p-4">{{ __('Logout') }}</a>
            </form>
        </li>

    </ul>

    <!-- Close Button -->
    <button class="absolute top-0 right-0 bottom-0 left-0" @click="openMenu = !openMenu" :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Close Navigation Menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 left-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

  </nav>