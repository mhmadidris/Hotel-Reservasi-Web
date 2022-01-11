<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Tamu Reservation</title>
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
            <h1 class="text-3xl font-bold uppercase">Edit Tamu Reservation</h1>
        </div>
        <div class="w-full flex place-content-center place-items-start py-5">
            @foreach ($tamu as $guest)
                <form action="/tamu/update" method="POST" class="w-5/6 bg-gray-100 p-5 rounded-2xl flex flex-col gap-5">
                    {{ csrf_field() }}
                    <h1 class="text-center text-xl font-bold uppercase mb-5">Data Tamu</h1>
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">ID Tamu : </h1>
                                <h1 class="">{{ $guest->id_tamu }}</h1>
                            </div>
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">Nama : </h1>
                                <h1 class="">{{ $guest->nama_tamu }}</h1>
                            </div>
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">Status : </h1>
                                @if ($guest->status_tamu == 'Reserved')
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Reserved
                                    </span>
                                @endif
                                @if ($guest->status_tamu == 'Check In')
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Check In
                                    </span>
                                @endif
                                @if ($guest->status_tamu == 'Check Out')
                                    <span
                                        class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Check Out
                                    </span>
                                @endif
                            </div>
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">Nomor Telepon : </h1>
                                <h1 class="">{{ $guest->telepon_tamu }}</h1>
                            </div>
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">Jenis Kelamin : </h1>
                                <h1 class="">{{ $guest->jeniskelamin_tamu }}</h1>
                            </div>
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">Email : </h1>
                                <h1 class="">{{ $guest->email_tamu }}</h1>
                            </div>
                            <div class="flex flex-row gap-2">
                                <h1 class="uppercase font-bold">Tipe Kamar : </h1>
                                <h1 class="">{{ $guest->tipe_tamu }}</h1>
                            </div>
                        </div>

                        <div
                            class="bg-white border border-gray-600 shadow-xl w-80 h-60 rounded-md overflow-hidden p-5 place-content-center flex flex-col gap-5">
                            <div class="flex flex-col gap-2">
                                <h1 class="uppercase font-bold">Check In : </h1>
                                <h1 class="">{{ $guest->checkin_tamu }}</h1>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h1 class="uppercase font-bold">Check Out : </h1>
                                <h1 class="">{{ $guest->checkout_tamu }}</h1>
                            </div>
                            <div class="flex flex-col gap-2">
                                <h1 class="uppercase font-bold">Harga : </h1>
                                <h1 class="">Rp.{{ $guest->biaya_tamu }}</h1>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{ $guest->id_tamu }}">
                    <div class="w-full flex flex-col gap-2 font-semibold">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="rounded-md" required>
                            @if ($guest->status_tamu == 'Reserved')
                                <option value="Reserved" selected>Reserved</option>
                                <option value="Check In">Check In</option>
                                <option value="Check Out">Check Out</option>
                            @endif
                            @if ($guest->status_tamu == 'Check In')
                                <option value="Reserved">Reserved</option>
                                <option value="Check In" selected>Check In</option>
                                <option value="Check Out">Check Out</option>
                            @endif
                            @if ($guest->status_tamu == 'Check Out')
                                <option value="Reserved">Reserved</option>
                                <option value="Check In">Check In</option>
                                <option value="Check Out" selected>Check Out</option>
                            @endif
                        </select>
                    </div>
                    <div class="relative w-full flex flex-row justify-end gap-2 font-semibold text-right">
                        <button class="w-32 h-8 rounded-lg text-white font-bold bg-blue-600">Update</button>
                    </div>
                </form>
            @endforeach
        </div>
    </div>

    <script type="text/javascript">
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
        };
    </script>
</body>

</html>
