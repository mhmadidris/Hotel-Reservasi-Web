<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/style.js') }}" defer></script>

    <style>
        .bg {
            background-color: rgb(245, 245, 245);
            height: 100vh;
        }

        .w-full {
            width: 100%;
        }

        .header {
            background-color: blue;
            border-bottom-right-radius: 75em;
            width: 15rem;
            height: 2.5rem;
            text-align: center;
        }

        .text-header {
            font-weight: 800;
            font-size: 1.5rem;
            line-height: 2rem;
        }

    </style>
</head>

<body class="bg">
    <div class="bg">
        <div class="w-full">
            <div class="header">
                <h1 class="text-header">HOTELKU</h1>
            </div>
        </div>

        @foreach ($booking as $book)
            <div class="container my-10 flex flex-row justify-between gap-2">
                <div class="w-1/2 text-left">
                    <h1 class="text-base font-semibold">Booking ID:</h1>
                    <h1 class="text-lg font-bold">{{ $book->id_tamu }}</h1>
                </div>
                <div class="w-1/2 text-right">
                    <h1 class="text-base font-semibold">Booked Time:</h1>
                    <h1 class="text-lg font-bold">
                        {{ Carbon\Carbon::parse($book->book_time)->format('D, d M Y') }}</h1>
                </div>
            </div>

            <div class="container bg-white shadow-md p-5 rounded-xl my-5 flex flex-col gap-3">
                <h1 class="text-xl font-semibold">Detail Tamu</h1>

                <table class=" divide-y divide-gray-200 w-full overflow-hidden rounded-md">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-5">
                                Number
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                ID Tamu
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                Nama Tamu
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                Tipe Kamar
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                Check-in
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                Check-out
                            </th>
                            <th scope="col" class="p-3 text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                Total Biaya
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100 divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 whitespace-nowrap text-center w-5">
                                {{ $loop->iteration }}
                            </td>
                            <td class="p-4 whitespace-nowrap w-12">
                                {{ $book->id_tamu }}
                            </td>
                            <td class="p-4 whitespace-nowrap w-12">
                                {{ $book->nama_tamu }}
                            </td>
                            <td class="p-4 whitespace-nowrap w-12">
                                {{ $book->tipe_tamu }}
                            </td>
                            <td class="p-4 whitespace-nowrap w-12">
                                {{ Carbon\Carbon::parse($book->checkin_tamu)->format('D, d M Y') }}
                            </td>
                            <td class="p-4 whitespace-nowrap w-12">
                                {{ Carbon\Carbon::parse($book->checkout_tamu)->format('D, d M Y') }}
                            </td>
                            <td class="p-4 whitespace-nowrap w-12">
                                Rp.@convert($book->biaya_tamu)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="container">
                <h1 class="font-bold text-xl">Kebijakan Hotel:</h1>

                <ul class="mx-5 list-disc">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi at enim consectetur quidem
                        neque id a magnam inventore tenetur, quibusdam sit eaque amet rem minima pariatur, tempore
                        commodi fugiat laborum?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda iste consequatur optio esse
                        ex? Pariatur, eligendi impedit dolorum, saepe error similique sit eveniet quae, debitis suscipit
                        nam voluptatibus distinctio incidunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt adipisci error omnis quaerat
                        blanditiis voluptate ullam porro, repellendus saepe vero pariatur harum obcaecati minus, dolore
                        assumenda quas aperiam, possimus totam?</li>
                </ul>
            </div>
        @endforeach
    </div>
</body>

</html>
