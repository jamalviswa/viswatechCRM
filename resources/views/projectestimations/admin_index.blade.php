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
                        <h4 class="mb-sm-0">Project Estimation Management</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Project Estimation Info</li>
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
                                    <a href="{{route('projectestimations.admin_add')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-plus me-1"></i> Add New
                                    </a>
                                </div>
                            </div>

                            <!-- Search Option Start -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" method="GET" action="#">
                               
                                <div class="col-12">
                                    <div class="input-group">
                                    <label class="">Project Name</label>
                                </div>

                                <div class="col-12">
                                    <div class="input-group">
                                    <select class="form-select">
                                            <option>Select</option>
                                            <option>ViswaCRM</option>
                                            <option>Farm</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="search">Submit</button>

                                    <a type="submit" href="{{ route('projectestimations.admin_index') }}" class="btn btn-danger">Cancel</a>

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

                            <!-- Table Section Start -->

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead>
                                        <tr style="background-color: #252b3b;color: #fff;">
                                            <th scope="col" style="width: 60px;">#</th>
                                            <th scope="col">Project Name</th>
                                            <th scope="col">Total Estimation Hrs</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                <h5 class="font-size-15 mb-0">ViswaCRM</h5>
                                            </td>
                                            <td>
                                                500Hrs
                                            </td>



                                            <td>
                                                <a type="button" class="btn btn-outline-info btn-sm" href="" title="Edit">Edit</a>
                                                <a type="button" class="btn btn-outline-success btn-sm" href="" title="View">View</a>
                                                <a rel="tooltip" data-value="" href="" class="delete btn btn-outline-danger btn-sm" title="Delete">Delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Section End -->

                            <!-- Pagination Section Start -->
                            <div class="row">
                                <div class="card-title-desc">
                                </div>
                                <div class="col-lg-6">
                                    <p> Showing 1 to 10 of 10 entries</p>
                                </div>

                                <!-- Pagination Start -->
                                <div class="col-lg-6">
                                    <div class="d-inline-block float-end">
                                        <ul class="pagination pagination-rounded mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Pagination End -->

                            </div>
                            <!-- Pagination Section End -->


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