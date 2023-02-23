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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row card-title-desc">
                                <div class="col-lg-6 page-title-box">
                                    <h4 class="mb-sm-0">View Client Details</h4>
                                </div>
                                <div class="col-lg-6 mx-auto text-end">
                                    <a href="{{route('clients.admin_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 offset-xl-2">
                                 

                                        <div class="mb-3 row">
                                            <label class="col-md-3">Client Name</label>
                                            <div class="col-md-9">
                                              {{$client->name}}
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3">E-Mail ID</label>
                                            <div class="col-md-9">
                                            @if(!empty($client['email'])) {{$client['email']}} @else {{"-"}} @endif
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3">Mobile Number</label>
                                            <div class="col-md-9">
                                            @if(!empty($client['mobile'])) {{$client['mobile']}} @else {{"-"}} @endif
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3">Country</label>
                                            <div class="col-md-9">
                                            @if(!empty($client['country'])) {{$client['country']}} @else {{"-"}} @endif
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3">State</label>
                                            <div class="col-md-9">
                                            @if(!empty($client['state'])) {{$client['state']}} @else {{"-"}} @endif
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3">District</label>
                                            <div class="col-md-9">
                                            @if(!empty($client['district'])) {{$client['district']}} @else {{"-"}} @endif
                                            </div>
                                        </div>

                                      
                                        
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End main Content here -->
<!-- ============================================================== -->

@endsection