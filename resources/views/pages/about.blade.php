@extends('layouts.app', ['title' => 'About Us'])

@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container pt-10" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                @foreach ($profiles as $profile)
                    <div class="content">
                        <p>
                            {!! $profile->description !!}
                        </p>
                        <p>
                            {!! $profile->vision !!}
                        </p>
                        <p>
                            {!! $profile->mission !!}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
