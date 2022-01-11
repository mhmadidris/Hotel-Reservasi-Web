<div class="fixed top-0 z-50">
    <nav x-data="{ open: false }"
        class="h-20 py-4 sm:py-3 md:py-2 px-5 sm:px-4 md:px-3 lg:px-4 xl:px-6 2xl:px-7 w-screen transition-all duration-200 flex flex-col md:items-center md:justify-between md:flex-row">

        <div class="flex place-content-center place-items-center gap-10">
            <div class="flex flex-row items-center justify-between">
                <a href="{{ url('/') }}" class="w-20 md:w-24">
                    <h1 class="font-extrabold text-2xl text-shadow">HOTELKU</h1>
                </a>
                <button
                    class="md:hidden focus:outline-none rounded focus:shadow-outline flex place-content-center place-items-center bg-main p-2"
                    @click="open = !open">
                    <i class="fas fa-bars fa-lg" style="color:white"></i>
                </button>
            </div>
            <ul :class="{'flex': open, 'hidden': !open}" id="nav-text"
                class="bg-main rounded-lg m-2 md:bg-transparent transition-all duration-300 hidden flex-col flex-grow p-2 md:p-0 md:flex md:justify-end md:flex-row space-x-1 font-semibold">
                <a href="{{ url('/') }}">
                    <li
                        class="text-gray-100 rounded-3xl text-base transition-all duration-300 w-full md:w-24 h-8 flex place-content-center place-items-center hover:bg-gray-500 hover:bg-opacity-50 hover:text-black {{ '/' == request()->path() ? 'active' : '' }}">
                        Beranda</li>
                </a>
                <a href="{{ url('#blog') }}">
                    <li
                        class="text-gray-100 rounded-3xl text-base transition-all duration-300 w-full md:w-24 h-8 flex place-content-center place-items-center hover:bg-gray-500 hover:bg-opacity-50 hover:text-black {{ '#blog' == request()->path() ? 'active' : '' }}">
                        Blog</li>
                </a>
                <a href="{{ url('#help') }}">
                    <li
                        class="text-gray-100 rounded-3xl text-base transition-all duration-300 w-full md:w-24 h-8 flex place-content-center place-items-center hover:bg-gray-500 hover:bg-opacity-50 hover:text-black {{ '#help' == request()->path() ? 'active' : '' }}">
                        Bantuan</li>
                </a>
                <a href="{{ url('#about') }}">
                    <li
                        class="text-gray-100 rounded-3xl text-base transition-all duration-300 w-full md:w-24 h-8 flex place-content-center place-items-center hover:bg-gray-500 hover:bg-opacity-50 hover:text-black {{ '#about' == request()->path() ? 'active' : '' }}">
                        Tentang</li>
                </a>
            </ul>
        </div>

        @auth
            @if (Auth::user()->hasRole('admin'))
                <a href="{{ url('/dashboard') }}">
                    <button
                        class="text-red-600 underline rounded-3xl text-base transition-all duration-300 w-full md:w-20 h-8 flex place-content-center place-items-center hover:text-black font-medium mx-5">
                        Dashboard
                    </button>
                </a>
            @else
                <x-dropdown align="right">
                    <x-slot name="trigger">
                        <button
                            class="text-gray-100 focus:text-gray-900 rounded-md text-base transition-all duration-300 w-full md:w-44 h-10 flex place-content-center place-items-center px-2 bg-indigo-600 font-medium hover:bg-opacity-50 hover:text-black mx-5">
                            <div class="overflow-hidden truncate w-36">
                                {{ Auth::user()->name }}
                            </div>

                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <x-dropdown-link :href="route('mybooking')">
                            {{ __('My Booking') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @endif
        @else
            <a href="{{ url('masuk') }}">
                <button
                    class="text-gray-100 rounded-3xl text-base transition-all duration-300 w-full md:w-36 h-10 flex place-content-center place-items-center bg-blue-600 hover:bg-opacity-50 hover:text-black font-semibold shadow-xl mx-5">
                    Login/Signup
                </button>
            </a>
        @endauth
    </nav>
</div>
