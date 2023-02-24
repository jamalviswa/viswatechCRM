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

            <!-- Content Start Here -->
            <div class="row">
                <div class="offset-md-3 col-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row card-title-desc">
                                <div class="col-lg-12 mx-auto text-end">
                                    <a href="{{route('clients.meeting_index')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-arrow-left-line align-middle me-1"></i> Back
                                    </a>
                                </div>
                            </div>
                            <h6 class="mb-0 text-uppercase">Edit Client Meeting Schedule Details</h6>
                            <hr>
                            <form action="{{ route('clients.meeting_update',$meeting['id']) }}" method="post">
                            @csrf
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Client Name<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control"  name="client_name" value="{{$meeting->client_name}}">
                                        @error('client_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Mobile Number<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" name="mobile_number" value="{{$meeting->mobile_no}}">
                                        @error('mobile_number')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                   
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Location<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" name="location" value="{{$meeting->location}}">
                                        @error('location')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Business Name<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" name="business_name" value="{{$meeting->business_name}}">
                                        @error('business_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Business Description<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" name="business_description" value="{{$meeting->business_desc}}">
                                        @error('business_description')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Date<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <div class="input-group" id="datepicker1">
                                            <input type="text" class="form-control" name="date" data-date-container='#datepicker1' data-provide="datepicker" data-date-autoclose="true" value="{{$meeting->date}}">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                        @error('date')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Time<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <div class="input-group" id="timepicker1">
                                            <input type="text" class="form-control" name="time" data-date-container='#timepicker1' data-provide="timepicker" value="{{$meeting->time}}">
                                            <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                        </div>
                                        @error('time')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Purpose<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-3">
                                        <input type="text" class="form-control" name="purpose" value="{{$meeting->purpose}}">
                                        @error('purpose')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 row">
                                    <label class="col-md-4 col-form-label">Remarks<span style="color:red">*</span></label>
                                    <div class="col-md-8 mb-5">
                                        <textarea rows="5" class="form-control" name="remarks">{{$meeting->remarks}}</textarea>
                                        @error('remarks')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    
                                </div>
                                
                                <div class="offset-md-6 col-12  text-center">
                                    <div class="input-group mb-3">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="cancel" class="btn btn-outline-primary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- end card body -->
                    </div> <!-- end card -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End main Content here -->
<!-- ============================================================== -->

@endsection
