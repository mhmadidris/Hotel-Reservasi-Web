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
            <h1 class="text-3xl font-bold uppercase">Edit Kamar</h1>
        </div>
        <div class="w-full p-5">
            @foreach ($rooms as $room)
                <form action="/rooms/update" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5">
                    {{ csrf_field() }}
                    <div class="flex flex-col gap-2">
                        <label for="fotoHotel" class="font-bold text-lg">
                            Foto Kamar
                        </label>
                        <div class="w-full flex place-content-center place-items-center">
                            <div class="border-2 border-gray-400 border-dotted w-80 h-80 overflow-hidden rounded-xl">
                                <img src="{{ asset('img/rooms/' . $room->foto) }}" id="output"
                                    class="w-full h-full bg-cover" />
                            </div>
                        </div>
                        <input type="file" accept="image/*" onchange="loadFile(event)" name="image" id="image"
                            class="my-2">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="namaHotel" class="font-bold text-lg">
                            Tipe Kamar
                        </label>
                        <input type="text" name="namaHotel" id="namaHotel" value="{{ $room->type }}"
                            class="rounded-md" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="hargaHotel" class="font-bold text-lg">
                            Harga
                        </label>
                        <input type="text" name="hargaHotel" id="hargaHotel" value="{{ $room->harga }}"
                            class="rounded-md" required>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="jumlahHotel" class="font-bold text-lg">
                            Jumlah Kamar
                        </label>
                        <input type="text" name="jumlahHotel" id="jumlahHotel" value="{{ $room->jumlah }}"
                            class="rounded-md" required>

                    </div>

                    <div class="w-full flex justify-end">
                        <button class="bg-blue-700 w-40 h-10 rounded-md text-base font-bold text-white">Save</button>
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
</body>

</html>
