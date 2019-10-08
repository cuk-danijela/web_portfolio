@extends('layout')

@section('content')

       <!-- Header area -->
             <header id="header">
                <div class="container">
                <div class="row">
                       <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <ul class="pull-right">
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a class="btn btn-default button" href="#">Download</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <div class="center">
                <h1>Turn Up the Bass</h1>
                <p>From the newest releases to classic albums, we have the best music for you to enjoy.</p>
            </div>
            <div class="bottom">
                <a data-scroll href="#navigation" class="scrollDown animated pulse" id="scrollToContent"><i class="pe-7s-angle-down-circle pe-va"></i></a>
            </div>
        </header>

        <!-- Navigation area -->
        <section id="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <div class="logo">
                            <a data-scroll href="#body" class="">
                                <img src="{{ asset('images/logo.svg') }}" width="106" height="75" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-9">
                        <div class="nav">
                            <a href="#" data-placement="bottom" title="Menu" class="menu" data-toggle="dropdown"><i class="pe-7s-menu hvr-pulse-shrink"></i></a>
                             <div class="dropdown-menu">
                                 <div class="arrow-up"></div>
                                 <ul>
                                    <li><a data-scroll href="#body">Home <i class="fas fa-2x fa-home"></i></a><span class="menu-effect"></span></li>
        <li><a data-scroll href="#testimonial">About Bass<i class="fas fa-2x fa-comments"></i><span class="menu-effect"></span></a></li>
        <li><a data-scroll href="#services">Support <i class="fas fa-2x fa-cogs"></i></a><span class="menu-effect"></span></li>
        <li><a data-scroll href="#portfolio">Community <i class="fas fa-2x fa-network-wired"></i></a><span class="menu-effect"></span></li>
        <li><a data-scroll href="#contact">Contact <i class="fas fa-2x fa-file-signature"></i></a><span class="menu-effect"></span></li>
    
                                    </ul>
                             </div>
                        </div>
                    </div>

                </div>
            </div>            
        </section>
        
        @include('layouts/services')
        @include('layouts/section')
        @include('layouts/download')

@endsection
