<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SportRSVP</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/toastr/toastr.min.css') }}">
        @yield('style')
    </head>

    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                <div class="container">
                    <a href="{{ route('homepage') }}" class="navbar-brand">
                        <img src="{{ asset('bower_components/admin-lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">SportRSVP</span>
                    </a>
                    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link dropdown-toggle">Court Schedule</a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                    <li><a href="{{ route('badminton') }}" class="dropdown-item">Badminton</a></li>
                                    <li><a href="{{ route('tennis') }}" class="dropdown-item">Tennis</a></li>
                                    <li><a href="{{ route('padel') }}" class="dropdown-item">Padel</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/login" role="button">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            </footer>
        </div>
        <script src="{{ asset('bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-lte/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-lte/plugins/toastr/toastr.min.js') }}"></script>
        @yield('script')
    </body>

</html>
