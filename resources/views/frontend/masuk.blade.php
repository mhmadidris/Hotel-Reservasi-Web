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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">

    <style>
        ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 7px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .tabs {
            overflow: hidden;
        }

        .tabs h3 {
            float: left;
            width: 50%;
        }

        .tabs h3 a {
            padding: 0.5em 0;
            text-align: center;
            font-weight: 400;
            background-color: #CFCFCF;
            display: block;
            color: black;
        }

        .tabs h3 a.active {
            background-color: rgba(75, 78, 238, 0.856);
            font-weight: bold;
        }

        .tabs-content div[id$="tab-content"] {
            display: none;
        }

        .tabs-content .active {
            display: block !important;
        }

        form .input {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            color: inherit;
            font-family: inherit;
            padding: .8em 0 10px .8em;
            border: 1px solid #CFCFCF;
            outline: 0;
            display: inline-block;
            margin: 0 0 .8em 0;
            padding-right: 2em;
            width: 100%;
        }

        form .button {
            width: 100%;
            padding: .8em 0 10px .8em;
            background-color: #28A55F;
            border: none;
            color: #fff;
            cursor: pointer;
            text-transform: uppercase;
        }

        form .button:hover {
            background-color: #4FDA8C;
        }

        form .checkbox {
            visibility: hidden;
            padding: 20px;
            margin: .5em 0 1.5em;
        }

        .help-text {
            margin-top: .6em;
        }

        .help-text p {
            text-align: center;
            font-size: 14px;
        }

    </style>
</head>

<body class="bg-gray-200 p-5 flex place-content-center place-items-center h-screen">

    <!-- Session Status -->
    <x-auth-session-status class="my-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="my-4" :errors="$errors" />

    <div class="rounded-xl overflow-hidden w-full h-h-105 flex flex-row shadow-lg">
        <div class="w-1/2 bg-white">
            <div class="tabs w-full flex flex-row justify-between p-2 rounded-xl">
                <h3 class="login-tab rounded-r-md">
                    <a class="active" href="#login-tab-content">
                        Login
                    </a>
                </h3>
                <h3 class="signup-tab">
                    <a href="#signup-tab-content">
                        Sign Up
                    </a>
                </h3>
            </div>

            <div class="tabs-content">
                <div id="signup-tab-content" class="">
                    <form class="p-5 h-h-103 overflow-y-auto bg-white" action="{{ route('register') }}" method="post">
                        <div class="w-full flex place-content-center place-items-center">
                            <img src="{{ asset('img/register-img.svg') }}" alt="" class="w-1/5 bg-cover">
                        </div>
                        @csrf
                        <div class="flex flex-col my-4 gap-1">
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                required autofocus />
                        </div>

                        <div class="flex flex-col my-4 gap-1">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required />
                        </div>

                        <div class="flex flex-col my-4 gap-1">
                            <x-label for="password" :value="__('Password')" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <div class="flex flex-col my-4 gap-1">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required />
                        </div>

                        <div class="my-4 w-full flex flex-row place-content-end place-items-center">
                            <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="my-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="my-4" :errors="$errors" />

                <div id="login-tab-content" class="active">
                    <form class="bg-white h-full p-5" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="w-full flex place-content-center place-items-center py-5">
                            <img src="{{ asset('img/login-img.svg') }}" alt="" class="w-1/5 bg-cover">
                        </div>
                        <div class="flex flex-col my-4 gap-1">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus />
                        </div>
                        <div class="flex flex-col my-4 gap-1">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="my-4">
                            <x-button class="h-10 w-full bg-blue-600 font-bold uppercase text-white">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                    <!--.login-form-->
                </div>
                <!--.login-tab-content-->
            </div>
            <!--.tabs-content-->
            <!--.form-wrap-->
        </div>

        <div class="w-1/2 bg-gradient-to-bl from-blue-200 to-blue-400 flex place-content-center place-items-center">
            <img src="{{ asset('img/bg-customer.svg') }}" alt="" class="w-9/12 bg-cover">
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            tab = $('.tabs h3 a');

            tab.on('click', function(event) {
                event.preventDefault();
                tab.removeClass('active');
                $(this).addClass('active');

                tab_content = $(this).attr('href');
                $('div[id$="tab-content"]').removeClass('active');
                $(tab_content).addClass('active');
            });
        });
    </script>
</body>

</html>
