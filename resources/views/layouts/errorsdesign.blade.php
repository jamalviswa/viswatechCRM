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

<body class="">

    <!-- Begin page -->
    <div class="my-5 pt-5">

        <!-- ========== Start main Content here ========== -->

        @yield('content')

        <!-- ========== End main Content here ========== -->

    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ URL::asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('libs/node-waves/waves.min.js') }}"></script>

</body>

</html>