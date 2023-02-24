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
                                    <a href="{{route('salary.salary_info_add')}}" class="btn btn-primary waves-effect waves-light">
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
                                                        $staffs = App\Models\Staff::where('status', 'Active')->get();
                                                        foreach ($staffs as $staff) {
                                                    ?>
                                                    <option value="<?php echo $staff->id ?>"><?php echo $staff->staff_name ?></option>
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
                        <?php if ($salary->count() > '0') { ?>

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
                                                <th scope="col">Action</th>
                                                <th scope="col">Modified Date</th>

                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                            <?php $i = ($salary->currentpage() - 1) * $salary->perpage() + 1; ?>
                                            @foreach($salary as $sal)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    <h5 class="font-size-15 mb-0">{{$sal['staff_code']}}</h5>
                                                </td>
                                                <td>
                                                    @if(!empty($sal['staff_name'])) {{$sal['staff_name']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                @if(!empty($sal['designation'])) {{$sal['designation']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                @if(!empty($sal['gross_salary'])) {{$sal['gross_salary']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-info btn-sm" href="" title="Edit">Edit</a>
                                                    <a type="button" class="btn btn-outline-success btn-sm" href="" title="View">View</a>
                                                    <a rel="tooltip" data-value="{{$salary['id']}}" href="" class="delete btn btn-outline-danger btn-sm" title="Delete">Delete</a>
                                                </td>
                                               
                                                <td>
                                                    {{$sal['updated_at']}}
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
                                        <p> Showing {{$salary->firstItem()}} to {{$salary->lastItem()}} of {{$salary->total()}} entries</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-inline-block float-end">
                                            {{$salary->links('layouts.pagination') }}
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