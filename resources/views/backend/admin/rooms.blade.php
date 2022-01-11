<x-app-layout class="flex flex-col">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="flex flex-col gap-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex flex-col gap-2">
                <div>
                    <a href="/room/input/">
                        <button class="bg-blue-600 px-4 py-2 font-bold rounded-md text-white">
                            Tambah Kamar
                        </button>
                    </a>
                </div>

                {{-- Table Room --}}
                <div class="w-full grid grid-flow-row grid-cols-4 place-items-center gap-5">
                    @foreach ($rooms as $r)
                        <div
                            class="w-60 h-96 bg-white shadow-md border-2 border-gray-500 border-opacity-50 overflow-hidden rounded-md">
                            <div class="w-full h-40">
                                <img src="{{ asset('img/rooms/' . $r->foto) }}" alt="foto"
                                    class="bg-contain h-full w-full">
                            </div>
                            <div class="p-2 flex flex-col gap-3">
                                <div class="flex flex-col gap-1">
                                    <h1 class="text-sm">Tipe:</h1>
                                    <h1 class="font-bold">{{ $r->type }}</h1>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h1 class="text-sm">Jumlah Kamar:</h1>
                                    <h1 class="font-bold">{{ $r->jumlah }}</h1>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h1 class="text-sm">Harga:</h1>
                                    <h1 class="font-bold">{{ $r->harga }}</h1>
                                </div>
                            </div>
                            <a href="/rooms/edit/{{ $r->id_room }}">
                                <button type="button" class="bg-blue-600 w-8 h-8 rounded-md shadow-2xl text-white">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                            <a href="/rooms/hapus/{{ $r->id_room }}">
                                <button type="button" class="bg-red-600 w-8 h-8 rounded-md shadow-2xl text-white">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
