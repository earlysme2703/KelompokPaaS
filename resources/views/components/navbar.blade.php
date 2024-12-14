<nav class="bg-[#002633] border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Platform as a Service</span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-black rounded-lg bg-black md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#002633]">
                <li>
                    <a href="{{ route('dashboard') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Posts</a>
                </li>
                <li>
                    <a href="{{ route('/aboutus') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">About us</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="block py-2 px-3 rounded {{ request()->routeIs('login') ? 'text-blue-600' : 'text-gray-900' }}  md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Logout</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>