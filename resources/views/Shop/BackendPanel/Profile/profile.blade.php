@extends("Shop.BackendPanel.layout")
@section('content')
    

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Profile</span></h1>
                        </div>
                    </div>
                </div>
            </div>

<section id="main-content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="user-profile">
            <div class="row">
              <div class="col-lg-4">
                <div class="user-photo m-b-30">
                  <img class="img-fluid" src="{{ $shopProfile->profile_image ?? '' }}" style="width: 170px;height: 170px;" alt="" />
                </div>
                <div class="user-work">
                  <h4>Shop Info.</h4>
                  <div class="work-content">
                    <h3>Jakhar Mobile Shop</h3>
                    <p>mobile ship</p>
                    {{-- <p>New York, 1214</p> --}}
                  </div>
                  <div class="work-content">
                    <h3>Role</h3>
                    <p>Shop Owner</p>
                    {{-- <p>New York, 1214</p> --}}
                  </div>
                </div>
                {{-- <div class="user-skill">
                  <h4>Skill</h4>
                  <ul>
                    <li>
                      <a href="#">Branding</a>
                    </li>
                    <li>
                      <a href="#">UI/UX</a>
                    </li>
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">Wordpress</a>
                    </li>
                    <li>
                      <a href="#">Magento</a>
                    </li>
                  </ul>
                </div> --}}
              </div>
              <div class="col-lg-8">
                <div class="user-profile-name">{{ Auth::user()->name ?? "" }}</div>
                <div class="user-Location">
                  <i class=""></i> Since: {{ Auth::user()->created_at->diffForHumans() }}</div>
                {{-- <div class="user-job-title">Product Designer</div> --}}
                {{-- <div class="ratings">
                  <h4>Ratings</h4>
                  <div class="rating-star">
                    <span>8.9</span>
                    <i class="ti-star color-primary"></i>
                    <i class="ti-star color-primary"></i>
                    <i class="ti-star color-primary"></i>
                    <i class="ti-star color-primary"></i>
                    <i class="ti-star"></i>
                  </div>
                </div> --}}
                <div class="user-send-message">
                  <span>{{ $shopProfile->shop_about }}</span>
                </div>
                <div class="custom-tab user-profile-tab">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="1">
                      <div class="contact-information">
                        <h4>Contact information</h4>
                        <div class="phone-content">
                          <span class="contact-title">Phone:</span>
                          <span class="phone-number">{{ $shopProfile->shop_mobile_no ?? "" }}</span>
                        </div>
                        <div class="address-content">
                          <span class="contact-title">Address:</span>
                          <span class="mail-address">{{ $shopProfile->shop_address ?? "" }}</span>
                        </div>
                        <div class="email-content">
                          <span class="contact-title">Email:</span>
                          <span class="contact-email">{{ Auth::user()->email ?? "" }}</span>
                        </div>
                        <div class="website-content">
                          <span class="contact-title">Website:</span>
                          <span class="contact-website btn btn-dark"><a target="_blank" href="{{ url('shop/'.$shopProfile->shop_url ?? '') }}" style="color: aliceblue">Visit Webiste</a></span>
                        </div>
                        {{-- <div class="skype-content">
                          <span class="contact-title">Skype:</span>
                          <span class="contact-skype">Admin Board</span>
                        </div> --}}
                      </div>
                      <div class="basic-information">
                        <h4>Basic information</h4>
                        <div class="birthday-content">
                          <span class="contact-title">Active Template:</span>
                          <span class="birth-date">{{ $shopProfile->template->template_name ?? "" }}</span>
                        </div>
                        <div class="gender-content">
                          <span class="contact-title">Package Name:</span>
                          <span class="gender">{{ $shopProfile->package_id }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /# row -->
</section>


</div>
</div>
</div>



@endsection<!-- /# row -->