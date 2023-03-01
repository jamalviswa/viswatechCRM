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
                        <h4 class="mb-sm-0">Edit Staff Management</h4>
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
                                    <a href="{{route('staffs.staff_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <form action="{{route('staffs.staff_update',$staffs['id'])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="offset-md-3 col-xl-6 offset-md-3">                                        
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Staff Name <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="staff_name" value="{{$staffs['staff_name']}}">
                                                @error('staff_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">User Name <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="username" value="{{$staffs['username']}}" autocomplete="off"  onfocus="this.removeAttribute('readonly');">
                                                @error('user_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Mobile Number <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group" id="datepicker1">
                                                    <input type="text" class="form-control" name="mobile_number" value="{{$staffs['mobile_number']}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10">
                                                    <span class="input-group-text"><i class="mdi mdi-phone"></i></span>
                                                </div>
                                                @error('mobile_number')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">E-Mail <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" value="{{$staffs['email']}}">
                                                    <span class="input-group-text"><i class="mdi mdi-email-open-outline"></i></span>
                                                </div>
                                                @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Designation <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="designation" value="{{$staffs['designation']}}">
                                                @error('designation')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Date of Birth <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group" id="datepicker1">
                                                    <input type="text" class="form-control" name="date_of_birth" value="{{$staffs['date_of_birth']}}" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                                @error('date_of_birth')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Date of Joining <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group" id="datepicker1">
                                                    <input type="text" class="form-control" name="date_of_joining" value="{{$staffs['date_of_joining']}}" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                                @error('date_of_joining')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Address</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="5" name="address">{{$staffs['address']}}</textarea>
                                            </div>
                                            @error('address')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Blood Group</label>
                                            <?php 
                                                $arr = explode(' ',trim($staffs['blood_group']));
                                                $ans = $arr[0];
                                            ?>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="blood_group" value=<?php echo $ans ?>>
                                                    <span class="input-group-text"><i class="mdi mdi-water"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-center" style="margin-top:7px">
                                                <div class="form-check mb-2">
                                                    <?php 
                                                    $arr = explode(' ',trim($staffs['blood_group']));
                                                    $ans = $arr[1];
                                                    ?>
                                                    <input class="form-check-input" {!! ($ans == "Positive" ) ? "checked" : "" !!} type="radio" name="blood_group_type[]"  id="Positive" value="Positive" maxlength="4">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                    Positive
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 text-end"style="margin-top:7px">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="blood_group_type[]"  id="Negative" value="Negative" {!! ($ans == "Negative" ) ? "checked" : "" !!} maxlength="4">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                    Negative
                                                    </label>
                                                </div>
                                            </div>
                                                @error('blood_group_type')
                                                <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                            
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-md-3 col-form-label">Profile <span style="color:red">*</span></label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="file" id="profile" name="profile">
                                                @if(!empty($staffs['profile']))
                                                <a href="{{URL::to('images/staffs/'.$staffs['profile'].'')}}" target="_blank"><img src="{{URL::to('images/staffs/'.$staffs['profile'].'')}}"  width="150" height="150" alt="staffs" />
                                                </a>
                                                @endif
                                            </div>
                                            @error('profile')
                                                    <div class="text text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        
                                        <div class="mt-3 mx-auto">
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{route('staffs.staff_index')}}" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End main Content here -->
        <!-- ============================================================== -->

        @endsection