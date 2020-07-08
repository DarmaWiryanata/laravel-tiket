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
            <h2 class="display-4">Tiket</h2>
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
            <h2 class="display-4">Acara Terkini</h2>
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
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</header>
<div class="main">
    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Acara Terpopuler</h2>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <img src="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                        <div class="description">
                            <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 1</a></h4>
                            <br />
                            <div class="text-danger mb-3"><i class="fas fa-users"></i> 98</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="https://financesonline.com/uploads/2017/10/ev.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                        <div class="description">
                            <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 2</a></h4>
                            <br />
                            <div class="text-danger mb-3"><i class="fas fa-users"></i> 36</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="http://www.newsreader-project.eu/files/2012/12/events.jpg" class="img-rounded img-responsive" alt="..." />
                        <div class="description">
                            <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 3</a></h4>
                            <br />
                            <div class="text-danger mb-3"><i class="fas fa-users"></i> 38</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto mt-5">
                    <a href="#paper-kit" class="btn btn-danger btn-round">Lihat semua acara</a>
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
                    <h2 class="text-center">Keep in touch?</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-email-85"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection