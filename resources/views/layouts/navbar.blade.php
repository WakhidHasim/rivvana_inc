<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ Request::segment(1) === null ? '' : 'header-inner-pages' }}">
    <div class="container d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo me-auto"><img src="{{ asset('landing/img/logo.png') }}" alt=""
                class="img-fluid"></a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a></li>
                <li><a class="nav-link scrollto {{ request()->is('portfolios') ? 'active' : '' }}"
                        href="{{ route('portfolios') }}">Portfolio</a></li>
                <li><a class="nav-link scrollto {{ request()->is('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
