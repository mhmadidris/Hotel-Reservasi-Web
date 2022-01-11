<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotelku | Best Place for Staycation</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/style.js') }}" defer></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>

<body class="bg-gray-50">

    {{-- Navbar --}}
    @include('frontend.partials.navbar')

    {{-- Header --}}
    <div class="bg-header-bg h-screen bg-no-repeat bg-cover">
        <div
            class="w-full h-full flex flex-col-reverse md:flex-row place-items-center justify-center md:justify-between px-10 md:px-20">
            <div class="my-6 md:my-0 w-full md:w-1/2">
                <h1 class="text-3xl md:text-5xl text-gray-100 font-bold text-shadow-lg text-center md:text-left mb-7">The
                    Right
                    Place For
                    Your Staycation</h1>
                <a href="{{ url('reservasi') }}">
                    <button
                        class="transition-all duration-200 bg-blue-500 hover:bg-blue-600 py-2 px-4 text-lg rounded-full text-white font-bold shadow-sm hover:shadow-lg">Make
                        a
                        Reservation</button>
                </a>
            </div>
        </div>
    </div>

    {{-- Choose Us --}}
    <div class="container h-h-100 lg:h-60 flex flex-col place-items-center place-content-center">
        <h1 class="text-center text-3xl font-bold mb-4">Why You Choose Us!</h1>
        <div
            class="bg-transparent lg:bg-blue-400 rounded-none lg:rounded-full flex flex-col lg:flex-row p-4 my-0 lg:my-2 divide-x-0 lg:divide-x-2 divide-gray-700 divide-opacity-25 shadow-none lg:shadow-lg gap-8">
            <div class="px-3 flex flex-row place-content-center place-items-center gap-4">
                <div
                    class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex place-items-center place-content-center shadow-md">
                    <i class="fas fa-money-bill-wave fa-lg"></i>
                </div>
                <div class="w-52 lg:w-60 flex flex-col">
                    <h5 class="font-semibold">Free Cancelation</h5>
                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h6>
                </div>
            </div>
            <div class="px-3 flex flex-row place-content-center place-items-center gap-4">
                <div
                    class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex place-items-center place-content-center shadow-md">
                    <i class="fas fa-street-view fa-2x"></i>
                </div>
                <div class="w-52 lg:w-60 flex flex-col">
                    <h5 class="font-semibold">Strategically Location</h5>
                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h6>
                </div>
            </div>
            <div class="px-3 flex flex-row place-content-center place-items-center gap-4">
                <div
                    class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex place-items-center place-content-center shadow-md">
                    <i class="fas fa-swimmer fa-2x"></i>
                </div>
                <div class="w-52 lg:w-60 flex flex-col">
                    <h5 class="font-semibold">Complete Facilities</h5>
                    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h6>
                </div>
            </div>
        </div>
    </div>


    {{-- Type --}}
    <div class="container p-5 w-full h-full">
        <h1 class="text-3xl font-bold mb-5 text-center">Type Your Room</h1>
        <div
            class="h-full grid grid-flow-col grid-cols-1 md:grid-cols-2 lg:grid-cols-4 md:grid-rows-2 grid-rows-4 lg:grid-rows-1 place-content-center place-items-center gap-2 md:gap-10">
            @foreach ($rooms as $r)
                <div class="w-full h-96 md:h-80">
                    <img src="{{ asset('img/rooms/' . $r->foto) }}" alt=""
                        class="w-full md:h-60 h-64 bg-cover shadow-md rounded-xl">
                    <div class="w-full h-24 md:h-20 flex flex-col justify-between py-2">
                        <h1 class="text-2xl font-bold">{{ $r->type }}</h1>
                        <h3 class="text-xl font-bold">Rp.{{ $r->harga }}<span
                                class="text-base font-semibold text-gray-800 opacity-75">/night</span>
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- About --}}
    <div class="relative w-full h-screen">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 325" class="absolute top-0 hidden md:block">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,96L60,96C120,96,240,96,360,96C480,96,600,96,720,112C840,128,960,160,1080,149.3C1200,139,1320,85,1380,58.7L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>

        <div
            class="w-full h-screen bg-white flex flex-col md:flex-row justify-center md:justify-between px-10 md:px-20 place-content-center place-items-center gap-5 md:gap-10">
            <div class="overflow-hidden rounded-xl shadow-xl">
                <img src="{{ asset('img/hotel-img.jpg') }}" class="bg-cover w-96 md:w-80">
            </div>
            <div class="w-full md:w-3/4">
                <h1 class="text-xl md:text-2xl font-bold mb-2">About Our Hotel</h1>
                <p class="text-base md:text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cumque
                    et beatae
                    temporibus illo. Id nisi rerum
                    deleniti odio ducimus similique maxime maiores harum architecto, ea possimus ipsa illum, animi qui.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora tenetur at quia deserunt. Iste,
                    odio
                    aspernatur, veniam sed repudiandae aut explicabo dolorum eum placeat qui quisquam aperiam! Sunt,
                    laboriosam assumenda.</p>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 225" class="absolute bottom-0 hidden md:block">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,96L60,96C120,96,240,96,360,96C480,96,600,96,720,112C840,128,960,160,1080,149.3C1200,139,1320,85,1380,58.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>


    {{-- Facilities --}}
    <div
        class="container min-h-screen px-6 md:px-12 flex flex-col md:flex-row justify-center md:justify-between place-items-center gap-5">
        <div class="w-full md:w-1/3 flex flex-col justify-center md:gap-2 p-4">
            <h1 class="text-center md:text-left text-3xl font-bold">We Provide Facilities For You</h1>
            <p class="text-justify md:block hidden">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit
                maiores
                officia nihil
                dolorem nostrum illum
                vitae</p>
        </div>
        <div class="w-5/6 h-full grid grid-flow-row grid-cols-2 md:grid-cols-4 grid-rows-2 gap-6 md:gap-16">
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-wifi fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Free Wifi</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-dumbbell fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Fitness Area</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-swimmer fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Swimming Pool</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-concierge-bell fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">24 Hours</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-parking fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Parking Area</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-utensils fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Free Breakfast</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-cocktail fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Welcome Drink</h5>
            </div>
            <div class="flex flex-col place-content-center place-items-center gap-2">
                <div
                    class="bg-blue-500 w-24 md:w-28 h-24 md:h-28 rounded-full flex place-content-center place-items-center shadow-md">
                    <i class="fas fa-broom fa-2x md:fa-3x" style="color: white;"></i>
                </div>
                <h5 class="text-center md:text-left text-lg md:text-xl font-medium">Clean Room</h5>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $('.datepicker').datepicker({
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</body>

</html>
