<!DOCTYPE HTML>
<html>
    <head>
        <title>BeingHMN | @yield('title') </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="is-preload">
        <x-flashMessage />
        @yield('content')
        <!-- Scripts -->
        <!-- <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/browser.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/breakpoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> -->
    </body>
</html>
