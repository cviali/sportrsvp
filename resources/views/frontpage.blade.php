<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Velocity Arena</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/toastr/toastr.min.css') }}">
        <style>
            .floating {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 40px;
                right: 40px;
                background-color: #25d366;
                color: #fff;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
            }

            .fab-icon {
                margin-top: 16px;
            }
        </style>
        @yield('style')
    </head>

    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
                <div class="container">
                    <button class="navbar-toggler order-0 mr-3" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="{{ route('homepage') }}" class="navbar-brand">
                        <span class="brand-text font-weight-light">Velocity Arena</span>
                    </a>
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
            <a href="https://wa.me/6281808267880?text=Hallo%20Admin%20Velocity%20Arena,%20Saya%20mau%20pesan%20lapangan" class="floating"
                target="_blank">
                <i class="fab fa-whatsapp fab-icon"></i>
            </a>
            @yield('content')
            <footer class="main-footer">
                <strong>Copyright &copy; 2024 Velocity Arena</strong>
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
