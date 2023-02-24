@extends('layouts.back')
@section('content')
<?php $requestdata = request(); ?>

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
                            <form id="basic-form" action="{{route('salary.salary_info_store')}}" method="post" enctype="multipart/form-data" id="salary">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-mb-6 row justify-content-center">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Staff Name<span style="color:red">*</span></label>
                                            <div class="col-md-3 mb-3">
                                                <select class="form-select" name="staff_name" id="staff_name" class="staff_name">
                                                    <option value="0" selected="true">Select Staff</option>
                                                    <?php
                                                    $staffs = App\Models\Staffs::all();
                                                    foreach ($staffs as $staff) {
                                                    ?>
                                                    <option value="{{ $staff->id }}" data-designation="{{ $staff->designation}}">{{$staff->name}}</option>
                                                    <?php }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-mb-6 row justify-content-center">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Staff Id</label>
                                            <div class="col-md-3  mb-5">
                                                <input class="form-control" type="text"  name="staff_id" id="staff_id" class="staff_id" value=""  disabled>
                                                @error('staff_id')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                           </div>
                                          
                                        </div>
                                        <div class="col-mb-6 row justify-content-center">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                                            <div class="col-md-3  mb-5" id="designation">
                                                <input class="form-control" type="text"  name="designation" id="designation" class="designation"  disabled>
                                                @error('designation')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                           </div>
                                           
                                        </div>
                                        <div class="col-mb-6 row justify-content-center">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Gross Salary<span style="color:red">*</span></label>
                                            <div class="col-md-3  mb-5">
                                                <input class="form-control" type="text" id="gross_sal" name="gross_salary">
                                                @error('gross_salary')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                           
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group mb-3 justify-content-center">
                                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                            </div>
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
<!-- JQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       $(document).on('change','.staff_name',function(){
        
        var id = $(this).children(':selected').data('id');
    console.log(id);
    
    $("#staff_id").val(id); 
    });
});
</script>


@endsections