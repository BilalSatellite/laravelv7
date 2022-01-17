<div class="flex flex-col flex-1 h-full overflow-hidden">
    <header class="flex-shrink-0 drop-shadow-sm bg-skin-navbar-fill border-b border-borderColor">
        <div class="flex items-center justify-between p-2 text-skin-nav">
            <!-- Navbar left -->
            <div class="flex items-center space-x-3">
                <span
                class="text-skin-headline p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">S-WD</span>
                <!-- Toggle sidebar button -->
                <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                    <svg class="w-4 h-4 " :class="{'transform transition-transform -rotate-180': isSidebarOpen}"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Navbar right -->
        <div class="relative flex items-center space-x-3">
            <div class="items-center l  md:flex">
                <!-- Options Menu -->
                <button @click="darkMode = !darkMode" class="focus:outline-none">

                    <template x-if="!darkMode">
                        <i class="rounded-full fas fa-sun"></i>
                    </template>
                    <template x-if="
                    darkMode">
                    <i class="rounded-full fas fa-moon"></i>
                </template>
            </button>

        </div>
        <!-- User Menu -->
        <div class="relative " x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen" class="p-1  w-10 h-10  focus:outline-none " title="Hi,{{ auth()->user()->name }}">
                <img class="object-cover rounded-lg " src="{{ auth()->user()->profile_photo_url }}"
                alt="{{ auth()->user()->name }}" />
            </button>



            <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="
            absolute
            z-50
            w-48
            max-w-md
            mt-3
            transform
            bg-white
            rounded-md
            shadow-lg
            -translate-x-3/4
            min-w-max
            ">
            <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                <span class="text-gray-800">{{ auth()->user()->name }}</span>
                <span class="text-sm text-gray-400">{{ auth()->user()->email }}</span>
            </div>
            <ul class="flex flex-col p-2 my-2 space-y-1">
                <li>
                    <a href="{{ route('profile.show') }}" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Profile</a>
                </li>
                <li>
                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                        Link</a>
                    </li>
                </ul>
                <div class="flex items-center justify-center p-4 text-blue-700  border-t">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
