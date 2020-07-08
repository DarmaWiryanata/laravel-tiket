@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main">
        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item-half active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
                  <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Acara</h3>
                  </div>
                </div>
            </div>
        </header>
        <div class="section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Semua Acara</h2>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 1</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 98</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                                {{-- <div class="text-danger mb-3"><i class="fas fa-calendar-alt"></i> {{ now()->diffForHumans() }}</div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://financesonline.com/uploads/2017/10/ev.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 2</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 36</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="http://www.newsreader-project.eu/files/2012/12/events.jpg" class="img-rounded img-responsive" alt="..." />
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 3</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 38</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://avenueevents.co.uk/wp-content/uploads/2015/09/fragrance-training-conference-5.jpg" class="img-rounded img-responsive" alt="..." />
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 4</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 19</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 1</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 98</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                                {{-- <div class="text-danger mb-3"><i class="fas fa-calendar-alt"></i> {{ now()->diffForHumans() }}</div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://financesonline.com/uploads/2017/10/ev.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 2</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 36</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="http://www.newsreader-project.eu/files/2012/12/events.jpg" class="img-rounded img-responsive" alt="..." />
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 3</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 38</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://avenueevents.co.uk/wp-content/uploads/2015/09/fragrance-training-conference-5.jpg" class="img-rounded img-responsive" alt="..." />
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 4</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 19</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 1</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 98</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                                {{-- <div class="text-danger mb-3"><i class="fas fa-calendar-alt"></i> {{ now()->diffForHumans() }}</div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://financesonline.com/uploads/2017/10/ev.jpg" class="img-rounded img-responsive" alt="Rounded Image">
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 2</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 36</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="http://www.newsreader-project.eu/files/2012/12/events.jpg" class="img-rounded img-responsive" alt="..." />
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 3</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 38</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <img src="https://avenueevents.co.uk/wp-content/uploads/2015/09/fragrance-training-conference-5.jpg" class="img-rounded img-responsive" alt="..." />
                            <div class="description">
                                <h4 class="info-title"><a href="javascript:;" class="btn btn-link" style="font-size: 1em;">Acara 4</a></h4>
                                <br />
                                <div class="text-danger"><i class="fas fa-users"></i> 19</div>
                                <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse(now())->formatLocalized('%d %B %Y') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection