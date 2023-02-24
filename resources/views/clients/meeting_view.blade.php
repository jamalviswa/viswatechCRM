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
                        <h4 class="mb-sm-0">Client Management</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Client Management</li>
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
                                    <a href="{{route('clients.meeting_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">View Meeting Details</h6>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3  col-form-label">Client Name</label>
                                    <div class="col-md-6 mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$meeting->client_name}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Mobile Number</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$meeting->mobile_no}}</label>
                                    </div>
                                </div>

                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Location</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$meeting->location}}</label>
                                    </div>
                                </div>

                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Business Name</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$meeting->business_name}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Business Description</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$meeting->business_desc}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Date</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-3  col-form-label">{{$meeting->client_name}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Time</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-4  col-form-label">{{$meeting->time}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Purpose</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-4  col-form-label">{{$meeting->purpose}}</label>
                                    </div>
                                </div>
                                <div class="col-mb-6 row">
                                    <label for="example-text-input" class="col-md-3 col-form-label">Remarks</label>
                                    <div class="col-md-6  mb-3">
                                        <label for="example-text-input" class="col-md-4  col-form-label">{{$meeting->remarks}}</label>
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