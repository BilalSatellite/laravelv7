<div class="fixed w-full flex items-center justify-between h-14  z-10 text-dark1 dark:text-gray-100 bg-white dark:bg-gray-900">
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

                    {{-- <li>
                        <a href="#" class="flex items-center mr-4 hover:text-myred">
                            <span class="inline-flex mr-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                    </path>
                                </svg>
                            </span>
                            Logout
                        </a>
                    </li> --}}
                    <li>
                        <img
                        class="w-10 h-10 mr-4 object-cover rounded-lg shadow-solid text-teal-400"
                        src="//images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                        alt="Avatar of Tailwind CSS Design"
                      />

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
