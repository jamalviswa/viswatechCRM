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
                        <h4 class="mb-sm-0">Add Staff Management</h4>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row card-title-desc">
                                <div class="col-lg-12 mx-auto text-end">
                                    <a href="{{route('clients.admin_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 offset-xl-3">
                                    <form id="basic-form" action="{{ route('clients.admin_store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Name</label><span style="color:red;font-weight:bold;">*</span>
                                            <input type="text" name="name" autocomplete="off" value="{{old('name')}}" class="form-control" />
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">E-Mail</label>
                                            <input type="text" name="email" autocomplete="off" value="{{old('email')}}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="text" name="mobile" autocomplete="off" value="{{old('mobile')}}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <input type="text" name="country" autocomplete="off" value="{{old('country')}}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" name="state" autocomplete="off" value="{{old('state')}}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">District</label>
                                            <input type="text" name="district" autocomplete="off" value="{{old('district')}}" class="form-control" />
                                        </div>
                                        <div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Add
                                                </button>
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