<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRoboto+Slab:300,400,700" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('/frontendFiles/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/skins/skin-photography.css')}}"> 

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/demos/demo-photography.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('/frontendFiles/css/aos.css')}}">

    <!-- Head Libs -->
		<script src="/frontendFiles/vendor/modernizr/modernizr.min.js"></script>

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body class="loading-overlay-showing" data-loading-overlay>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="body">
            <header id="header" class="header-narrow header-full-width" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 0, "stickySetTop": "0"}'>
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="/">
                                        {{-- <img alt="GEB" width="184" height="48" src=""> --}}
                                        <h1 style="margin-top: auto; margin-bottom: auto">GEB</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        {{-- <ul class="header-social-icons social-icons hidden-xs">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                        </ul> --}}
                                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                            <nav>
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="dropdown-full-color dropdown-primary">
                                                        <a href="/">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="dropdown dropdown-full-color dropdown-primary">
                                                        <a class="dropdown-toggle" href="#">
                                                            About
                                                        </a>
                                                        <ul class="dropdown-menu custom-dropdown-menu-style-1">
                                                            <li>
                                                                <a href="/about-project">
                                                                    Project
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/about-team">
                                                                    Team
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/about-associated-partners">
                                                                    Associated Partners
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-full-color dropdown-primary">
                                                        <a class="dropdown-toggle" href="#">
                                                            Deliverables
                                                        </a>
                                                        <ul class="dropdown-menu custom-dropdown-menu-style-1">
                                                            <li>
                                                                <a href="/deliverables-ge-graduate-diploma">
                                                                    GE Graduate Diploma
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/deliverables-educational-ge-pilot-plant">
                                                                    Educational GE Pilot Plant 
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/deliverables-integrated-ge-laboratories">
                                                                    Integrated GE Laboratories
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="/deliverables-egyptian-Society-of-ge">
                                                                    Egyptian Society of GE
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-full-color dropdown-primary">
                                                        <a href="/events">
                                                            Events
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-full-color dropdown-primary">
                                                        <a href="/project-newsletters">
                                                            Project Newsletters
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-full-color dropdown-primary">
                                                        <a href="/contact-us">
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                
                                                    @guest
                                                        <li class="dropdown-full-color dropdown-primary">
                                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                        {{-- @if (Route::has('register'))
                                                            <li class="dropdown-full-color dropdown-primary">
                                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                            </li>
                                                        @endif --}}
                                                        @else
                                                            <li class="dropdown dropdown-full-color dropdown-primary">
                                                                
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    {{ Auth::user()->name }} 
                                                                </a>
                                                                
                                                                {{-- @can('access_dashboard')
                                                                    
                                                                @endcan --}}

                                                                <ul class="dropdown-menu custom-dropdown-menu-style-1">
                                                                    <li>
                                                                        <a href="/courses">
                                                                            Courses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/cms">
                                                                            CMS
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                            {{ __('Logout') }}
                                                                        </a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            @csrf
                                                                        </form>
                                                                    </li>
                                                                </ul>

                                                            </li>
                                                    @endguest

                                                    {{-- @guest
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                            </li>
                                                        @endif
                                                        @else
                                                            <li class="nav-item dropdown">
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>

                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </li>
                                                    @endguest --}}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        
            {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav> --}}

                @yield('content')
    </div>

    <footer id="footer" class="light narrow" style="margin-top: 30px;">
        <div class="footer-copyright">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 center">
                        <p><strong>Developed by Center for Sound, Vibration and Smart Structures (CVS3) - Faculty of Engineering - Ain Shams University </strong>- Copyright © 2020 .</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Vendor -->
    <script src="{{asset('/frontendFiles/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/common/common.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery.validation/jquery.validation.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/vide/vide.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/jquery-mousewheel/jquery.mousewheel.min.js')}}"></script>
    {{-- <script src="{{asset('/frontendFiles/vendor/modernizr/modernizr.min.js')}}"></script> --}}

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('/frontendFiles/js/theme.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('/frontendFiles/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('/frontendFiles/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{asset('/frontendFiles/js/views/view.contact.js')}}"></script>

    <!-- Demo -->
    <script src="{{asset('/frontendFiles/js/demos/demo-photography.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('/frontendFiles/js/custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('/frontendFiles/js/theme.init.js')}}"></script>

    <script src="{{asset('/frontendFiles/js/aos.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js')}}"></script>
    <script>
        AOS.init();
    </script>
    
    @yield('js')
</body>
</html>
