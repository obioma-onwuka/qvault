<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style customizer-hide">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | Pet Reunite for pet lovers</title>

        <meta name="description" content="pet reunite platform for per lovers" />
        <meta name="keywords" content="php backend developer in nigeria; laravel developer; pet app with qrcode; developer, naija techbro; php developer, php backend">
        <meta name="author" content="Obtechng" />

    
        <link rel="icon" type="image/x-icon" href="{{ asset('/custom/auth/assets/img/favicon/favicon.ico') }}" />


        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    
        <link rel="stylesheet" href="{{ asset('/custom/auth/assets/vendor/fonts/boxicons.css') }}" />

        <link rel="stylesheet" href="{{ asset('/custom/auth/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('/custom/auth/vassets/endor/css/theme-default.css') }}ss" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('/custom/auth/assets/css/demo.css') }}" />

            
        <link rel="stylesheet" href="{{ asset('/custom/auth/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

        <link rel="stylesheet" href="{{ asset('/custom/auth/assets/vendor/css/pages/page-auth.css') }}" />
    
        <script src="{{ asset('/custom/auth/vendor/assets/js/helpers.js') }}"></script>

    
        <script src="{{ asset('/custom/auth/assets/js/config.js') }}"></script>

        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    </head>

    <body>






        {{ $slot }}








        <script src="{{ asset('/custom/auth/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('/custom/auth/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('/custom/auth/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/custom/auth/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

        <script src="{{ asset('/custom/auth/vendor/js/menu.js') }}"></script>

        <script src="{{ asset('/custom/auth/js/main.js') }}"></script>


    </body>
</html>
