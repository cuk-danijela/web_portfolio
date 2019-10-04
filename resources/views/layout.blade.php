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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/modernizr.js') }}" ></script>
   
</head>

<body id="body">

    <!-- Back to top button -->
    <a data-scroll href="#" class="scrollToContent animated pulse" id="back-to-top" title="Back to top"><i class="fas fa-2x fa-angle-double-up"></i></a>

        @yield('content')

<!-- Footer Area -->
<div class="footer">
            <div class="container">
                <div class="col-md-3">
                    <h3>Bass</h3>
                    <ul>
                        <li>
                            <a href="#">Install</a>
                        </li>
                        <li>
                            <a href="#">Mobile</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <h3>About</h3>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Team</a>
                        </li>
                        <li>
                            <a href="#">Jobs</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <h3>Support</h3>
                        <li>
                            <a href="#">Help Center</a>
                        </li>
                        <li>
                            <a href="#">Get Started</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <h3>Community</h3>
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                        <li>
                            <a href="#">Google+</a>
                        </li>
                    </ul>
                </div>
            </div>
          
            <p class="copyright">Copyright © 2019 | All rights reserved </p>
        </div>
        
        
        <!-- Necessery scripts -->
        <script src="{{ asset('js/jquery-2.1.3.min.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.actual.min.js') }}" ></script>
        <script src="{{ asset('js/smooth-scroll.js') }}" ></script>
        <script src="{{ asset('js/owl.carousel.js') }}" ></script>
        <script src="{{ asset('js/script.js') }}" ></script>

</body>
</html>