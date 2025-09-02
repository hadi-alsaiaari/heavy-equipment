<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="@if (Config::get('app.locale') == 'ar') rtl @else ltr @endif">

@include('layouts.dashboard.auth._head')

<body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- fixed-top-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.html">
                            <img class="brand-logo" alt="modern admin logo"
                                src="{{ asset('assets/dashboard') }}/images/logo/logo.png">
                            <h3 class="brand-text">{{__('words.app_name')}}</h3>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                                class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container">
                <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
                    <ul class="nav navbar-nav">
                        {{-- languages dropdown --}}
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i
                                    class="flag-icon @if (Config::get('app.locale') == 'ar') flag-icon-ye @else flag-icon-gb @endif"></i><span
                                    class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <i
                                            class="flag-icon @if ($localeCode == 'ar') flag-icon-ye @else flag-icon-gb @endif"></i>
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i
                                    class="ficon ft-settings"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @yield('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer fixed-bottom footer-dark navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a
                    class="text-bold-800 grey darken-2"
                    href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT
                </a>, All rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i
                    class="ft-heart pink"></i></span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/dashboard') }}/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/dashboard') }}/vendors/js/forms/validation/jqBootstrapValidation.js"
        type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard') }}/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/dashboard') }}/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard') }}/js/core/app.js" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard') }}/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/dashboard') }}/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    {{-- {!! NoCaptcha::renderJs() !!} --}}
</body>

</html>
