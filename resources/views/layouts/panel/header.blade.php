<div class="fixed w-full flex items-center justify-between h-14 bg-gray-100 text-white z-10  ">
    <div
<<<<<<< HEAD
        class="flex items-center justify-start md:w-64 md:justify-center pl-3 w-14  h-14 draklight border-b">
        <img class="w-7 h-7  mr-2 rounded-md overflow-hidden md:w-10 md:h-10"
            src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
        <span class="hidden md:block font-bold uppercase">Satellite</span>
    </div>
    <div class="flex-1 items-center  draklight  header-right border-b">
=======
        class="flex items-center justify-start md:w-64 md:justify-center pl-3 w-14  h-14 bg-col4 dark:bg-gray-800 border-none">
        <img class="w-6 h-7  mr-2 rounded-md overflow-hidden md:w-8 md:h-10"
            src="{{ asset('img/logo/smi3.png') }}" />
        <span class="hidden md:block font-bold uppercase">Satellite <small class="text-xs">Mobile</small></span>
        
    </div>
    <div class="flex-1 items-center bg-col4 dark:bg-gray-800 header-right">
>>>>>>> 6fd4ce16981c8aaa1c4a9d8086560140720cbe69
        <div class="flex justify-between">
            <div class="flex h-14 items-center">
                <ul class="flex items-center">
                    <li>
<<<<<<< HEAD
                        <button  @click="open = ! open" class="flex items-center mr-4 pl-1 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <i class="fas fa-angle-double-right transform transition duration-700 ease-in-out animate-pulse "
                                :class="{'-rotate-180': open}"></i>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
=======
                        <button  @click="open = ! open" class="p-2 bg-col4 rounded-full text-col2 hover:bg-col2 hover:text-col4  focus:outline-none">
                            <span class="w-6 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
>>>>>>> 6fd4ce16981c8aaa1c4a9d8086560140720cbe69
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h8m-8 6h16" />
                                </svg> --}}
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="flex h-14 items-center">
                <ul class="flex items-center">
                    <li>
                        <button @click="darkMode = !darkMode"
<<<<<<< HEAD
                            class="focus:outline-none animate-pulse">

                            <template x-if="!darkMode">
                                <i class="fas fa-sun"></i>
=======
                            class="p-2 bg-col4 rounded-full text-col2 hover:bg-col2 hover:text-col4 focus:outline-none">

                            <template x-if="!darkMode">
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        clip-rule="evenodd"></path>
                                </svg>
>>>>>>> 6fd4ce16981c8aaa1c4a9d8086560140720cbe69
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
                        <a href="#" class="flex items-center mr-4 hover:text-blue-100">
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
