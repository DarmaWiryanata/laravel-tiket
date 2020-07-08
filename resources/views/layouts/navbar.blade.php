<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}" rel="tooltip" title="Tiket" data-placement="bottom">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-home d-lg-none"></i> {{ __('custom.home') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('browse') }}" class="nav-link"><i class="fas fa-search d-lg-none"></i> {{ __('custom.browse') }}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-info-circle d-lg-none"></i> {{ __('custom.about') }}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-sign-in-alt d-lg-none"></i> {{ __('custom.login') }}</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/product/paper-kit-2-pro?ref=pk2-free-local" target="_blank" class="btn btn-danger btn-round"><i class="fas fa-user-plus d-lg-none"></i> {{ __('custom.register') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>