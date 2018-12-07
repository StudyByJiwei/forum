<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/trix/1.0.0/trix.css" rel="stylesheet">
    <style>
        body { padding-bottom: 100px; }
        .level { display: flex;align-items: center; }
        .level-item{ margin-right:1em;}
        .flex { flex: 1; }
        .mr-1 { margin-right: 1em; }
        .ml-a { margin-left: auto; }
        [v-cloak] { display: none; }
        .ais-highlight > em { background:yellow; font-style: normal;}
    </style>
    @yield('head')
</head>
<body style="padding-bottom: 100px;">
    <div id="app">
        @include('layouts.nav')

        @yield('content')
        <flash message="{{ session('flash') }}"></flash>
    </div>

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user'     => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
