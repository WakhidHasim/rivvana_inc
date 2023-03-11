@extends('layouts.app', ['title' => 'Contacts '])

@section('content')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container pt-10" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <div class="pb-3">
                    <a href="https://wa.me/081573684910">
                        <div class="info-box p-2">
                            <i class="bi bi-whatsapp"></i>
                            <h3>Whatsapp Me</h3>
                        </div>
                    </a>
                </div>
                <div class="pb-3">
                    <a href="mailto: rivvana.team@gmail.com">
                        <div class="info-box p-2">
                            <i class="bi bi-envelope-fill"></i>
                            <h3>Email Me</h3>
                        </div>
                    </a>
                </div>
                <div class="pb-3">
                    <a href="https://www.instagram.com/rivvana.id/">
                        <div class="info-box p-2">
                            <i class="bi bi-instagram"></i>
                            <h3>Instagram</h3>
                        </div>
                    </a>
                </div>
                {{-- <div class="pb-3">
                    <a href="#">
                        <div class="info-box p-2">
                            <i class="bi bi-facebook"></i>
                            <h3>Facebook</h3>
                        </div>
                    </a>
                </div>
                <div class="pb-3">
                    <a href="#">
                        <div class="info-box p-2">
                            <i class="bi bi-twitter"></i>
                            <h3>Twitter</h3>
                        </div>
                    </a>
                </div> --}}
                <div class="pb-3">
                    <a href="https://www.linkedin.com/company/rivvana-inc/">
                        <div class="info-box p-2">
                            <i class="bi bi-linkedin"></i>
                            <h3>Linkedin</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
