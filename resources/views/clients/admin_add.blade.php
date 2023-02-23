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
                                    <h4 class="mb-sm-0">Add Client Details</h4>
                                </div>
                                <div class="col-lg-6 mx-auto text-end">
                                    <a href="{{route('clients.admin_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 offset-xl-2">
                                    <form id="basic-form" action="{{ route('clients.admin_store') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Client Name<span style="color:red;font-weight:bold;">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" autocomplete="off" value="{{old('name')}}" class="form-control" />
                                                @error('name')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">E-Mail ID</label>
                                            <div class="col-md-9">
                                                <input type="text" name="email" autocomplete="off" value="{{old('email')}}" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Mobile Number</label>
                                            <div class="col-md-9">
                                                <input type="text" name="mobile" autocomplete="off" value="{{old('mobile')}}" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Country</label>
                                            <div class="col-md-9">
                                                <input type="text" name="country" autocomplete="off" value="{{old('country')}}" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">State</label>
                                            <div class="col-md-9">
                                                <input type="text" name="state" autocomplete="off" value="{{old('state')}}" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">District</label>
                                            <div class="col-md-9">
                                                <input type="text" name="district" autocomplete="off" value="{{old('district')}}" class="form-control" />
                                            </div>
                                        </div>

                                        <div>
                                            <div class="mt-3 text-end">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="{{route('clients.admin_index')}}" class="btn btn-danger waves-effect waves-light me-1">
                                                    Cancel
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </form>
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