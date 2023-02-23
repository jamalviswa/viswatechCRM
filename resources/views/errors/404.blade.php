@extends('layouts.errorsdesign')
@section('content')

<!-- error page content -->
<div class="w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <div>
                        <img src="{{URL::to('images/404.png')}}" alt="404">
                    </div>
                    <div>
                        <h4 class="text-uppercase mt-4">Sorry, page not found</h4>
                        <p>The Web address you entered is not a functioning page on our site.</p>
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