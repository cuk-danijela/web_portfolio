@extends('layout')

@section('content')

       <!-- Header area -->
        <header id="header">
            <div class="center text-center">
                <h1 class="bigheadline">Danijela Cuk</h1>
                <h4 class="subheadline">Frontend Web Developer</h4>
            </div>
            <div class="bottom">
                <a data-scroll href="#navigation" class="scrollDown animated pulse scrollToContent"><i class="pe-7s-angle-down-circle pe-va"></i></a>
            </div>
        </header>

        <!-- Navigation area -->
        <section id="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="logo"><a data-scroll href="#body" class="logo-text"><code>< Danijela Cuk /></code></a></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="nav">
                            <a href="#" data-placement="bottom" title="Menu" class="menu" data-toggle="dropdown"><i class="pe-7s-menu"></i></a>
                             <div class="dropdown-menu">
                                 <div class="arrow-up"></div>
                                 <ul>
                                    <li><a data-scroll href="#body">Home <i class="fas fa-2x fa-home"></i></a><span class="menu-effect"></span></li>
        <li><a data-scroll href="#testimonial">About me <i class="fas fa-2x fa-comments"></i><span class="menu-effect"></span></a></li>
        <li><a data-scroll href="#services">Service <i class="fas fa-2x fa-cogs"></i></a><span class="menu-effect"></span></li>
        <li><a data-scroll href="#portfolio">Portfolio <i class="fas fa-2x fa-network-wired"></i></a><span class="menu-effect"></span></li>
        <li><a data-scroll href="#contact">Contact <i class="fas fa-2x fa-file-signature"></i></a><span class="menu-effect"></span></li>
    
                                    </ul>
                             </div>
                        </div>
                    </div>

                </div>
            </div>            
        </section>
        
        @include('layouts/testimonial')
        @include('layouts/services')
        @include('layouts/portfolio')
        @include('layouts/contact')

@endsection
