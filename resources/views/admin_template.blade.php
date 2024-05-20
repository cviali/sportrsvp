<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportRSVP</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/toastr/toastr.min.css') }}">
    @yield('style')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('header')
        @include('sidebar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $page_title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('footer')
    </div>
    <script src="{{ asset('bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin-lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('bower_components/admin-lte/plugins/toastr/toastr.min.js') }}"></script>

    @if (session()->has('msg'))
    <script>
        toastr.success('{!! session()->get("msg") !!}')
    </script>
    @endif

    @yield('script')

</body>

</html>