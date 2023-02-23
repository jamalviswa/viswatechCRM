<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Viswa Technology Solutions HRM - Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Viswa Technology Solutions HRM - Admin and Staff Panel" name="description" />
    <meta content="VTS" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{URL::to('images/favicon.png')}}">

    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="{{ URL::asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App Css-->
    <link href="{{ URL::asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="{{route('adminusers.login')}}" class="">
                                        <img src="{{URL::to('images/logo.png')}}" alt="VTS" height="50" class="auth-logo logo-dark mx-auto">
                                    </a>
                                </div>

                                <!-- Content Section Start -->
                                @yield('content')
                                <!-- Content Section End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ URL::asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>

</body>

</html>