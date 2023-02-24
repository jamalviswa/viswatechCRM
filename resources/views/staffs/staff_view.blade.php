@extends('layouts.back')
@section('content')

<!-- ============================================================== -->
<!-- Start main Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Staff Management</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Staff Management</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Content Start Here -->

            <div class="card">
                <div class="card-body">
                <div class="row card-title-desc">
                                <div class="col-lg-12 mx-auto text-end">
                                    <a href="{{route('staffs.staff_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">View Staff Details</h6>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3  col-form-label">Staff Name</label>
                                    <div class="col-md-6 mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->staff_name}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3  col-form-label">User Name</label>
                                    <div class="col-md-6 mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->username}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3  col-form-label">Email</label>
                                    <div class="col-md-6 mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->email}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Mobile Number</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->mobile_number}}</label>
                                    </div>
                                </div>

                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">DOB</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->date_of_birth}}</label>
                                    </div>
                                </div>

                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">DOJ</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->date_of_joining}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Blood Group</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->blood_group}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Designation</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$staffs->designation}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Address</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-4  col-form-label">{{$staffs->address}}</label>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- End of row-->
                    </div>
                    <!--end border-->
                </div><!-- end card body -->
            </div> <!-- end card -->
            <!-- Content End Here -->

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End main Content here -->
<!-- ============================================================== -->

@endsection