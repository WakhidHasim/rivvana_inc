@extends('layouts.app', ['title' => ' Detail Portfolio'])

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('portfolios') }}">Portolios</a></li>
                    <li>Portfolio Details</li>
                </ol>
                <h2>{{ $portfolio->name }}</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('/storage/portfolios/' . $portfolio->slider1) }}" alt="" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('/storage/portfolios/' . $portfolio->slider2) }}" alt="" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{ asset('/storage/portfolios/' . $portfolio->slider3) }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li>
                                    <strong>Category</strong>: {{ $portfolio->service->name }}
                                </li>
                                <li>
                                    <strong>Client</strong>: {{ $portfolio->client }}
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{ $portfolio->name }}</h2>
                            <p>
                                {!! $portfolio->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->
@endsection
