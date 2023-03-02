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
                        <h4 class="mb-sm-0">Add Salary Info Details</h4>
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
                                <div class="col-lg-12 mx-auto text-end">
                                    <a href="{{route('salary.salary_info_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <form id="basic-form" action="{{route('salary.salary_info_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="offset-md-3 col-xl-6 offset-md-3">
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Staff Name <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <select class="form-select" name="staff_name" id="staff_name">
                                                    <option value="0" selected="true">Select Staff</option>
                                                    <?php
                                                    $staffs = App\Models\Staff::where('status', 'Active')->get();
                                                    foreach ($staffs as $staff) {
                                                    ?>
                                                    <option  @if((old('staff_name')) && old('staff_name')==$staff['id']) selected @endif value="<?php echo $staff->id ?>"><?php echo $staff->staff_name ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row code" style="display:none;">
                                            <label class="col-md-3 col-form-label">Staff Id</label>
                                            <div class="col-md-9" id="code">
                                                <input class="form-control" type="text" autocomplete="off" name="code">
                                            </div>
                                        </div>   
                                        <div class="mb-3 row designation" style="display:none;">
                                            <label class="col-md-3 col-form-label">Designation</label>
                                            <div class="col-md-9" id="designation">
                                                <input class="form-control" type="text" autocomplete="off" name="designation">
                                            </div>
                                        </div>  
                                        <div class="mb-3 row doj" style="display:none;">
                                            <label class="col-md-3 col-form-label">Date of Joining</label>
                                            <div class="col-md-9" id="doj">
                                                <input class="form-control" type="text" name="doj">
                                            </div>
                                        </div>  
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Gross Salary<span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                            <input class="form-control" type="text" id="gross_sal" name="gross_salary" value="{{old('gross_salary')}}">
                                                @error('gross_salary')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>                                          
                                        <div class="mt-3 mx-auto">
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{route('salary.salary_info_index')}}" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end of row-->
                            </form>
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
<style>
div.col-mb-3 div.row .code{
    display: none;
}
div.col-mb-6 div.justify-content-center .designation{
    display: none;
}
div.col-mb-6 div.justify-content-center .doj{
    display: none;
}
</style>
@endsection