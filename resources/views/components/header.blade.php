<div class="navbar bg-blue text-white font-satoshi  ">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0"
                class="menu menu-sm text-lg text-darkBlue dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a>Home</a></li>
                @auth
                    <li>
                        <a href="">Absensi</a>
                    </li>
                @endauth
            </ul>
        </div>
        <a href="/" class="btn btn-ghost text-2xl">Absensi</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-lg">
            <li><a>Home</a></li>
            @auth
                <li>
                    <a href="">Absensi</a>
            </li>
            @endauth
        </ul>
    </div>
    <div class="navbar-end">
        @if (Auth::check())
            <div class="avatar">
                <div class="w-12 rounded-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
        @else
            <div class=" space-x-1">
                <a href="{{ route('login') }}">
                    <div class="btn  bg-darkBlue border-0  hover:bg-green  text-lg dark:text-white">Login</div>
                </a>
                <a href="{{ route('register') }}">
                    <div class="btn  btn-outline btn-accent  hover:bg-darkBlue  text-lg dark:text-white">Register</div>
                </a>
            </div>
        @endif
    </div>
</div>
