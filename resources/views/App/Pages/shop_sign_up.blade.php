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

    {{-- <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/backgrounds/login-bg.jpg')"> --}}
        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17">
        <div class="container">
            <div class="form-box">
                <div class="form-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Seller/Shop</a>
                        </li>
                    </ul>
                    <div class="tab-content">


                        <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
                            <form action="{{URL::to('shop-signup')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <h3 class="bg-success">{{Session('success')}}</h3>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-name-2">Shop Category*</label>
                                    <select class="form-control" id="register-name-2" name="shop_category_id" required>
                                        <option>Select Shop Type</option>
                                        @if(!empty($categories))
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->shop_category_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div><!-- End .form-group -->


                                <div class="form-group">
                                    <label for="register-name-2">Your Name*</label>
                                    <input type="text" class="form-control" id="register-name-2" name="owner_name" placeholder="Shop Owner Name" required>
                                
                                    @error('owner_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->
                    
                                <div class="form-group">
                                    <label for="register-shop-2">Shop Name*</label>
                                    <input type="text" class="form-control" id="register-shop-2" name="shop_name" oninput="shopUrl()"  placeholder="Shop Name" required>
                                
                                    @error('shop_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-mobile-no-2">Mobile No*</label>
                                    <input type="text" class="form-control" id="register-mobile-no-2" name="shop_mobile_no"  placeholder="Shop Owner Mobile No" required>
                                
                                    @error('shop_mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->
                                
                                <div class="form-group">
                                    <label for="register-shop-url-2">Shop URL *</label>
                                    <input type="text" class="form-control" readonly id="register-shop-url-2" name="shop_url"  placeholder="Your Site URL..." required>
                                
                                    @error('shop_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-shop-address-2">Shop Address *</label>
                                    <input type="text" class="form-control" id="register-shop-address-2" name="shop_address"  placeholder="Shop Address" required>
                                
                                    @error('shop_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-shop-about-2">Shop About *</label>
                                    <textarea class="form-control" id="register-shop-about-2" name="shop_about"  placeholder="Shop Short Intro..." required></textarea>
                                    {{-- <input type="text" class="form-control" id="register-shop-about-2" name="shop_about" required> --}}
                                
                                    @error('shop_about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-email-2">Your email address *</label>
                                    <input type="email" class="form-control" id="register-email-2" name="shop_email" required>
                                
                                    @error('shop_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="register-password-2">Password *</label>
                                    <input type="password" class="form-control" id="register-password-2" name="shop_password" required>
                                
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>SIGN UP</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                        <label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .form-footer -->
                            </form>

                            {{-- <div class="form-choice">
                                <p class="text-center">or sign in with</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-login btn-g">
                                            <i class="icon-google"></i>
                                            Login With Google
                                        </a>
                                    </div><!-- End .col-6 -->
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-login  btn-f">
                                            <i class="icon-facebook-f"></i>
                                            Login With Facebook
                                        </a>
                                    </div><!-- End .col-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .form-choice --> --}}
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .form-tab -->
            </div><!-- End .form-box -->
        </div><!-- End .container -->
    </div><!-- End .login-page section-bg -->
</main><!-- End .main -->



<script>
    function shopUrl() {
    var x = document.getElementById("register-shop-2").value;
    
    val1 = x.replace(/\s+/g, '').trim();
    document.getElementById("register-shop-url-2").value  = val1;
    
    }
</script>
@endsection