<div class="fixed w-full flex items-center justify-between h-14  z-10 bg-smil3 dark:bg-smid3 text-smid2 dark:text-smil2">
    <div
        class="flex items-center justify-start md:w-64 md:justify-center pl-3 w-14  h-14 border-b dark:border-none">
        <img class="w-7 h-9  mr-2 rounded-md overflow-hidden"
            src="{{ asset('img/logo/smi3.png') }}" />
        <span class="hidden md:block text-center">
            <p class="font-bold uppercase leading-none">Satellite</p>
            <p class="text-sm leading-none">Mobile Institute</p>

        </span>
    </div>
    <div class="flex-1 items-center  header-right border-b  dark:border-none">
        <div class="flex justify-between">
            <div class="flex h-14 items-center">
                <ul class="flex items-center">
                    <li>
                        <button  @click="open = ! open" class="flex items-center mr-4 pl-1 hover:text-red-600">
                            <span class="inline-flex mr-1">
                                <i class="fas fa-angle-double-right transform transition duration-700 ease-in-out animate-pulse "
                                :class="{'-rotate-180': open}"></i>

                            </span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="flex h-14 items-center">
                <ul class="flex items-center">
                    <li>
                        <button @click="darkMode = !darkMode"
                            class="focus:outline-none animate-pulse hover:text-red-600">

                            <template x-if="!darkMode">
                                <i class="fas fa-sun"></i>
                            </template>
                            <template x-if="
                            darkMode">
                            <i class="fas fa-moon"></i>
                            </template>

                        </button>

                    </li>

                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                    </li>

                    <li>
                        <div class="relative" x-data="{ isOpen: false}">
                            <button
                                    @click="isOpen = !isOpen"
                                    @keydown.escape="isOpen = false"
                                    class="flex items-center"
                            >
                            <img
                            class="w-10 mr-4 h-10 object-cover rounded-lg shadow-solid text-teal-400"
                            src="{{ auth()->user()->profile_photo_url }}"
                            alt="Avatar of Tailwind CSS Design"
                          />
                                {{-- <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg> --}}
                            </button>
                            <ul x-show="isOpen"
                                @click.away="isOpen = false"
                                class="absolute font-normal bg-white dark:bg-gray-900 shadow overflow-hidden rounded w-48   mt-3 mr-4 py-1 right-0 z-20" x-transition.duration.500ms
                            >
                                <li>
                                    <a href="{{ route('profile.show') }}" class="flex items-center px-3 py-3 hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class=""><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>
                                        <span class="ml-2">My Profile</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="flex items-center px-3 py-3 hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class=""><path d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" class="heroicon-ui"></path></svg>
                                        <span class="ml-2">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                     class="flex items-center px-3 py-3 hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class=""><path d="M0 0h24v24H0z" fill="none"></path><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path></svg><span class="ml-2">Logout</span>
                                    </a>
                                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
