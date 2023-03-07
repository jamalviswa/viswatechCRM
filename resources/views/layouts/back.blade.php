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

    <!-- plugin css -->
    <link href="{{ URL::asset('libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet">


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

    <!--PLUGINS -->
    <script src="{{ URL::asset('libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>

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
        $('#staff_name').change(function() {
            var staff = $(this).val();
            $.ajax({
                url: "{{route('salary.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "staff_code": staff
                },
                dataType: 'html',
                success: function(data) {
                    $('.code').show();
                    $("#code").html(data);
                }
            });
        });
        $('#staff_name').change(function() {
            var staff = $(this).val();
            $.ajax({
                url: "{{route('salary.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "designation": staff
                },
                dataType: 'html',
                success: function(data) {
                    $('.designation').show();
                    $("#designation").html(data);
                }
            });
        });
        $('#staff_name').change(function() {
            var staff = $(this).val();
            $.ajax({
                url: "{{route('salary.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "doj": staff
                },
                dataType: 'html',
                success: function(data) {
                    $('.doj').show();
                    $("#doj").html(data);
                }
            });
        });

        
    </script>
    <script>
        $('#staff').change(function() {
            var salary = $(this).val();
            $.ajax({
                url: "{{route('increment.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "code": salary
                },
                dataType: 'html',
                success: function(data) {
                    $('.code').show();
                    $("#staff_code").html(data);
                }
            });
        });
        $('#staff').change(function() {
            var salary = $(this).val();
            $.ajax({
                url: "{{route('increment.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "designation": salary
                },
                dataType: 'html',
                success: function(data) {
                    $('.designation').show();
                    $("#staff_designation").html(data);
                }
            });
        });

        $('#staff').change(function() {
            var salary = $(this).val();
            $.ajax({
                url: "{{route('increment.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "gross_salary": salary
                },
                dataType: 'html',
                success: function(data) {
                    $('.gross_salary').show();
                    $("#gross_salary").html(data);
                }
            });
        });
    </script>
    <script>
        $('#staff_names').change(function() {
            var slip= $(this).val();
            $.ajax({
                url: "{{route('slip.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": slip
                },
                dataType: 'html',
                success: function(data) {
                    $("#name").html(data);
                }
            });
        });
        $('#staff_names').change(function() {
            var slip= $(this).val();
            $.ajax({
                url: "{{route('slip.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "code": slip
                },
                dataType: 'html',
                success: function(data) {
                    $("#code").html(data);
                }
            });
        });
        $('#staff_names').change(function() {
            var slip= $(this).val();
            $.ajax({
                url: "{{route('slip.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "designation": slip
                },
                dataType: 'html',
                success: function(data) {
                    $("#designation").html(data);
                }
            });
        });
        $('#staff_names').change(function() {
            var slip= $(this).val();
            $.ajax({
                url: "{{route('slip.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "doj": slip
                },
                dataType: 'html',
                success: function(data) {
                    $("#doj").html(data);
                }
            });
        });
        $('#staff_names').change(function() {
            var slip= $(this).val();
            $.ajax({
                url: "{{route('slip.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "basic": slip
                },
                dataType: 'html',
                success: function(data) {
                    $("#basic").html(data);
                }
            });
        });
        $('#month').change(function() {
            var month= $(this).val();
            $.ajax({
                url: "{{route('slip.ajax')}}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "month": month,
                },
                dataType: 'html',
                success: function(data) {
                    $("#no_of_days").html(data);
                }
            });
        });
        
    </script>
    <script>
        $('#net_salary, #increment_amount').on("paste keyup",
            function() {
                var result = parseFloat($("#net_salary").val()) + parseFloat($("#increment_amount").val());
                $("#final_salary").val((isNaN(result) ? '' : result).toFixed(2));
            }
        );

        $('#incrementedit_amount').on("paste keyup",
            function() {
                var result = parseFloat($("#netedit_salary").val()) + parseFloat($("#incrementedit_amount").val());
                $("#finaledit_salary").val((isNaN(result) ? '' : result).toFixed(2));
            }
        );
        $('#total_days,#working_days').on("paste keyup",
            function() {
                var result = parseInt($("#total_days").val()) - parseInt($("#working_days").val());
                $("#lop_days").val((isNaN(result) ? '' : result));
            }
        );

        $('#basic_sal,#hra,#bonus').on("paste keyup",
            function() {
                var gross = parseInt($("#basic_sal").val()) + parseInt($("#hra").val()) + parseInt($("#bonus").val());
                $("#total_salary").val((isNaN(gross) ? '' : gross));
            }
        );
        $('#basic_sal , #total_days').on("paste keyup",
            function() {
                var day = parseInt($("#basic_sal").val()) / parseInt($("#total_days").val()) ;
                $("#leave_deduction").val((isNaN(day) ? '' : day));

            }
        );
    </script>
    
</body>

</html>