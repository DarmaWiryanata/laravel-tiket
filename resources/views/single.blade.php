@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main">
        <x-header title=" " :img="asset('img/antoine-barres.jpg')" />
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img src="{{ asset('img/antoine-barres.jpg') }}" class="img-fluid" alt="cover">
                    </div>
                    <div class="col-lg-6 col-md-12 text-left">
                        <h2 class="title mt-lg-0">Acara 1</h2>
                        <a href="#">
                            <p class="btn btn-outline-danger btn-round">Teknologi</p>
                        </a>
                        <h4 class="mt-5">
                            <strong>{{ __('custom.free') }}</strong>
                        </h4>
                        <div class="text-danger mt-3 mb-3"><i class="fas fa-users"></i> 98</div>
                        <div class="btn btn-danger btn-round w-100"><i class="far fa-hand-point-up"></i> Beli</div>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <h2 class="title text-center">{{ __('custom.event detail') }}</h2>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h6><i class="fas fa-user-circle"></i> {{ __('custom.organizer') }}</h6>
                        <p>STMIK STIKOM Indonesia</p>
                        <br>
                        <br>
                        <h6><i class="fas fa-clipboard-list"></i> {{ __('custom.detail') }}</h6>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo cumque tenetur nesciunt fugiat, placeat amet quas deserunt impedit nemo expedita voluptatibus cupiditate asperiores laudantium accusantium quam labore excepturi? Doloremque, reprehenderit!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo cumque tenetur nesciunt fugiat, placeat amet quas deserunt impedit nemo expedita voluptatibus cupiditate asperiores laudantium accusantium quam labore excepturi? Doloremque, reprehenderit!</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo cumque tenetur nesciunt fugiat, placeat amet quas deserunt impedit nemo expedita voluptatibus cupiditate asperiores laudantium accusantium quam labore excepturi? Doloremque, reprehenderit!</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h6><i class="fas fa-hourglass-end"></i> {{ __('custom.deadline') }}</h6>
                        <p>1 Januari 2021</p>
                        <br>
                        <br>
                        <h6><i class="far fa-clock"></i> {{ __('custom.execution') }}</h6>
                        <p>2 Januari 2021</p>
                        <br>
                        <br>
                        <h6><i class="fas fa-map-marker-alt"></i> {{ __('custom.location') }}</h6>
                        <p>Microsoft Teams Meet</p>
                        <br>
                        <br>
                        <h6><i class="fas fa-phone"></i> {{ __('custom.contact person') }}</h6>
                        <p>Siti Badriah</p>
                        <p><i class="fab fa-whatsapp"></i> WhatsApp - 0812 3456 7890</p>
                        <p><i class="fab fa-line"></i> LINE - username</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection