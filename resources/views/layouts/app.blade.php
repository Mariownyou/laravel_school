<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <script src="http://levakondratev.ru/js/chosen.jquery.min.js"></script>
    <script src="http://levakondratev.ru/js/app.js" defer></script>
    <script src="http://levakondratev.ru/js/editor.js" defer></script>



    <!-- Styles -->
    @stack('pre-styles')
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="frame">
        @include('components.navbar.navbar')

        @yield('title')

        <main class="margins">
            @yield('content')
        </main>
    </div>
</body>
</html>
