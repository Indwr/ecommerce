<!--
<section class="bg-white border-top mt-auto hide__homepage">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('terms') }}">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Terms & conditions') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('returnpolicy') }}">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Return Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('supportpolicy') }}">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Support Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block" href="{{ route('privacypolicy') }}">
                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Privacy Policy') }}</h4>
                </a>
            </div>
        </div>
    </div>
</section>
-->




<style>
    .service-area {
    width: 100%;
    float: left;
    transform: translateY(-11px);
}
    @media (max-width: 768px){
        .service-wrap .col-3:nth-last-child(1){
             border-right: 1px solid #cecece;
        }
 .service-wrap .col-3 {
    padding: 0px;
    border: 1px solid #cecece;
    border-top: 0px;
    border-bottom: 0px;
}
.single-service-wrap.mb-30 {
    margin: 0;
    place-content: center;
    place-items: center;
    padding: 10px;
}
   
    .single-service-wrap {
    margin: 0;
    place-content: center;
    flex-direction: column;
}
    .single-service-wrap .service-icon {
    margin-right: 0;
    line-height: 1;
}
    .service-content {
    text-align: center;
}
   .single-service-wrap .service-content h3 {
    font-size: 9px;
           margin: 0;
}
    .single-service-wrap .service-content span {
    font-size: 11px;
    display: none;
}
        .service-wrap {
    background-color: #ffffff;
    position: relative;
    z-index: 1;
    padding: 5px 0 5px;
}
            }
    .hide__homepage{
        display: none;
    }
</style>
<div class="service-area home__">
            <div class="container">
                <div class="service-wrap service-wrap-hm9">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                             <a href="{{ route('terms') }}">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                  <i class="la la-file-text la-3x text-primary mb-2"></i>
                                </div>
                                <div class="service-content">
                                    <h3>{{ translate('Terms & conditions') }}</h3>
                                    <span>Contractual Relationship</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                              <a  href="{{ route('returnpolicy') }}">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                                </div>
                                <div class="service-content">
                                    <h3>{{ translate('Return Policy') }}</h3>
                                    <span>Within 30 days</span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                               <a  href="{{ route('supportpolicy') }}">
                            <div class="single-service-wrap mb-30">
                                <div class="service-icon service-icon-blue">
                                       <i class="la la-support la-3x text-primary mb-2"></i>
                                </div>
                                <div class="service-content">
                                    <h3>{{ translate('Support Policy') }}</h3>
                                    <span>24/7 Support </span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                        <a  href="{{ route('privacypolicy') }}">
                            <div class="single-service-wrap mb-30">
                                
                                <div class="service-icon service-icon-blue">
                          <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                                </div>
                                <div class="service-content">
                                    <h3>{{ translate('Privacy Policy') }}</h3>
                                    <span>Statement or legal document</span>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


     


<style>
    footer{
          background: white;
    border-top: 1px solid #f2f3f8;
    }
    .subscribe-area{
        padding: 60px 0px;
        width:100%;
            background: white;
    border-bottom: 1px solid #f2f3f8;
    }
    .section-title-2 h2 span {
    font-weight: bold;
}
.section-title-2 h2 {
    font-size: 30px;
    font-weight: 300;
    margin: 0;
    line-height: 1;
    letter-spacing: .25px;
}
    .section-title-2 p {
    color: #999999;
    margin: 12px 0 0;
}
    .subscribe-inp {
    border: 0px;
    border-bottom: 1px solid #a0a0a0;
    border-radius: 0px;
    font-size: 14px;
}
    input.btn.btn-tra {
    border: 0px;
    outline: none !important;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    box-shadow: 0 0 black !important;
}
    
    .footer-widget{
            background: white;
    }
    @media(max-width:767px){
        .section-title-2 {
    margin-bottom: 10px;
}
    }
</style>
<section class="subscribe-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title-2">
                            <h2><span>Keep</span> Connected</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                           <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                                  @csrf
                               <div class="input-group  w-100 mw-100">
<!---->
<input type="email" class="form-control subscribe-inp" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                   
  <div class="input-group-append">
    <input type="submit" class="btn btn-tra" value=" {{ translate('Subscribe') }}">
  </div>
</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<section class=" py-5  footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="{{ route('home') }}" class="d-block">
                        @if(get_setting('footer_logo') != null)
                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}" height="44">
                        @else
                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                        @endif
                    </a>
                    
                     <div class="my-3">
                        @php
                            echo get_setting('about_us_description');
                        @endphp
                    </div>
<!--
                      @if (get_setting('vendor_system_activation') == 1)
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-900 border-bottom border-gray-900 pb-2 mb-4">
                            {{ translate('Be a Seller') }}
                        </h4>
                        <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Apply Now') }}
                        </a>
                    </div>
                @endif
-->
                    
                    
                   
                    
                </div>
            </div>
            <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-900 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('Contact Info') }}
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                           <span class="d-block opacity-30">{{ translate('Address') }}:</span>
                           <span class="d-block opacity-70">{{ get_setting('contact_address') }}</span>
                        </li>
                        <li class="mb-2">
                           <span class="d-block opacity-30">{{translate('Phone')}}:</span>
                           <span class="d-block opacity-70">{{ get_setting('contact_phone') }}</span>
                        </li>
                        <li class="mb-2">
                           <span class="d-block opacity-30">{{translate('Email')}}:</span>
                           <span class="d-block opacity-70">
                               <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset">{{ get_setting('contact_email')  }}</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-900 border-bottom border-gray-900 pb-2 mb-4">
                        {{ get_setting('widget_one') }}
                    </h4>
                    <ul class="list-unstyled">
                        @if ( get_setting('widget_one_labels') !=  null )
                            @foreach (json_decode( get_setting('widget_one_labels'), true) as $key => $value)
                            <li class="mb-2">
                                <a href="{{ json_decode( get_setting('widget_one_links'), true)[$key] }}" class=" hov-opacity-100 text-reset">
                                    {{ $value }}
                                </a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-900 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('My Account') }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (Auth::check())
                            <li class="mb-2">
                                <a class=" hov-opacity-100 text-reset" href="{{ route('logout') }}">
                                    {{ translate('Logout') }}
                                </a>
                            </li>
                        @else
                            <li class="mb-2">
                                <a class=" hov-opacity-100 text-reset" href="{{ route('user.login') }}">
                                    {{ translate('Login') }}
                                </a>
                            </li>
                        @endif
                        <li class="mb-2">
                            <a class=" hov-opacity-100 text-reset" href="{{ route('purchase_history.index') }}">
                                {{ translate('Order History') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class=" hov-opacity-100 text-reset" href="{{ route('wishlists.index') }}">
                                {{ translate('My Wishlist') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class=" hov-opacity-100 text-reset" href="{{ route('orders.track') }}">
                                {{ translate('Track Order') }}
                            </a>
                        </li>
                        @if (\App\Addon::where('unique_identifier', 'affiliate_system')->first() != null && \App\Addon::where('unique_identifier', 'affiliate_system')->first()->activated)
                            <li class="mb-2">
                                <a class=" hov-opacity-100 text-light" href="{{ route('affiliate.apply') }}">{{ translate('Be an affiliate partner')}}</a>
                            </li>
                        @endif
                    </ul>
                </div>
                @if (get_setting('vendor_system_activation') == 1)
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-900 border-bottom border-gray-900 pb-2 mb-4">
                            {{ translate('Be a Seller') }}
                        </h4>
                        <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Apply Now') }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left">
                    @php
                        echo get_setting('frontend_copyright_text');
                    @endphp
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="list-inline my-3 my-md-0 social colored text-center">
                    @if ( get_setting('facebook_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('twitter_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('instagram_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('youtube_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                    </li>
                    @endif
                    @if ( get_setting('linkedin_link') !=  null )
                    <li class="list-inline-item">
                        <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        @if ( get_setting('payment_method_images') !=  null )
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="list-inline-item">
                                    <img src="{{ uploaded_asset($value) }}" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top">
    <div class="d-flex justify-content-around align-items-center">
        <a href="{{ route('home') }}" class="text-reset flex-grow-1 text-center py-3 border-right {{ areActiveRoutes(['home'],'bg-soft-primary')}}">
            <i class="las la-home la-2x"></i>
        </a>
        <a href="{{ route('categories.all') }}" class="text-reset flex-grow-1 text-center py-3 border-right {{ areActiveRoutes(['categories.all'],'bg-soft-primary')}}">
            <span class="d-inline-block position-relative px-2">
                <i class="las la-list-ul la-2x"></i>
            </span>
        </a>
        <a href="{{ route('cart') }}" class="text-reset flex-grow-1 text-center py-3 border-right {{ areActiveRoutes(['cart'],'bg-soft-primary')}}">
            <span class="d-inline-block position-relative px-2">
                <i class="las la-shopping-cart la-2x"></i>
                @if(Session::has('cart'))
                    <span class="badge badge-circle badge-primary position-absolute absolute-top-right" id="cart_items_sidenav">{{ count(Session::get('cart'))}}</span>
                @else
                    <span class="badge badge-circle badge-primary position-absolute absolute-top-right" id="cart_items_sidenav">0</span>
                @endif
            </span>
        </a>
        @if (Auth::check())
            @if(isAdmin())
                <a href="{{ route('admin.dashboard') }}" class="text-reset flex-grow-1 text-center py-2">
                    <span class="avatar avatar-sm d-block mx-auto">
                        @if(Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->avatar_original)}}">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}">
                        @endif
                    </span>
                </a>
            @else
                <a href="javascript:void(0)" class="text-reset flex-grow-1 text-center py-2 mobile-side-nav-thumb" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav">
                    <span class="avatar avatar-sm d-block mx-auto">
                        @if(Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->avatar_original)}}">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}">
                        @endif
                    </span>
                </a>
            @endif
        @else
            <a href="{{ route('user.login') }}" class="text-reset flex-grow-1 text-center py-2">
                <span class="avatar avatar-sm d-block mx-auto">
                    <img src="{{ static_asset('assets/img/avatar-place.png') }}">
                </span>
            </a>
        @endif
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif


