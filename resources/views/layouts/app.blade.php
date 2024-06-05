<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Dashboard')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/libs/morris.js/morris.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/js/config.js') }}">

    </head>
    <body>
        <div class="layout-wrapper">
            @include('partials.navigation')
            <!-- Main Content -->
            <main>
                @yield('content')
            </main>


        </div>

        <!-- App js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Knob charts js -->
    <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Sparkline Js-->
    <script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>

    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

    <!-- Dashboard init-->
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    </body>
</html>
