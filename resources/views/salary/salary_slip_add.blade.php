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
                        <h4 class="mb-sm-0">Add Salary Slip Details</h4>
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
                                    <a href="" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <form id="basic-form" action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="offset-md-1 col-xl-10 offset-md-1">
                                        <div class="mb-5 row">
                                            <div class="col-md-4">
                                                <select class="form-select" name="staff_names" id="staff_names">
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

                                            <div class="col-md-4">
                                                <select class="form-select" name="month" id="month">
                                                    <option value="">Select month</option>
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>

                                                </select>
                                            </div>
                                            <div class="col-md-4" id="year">
                                                <input class="form-control" type="text"  name="year" value="<?=date('Y', strtotime('last month')); ?>" >
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <div class="col-md-6">
                                                <h5 class="text-center mb-3">Staff Info</h5>
                                                <div class="mb-3 row">
                                                    <label class="col-md-4 col-form-label">Staff Name</label>
                                                    <div class="col-md-8" id="name">
                                                        <input class="form-control" type="text" autocomplete="off" name="staff_name" disabled>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Staff Code</label>
                                                    <div class="col-md-8" id="code">
                                                        <input class="form-control" type="text" autocomplete="off" name="staff_code" disabled>
                                                    </div>
                                                </div>  
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Designation</label>
                                                    <div class="col-md-8" id="designation">
                                                        <input class="form-control" type="text" autocomplete="off" name="designation" disabled>
                                                    </div>
                                                </div> 
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Date of Join</label>
                                                    <div class="col-md-8" id="doj">
                                                        <input class="form-control" type="text" autocomplete="off" name="date_of_join" disabled>
                                                    </div>
                                                </div>   
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Bank Name</label>
                                                    <div class="col-md-8" id="bank_name">
                                                        <input class="form-control" type="text" autocomplete="off" name="bank_name">
                                                    </div>
                                                </div>  
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Bank A/c No</label>
                                                    <div class="col-md-8" id="account_no">
                                                        <input class="form-control" type="text" autocomplete="off" name="account_no">
                                                    </div>
                                                </div>  
                                            </div>
                                        
                                            <div class="offset-md-1 col-md-5">
                                                <h5 class="text-center mb-3">Attendance Info</h5>
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">No.of.Days</label>
                                                    <div class="col-md-8" id="no_of_days">
                                                    <input class="form-control" type="text" autocomplete="off" name="no_of_days"  disabled>

                                                    </div>
                                                </div>  
                                                

                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Working Days</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off"  id="working_days" name="working_days">
                                                    </div>
                                                </div>  
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Lop Days</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off" name="lop_days" id="lop_days" disabled>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div><!-- end of first row-->


                                        <div class="mb-3 row">
                                            <div class="col-md-6">
                                                <h5 class="text-center mb-3">Earnings</h5>

                                                <div class="mb-3 row">
                                                    <label class="col-md-4 col-form-label">Basic</label>
                                                    <div class="col-md-8" id="basic">
                                                        <input class="form-control" type="text" autocomplete="off" name="basic_salary">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">HRA</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off" id="hra" name="hra">
                                                    </div>
                                                </div>  
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Bonus</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off" id="bonus" name="bonus">
                                                    </div>
                                                </div> 
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Bonus Reason</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off"  id="bonus_reason" name="bonus_reason">
                                                    </div>
                                                </div> 
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Gross Salary</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off" name="gross_salary"  id="total_salary" disabled>
                                                    </div>
                                                </div> 
                                                <div class="mb-5"></div>
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Net Pay</label>
                                                    <div class="col-md-8" id="net_pay">
                                                        <input class="form-control" type="text" autocomplete="off" name="net_pay" disabled>
                                                    </div>
                                                </div> 
                                            </div>  

                                            <div class="offset-md-1 col-md-5">
                                                <h5 class="text-center mb-3">Deduction</h5>
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">PF</label>
                                                    <div class="col-md-8" >
                                                        <input class="form-control" type="text" autocomplete="off" id="pf" name="pf">
                                                    </div>
                                                </div>  
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">ESI</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off"  id="esi"  name="esi">
                                                    </div>
                                                </div>  
                                               
                                                <div class="mb-3 row">    
                                                    <label class="col-md-4 col-form-label">Leave Deduction</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" autocomplete="off" name="leave_deduction" id="leave_deduction"  disabled>
                                                    </div>
                                                </div>  
                                                <div class="mb-5 row"> </br>
                                                <div class="mb-5 row"> </br>
                                                <div class="mb-5 row"> </br>
                                                

                                            </div>
                                                
                                        </div><!-- end of second row -->
                                                                 
                                        <div class="mt-3 mx-auto">
                                            <button type="submit" class="btn btn-outline-primary">Calculate</button>&nbsp;&nbsp;&nbsp;&nbsp;
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