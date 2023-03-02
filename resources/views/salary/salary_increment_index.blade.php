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
                                <div class="col-lg-12 mx-auto text-end">
                                    <a href="{{route('salary.salary_increment_add')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-plus me-1"></i> Add New
                                    </a>
                                </div>
                            </div>

                            <!-- Search Option Start -->
                            <form class="row row-cols-lg-auto g-3 align-items-center">
                                <div class="col-12">
                                    <div class="input-group" id="datepicker1">
                                        <label class="col-form-label px-2">From Date</label>
                                        <input type="text" class="form-control" data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group" id="datepicker1">
                                        <label class="col-form-label px-2">To Date</label>
                                        <input type="text" class="form-control" data-date-format="dd M, yyyy" data-date-container='#datepicker1' data-provide="datepicker">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <label class="col-form-label p-2">Staff Name</label>
                                        <select class="form-select" name="staff_name">
                                            <option selected>Select Staff</option>
                                            <?php

                                            $staffs = App\Models\Staff::where('status', 'Active')->orderby('id', 'asc')->get();
                                            foreach ($staffs as $staff) {
                                            ?>
                                                <option @if(isset($_REQUEST['staff_name']) && $_REQUEST['staff_name']==$staff['staff_name']) selected @endif value="{{ $staff['staff_name'] }}">{{ $staff['staff_name'] }}</option>
                                            <?php }
                                            ?>

                                        </select>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                            <!-- Search Option End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if ($increments->count() > '0') { ?>

                                <!-- Table Section Start -->
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead style="text-align:center">
                                            <tr style="background-color: #252b3b;color: #fff;">
                                                <th scope="col" style="width: 60px;">#</th>
                                                <th scope="col">Staff ID</th>
                                                <th scope="col">Staff Name</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Gross Salary(Rs)</th>
                                                <th scope="col">Increment Amount(Rs)</th>
                                                <th scope="col">Net Salary(Rs)</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                            <?php $i = ($increments->currentpage() - 1) * $increments->perpage() + 1; ?>
                                            @foreach($increments as $increment)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    <h5 class="font-size-15 mb-0">{{$increment['staff_code']}}</h5>
                                                </td>
                                                <td>
                                                    @if(!empty($increment['staff_name'])) {{$increment['staff_name']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($increment['designation'])) {{$increment['designation']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($increment['gross_salary'])) {{$increment['gross_salary']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($increment['increment_amount'])) {{$increment['increment_amount']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($increment['net_salary'])) {{$increment['net_salary']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-info btn-sm"  href="{{ route('salary.salary_increment_edit', $increment['id']) }}" title="Edit">Edit</a>
                                                    <a type="button" class="btn btn-outline-success btn-sm" title="View"  href="{{ route('salary.salary_increment_view',$increment['id']) }}">View</a>
                                                    <a rel="tooltip" data-value="{{$increment['id']}}" href="{{ route('salary.salary_increment_delete', $increment['id']) }}" class="delete btn btn-outline-danger btn-sm" title="Delete">Delete</a>
                                                </td>

                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table Section End -->
                                <!-- Pagination Section Start -->
                                <div class="row">
                                    <div class="card-title-desc">
                                    </div>
                                    <div class="col-lg-6">
                                        <p> Showing {{$increments->firstItem()}} to {{$increments->lastItem()}} of {{$increments->total()}} entries</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-inline-block float-end">
                                            {{$increments->links('layouts.pagination') }}
                                        </div>
                                    </div>
                                </div>
                                <!-- Pagination Section End -->

                            <?php } else { ?>
                                <div class="text-center">
                                    <img src="{{URL::to('images/no-record.png')}}">
                                </div>
                            <?php } ?>

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