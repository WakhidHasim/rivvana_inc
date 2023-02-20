<!-- ======= Header ======= -->
<header id="header" class="fixed-top {{ Request::segment(1) === null ? '' : 'header-inner-pages' }}">
    <div class="container d-flex align-items-center">
        <a href="index.html" class="logo me-auto"><img src="{{ asset('landing/img/logo.png') }}" alt=""
                class="img-fluid"></a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
                <li><a class="nav-link scrollto" href="about.html">About</a></li>
                <li><a class="nav-link scrollto" href="portfolio.html">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
