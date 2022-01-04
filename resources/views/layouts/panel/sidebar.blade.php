<div class="fixed flex flex-col top-14 left-0 w-14 md:w-64 hover:w-64  h-full text-black dark:text-gray-100 bg-white dark:bg-gray-900  border-r dark:border-none z-10 transition-all duration-300"
:class="{'transform -translate-x-full ease-in-out duration-700': !open}">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1 ">
            <li class="px-5 hidden md:block ">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="far fa-envelope"></i>

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                </a>
            </li>

            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center mt-5 h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                </div>
            </li>
            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="far fa-user"></i>

                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gradient-to-r from-gray-800 via-gray-600 to-gray-700   hover:text-gray-100 border-x-2 rounded-r-lg rounded-l-lg border-transparent hover:border-red-600  pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                        <i class="fas fa-tools"></i>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                </a>
            </li>

        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
    </div>
</div>
