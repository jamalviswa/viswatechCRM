@extends('layouts.errorsdesign')
@section('content')

<!-- error page content -->
<div class="w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <div>
                        <img src="{{URL::to('images/500.png')}}" alt="500">
                    </div>
                    <div>
                        <h4 class="text-uppercase mt-4">Internal Server Error</h4>
                        <p>The server has been deserted for a while. Please be patient or by try again later.</p>
                        <div class="mt-4">
                            <a href="http://viswatechnologysolutions.com/" class="btn btn-primary"><i class="ri-arrow-left-line align-bottom mr-2"></i>Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- error auth page content -->

@endsection