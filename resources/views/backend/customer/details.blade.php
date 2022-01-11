<div x-data="{ open: false }">
    <!-- Button (blue), duh! -->
    <button class="py-1 px-2 text-white font-semibold" @click="open = true" value="{{ $book->id_tamu }}">
        See Details
    </button>
    <!-- Dialog (full screen) -->
    <div class="fixed bg-gray-800 bg-opacity-75 z-50 top-0 asas left-0 flex items-center justify-center w-full h-screen"
        x-show="open">
        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="relative h-auto py-10 px-5 text-left bg-white rounded shadow-xl w-4/5 m-5"
            @click.away="open = false">
            <button class="absolute -right-3 -top-3 bg-white rounded-full flex place-content-center place-items-center"
                @click="open = false">
                <i class="far fa-times-circle fa-2x"></i>
            </button>

            <div class="w-full flex flex-row justify-between">
                <div class="w-5/6 flex flex-col gap-4">
                    <div class="w-full bg-blue-100 p-3 rounded-lg overflow-hidden shadow-md flex flex-col gap-3">
                        <div class="flex flex-row justify-between">
                            <div class="w-1/4">
                                <h1 class="text-sm font-bold">Nama Customer:</h1>
                                <h1 class="text-base">{{ $book->name }}</h1>
                            </div>
                            <div class="w-1/4">
                                <h1 class="text-sm font-bold">Tanggal Booking:</h1>
                                <h1 class="text-base">
                                    {{ Carbon\Carbon::parse($book->book_time)->format('D, d M Y') }}</h1>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="w-1/4">
                                <h1 class="text-sm font-bold">Booking ID:</h1>
                                <h1 class="text-base">{{ $book->id_tamu }}</h1>
                            </div>
                            <div class="w-1/4">
                                <h1 class="text-sm font-bold">Total Biaya:</h1>
                                <h1 class="text-base">Rp.@convert($book->biaya_tamu)</h1>
                            </div>
                        </div>
                    </div>

                    <div class="w-full bg-gray-100 p-3 rounded-lg overflow-hidden shadow-md flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <div class="w-full">
                                <h1 class="text-sm font-bold">Nama Tamu:</h1>
                                <h1 class="text-base">{{ $book->nama_tamu }}</h1>
                            </div>
                            <div class="w-full">
                                <h1 class="text-sm font-bold">Jenis Kelamin:</h1>
                                <h1 class="text-base">{{ $book->jeniskelamin_tamu }}</h1>
                            </div>
                            <div class="w-full">
                                <h1 class="text-sm font-bold">Nomor Telepon:</h1>
                                <h1 class="text-base">{{ $book->telepon_tamu }}</h1>
                            </div>
                            <div class="w-full">
                                <h1 class="text-sm font-bold">Email:</h1>
                                <h1 class="text-base">{{ $book->email_tamu }}</h1>
                            </div>
                            <div class="w-1/6">
                                <h1 class="text-sm font-bold">Status:</h1>
                                <h1 class="text-base">
                                    @if ($book->status_tamu == 'Reserved')
                                        <div
                                            class="bg-blue-500 px-3 h-6 flex place-content-center place-items-center rounded-full">
                                            <h2 class="text-sm font-bold">Menunggu</h2>
                                        </div>
                                    @elseif($book->status_tamu == 'Check In')
                                        <div
                                            class="bg-red-500 px-3 h-6 flex place-content-center place-items-center rounded-full">
                                            <h2 class="text-sm font-bold">Check In</h2>
                                        </div>
                                    @elseif($book->status_tamu == 'Check Out')
                                        <div
                                            class="bg-green-500 px-3 h-6 flex place-content-center place-items-center rounded-full">
                                            <h2 class="text-sm font-bold">Check Out</h2>
                                        </div>
                                    @endif
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="w-1/3 bg-gray-100 mx-10 p-5 rounded-lg overflow-hidden shadow-md">
                    <div class="mb-3">
                        <img src="{{ asset('img/rooms/' . $book->foto) }}" alt="foto"
                            class="h-60 w-full bg-cover rounded">
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-row gap-1 place-content-start place-items-center">
                            <i class="fas fa-hotel"></i>
                            <span class="font-bold">Tipe : </span>{{ $book->tipe_tamu }}
                        </div>
                        <div class="flex flex-row gap-1 place-content-start place-items-center">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="font-bold">Check-in :
                            </span>
                            <h1>{{ Carbon\Carbon::parse($book->checkin_tamu)->format('D, d M Y') }}</h1>
                        </div>
                        <div class="flex flex-row gap-1 place-content-start place-items-center">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="font-bold">Check-out :
                            </span>
                            <h1>{{ Carbon\Carbon::parse($book->checkout_tamu)->format('D, d M Y') }}</h1>
                        </div>
                        <div class="flex flex-row gap-1 place-content-start place-items-center">
                            <i class="fas fa-moon"></i>
                            <span class="font-bold">Night : </span>{{ $book->night_tamu }} Malam
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full flex place-content-center place-items-center mt-5">

                <a href="{{ url('/mybooking/invoice/' . $book->id_tamu, ['download']) }}" target="_blank">
                    <button
                        class="bg-red-500 w-48 h-10 flex place-items-center place-content-center gap-3 font-semibold text-white rounded-md">
                        <i class="fas fa-file-pdf"></i>
                        <h1>Save as PDF</h1>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
