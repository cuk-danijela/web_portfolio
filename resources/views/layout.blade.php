<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('font_icon/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('font_icon/css/helper.css') }}" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/modernizr.js') }}" ></script>

</head>

<body id="body">

        @yield('content')

<!-- Footer Area -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="copyright">© Copyright 2019 </p>
                    </div>
                   
                </div>
            </div>
        </footer>

        <!-- Necessery scripts -->
        <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.actual.min.js') }}" ></script>
        <script src="{{ asset('js/smooth-scroll.js') }}" ></script>
        <script src="{{ asset('js/owl.carousel.js') }}" ></script>
        <script src="{{ asset('js/script.js') }}" ></script>

    </body>
</html>