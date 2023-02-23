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

    <!-- Sweetalert Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/sweetalert.css') }}">

</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Header Start ========== -->

        @include('header')

        <!-- ========== Header End ========== -->

        <!-- ========== Navigation Menu Start ========== -->

        @include('topnav')

        <!-- ========== Navigation Menu End ========== -->


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
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <!-- Sweetalert Js-->
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>

    <?php
    if (session()->has('message')) {
        $success = session()->get('message');
        $type = session()->get('alert-class');
    ?>
        <script>
            swal({
                title: "<?php echo ($type == 'success') ? 'Success' : "Error" ?>",
                text: "<?php echo $success; ?>",
                type: "<?php echo $type; ?>",
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php }
    ?>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure, Do you want Delete this Record?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <a class="btn btn-primary" href="javascript:;">Yes</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.btn-primary').attr('href', $(this).attr('href'));
        });
    </script>

    <script>
        $('#staff').change(function() {
            var staff = $(this).val();
            $.ajax({
                url: "{{route('salaryinfos.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "staff": staff
                },
                dataType: 'html',
                success: function(data) {
                    $('.code').removeClass('hide');
                    $("#codes").html(data);
                }
            });
        });

        $('#staff').change(function() {
            var designation = $(this).val();
            $.ajax({
                url: "{{route('salaryinfos.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "designation": designation
                },
                dataType: 'html',
                success: function(data) {
                    $('.designation').removeClass('hide');
                    $("#designation").html(data);
                }
            });
        });

        $('#staff').change(function() {
            var mobile = $(this).val();
            $.ajax({
                url: "{{route('salaryinfos.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "mobile": mobile
                },
                dataType: 'html',
                success: function(data) {
                    $('.mobile').removeClass('hide');
                    $("#mobile").html(data);
                }
            });
        });
    </script>

</body>

</html>