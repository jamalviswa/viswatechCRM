@extends('layouts.login')
@section('content')

<!-- Login Section Start -->
<h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
<form class="form-horizontal" action="#">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-4">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter username">
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter password">
            </div>
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8">
                    <div class="text-sm-end mt-3 mt-md-0">
                        <a href="{{route('adminusers.forgot')}}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                    </div>
                </div>
            </div>
            <div class="d-grid mt-4">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>
    </div>
</form>
<!-- Login Section End -->

@endsection