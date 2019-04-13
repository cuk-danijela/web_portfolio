@extends('layout')

@section('content')

      <!-- Header area -->
        <header id="header">
            <div class="center text-center">
                <h1 class="bigheadline">Dark Joe</h1>
                <h4 class="subheadline">The Worst Front End Developer</h4>
            </div>
            <div class="bottom">
                <a data-scroll href="#navigation" class="scrollDown animated pulse" id="scrollToContent"><i class="pe-7s-angle-down-circle pe-va"></i></a>
            </div>
        </header>

        <!-- Navigation area -->
        <section id="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="logo"><a data-scroll href="#body" class="logo-text">Dark Joe</a></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="nav">
                            <a href="#" data-placement="bottom" title="Menu" class="menu" data-toggle="dropdown"><i class="pe-7s-menu"></i></a>
                             <div class="dropdown-menu">
                                 <div class="arrow-up"></div>
                                 <ul>
                                     <li><a data-scroll href="#body">Home <i class="pe-7s-home"></i></a><span class="menu-effect"></span></li>
                                     <li><a data-scroll href="#services">Service <i class="pe-7s-config"></i></a><span class="menu-effect"></span></li>
                                     <li><a data-scroll href="#portfolio">Portfolio <i class="pe-7s-glasses"></i></a><span class="menu-effect"></span></li>
                                     <li><a data-scroll href="#testimonial">Testimonial <i class="pe-7s-comment"></i><span class="menu-effect"></span></a></li>
                                     <li><a data-scroll href="#contact">Contact <i class="pe-7s-help1"></i></a><span class="menu-effect"></span></li>
                                 </ul>
                             </div>
                        </div>
                    </div>

                </div>
            </div>            
        </section>
        
        @include('layouts/services')
        @include('layouts/portfolio')
        @include('layouts/testimonial')
        @include('layouts/contact')

@endsection
