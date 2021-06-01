<!DOCTYPE html>
<html class="loading" lang="en"
      data-textdirection="@if(App::isLocale('en')) ltr @elseif(App::isLocale('ar')) rtl @endif">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <link rel="apple-touch-icon" href="{{url('/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
@if(App::isLocale('en'))
    <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/vendors.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/fonts/meteocons/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/morris.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/chartist.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/app.css')}}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/fonts/simple-line-icons/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/timeline.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css/pages/dashboard-ecommerce.css')}}">
        <link rel='stylesheet' type='text/css' href='{{url('/app-assets/css/fontawesome.min.css')}}'>
        <link rel="stylesheet" type="text/css" href='{{url("/app-assets/css/sweetalert/sweetalert.css")}}'>
        <link rel="stylesheet" type="text/css" href='{{url("/app-assets/vendors/css/extensions/toastr.css")}}'>
        <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/vendors/css/forms/selects/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('/assets/css/style.css')}}">
        <!-- END Custom CSS-->
@elseif(App::isLocale('ar'))
    <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css-rtl/vendors.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/fonts/meteocons/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/morris.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/vendors/css/charts/chartist.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css-rtl/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css-rtl/custom-rtl.css')}}">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css-rtl/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css"
              href="{{url('/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/fonts/simple-line-icons/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css-rtl/pages/timeline.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">
        <link rel='stylesheet' type='text/css' href='{{url('/app-assets/css/fontawesome.min.css')}}'>
        <link rel="stylesheet" type="text/css" href='{{url("/app-assets/css/sweetalert/sweetalert.css")}}'>
        <link rel="stylesheet" type="text/css" href='{{url("/app-assets/vendors/css/extensions/toastr.css")}}'>
        <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/vendors/css/forms/selects/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('/assets/css/style-rtl.css')}}">
        <!-- END Custom CSS-->
    @endif
    @yield('styles')
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern"
      data-col="2-columns">
<!-- fixed-top -->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs"
                        href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img class="brand-logo" alt="modern admin logo"
                             src="{{url('/app-assets/images/logo/logo.png')}}">
                        <h3 class="brand-text">Modern Admin</h3>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="la la-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">
                                Hello, <span class="user-name text-bold-700">{{App\Admin::find(session()->get('user_admin')->id)->name}}</span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="{{url(App\Admin::find(session()->get('user_admin')->id)->image)}}" style="height: 37px"
                                     alt="avatar"><i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('admin.edit', session()->get('user_admin')->id) }}">
                                <i class="ft-user"></i> Edit Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            @if(App::isLocale('en'))
                                <i class="flag-icon flag-icon-us"></i>
                                <span class="selected-language"></span>
                            @elseif(App::isLocale('ar'))
                                <i class="flag-icon flag-icon-eg"></i>
                                <span class="selected-language"></span>
                            @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="{{route('CHANGE_LANGUAGE','ar')}}"><i
                                    class="flag-icon flag-icon-eg"></i> العربية</a>
                            <a class="dropdown-item" href="{{route('CHANGE_LANGUAGE','en')}}"><i
                                    class="flag-icon flag-icon-us"></i> English</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Notifications</span>
                                </h6>
                                <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New
                                </span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center">
                                            <i class="ft-plus-square icon-bg-circle bg-cyan"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">
                                                Lorem ipsum dolor sit amet, consectetuer elit.
                                            </p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">30 minutes ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item text-muted text-center" href="javascript:void(0)">
                                    Read all notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- sidebar -->
@include('dashboard.layout.sidebar')
<!-- content -->
<div class="app-content content" style="margin-bottom: -12px">
    <div class="content-wrapper" style="padding: 1.5rem">
        <div class="content-header row">
            @yield('content_header')
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- footer -->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018
          <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
             target="_blank">PIXINVENT
          </a>, All rights reserved.
      </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">
            Hand-crafted & Made with <i class="ft-heart pink"></i>
        </span>
    </p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{url('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{url('/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"
        type="text/javascript"></script>
<script src="{{url('/app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
<script src="{{ url('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{url('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{url('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{url('/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
<script src='{{url("/app-assets/js/scripts/fontawesome.min.js")}}' type='text/javascript'></script>
<script src="{{ url('/app-assets/js/scripts/moment.js')}} "></script>
<script src="{{ url('/app-assets/js/scripts/moment-timezone-with-data.js')}} "></script>
<script src='{{ url("/app-assets/js/scripts/sweetalert/sweetalert.min.js")}}'></script>
<script src='{{ url("/app-assets/js/scripts/sweetalert/jquery.sweet-alert.custom.js")}}'></script>
<script src="{{ url('/app-assets/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>
<script src="{{ url('/app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
<script src="{{ url('/app-assets/js/scripts/forms/checkbox-radio.js') }}" type="text/javascript"></script>

@include('dashboard.partials.scripts.other-scripts')
@yield('scripts')
<!-- END PAGE LEVEL JS-->
</body>

</html>
