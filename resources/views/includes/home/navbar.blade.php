<nav id="header" class="fixed w-full z-30 top-0 text-white p-2">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{ route('/') }}">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <img src="https://4.bp.blogspot.com/-I7aa6593uJM/Wp8fy-dOZAI/AAAAAAAABuY/Wm87VUW609M5JMj5pCM-s2CPpkZwbtdNwCLcBGAs/s1600/PGRI.CLR..png" alt="" class="w-14">
                </a>
                <span class="text-2xl font-bold ml-2 text-black lg:mx-4 sm:mx-32 md:mx-44 select-none">SMK PGRI INDRAMAYU</span>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20 rounded" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Menu-1</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Menu-2</a>
                    </li>
                </ul>
                <button
                id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                >
                DAFTAR PPDB ONLINE >>
            </button>
            @auth
            <a href="{{ route('dashboard') }}"
            id="navAction"
            class="mx-auto lg:mx-0 hover:underline text-gray-600 font-bold mt-4 lg:mt-0 py-4 px-8 transform transition hover:scale-105 duration-300 ease-in-out"
            >
            dashboard
        </a>
        @endauth
    </div>
</div>
<hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>