<div class="col-md-{{ $size }}">
    <div class="info">
        <a href="{{ $target }}">
            <img src="{{ $img }}" class="img-rounded img-responsive" alt="Rounded Image">
        </a>
        <div class="description">
            <h4 class="info-title"><a href="{{ $target }}" class="btn btn-link" style="font-size: 1em;">{{ $name }}</a></h4>
            <br />
            <div class="text-danger"><i class="fas fa-users"></i> {{ $attendees }}</div>
            <div class="mb-3"><i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse($date)->formatLocalized('%d %B %Y') }}</div>
        </div>
    </div>
</div>