@extends('layouts.layout')

@section('content')
    <div class="page-header" style="background-image: url({{ asset('img/login-image.jpg') }});">
        <div class="filter"></div>
        <div class="container text-center-middle mt-5">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="card card-register mx-auto">
                        <h3 class="title mx-auto">{{ __('custom.login') }}</h3>
                        <form class="register-form">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                            <button class="btn btn-danger btn-block btn-round">{{ __('custom.login') }}</button>
                        </form>
                        <div class="forgot">
                            <a href="#" class="btn btn-link btn-danger">{{ __('custom.forgot') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer register-footer text-center">
        <h6>©
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
    </div>
@endsection