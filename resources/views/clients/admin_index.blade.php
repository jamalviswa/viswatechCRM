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
                        <h4 class="mb-sm-0">Staff Management</h4>
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
                                    <a href="{{route('clients.admin_add')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-plus me-1"></i> Add New
                                    </a>
                                </div>
                            </div>

                            <!-- Search Option Start -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" method="GET" action="#">
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Client Name" name="s" autocomplete="off" @if(isset($_REQUEST['s'])) value="{{ $_REQUEST['s'] }}" @else value="" @endif>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="search">Submit</button>
                                    @if (isset($_REQUEST['search']))
                                    <a type="submit" href="{{ route('clients.admin_index') }}" class="btn btn-danger">Cancel</a>
                                    @endif
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
                            <?php if ($clients->count() > '0') { ?>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr style="background-color: #252b3b;color: #fff;">
                                                <th scope="col" style="width: 60px;">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Country</th>
                                                <th scope="col">State</th>
                                                <th scope="col">District</th>
                                                <th scope="col">Created Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = ($clients->currentpage() - 1) * $clients->perpage() + 1; ?>
                                            @foreach($clients as $client)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    <h5 class="font-size-15 mb-0">{{$client['name']}}</h5>
                                                </td>
                                                <td>
                                                    @if(!empty($client['email'])) {{$client['email']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($client['mobile'])) {{$client['mobile']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($client['country'])) {{$client['country']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                     @if(!empty($client['state'])) {{$client['state']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($client['district'])) {{$client['district']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    {{$client['created_at']}}
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-info btn-sm" href="{{ route('clients.admin_edit', $client['id']) }}" title="Edit">Edit</a>
                                                    <a type="button" class="btn btn-outline-success btn-sm" href="{{ route('clients.admin_view', $client['id']) }}" title="View">View</a>
                                                    <a rel="tooltip" data-value="{{$client['id']}}" href="{{ route('clients.admin_delete',$client['id']) }}" class="delete btn btn-outline-danger btn-sm" title="Delete">Delete</a>
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
                                        <p> Showing {{$clients->firstItem()}} to {{$clients->lastItem()}} of {{$clients->total()}} entries</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-inline-block float-end">
                                            {{ $clients->links('layouts.pagination') }}
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