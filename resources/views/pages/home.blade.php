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
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Website and App Development</a></h4>
                            <p>Kami selalu berusaha memberikan layanan terbaik melalui kreativitas kreativitas yang
                                menjadi keinginan anda.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">IOT Development (Internet Of Thing)</a></h4>
                            <p>Kami selalu berusaha memberikan layanan terbaik melalui kreativitas kreativitas yang
                                menjadi keinginan anda.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Mobile Development</a></h4>
                            <p>Kami selalu berusaha memberikan layanan terbaik melalui kreativitas kreativitas yang
                                menjadi keinginan anda.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">UX / UI Design</a></h4>
                            <p>Kami selalu berusaha memberikan layanan terbaik melalui kreativitas kreativitas yang
                                menjadi keinginan anda.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">
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

        <!-- ======= Caption Section ======= -->
        <!-- <section id="caption" class="caption">
                            <div class="container" data-aos="zoom-in">
                                <div class="row">
                                    <div class="col-lg-9 text-center text-lg-start">
                                        <p> Kami adalah perusahaan yang bergerak di pengembangan teknologi perangkat lunak dan perangkat
                                            keras. Kami akan berusaha memberikan kemudahan dengan mewujudkan impian dan ide-ide anda.
                                        </p>
                                        <h3>Rivvana Inc.</h3>
                                    </div>
                                    <div class="col-lg-3 caption-img-container text-center">
                                        <img src="assets/img/caption-img.png"
                                            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                            alt="">
                                    </div>
                                </div>

                            </div>
                        </section> -->
        <!-- End Caption Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Kami telah membantu dan memiliki pengalaman dalam pengembangan produk digital, berikut portfolio
                        yang pernah kami kerjakan.</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('landing/img/portfolio/1.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <a class="nav-link scrollto" href="portfolio-details.html">
                                    <h4>Tes Doang</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('landing/img/portfolio/2.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <a class="nav-link scrollto" href="portfolio-details.html">
                                    <h4>Tes Doang 2</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('landing/img/portfolio/3.png') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <a class="nav-link scrollto" href="portfolio-details.html">
                                    <h4>Tes Doang 3</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#about" class="btn-more scrollto">Selengkapnya
                    </a>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
