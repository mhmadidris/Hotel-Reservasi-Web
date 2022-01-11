<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    input,
    input:focus {
        outline: 0px !important;
        -webkit-appearance: none;
    }

</style>

<x-app-layout class="flex flex-col">
    <x-slot name="header" class="bg-yellow-800">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight w-full text-left">
            {{ __('Tambah Kamar') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="flex flex-col gap-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="/rooms/store" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5">
                    @csrf
                    @method('GET')
                    <div class="flex flex-col gap-2">
                        <label for="fotoHotel" class="font-bold text-lg">
                            Foto Kamar
                        </label>
                        <div class="w-full flex place-content-center place-items-center">
                            <div class="border-2 border-gray-400 border-dotted w-80 h-80 overflow-hidden rounded-xl">
                                <img src="{{ asset('img/icon/room-default.png') }}" id="output"
                                    class="w-full h-full bg-cover" />
                            </div>
                        </div>
                        <input type="file" accept="image/*" onchange="loadFile(event)" name="image" id="image"
                            class="my-2" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="namaHotel" class="font-bold text-lg">
                            Tipe Kamar
                        </label>
                        <input type="text" name="namaHotel" id="namaHotel" placeholder="Nama Hotel"
                            class="rounded-md" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="hargaHotel" class="font-bold text-lg">
                            Harga
                        </label>
                        <input type="text" name="hargaHotel" id="hargaHotel" placeholder="Harga Kamar"
                            class="rounded-md" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="jumlahHotel" class="font-bold text-lg">
                            Jumlah Kamar
                        </label>
                        <input type="text" name="jumlahHotel" id="jumlahHotel" placeholder="Jumlah Kamar"
                            class="rounded-md" required>

                    </div>

                    <div class="w-full flex justify-end">
                        <button class="bg-blue-700 w-40 h-10 rounded-md text-base font-bold text-white">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function showHide(ele) {
        var srcElement = document.getElementById(ele);
        if (srcElement != null) {
            if (srcElement.style.display == "block") {
                srcElement.style.display = 'none';
            } else {
                srcElement.style.display = 'block';
            }
            return false;
        }
    };

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<button onClick="showHide('show')" class="bg-blue-600 w-8 h-8 rounded-md text-white">
    <i class="fas fa-plus"></i>
</button>

<div id="show" class="w-full bg-red-700 my-5">
    <input type="file" accept="image/*" onchange="loadFile(event)">
    <img id="output" class="w-40 h-40 rounded-xl" />
</div>

<script>
    function showHide(ele) {
        var srcElement = document.getElementById(ele);
        if (srcElement != null) {
            if (srcElement.style.display == "block") {
                srcElement.style.display = 'none';
            } else {
                srcElement.style.display = 'block';
            }
            return false;
        }
    };

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script> --}}
