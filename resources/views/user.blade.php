@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main">
        <x-header title="{{ __('custom.user panel') }}" img="https://source.unsplash.com/RCAhiGJsUUE/1920x1080" />
        <div class="section profile-content">
            <div class="container">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#account" role="tab">{{ __('custom.account') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#ticket" role="tab">{{ __('custom.ticket') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#billing" role="tab">{{ __('custom.billing') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content following">
                    <div class="tab-pane active" id="account" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h3>{{ __('custom.change profile') }}</h3>
                                    <br>
                                </div>
                                <label>{{ __('custom.name') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="{{ __('custom.placeholder name') }}" value="Leonardo DiCaprio">
                                </div>
                                <br>
                                <label>{{ __('custom.phone') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </div>
                                    <input type="tel" class="form-control" name="phone" pattern="[0-9]{15}" placeholder="{{ __('custom.placeholder phone') }}">
                                </div>
                                <br>
                                <label>{{ __('custom.birthday') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input type="date" class="form-control" name="birthday" placeholder="{{ __('custom.placeholder birthday') }}">
                                </div>
                                <br>
                                <button type="button" class="btn btn-outline-danger btn-round">{{ __('custom.change profile') }}</button>
                            </div>
                            <div class="col-md-6">
                                <div class="title">
                                    <h3>{{ __('custom.change password') }}</h3>
                                    <br>
                                </div>
                                <label>{{ __('custom.new password') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-unlock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password" placeholder="{{ __('custom.placeholder new password') }}" required autocomplete="new-password">
                                </div>
                                <br>
                                <label>{{ __('custom.confirm password') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('custom.placeholder confirm password') }}" required autocomplete="new-password">
                                </div>
                                <br>
                                <button type="button" class="btn btn-outline-danger btn-round">{{ __('custom.change password') }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center" id="ticket" role="tabpanel">
                        <h1 style="font-size: 100"><i class="far fa-sad-cry"></i></h1>
                        <h3 class="text-muted">{{ __('custom.no ticket') }}</h3>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="card text-left">
                                    <div class="card-header">
                                      Acara 1
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('custom.free') }}</h5>
                                        <p class="card-text">{{ __('custom.expired') }}:<span class="ml-2">30 November 2020</span></p>
                                        <a href="#" class="btn btn-primary">{{ __('detail') }}</a><a href="#" class="btn btn-danger ml-2">{{ __('custom.print') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="tab-pane text-center" id="billing" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-left">
                                    <div class="card-header">
                                      Acara 2
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Rp. 20.000</h5>
                                        <p class="card-text">{{ __('custom.expired') }}:<span class="ml-2">30 November 2020</span></p>
                                        <a href="#" class="btn btn-primary">{{ __('detail') }}</a><a href="#" class="btn btn-danger ml-2">{{ __('custom.pay now') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
@endsection