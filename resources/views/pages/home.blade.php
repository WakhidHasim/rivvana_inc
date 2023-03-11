@extends('layouts.app', ['title' => 'Rivvana Inc.'])

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Rivvana Inc. <br />We Share <span>Easeness.</span></h1>
                <h2>
                    "We Share Easiness adalah solusi untuk kemudahan bisnis
                    Anda. Kami membantu Anda mempermudah aktivitas
                    sehari-hari dengan layanan yang inovatif dan efisien,
                    membebaskan waktu dan pikiran Anda untuk fokus pada
                    hal-hal yang lebih penting dalam bisnis. Bersama kami,
                    kemudahan bukan lagi hal yang sulit dicapai."
                </h2>
                <div class="d-flex justify-content-center">
                    <a href="#about" class="btn-get-started scrollto">Mulai Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <p>
                                Kami adalah perusahaan yang bergerak di pengembangan teknologi perangkat lunak dan
                                perangkat keras. Kami berusaha memberikan layanan terbaik, membantu anda mewujudkan ide
                                bisnis anda. Visi kami adalah membagikan kemudahan. Yang dapat berarti kami akan
                                membagikan kemudahan dengan teknologi dalam mewujudkan ide Anda.
                            </p>
                            <p>
                                There are several systems that we can develop that can help meet your needs and
                                problems. Please take a look through some of <span>our services.</span>
                            </p>
                        </div>
                        <div class="card-quote">
                            <ul>
                                <li>
                                    <h5>
                                        “Ada dua hal yang akan terjadi ketika kita tidak mulai dari sekarang,satu kita
                                        yang tertinggal dimasa sekarang dan dua kita yang sulit beradaptasi dimasa yang
                                        akan datang”
                                    </h5>
                                    <h4>
                                        Founder Rivvana Inc.
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("{{ asset('landing/img/about-img.png') }}");' data-aos="zoom-in"
                        data-aos-delay="150">
                        &nbsp;</div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our Services</h2>
                    <p>
                        Kami selalu berusaha memberikan layanan terbaik melalui kreativitas kreativitas yang menjadi
                        keinginan Anda :
                    </p>
                </div>
                <div class="row">
                    @forelse($services as $service)
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box text-center">
                                <div class="icon"><img src="{{ asset('/storage/services/' . $service->icon) }}">
                                </div>
                                <h4><a href="">{{ $service->name }}</a></h4>
                                <p>{!! $service->description !!}</p>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center">Data Service Belum Tersedia</h2>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">
                <div class="section-title">
                    <h2>Our Client</h2>
                </div>
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('landing/img/clients/kemenag.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('landing/img/clients/physio.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('landing/img/clients/joy.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('landing/img/clients/rini.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('landing/img/clients/singgang.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cliens Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Kami telah membantu dan memiliki pengalaman dalam pengembangan produk digital, berikut portfolio
                        yang pernah kami kerjakan.</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @forelse($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/portfolios/' . $portfolio->slider1) }}" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <a class="nav-link scrollto" href="{{ route('details', $portfolio->slug) }}">
                                        <h4>{{ $portfolio->name }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center">Portfolio Belum Tersedia</h2>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('portfolios') }}" class="btn-more scrollto">Lihat Lainnya
                    </a>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
