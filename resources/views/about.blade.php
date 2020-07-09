@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main">
        <x-header title="{{ __('custom.about') }}" img="https://source.unsplash.com/RCAhiGJsUUE/1920x1080" />
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">{{ __('custom.about us') }}</h2>
                        <p class="description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, quam dolores? Quidem obcaecati a natus mollitia, iusto minus doloremque quae quis laboriosam, omnis nihil. Est ut explicabo necessitatibus voluptatum eveniet?
                        </p>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <x-about title="{{ __('custom.contact') }}">
                        <strong>STMIK STIKOM Indonesia</strong>
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Tukad Pakerisan No.97, Panjer, Kec. Denpasar Sel., Kota Denpasar, Bali 80225</p>
                        <p><i class="fas fa-phone"></i> 0361 - 256 995 (Hunting)</p>
                        <p><i class="fas fa-fax"></i> 0361 - 246 875</p>
                        <p><i class="fas fa-clock"></i> <strong>Senin-Sabtu</strong> 07.00–22.00 WITA</p>
                    </x-about>
                    <x-about title="{{ __('custom.location') }}">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul id="tabs" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#google-maps" role="tab">Google Maps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#waze" role="tab">Waze</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="my-tab-content" class="tab-content text-center">
                            <div class="tab-pane active" id="google-maps" role="tabpanel">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.008322333513!2d115.22378221478421!3d-8.690757293755949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2410295f63107%3A0x73208e650f3ba0c9!2sSekolah%20Tinggi%20Ilmu%20Komputer%20Indonesia!5e0!3m2!1sid!2sid!4v1594310544932!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            <div class="tab-pane" id="waze" role="tabpanel">
                                <iframe src="https://embed.waze.com/iframe?zoom=16&lat=-8.690784&lon=115.226148&ct=livemap" allowfullscreen></iframe>
                            </div>
                        </div>
                    </x-about>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection