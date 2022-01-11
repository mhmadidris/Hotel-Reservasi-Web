<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guests') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div class="flex flex-row justify-between mb-5">
                            <h1 class="font-bold text-lg uppercase">Daftar Tamu</h1>
                            <div class="h-10">
                                <form action="/reservasi/cari" method="GET">
                                    <input type="text" name="cari" placeholder="Cari Tamu..."
                                        value="{{ old('cari') }}" class="w-60 rounded-md">
                                    <button type="submit"
                                        class="w-16 h-10 bg-red-500 rounded-md font-semibold text-white">Cari</button>
                                </form>
                            </div>
                        </div>

                        {{-- Tabel Tamu --}}
                        <table class=" divide-y divide-gray-200 w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Number
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Booking ID
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Check In
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Check Out
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($guests as $value)
                                    <tr>
                                        <td class="p-4 whitespace-nowrap text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            {{ $value->id_tamu }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            {{ $value->nama_tamu }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            {{ date('d-m-Y', strtotime($value->checkin_tamu)) }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            {{ date('d-m-Y', strtotime($value->checkout_tamu)) }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            @if ($value->status_tamu == 'Reserved')
                                                <span
                                                    class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                    Reserved
                                                </span>
                                            @endif
                                            @if ($value->status_tamu == 'Check In')
                                                <span
                                                    class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Check In
                                                </span>
                                            @endif
                                            @if ($value->status_tamu == 'Check Out')
                                                <span
                                                    class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Check Out
                                                </span>
                                            @endif
                                        </td>
                                        <td
                                            class="p-4 whitespace-nowrap flex flex-row place-content-center place-items-center gap-2">
                                            <a href="/tamu/edit/{{ $value->id_tamu }}">
                                                <button type="button"
                                                    class="bg-blue-600 w-8 h-8 rounded-md shadow-2xl text-white">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>

                                            <a href="/tamu/hapus/{{ $value->id_tamu }}">
                                                <button type="button"
                                                    class="bg-red-600 w-8 h-8 rounded-md shadow-2xl text-white">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
