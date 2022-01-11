<x-app-layout class="flex flex-col">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Booking') }}
        </h2>
    </x-slot>

    <div class="px-5 py-3">
        <div class="flex flex-col gap-5">

            @foreach ($booking as $book)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-60">
                    <div
                        class="flex flex-row justify-between place-items-center place-content-center px-5 py-3 bg-gradient-to-r from-blue-400 to-blue-500">
                        <h1 class="text-lg font-bold">My Booking</h1>
                        <div class="flex flex-row place-content-center place-items-center gap-4">
                            @include('backend.customer.details')

                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <i class="fas fa-ellipsis-v text-black"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link>
                                            {{ __('Beri Rating Booking Ini') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>

                    <div class="px-5 py-2">
                        <div class="text-base font-bold">
                            Booking ID : {{ $book->id_tamu }}
                        </div>

                        <div class="flex flex-row justify-between h-24">
                            <div
                                class="flex flex-row justify-between place-content-center place-items-center bg-gray-200 px-5 rounded-lg gap-3 my-5 shadow">
                                <i class="fas fa-hotel fa-2x"></i>
                                <h1 class="font-bold text-2xl">{{ $book->tipe_tamu }}</h1>
                            </div>

                            <div class="flex flex-col w-48">
                                <div class="flex flex-row place-content-start place-items-center gap-2 h-12">
                                    <i class="fas fa-calendar-alt fa-lg"></i>
                                    <h1> : {{ Carbon\Carbon::parse($book->checkin_tamu)->format('D, d M Y') }}</h1>
                                </div>

                                <div class="flex flex-row place-content-start place-items-center gap-2 h-12">
                                    <i class="fas fa-moon fa-lg"></i>
                                    <h1> : {{ $book->night_tamu }} Malam</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-row justify-between place-content-center place-items-center px-5 py-3 border-t border-gray-600 border-opacity-50">

                        @if ($book->status_tamu == 'Reserved')
                            <div class="bg-blue-500 px-3 h-6 flex place-content-center place-items-center rounded-full">
                                <h2 class="text-sm font-bold">Menunggu</h2>
                            </div>
                        @elseif($book->status_tamu == 'Check In')
                            <div class="bg-red-500 px-3 h-6 flex place-content-center place-items-center rounded-full">
                                <h2 class="text-sm font-bold">Check In</h2>
                            </div>
                        @elseif($book->status_tamu == 'Check Out')
                            <div
                                class="bg-green-500 px-3 h-6 flex place-content-center place-items-center rounded-full">
                                <h2 class="text-sm font-bold">Check Out</h2>
                            </div>
                        @endif
                        <span class="font-bold text-xl">
                            Rp.@convert($book->biaya_tamu)
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</x-app-layout>
