@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endsection

@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
          <div class="carousel-caption">
            <h2 class="display-4">{{ config('app.name', 'Laravel') }}</h2>
            <p class="lead d-none d-md-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia nesciunt, ipsa tempore molestiae, ex nobis sunt quam error commodi sint magnam cupiditate eius, minus illum reiciendis voluptatum expedita dolorum. Doloremque?</p>
            <br />
            <a href="#section-2">
                <button type="button" class="btn btn-outline-neutral btn-round">Tentang Kami</button>
            </a>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
          <div class="carousel-caption">
            <h2 class="display-4">{{ __('custom.current events') }}</h2>
            <p class="lead d-none d-md-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat vel ex, voluptas fugit quidem doloremque non dolor eligendi neque architecto quasi maxime inventore veniam, perferendis harum! Ratione fugit deserunt reiciendis.</p>
            <br />
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-outline-neutral btn-round"><i class="fa fa-play"></i>Lihat video</a>
            <a href="">
                <button type="button" class="btn btn-outline-neutral btn-round">Lihat Acara</button>
            </a>
          </div>
        </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">{{ __('previous') }}</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">{{ __('next') }}</span>
          </a>
    </div>
</header>
<div class="main">
    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">{{ __('custom.popular events') }}</h2>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <x-events size="4" name="Acara 1" img="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" target="#" attendees="98" :date="now()" />
                <x-events size="4" name="Acara 2" img="https://financesonline.com/uploads/2017/10/ev.jpg" target="#" attendees="36" :date="now()" />
                <x-events size="4" name="Acara 3" img="http://www.newsreader-project.eu/files/2012/12/events.jpg" target="#" attendees="38" :date="now()" />
            </div>
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto mt-5">
                    <a href="#paper-kit" class="btn btn-danger btn-round">{{ __('custom.more events') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-dark text-center" id="section-2">
        <div class="container">
            <h2 class="title">Telusuri Berdasarkan Kategori</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="#">
                        <div class="card bg-dark">
                            <img class="card-img opacity-2" src="https://www.apple.com/v/education/home/a/images/meta/teaching-tools/og.png?201806261223" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="text-white text-center-middle">Pendidikan</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card bg-dark">
                            <img class="card-img opacity-2" src="https://aie.edu.au/wp-content/uploads/2018/03/game-programming-03.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="text-white text-center-middle">Pemrograman</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card bg-dark">
                            <img class="card-img opacity-2" src="https://www.herbalsuite.com/wp-content/uploads/Medical-Treatment.jpg" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="text-white text-center-middle">Kesehatan</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card bg-dark">
                            <img class="card-img opacity-2" src="https://media.blogto.com/articles/201787-sifton-alt-lead.jpg?w=2048&cmd=resize_then_crop&height=1365&quality=70" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="text-white text-center-middle">Lingkungan</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center">Mitra Kami</h2>
                    <div class="row mt-5 mb-5">
                        <div class="col-md-6 ml-auto mr-auto">
                            <a href="http://stiki-indonesia.ac.id" target="_blank">
                                <img src="{{ asset('img/logo-stiki-png-2.png') }}" class="img-fluid" alt="logo stiki">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection