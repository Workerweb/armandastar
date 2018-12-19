<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') —проект "Армандастар"</title>

        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        
        <meta name="csrf-token" content="{{csrf_token()}}">

        @yield('css')

        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.1/fullpage.min.css">

        
    </head>
    <body>
        <div id="app">
            
        
            @yield('content')

            {{-- @include('pages.layouts.partials.footer')    --}}
        </div>

        @include('pages.layouts.partials.scripts')

        <script src="/js/fullpage-custom-script.js"></script>

    </body>
</html>
