<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/style.js') }}" defer></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <style>
        .radio input~label {
            background-color: white;
            color: black;
        }

        .radio input:checked~label {
            background-color: rgb(59, 130, 246);
            color: white;
        }

    </style>
</head>

<body class="bg-gray-50">
    <div class="w-full h-screen">
        <div
            class="relative w-full h-20 bg-gradient-to-tr from-blue-300 to-blue-700 flex place-content-center place-items-center">
            <a href="{{ URL::previous() }}">
                <i class="fas fa-arrow-left fa-lg absolute top-6 left-6"></i>
            </a>
            <h1 class="text-3xl font-bold uppercase">Reservation</h1>
        </div>
        <div class="w-full flex place-content-center place-items-start py-5">
            <form action="/reservasi/store" method="POST" class="w-5/6 bg-gray-100 p-5 rounded-2xl flex flex-col gap-5">
                @csrf
                @method('POST')
                <div class="w-full flex flex-col gap-2 font-semibold">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Contoh : John Smith" class="rounded-md" required>
                </div>
                <div class="w-full flex flex-col gap-2 font-semibold">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select name="jeniskelamin" id="jeniskelamin" class="rounded-md" required>
                        <option selected="true" disabled="disabled">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="w-full flex flex-col gap-2 font-semibold">
                    <label for="nomortelepon">Nomor Telepon</label>
                    <input type="text" name="nomortelepon" placeholder="Contoh : 085732123321" class="rounded-md"
                        required>
                </div>
                <div class="w-full flex flex-col gap-2 font-semibold">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Contoh : contoh@example.com" class="rounded-md"
                        required>
                </div>
                <div class="flex flex-row justify-between place-items-center place-content-center gap-5">
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="name">Check-In</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <input id="datepicker1" name="datein" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker"
                                placeholder="Select date" dateformat="yy-mm-dd" autocomplete="off" required>
                        </div>
                    </div>
                    <i class="fas fa-arrows-alt-h mt-5 opacity-50"></i>
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="name">Check-Out</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <input id="datepicker2" name="dateout" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker"
                                placeholder="Select date" autocomplete="off" required>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-2 font-semibold radio">
                    <h1>Tipe Kamar</h1>
                    <div class="grid grid-cols-4 place-items-center place-content-center gap-1">
                        @foreach ($rooms as $r)
                            <div>
                                <input name="harga" required type="radio" id="{{ $r->harga }}"
                                    class="hidden" oninput="myFunction()" value="{{ $r->harga }}" />
                                <label for="{{ $r->harga }}"
                                    class="p-3 rounded-lg flex flex-col place-items-center gap-2 shadow-md font-bold w-60 h-full">
                                    <div class="bg-yellow-600 w-full h-40">
                                        <img src="{{ asset('img/rooms/' . $r->foto) }}" alt="foto"
                                            class="bg-contain h-full w-full rounded-md">
                                    </div>

                                    <h1 class="text-lg font-bold">{{ $r->type }}</h1>

                                    <h2 class="text-lg price text-red-600 font-semibold">Rp.{{ $r->harga }}<span
                                            class="text-base">/night</span>
                                    </h2>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="w-full flex flex-row justify-end gap-2 font-semibold text-right">
                    <div class="flex flex-col">
                        <div class="flex justify-between place-items-center w-60 p-2">
                            <h1>Total Malam : </h1>
                            <input type="text" id="totalday" disabled="disabled"
                                class="border-none w-14 bg-transparent text-center" value="0">
                            <h5>Malam</h5>
                            <input type='text' id='night' class="hidden" name="totalday" />
                        </div>
                        <div class="flex justify-between place-items-center w-80 p-2">
                            <h1>Total Harga : </h1>
                            <span class="border-none w-40 bg-transparent text-center" id="totalPrice">
                                0
                            </span>
                            <h5>Rupiah</h5>

                            {{-- Hidden --}}
                            <input type="text" class="hidden" id="totalPriceInput" name="totalPriceInput">
                        </div>
                    </div>
                </div>

                <input type="text" id="tipe" value="" name="type" class="hidden">

                <div class="relative w-full flex flex-row justify-end gap-2 font-semibold text-right">
                    <button class="w-32 h-8 rounded-lg text-white font-bold bg-blue-600">Save</button>
                </div>
            </form>
        </div>
    </div>


    <script type="text/javascript">
        var nightCount = document.getElementById('totalday').value;



        $("#datepicker1").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0,
            maxDate: '+1Y+6M',
            onSelect: function(dateStr) {
                var min = $(this).datepicker('getDate'); // Get selected date
                $("#datepicker2").datepicker('option', 'minDate', min ||
                    '0'); // Set other min, default to today
            }
        });

        $("#datepicker2").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: '0',
            maxDate: '+1Y+6M',
            onSelect: function(dateStr) {
                var max = $(this).datepicker('getDate'); // Get selected date
                $('#datepicker').datepicker('option', 'maxDate', max ||
                    '+1Y+6M'); // Set other max, default to +18 months
                var start = $("#datepicker1").datepicker("getDate");
                var end = $("#datepicker2").datepicker("getDate");
                var days = (end - start) / (1000 * 60 * 60 * 24);
                $("#totalday").val(days);
                document.getElementById('night').value = days;
            }
        });


        function myFunction() {
            var night = $("input[name='totalday']:input").val();
            var price = $("input[name='harga']:checked").val();
            var total = price * night;

            const numb = total;
            const format = numb.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = convert.join('.').split('').reverse().join('')

            document.getElementById("totalPrice").innerHTML = rupiah;
            document.getElementById("totalPriceInput").value = total;


            if (price == 600000) {
                document.getElementById('tipe').value = "Standard Room";
            }
            if (price == 800000) {
                document.getElementById('tipe').value = "Superior Room";
            }
            if (price == 1000000) {
                document.getElementById('tipe').value = "Deluxe Room";
            }
            if (price == 1500000) {
                document.getElementById('tipe').value = "VVIP Room";
            }
            if (price == 2000000) {
                document.getElementById('tipe').value = "Presidential Suite";
            }

        };
    </script>
</body>

</html>
