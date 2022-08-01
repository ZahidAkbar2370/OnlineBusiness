@extends('Shop.BackendPanel.layout')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <a href="{{url('shop/'.$websiteURL->shop_url)}}" target="_blank" class="btn btn-primary">Visit Webiste</a>
                            {{-- <h1>Hello, <span>Welcome Here</span></h1> --}}
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Pending Orders</div>
                                    <div class="stat-digit">{{ $pendingOrders ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Active Orders</div>
                                    <div class="stat-digit">{{ $activeOrders ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Done Orders</div>
                                    <div class="stat-digit">{{  $doneOrders ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Orders</div>
                                    <div class="stat-digit">{{ $totalOrders ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Products</div>
                                    <div class="stat-digit">{{ $products ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Brands</div>
                                    <div class="stat-digit">{{ $brands ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Product Categories</div>
                                    <div class="stat-digit">{{ $productCateogries ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Labels</div>
                                    <div class="stat-digit">{{ $labels ?? "0" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-title">
                                <h4>Fee Collections and Expenses</h4>

                            </div>
                            <div class="card-body">
                                <div class="ct-bar-chart m-t-30"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">

                            <div class="card-body">
                                <div class="ct-pie-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card bg-primary">
                                    <div class="weather-widget">
                                        <div id="weather-one" class="weather-one p-22"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="testimonial-widget-one p-17">
                                        <div class="testimonial-widget-one owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam, quis
                                                        nostrud exercitation <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img"
                                                        src="shop_backend_panel/assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam, quis
                                                        nostrud exercitation <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img"
                                                        src="shop_backend_panel/assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam, quis
                                                        nostrud exercitation <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img"
                                                        src="shop_backend_panel/assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam, quis
                                                        nostrud exercitation <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img"
                                                        src="shop_backend_panel/assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam, quis
                                                        nostrud exercitation <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img"
                                                        src="shop_backend_panel/assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="testimonial-content">
                                                    <div class="testimonial-text">
                                                        <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                        minim veniam, quis
                                                        nostrud exercitation <i class="fa fa-quote-right"></i>
                                                    </div>
                                                    <img class="testimonial-author-img"
                                                        src="shop_backend_panel/assets/images/avatar/1.jpg" alt="" />
                                                    <div class="testimonial-author">TYRION LANNISTER</div>
                                                    <div class="testimonial-author-position">Founder-Ceo. Dell Corp
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    <!-- /# column -->





                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title pr">
                                <h4>New Orders</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>SR #</th>
                                                <th>Customer Name</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Sale Price</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($orders))
                                                @foreach($orders as $key => $order)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $order->customers->customer_name ?? "" }}</td>
                                                    <td>
                                                        {{ $order->products->product_name ?? "" }}
                                                    </td>
                                                    <td>
                                                        {{ $order->quantity ?? "" }}
                                                    </td>
                                                    <td>
                                                        {{ $order->product_sale_price ?? "" }}
                                                    </td>
                                                    <td>{{ $order->created_at->diffForHumans() ?? "" }}</td>
                                                </tr>
                                            @endforeach
                                            @endif
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                {{-- <div class="row">
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-facebook">
                                    <i class="ti-facebook"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">8,268</div>
                                    <div class="stat-text">Likes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-youtube">
                                    <i class="ti-youtube"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">12,545</div>
                                    <div class="stat-text">Subscribes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-twitter">
                                    <i class="ti-twitter"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">7,982</div>
                                    <div class="stat-text">Tweets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card p-0">
                            <div class="stat-widget-three home-widget-three">
                                <div class="stat-icon bg-danger">
                                    <i class="ti-linkedin"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-digit">9,658</div>
                                    <div class="stat-text">Followers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    {{-- <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div> --}}

                    <!-- /# column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title">
                                <h4>Lastes Brands</h4>

                            </div>
                            <div class="recent-comment m-t-15" style="max-height:770px !important;min-height:770px !important">
                                @if(!empty($allBrands))
                                    @foreach($allBrands as $key => $brand)
                                        <div class="media">
                                            {{-- <div class="media-left">
                                                <a href="#"><img class="media-object" src="shop_backend_panel/assets/images/avatar/1.jpg"
                                                        alt="..."></a>
                                            </div> --}}
                                            <div class="media-body">
                                                <h4 class="media-heading color-primary">{{  $brand->brand_name ?? "" }}</h4>
                                                {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                                <p class="comment-date">{{ $brand->created_at->diffForHumans() ?? "" }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                  <!-- /# column -->
                  <div class="col-lg-4">
                    <div class="card">
                        <div class="card-title">
                            <h4>Lastes Categories</h4>

                        </div>
                        <div class="recent-comment m-t-15" style="max-height:770px !important;min-height:770px !important">
                            @if(!empty($allCategories))
                                @foreach($allCategories as $key => $category)
                                    <div class="media">
                                        {{-- <div class="media-left">
                                            <a href="#"><img class="media-object" src="shop_backend_panel/assets/images/avatar/1.jpg"
                                                    alt="..."></a>
                                        </div> --}}
                                        <div class="media-body">
                                            <h4 class="media-heading color-primary">{{  $category->p_category_name ?? "" }}</h4>
                                            {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                            <p class="comment-date">{{ $category->created_at->diffForHumans() ?? "" }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                    <!-- /# column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title">
                                <h4>Lastes Products</h4>

                            </div>
                            <div class="recent-comment m-t-15" style="max-height:770px !important;min-height:770px !important">
                                @if(!empty($allProducts))
                                    @foreach($allProducts as $key => $product)
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="{{ asset('') }}{{ $product->product_image_1 }}"
                                                        alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-primary">{{  $product->product_name ?? "" }}</h4>
                                                {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                                <p class="comment-date">{{ $product->created_at->diffForHumans() ?? "" }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                </div>
                <!-- /# row -->



                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2022 © Online Layyah. - <a href="#">Code With Zahid</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection