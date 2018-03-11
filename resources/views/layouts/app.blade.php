<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">

            @include('layouts.partials.navbar')

            @if ($flash = session('message'))
                <div id="flash-message" class="alert alert-success flash-message" role="alert">
                    {{ $flash }}  
                </div>
            @endif

            <main role="main">

                @yield('content')
            </main>
            <footer class="mt-4 py-5 bg-dark">
                @include('layouts.partials.footer')
            </footer>
        </div>

        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
