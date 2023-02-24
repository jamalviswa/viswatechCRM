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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row card-title-desc">
                                <div class="col-lg-12 mx-auto text-end">
                                    <a href="{{route('clients.meeting_add')}}" class="btn btn-primary waves-effect waves-light">
                                        <i class="mdi mdi-plus me-1"></i> Add New
                                    </a>
                                </div>
                            </div>

                            <!-- Search Option Start -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" method="GET" action="#">
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Client Name" name="search_text" autocomplete="off" @if(isset($_REQUEST['search_text'])) value="{{ $_REQUEST['search_text'] }}" @else value="" @endif>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="search">Submit</button>
                                    @if (isset($_REQUEST['search']))
                                    <a type="submit" href="{{ route('clients.meeting_index') }}" class="btn btn-danger">Cancel</a>
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
                        <?php if($meetings->count()>0){?>

                            <!-- Table Section Start -->
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr style="background-color: #252b3b;color: #fff;">
                                                <th scope="col" style="width: 60px;">#</th>
                                                <th scope="col">Client Name</th>
                                                <th scope="col">Mobile Number</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Business Name</th>
                                                <th scope="col">Business Description</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Purpose</th>
                                                <th scope="col">Remarks</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = ($meetings->currentpage() - 1) * $meetings->perpage() + 1; ?>
                                            @foreach($meetings as $meeting)
                                            <tr>
                                                <td>
                                                    {{ $i }}
                                                </td>
                                                <td>
                                                    <h5 class="font-size-15 mb-0">{{$meeting['client_name']}}</h5>
                                                </td>
                                                <td>
                                                    @if(!empty($meeting['mobile_no'])) {{$meeting['mobile_no']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($meeting['location'])) {{$meeting['location']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($meeting['business_name'])) {{$meeting['business_name']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($meeting['business_desc'])) {{$meeting['business_desc']}} @else {{"-"}} @endif
                                                </td>
                                                <td>  
                                                    @if(!empty($meeting['date'])) {{$meeting['date']}} @else {{"-"}} @endif
                                                </td>
                                                <td>  
                                                    @if(!empty($meeting['time'])) {{$meeting['time']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    @if(!empty($meeting['purpose'])) {{$meeting['purpose']}} @else {{"-"}} @endif
                                                </td>
                                                <td>  
                                                    @if(!empty($meeting['remarks'])) {{$meeting['remarks']}} @else {{"-"}} @endif
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-info btn-sm" href="{{ route('clients.meeting_edit', $meeting['id']) }}" title="Edit">Edit</a>
                                                    <a type="button" class="btn btn-outline-success btn-sm" href="{{ route('clients.meeting_view',$meeting['id']) }}" title="View">View</a>
                                                    <a rel="tooltip" data-value="{{$meeting['id']}}" href="{{ route('clients.meeting_delete',$meeting['id']) }}" class="delete btn btn-outline-danger btn-sm" title="Delete">Delete</a>
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
                                        <p> Showing {{$meetings->firstItem()}} to {{$meetings->lastItem()}} of {{$meetings->total()}} entries</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-inline-block float-end">
                                            {{ $meetings->links('layouts.pagination') }}
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