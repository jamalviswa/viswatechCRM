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
                        <h4 class="mb-sm-0">View Salary Increment Details</h4>
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
                            <form id="basic-form" action="" method="post" enctype="multipart/form-data">
                                @csrf                           

                                <div class="row">
                                    <div class="offset-md-3 col-xl-6 offset-md-3">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-4  col-form-label">Staff Name</label>
                                            <div class="col-md-8">
                                                <label for="example-text-input" class="col-md-3  col-form-label">{{$increment->staff_name}}</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-4  col-form-label">Staff ID</label>
                                            <div class="col-md-8">
                                                <label for="example-text-input" class="col-md-3  col-form-label">{{$increment->staff_code}}</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-4  col-form-label">Designation</label>
                                            <div class="col-md-8">
                                                <label for="example-text-input" class="col-md-4  col-form-label">{{$increment->designation}}</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-form-label">Gross Salary</label>
                                            <div class="col-md-8" id="doj">
                                                <label for="example-text-input" class="col-md-3  col-form-label">{{$increment->gross_salary}}</label>
                                            </div>
                                        </div>                                          
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-form-label">Increment Amount</label>
                                            <div class="col-md-8" id="doj">
                                                <label for="example-text-input" class="col-md-3  col-form-label">{{$increment->increment_amount}}</label>
                                            </div>
                                        </div>  
                                        <div class="mb-3 row">
                                            <label class="col-md-4 col-form-label">Net Salary</label>
                                            <div class="col-md-8" id="doj">
                                                <label for="example-text-input" class="col-md-3  col-form-label">{{$increment->net_salary}}</label>
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

@endsection