@extends('layouts.layout')

@section('css')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="main">
        <x-header title="{{ __('custom.event') }}" img="https://source.unsplash.com/RCAhiGJsUUE/1920x1080" />
        <div class="section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">{{ __('custom.all events') }}</h2>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <x-events size="3" name="Acara 1" img="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" target="#" attendees="98" date="{{ now() }}" />
                    <x-events size="3" name="Acara 2" img="https://financesonline.com/uploads/2017/10/ev.jpg" target="#" attendees="36" date="{{ now() }}" />
                    <x-events size="3" name="Acara 3" img="http://www.newsreader-project.eu/files/2012/12/events.jpg" target="#" attendees="38" date="{{ now() }}" />
                    <x-events size="3" name="Acara 4" img="https://avenueevents.co.uk/wp-content/uploads/2015/09/fragrance-training-conference-5.jpg" target="#" attendees="19" date="{{ now() }}" />
                    <x-events size="3" name="Acara 1" img="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" target="#" attendees="98" date="{{ now() }}" />
                    <x-events size="3" name="Acara 2" img="https://financesonline.com/uploads/2017/10/ev.jpg" target="#" attendees="36" date="{{ now() }}" />
                    <x-events size="3" name="Acara 3" img="http://www.newsreader-project.eu/files/2012/12/events.jpg" target="#" attendees="38" date="{{ now() }}" />
                    <x-events size="3" name="Acara 4" img="https://avenueevents.co.uk/wp-content/uploads/2015/09/fragrance-training-conference-5.jpg" target="#" attendees="19" date="{{ now() }}" />
                    <x-events size="3" name="Acara 1" img="https://www.thembegroup.com/wp-content/uploads/2016/06/Corporate-Events.jpg" target="#" attendees="98" date="{{ now() }}" />
                    <x-events size="3" name="Acara 2" img="https://financesonline.com/uploads/2017/10/ev.jpg" target="#" attendees="36" date="{{ now() }}" />
                    <x-events size="3" name="Acara 3" img="http://www.newsreader-project.eu/files/2012/12/events.jpg" target="#" attendees="38" date="{{ now() }}" />
                    <x-events size="3" name="Acara 4" img="https://avenueevents.co.uk/wp-content/uploads/2015/09/fragrance-training-conference-5.jpg" target="#" attendees="19" date="{{ now() }}" />
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection