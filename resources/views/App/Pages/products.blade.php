@extends('App.layout')
@section('content')
    
<main class="main">
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            <div class="intro-slide" style="background-image: url({{asset('assets/images/demos/demo-15/slider/slide-1.jpg')}});">
                <div class="container intro-content text-center">
                    <h3 class="intro-subtitle">Want to know what's hot?</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Spring Lookbook 2022</h1><!-- End .intro-title -->

                    <a href="{{ url('register') }}" class="btn btn-outline-primary-2 scroll-to">
                        <span>Start Buying</span>
                        <i class="icon-long-arrow-down"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader text-white"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->


    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Random Products For Your</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           {{-- <div class="heading-right">
                <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
           </div><!-- End .heading-right --> --}}
        </div><!-- End .heading -->

        <div class="products">

            @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div> 
                    @endif
            <div class="row justify-content-center">

                @if($products)
                @foreach($products as $product)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            {{-- <span class="product-label label-circle label-sale">Sale</span> --}}
                            <a href="{{ url('productDetail/'. $product->id) }}">
                                {{-- <img src="{{asset('assets/images/demos/demo-4/products/product-10.jpg')}}" alt="Product image" class="product-image"> --}}
                                <img src="{{$product->product_image_1}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{$product->ProductCategory->p_category_name ?? "category name"}}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">{{$product->product_name}}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">PKR{{$product->product_sale_price - $product->product_discount_price}}</span>
                                <span class="old-price">Was PKR {{$product->product_sale_price}}</span>
                            </div><!-- End .product-price -->
                            {{-- <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container --> --}}

                            {{-- <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav --> --}}
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                @endforeach
                @endif

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-11.jpg')}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cameras & Camcorders</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">GoPro - HERO7 Black HD Waterproof Action</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $349.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-12.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-12-2.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Smartwatches</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">Apple - Apple Watch Series 3 with White Sport Band</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $214.49
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-13.jpg')}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">Lenovo - 330-15IKBR 15.6"</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$339.99</span>
                                <span class="out-text">Out Of Stock</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 11 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-14.jpg')}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Digital Cameras</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">Sony - Alpha a5100 Mirrorless Camera</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $499.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 50%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 11 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-15.jpg')}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">Home Mini - Smart Speaker  with Google Assistant</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $49.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 24 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #ef837b;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-16.jpg')}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">WONDERBOOM Portable Bluetooth Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$99.99</span>
                                <span class="old-price">Was $129.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #6699cc;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}

                {{-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="#">
                                <img src="{{asset('assets/images/demos/demo-4/products/product-17.jpg')}}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <!-- <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a> -->
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Smart Home</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="#">Google - Home Hub with  Google Assistant</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $149.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 --> --}}
            </div><!-- End .row -->
        </div><!-- End .products -->

        @if(!empty($products))
            {{ $products->links() }}
        @endif

        <style>
            .w-5{
                width: 30px !important;
            }
        </style>
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->

    


</main>


@endsection