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
                        <h4 class="mb-sm-0">Salary Management</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Salary Management</li>
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
                                    <h4 class="mb-sm-0">Add Salary Info Details</h4>
                                </div>
                                <div class="col-lg-6 mx-auto text-end">
                                    <a href="{{route('salaryinfos.index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 offset-xl-3">
                                    <form id="basic-form" action="{{ route('salaryinfos.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Staff Name<span style="color:red;font-weight:bold;">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-select" name="staff_name" id="staff">
                                                    <option value="">Select Staff</option>
                                                    <?php
                                                    $staffs = App\Models\Staff::where('status', 'Active')->get();
                                                    foreach ($staffs as $staff) {
                                                    ?>
                                                        <option @if((old('staff_name')) && old('staff_name')==$staff['id']) selected @endif value="<?php echo $staff->id ?>"><?php echo $staff->staff_name ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                                @error('staff_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row code hide">
                                            <label class="col-md-3 col-form-label">Staff Code</label>
                                            <div class="col-md-9" id="codes">
                                                <input type="text" disabled class="form-control" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row designation hide">
                                            <label class="col-md-3 col-form-label">Designation</label>
                                            <div class="col-md-9" id="designation">
                                                <input type="text" disabled class="form-control" />
                                            </div>
                                        </div>
                                        <div class="mb-3 row mobile hide">
                                            <label class="col-md-3 col-form-label">Mobile Number</label>
                                            <div class="col-md-9" id="mobile">
                                                <input type="text" disabled class="form-control" value="{{old('mobile_number')}}"/>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Gross Salary<span style="color:red;font-weight:bold;">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <div class="input-group-text">&#x20b9;</div>
                                                    <input type="text" name="gross_salary" autocomplete="off" value="{{old('gross_salary')}}" class="form-control" />
                                                </div>
                                                @error('gross_salary')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Submit
                                                </button>
                                                <a href="{{route('salaryinfos.index')}}" class="btn btn-danger waves-effect waves-light me-1">
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