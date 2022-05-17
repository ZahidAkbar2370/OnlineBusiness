@extends('App.layout')
@section('content')
    
<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            <div class="intro-slide" style="background-image: url(assets/images/demos/demo-15/slider/slide-1.jpg);">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle">Want to know what's hot?</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Spring Lookbook 2019</h1><!-- End .intro-title -->

                    <a href="#scroll-to-content" class="btn btn-outline-primary-2 scroll-to">
                        <span>Start scrolling</span>
                        <i class="icon-long-arrow-down"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="container mt-5">
        <h2 class="title text-center mb-4">Shop Categories</h2><!-- End .title text-center -->
        
        <div class="cat-blocks-container">
            <div class="row">
                @if($shopCategories)
                @foreach($shopCategories as $shop_category)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="{{$shop_category->image}}" style="width: 131px !important; height: 76px !important;"  alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">{{$shop_category->shop_category_name}}</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 -->
                @endforeach
                @endif
                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/2.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Digital Cameras</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/3.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/4.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/5.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}

                {{-- <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="assets/images/demos/demo-4/cats/6.png" alt="Category image">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">Smart Watches</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 --> --}}
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- End .mb-5 -->

</main>

    @endsection