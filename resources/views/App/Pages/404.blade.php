@extends('App.layout')
@section('content')




<main class="main">

    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            {{-- <div class="intro-slide" style="background-image: url(assets/images/demos/demo-15/slider/slide-1.jpg);"> --}}
                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-15/slider/slide-1.jpg);">
                <div class="container intro-content text-center">
                    {{-- <h3 class="intro-subtitle">Want to know what's hot?</h3><!-- End .h3 intro-subtitle --> --}}
                    <h1 class="intro-title text-white">Register Your Shop</h1><!-- End .intro-title -->

                    {{-- <a href="#scroll-to-content" class="btn btn-outline-primary-2 scroll-to">
                        <span>Start scrolling</span>
                        <i class="icon-long-arrow-down"></i>
                    </a> --}}
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->


    <div class="error-content text-center" style="background-image: url(assets/images/backgrounds/error-bg.jpg)">
        <div class="container">
            <h1 class="error-title">Access Error</h1><!-- End .error-title -->
            <p>We are sorry, The URL You've Requested is not Available For You.</p>
            <p>You are In-Active please contact With Admin. Thanks</p>
            <a href="{{url('/')}}" class="btn btn-outline-primary-2 btn-minwidth-lg">
                <span>BACK TO HOMEPAGE</span>
                <i class="icon-long-arrow-right"></i>
            </a>
        </div><!-- End .container -->
    </div><!-- End .error-content text-center -->

</main><!-- End .main -->

@endsection