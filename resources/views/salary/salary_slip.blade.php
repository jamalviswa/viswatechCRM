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
                        <h4 class="mb-sm-0">View Salary Slip Details</h4>
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
                                    <a href="{{route('salary.salary_slip_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <form>
                                <div class="mb-3 row">
                                    <div class="col-md-5 text-center" style="margin-left: 5px;">
                                        <img src="{{URL::to('images/logo.png')}}" alt="logo-lg-light" height="90">
                                    </div>
                                    <div class="col-md-6 text-end" style="margin-right: 5px;">
                                        <h4>
                                            Viswa Technology Solutions<br>
                                            101 A K Nagar, Narayana Guru Road,<br>
                                            Saibaba colony, Coimbatore -641011<br>
                                            viswa.technologysolution@gmail.com<br>
                                            +91 78679 97754
                                        </h4>
                                    </div>
                                </div> 
                                <hr style="color:black"> 
                                <div class="col-md-12 text-center">
                                    <i><h3 style="text-transform:uppercase;color:0ca99d;font-weight:bold">Salary Slip</h3></i>
                                </div>
                                <div class="col-md-12 text-center">
                                    <i><h3 style="text-transform:uppercase;color:0ca99d;font-weight:bold">For Month of January , 2023</h3></i>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-lg-6" >
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 mt-2" style="border-color:black">
                                                <tbody>
                                                    <tr><td colspan="2" class="text-center"><h5>Staff Info</h5></td></tr>
                                                    <tr>
                                                        <td width="100">Staff Name</td>
                                                        <td width="100">R.Divya</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Staff Code</td>
                                                        <td width="100">VTS003</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Designation</td>
                                                        <td width="100">Web Developer</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Date of Join</td>
                                                        <td width="100">29-11-2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Bank Name</td>
                                                        <td width="100">HDFC</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Bank A/c No</td>
                                                        <td width="100">50100591810083</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" >
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 mt-2" style="border-color:black">
                                                <tbody>
                                                    <tr><td colspan="2" class="text-center"><h5>Attendance Info</h5></td></tr>
                                                    <tr>
                                                        <td width="100">No.of.Days</td>
                                                        <td width="100">28</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Working Days</td>
                                                        <td width="100">27</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">LOP Days</td>
                                                        <td width="100">1</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--First Row End  -->


                                <div class="mb-3 row">
                                    <div class="col-lg-6" >
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 mt-2" style="border-color:black">
                                                <tbody>
                                                    <tr><td colspan="2" class="text-center"><h5>Earnings</h5></td></tr>
                                                    <tr>
                                                        <td width="100">Basic</td>
                                                        <td width="100">18,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">HRA</td>
                                                        <td width="100">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Bonus</td>
                                                        <td width="100">300</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Bonus Reason</td>
                                                        <td width="100">OT</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Gross Salary</td>
                                                        <td width="100">18000</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" >
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0 mt-2" style="border-color:black">
                                                <tbody>
                                                    <tr><td colspan="2" class="text-center"><h5>Deductions</h5></td></tr>
                                                    <tr>
                                                        <td width="100">PF</td>
                                                        <td width="100">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">ESI</td>
                                                        <td width="100">0</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="100">Leave Deductions</td>
                                                        <td width="100">0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!--Second Row End  -->
                                <div class="mb-3 row">
                                    <h4 class="text-end" style="text-transform:uppercase;color:0ca99d;font-weight:bold">Net Salary : 18,300</h4>
                                </div>
                                <div class="mb-3 row">
                                    <i style="font-family:Merriweather,serif;"><h4 class="text-end" style="text-transform:uppercase;color:0ca99d;font-weight:bold">( EIGHTEEN THOUSAND THREE HUNDRED RUPEES ONLY ) </h4></em>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>