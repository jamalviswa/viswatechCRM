@extends('layouts.login')
@section('content')

<!-- Forgot PWD Section Start -->
<h4 class="font-size-18 text-muted mt-2 text-center">Reset Password</h4>
<form class="form-horizontal" action="#">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Enter your <b>Email</b> and instructions will be sent to you!
            </div>
            <div class="mt-4">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter email">
            </div>
            <div class="d-grid mt-4">
                <button class="btn btn-primary waves-effect waves-light" type="submit">Send Email</button>
            </div>
            <div class="row">
                <div class="col">
                </div>
                <div class="col-8">
                    <div class="txt-center mt-3">
                        <a href="{{route('adminusers.login')}}" class="text-muted"><i class="mdi mdi-lock"></i> Back To Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Forgot PWD Section End -->

@endsection