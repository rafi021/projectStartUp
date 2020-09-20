<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @include('frontend.panel.styles')

</head>
<body>
    <div id="app">
        <index></index>
    </div>
    <!-- Scripts -->
    @include('frontend.panel.scripts')
    <script src="{{ asset('js/app.js') }}" defer></script>   
</body>
</html>
