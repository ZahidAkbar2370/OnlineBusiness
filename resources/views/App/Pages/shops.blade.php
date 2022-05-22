@extends('App.layout')
@section('content')
    
<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            <div class="intro-slide" style="background-image: url({{asset('assets/images/demos/demo-15/slider/slide-1.jpg')}});">
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


<div class="display-row bg-light">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-md-12">
                <div class="heading">
                    <h3>Shops</h3><!-- End .title text-center -->
                    {{-- <p class="title-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p><!-- End .title-desc --> --}}
                </div><!-- End .heading -->

                <div class="row">

                    @if(!empty($all_shops))
                    @foreach($all_shops as $shop)
                    <div class="col-12 col-md-3 mb-5">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="{{url('shop/'.$shop->shop_url)}}">
                                    <img src="{{$shop->profile_image}}" alt="Product image" class="product-image">
                                    <img src="{{$shop->cover_photo}}" alt="Product image" class="product-image-hover">
                                </a>

                                {{-- <div class="product-action-vertical">
                                    <a href="#"><span class="active">add to wishlist</span></a>
                                   
                                </div><!-- End .product-action --> --}}

                                <div class="product-action">
                                    <a href="{{url('shop/'.$shop->shop_url)}}" class="btn-product btn-cart"><span>Visit Shop</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-price">
                                    <strong>{{$shop->ShopCategory->shop_category_name ?? "category_name"}}</strong>
                                </div><!-- End .product-price -->
                                <h3 class="product-title"><a href="{{url('shop/'.$shop->shop_url)}}">{{$shop->shop_name}}</a></h3><!-- End .product-title -->
                                
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 -->
                    @endforeach
                    @endif
                    {{-- <div class="col-12 col-md-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                    <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                   
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $165.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 --> --}}

                    {{-- <div class="col-12 col-md-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                    <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                   
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $165.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 --> --}}

                    {{-- <div class="col-12 col-md-3">
                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="assets/images/demos/demo-15/products/product-6.jpg" alt="Product image" class="product-image">
                                    <img src="assets/images/demos/demo-15/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                   
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="#">Botanical-Print Crepe Dress</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $165.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 --> --}}

                    

                  
                </div><!-- End .row -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .container-fluid -->
</div><!-- End .display-row .bg-light -->
</main>


@endsection