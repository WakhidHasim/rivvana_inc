@extends('layouts.app', ['title' => 'Portfolios'])

@section('content')
    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio-page" class="portfolio-page">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>
                        Kami telah membantu dan memiliki pengalaman dalam
                        pengembangan produk digital, berikut portfolio yang
                        pernah kami kerjakan.
                    </p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @forelse($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('/storage/portfolios/' . $portfolio->slider1) }}" class="img-fluid"
                                    alt="" />
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
                <div class="pagination justify-content-center">
                    {{ $portfolios->links() }}
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
    </main>
    <!-- End #main -->
@endsection
