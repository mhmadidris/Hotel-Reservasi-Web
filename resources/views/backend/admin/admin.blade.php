<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <div class="flex flex-row justify-between mb-5">
                            <h1 class="font-bold text-lg uppercase">Daftar Admin</h1>
                            <div class="hidden">
                                <h1>search</h1>
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
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($admin as $value)
                                    <tr>
                                        <td class="p-4 whitespace-nowrap text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            {{ $value->name }}
                                        </td>
                                        <td class="p-4 whitespace-nowrap">
                                            {{ $value->email }}
                                        </td>
                                        <td
                                            class="p-4 whitespace-nowrap flex flex-row place-content-center place-items-center gap-2">
                                            <a href="/tamu/edit/{{ $value->id }}">
                                                <button type="button"
                                                    class="bg-blue-600 w-8 h-8 rounded-md shadow-2xl text-white">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>

                                            <a href="/tamu/hapus/{{ $value->id }}">
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
