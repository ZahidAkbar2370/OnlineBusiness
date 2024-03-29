@extends('App.layout')
@section('content')




<main class="main">

    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
            {{-- <div class="intro-slide" style="background-image: url(assets/images/demos/demo-15/slider/slide-1.jpg);"> --}}
                <div class="intro-slide" style="background-image: url(assets/images/demos/demo-15/slider/slide-1.jpg);">
                <div class="container intro-content text-center">
                    {{-- <h3 class="intro-subtitle"></h3><!-- End .h3 intro-subtitle --> --}}
                    <h1 class="intro-title text-white">Welcome, Register Yourself</h1><!-- End .intro-title -->
{{-- 
                    <a href="#scroll-to-content" class="btn btn-outline-primary-2 scroll-to">
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
                            <a class="nav-link" id="customer-tab-2" data-toggle="tab" href="#customer-2" role="tab" aria-controls="customer-2" aria-selected="false">Customer</a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="customer-2" role="tabpanel" aria-labelledby="customer-tab-2">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Customer Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->


                                <div class="form-group">
                                    <label for="mobile-no-customer-3">Mobile No *</label>
                                    <input type="text" class="form-control" id="mobile-no-customer-3" name="cutomer_mobile_no" required>
                                   
                                    @error('cutomer_mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="mobile-no-customer-3">Address *</label>
                                    <input type="text" class="form-control" id="mobile-no-customer-3" name="cutomer_address" required>
                                   
                                    @error('cutomer_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="mobile-no-customer-3">Optional</label>
                                    <input type="text" class="form-control" id="mobile-no-customer-3" name="optional">
                                   
                                    @error('optional')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <strong>Login Detail</strong>
                                </div><!-- End .form-group -->


                                <div class="form-group">
                                    <label for="email">Email address *</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password *</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>Sign Up</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="signin-remember-2">
                                        <label class="custom-control-label" for="signin-remember-2">Remember Me</label>
                                    </div><!-- End .custom-checkbox -->

                                    <a href="#" class="forgot-link">Forgot Your Password?</a>
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
                                        <a href="#" class="btn btn-login btn-f">
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


@endsection