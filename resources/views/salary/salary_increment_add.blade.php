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
                        <h4 class="mb-sm-0">Add Salary Increment Details</h4>
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
                                    <a href="{{route('salary.salary_increment_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <form id="basic-form" action="{{route('salary.salary_increment_store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="offset-md-3 col-xl-6 offset-md-3">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4  col-form-label">Staff Name<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <select class="form-select" name="staff" id="staff">
                                                    <option value="0" selected="true">Select Staff</option>
                                                    <?php
                                                    $salary = App\Models\SalaryInfo::where('status', 'Active')->get();
                                                    foreach ($salary as $sal) {
                                                    ?>
                                                        <option @if((old('staff_name')) && old('staff_name')==$sal['id']) selected @endif value="<?php echo $sal->id ?>"><?php echo $sal->staff_name ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row code" style="display:none;">
                                            <label class="col-md-4 col-form-label">Staff Id</label>
                                            <div class="col-md-8" id="staff_code">
                                                <input class="form-control" type="text" autocomplete="off" name="staff_code">
                                            </div>
                                        </div>
                                        <div class="mb-3 row designation" style="display:none;">
                                            <label class="col-md-4 col-form-label">Designation</label>
                                            <div class="col-md-8" id="staff_designation">
                                                <input class="form-control" type="text" autocomplete="off" name="staff_designation">
                                            </div>
                                        </div>
                                        <div class="mb-3 row gross_salary" style="display:none;">
                                            <label class="col-md-4 col-form-label">Gross Salary</label>
                                            <div class="col-md-8" id="gross_salary">
                                                <input class="form-control" type="text" autocomplete="off"  name="gross_salary">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-form-label">Increment Amount<span style="color:red">*</span></label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" id="increment_amount" name="increment_amount">
                                                @error('increment_amount')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-form-label">Net Salary</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" id="final_salary" name="net_salary" disabled>
                                                @error('net_salary')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-3 mx-auto">
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
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
    div.col-mb-6 div.row .code {
        display: none;
    }

    div.col-mb-6 div.row .designation {
        display: none;
    }

    div.col-mb-6 div.row .gross_salary {
        display: none;
    }
</style>

@endsection