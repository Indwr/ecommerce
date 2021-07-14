<style>
    .color__white {
        color: white !important;
    }

    .Category__button {
        min-width: 263px;
        background: #f28c0f;
        display: flex;
        place-content: space-between;
        place-items: center;
        color: #fff;
        padding: 10px 22px 10px 20px;
        font-size: 13px;
        font-weight: 500;
    }

    .Category__button .d-flex {
        place-items: center;
    }

    .Category__button .d-flex i {
        font-size: 13px;
        padding-right: 10px;
    }

    .btn-search-area {
        position: absolute;
        right: 0;
        height: 100%;
        z-index: 9;
    }

    button.btn-search {
        height: 100%;
        border: 0px;
        padding: 13px;
        background: transparent;
        position: relative;
    }

    button.btn-search::after {
        content: '';
        position: absolute;
        width: 1px;
        height: 20px;
        background: #bdbdbd;
        left: 0;
        top: 11px;
    }
</style>
<div class="top-navbar bg-dark border-bottom border-soft-secondary z-1035">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                    @if(get_setting('show_language_switcher') == 'on')
                    <li class="list-inline-item dropdown mr-3 color__white" id="lang-change">
                        @php
                        if(Session::has('locale')){
                        $locale = Session::get('locale', Config::get('app.locale'));
                        }
                        else{
                        $locale = 'en';
                        }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle color__white  py-2" data-toggle="dropdown" data-display="static">
                            <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$locale.'.png') }}" class="mr-2 lazyload" alt="{{ \App\Language::where('code', $locale)->first()->name }}" height="11">
                            <span class="opacity-61">{{ \App\Language::where('code', $locale)->first()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            @foreach (\App\Language::all() as $key => $language)
                            <li>
                                <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="dropdown-item @if($locale == $language) active @endif">
                                    <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                    <span class="language">{{ $language->name }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif

                    @if(get_setting('show_currency_switcher') == 'on')
                    <li class="list-inline-item dropdown" id="currency-change">
                        @php
                        if(Session::has('currency_code')){
                        $currency_code = Session::get('currency_code');
                        }
                        else{
                        $currency_code = \App\Currency::findOrFail(get_setting('system_default_currency'))->code;
                        }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle color__white py-2 opacity-61" data-toggle="dropdown" data-display="static">
                            {{ \App\Currency::where('code', $currency_code)->first()->name }} {{ (\App\Currency::where('code', $currency_code)->first()->symbol) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            @foreach (\App\Currency::where('status', 1)->get() as $key => $currency)
                            <li>
                                <a class="dropdown-item @if($currency_code == $currency->code) active @endif" href="javascript:void(0)" data-currency="{{ $currency->code }}">{{ $currency->name }} ({{ $currency->symbol }})</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>

            <div class="col-5 text-right d-none d-lg-block">
                <ul class="list-inline mb-0">
                    @auth
                    @if(isAdmin())
                    <li class="list-inline-item mr-3">
                        <a href="{{ route('admin.dashboard') }}" class="color__white py-2 d-inline-block opacity-61">{{ translate('My Panel')}}</a>
                    </li>
                    @else
                    <li class="list-inline-item mr-3">
                        <a href="{{ route('dashboard') }}" class="color__white py-2 d-inline-block opacity-61">{{ translate('My Panel')}}</a>
                    </li>
                    @endif
                    <li class="list-inline-item">
                        <a href="{{ route('logout') }}" class="color__white py-2 d-inline-block opacity-61">{{ translate('Logout')}}</a>
                    </li>
                    @else
                    <li class="list-inline-item mr-3">
                        <a href="{{ route('user.login') }}" class="color__white py-2 d-inline-block opacity-61">{{ translate('Login')}}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('user.registration') }}" class="color__white py-2 d-inline-block opacity-61">{{ translate('Registration')}}</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->
<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1">
        <div class="container">
            <div class="d-flex align-items-center">

                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block py-20px mr-3 ml-0" href="{{ route('home') }}">
                        @php
                        $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                        <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @else
                        <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @endif
                    </a>

                    <!--
                    @if(Route::currentRouteName() != 'home')
                        <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                            <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                <div class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">
                                    <span class="navbar-toggler-icon"></span>
                                </div>
                            </div>
                        </div>
                    @endif
-->
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                    <div class="position-relative flex-grow-1">
                        <form action="{{ route('search') }}" method="GET" class="stop-propagation">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control" id="search" name="q" placeholder="{{translate('I am shopping for...')}}" autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block btn-search-area">
                                        <button class=" btn-search" type="submit">
                                            <i class="la la-search la-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        @include('frontend.partials.compare')
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="wishlist">
                        @include('frontend.partials.wishlist')
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        @include('frontend.partials.cart')
                    </div>
                </div>

            </div>
        </div>
        <!--
        @if(Route::currentRouteName() != 'home')
        <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
            <div class="container">
                <div class="row gutters-10 position-relative">
                    <div class="col-lg-3 position-static">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>
            </div>
        </div>
        @endif
-->
    </div>
    @if ( get_setting('header_menu_labels') != null )
    <div class="bg-white py-2 hide_sticky">
        <div class="container">
            
            <!-- 
====================
====================
====================
home_menu_clone start
====================    
====================
====================
-->
            
            <div class="home_menu_clone">

                <div class="d-none d-xl-block ">
                    <div class="" id="category-menu-icon-clone">
                        <div class="dropdown-toggle  Category__button c-pointer" style="float:left;">
                            <div class="d-flex">
                                <i class="las la-list"></i> <span>ALL DEPARTMENT</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu-clone">
                    <div class="container">
                        <div class="row gutters-10 position-relative">
                            <div class="col-lg-3 position-static">
                                @include('frontend.partials.category_menu')
                            </div>
                        </div>
                    </div>
                </div>



                <script>
                    document.getElementById("category-menu-icon-clone").addEventListener("mouseover", myFunction);

                    function myFunction() {
                        document.getElementById("hover-category-menu-clone").classList.remove("d-none");
                        document.getElementById("hover-category-menu-clone").addEventListener("mouseleave", myFunction2);
                    }

                    function myFunction2() {
                        document.getElementById("hover-category-menu-clone").classList.add("d-none");
                    }
                </script>
                
                <style>
                    .home_menu_clone{
                        display: block;
                    }
                </style>
            </div>

<!-- 
====================
====================
====================
home_menu_clone end
====================    
====================
====================
-->
            @if(Route::currentRouteName() != 'home')
             <style>
                    .home_menu_clone{
                        display: none;
                    }
                </style>
            <div class="d-none d-xl-block ">
                <div class="" id="category-menu-icon">
                    <div class="dropdown-toggle  Category__button c-pointer" style="float:left;">
                        <div class="d-flex">
                            <i class="las la-list"></i> <span>ALL DEPARTMENT</span>
                        </div>
                    </div>
                </div>
            </div>
            @endif




            @if(Route::currentRouteName() != 'home')
            <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">
                <div class="container">
                    <div class="row gutters-10 position-relative">
                        <div class="col-lg-3 position-static">
                            @include('frontend.partials.category_menu')
                        </div>
                    </div>
                </div>
            </div>
            @endif




            <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-center">
                @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                <li class="list-inline-item mr-0">
                    <a href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}" class="opacity-61 fs-13 px-3 py-2 d-inline-block fw-600 hov-opacity-100 text-reset">
                        {{ translate($value) }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</header>