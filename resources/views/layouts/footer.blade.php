<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="index.html" class="logo me-auto"><img src="{{ asset('landing/img/logo.png') }}" alt=""
                            class="img-fluid logo-footer">
                    </a>
                    @foreach ($profiles as $profile)
                        <p>
                            {{ $profile->address }}
                            <br>
                            <strong>Phone : </strong>{{ $profile->phone }}<br>
                            <strong>Email : </strong>{{ $profile->email }}<br>
                        </p>
                    @endforeach
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('portfolios') }}">Portfolios</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contacts</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        @foreach ($services as $service)
                            <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $service->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p></p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-bottom clearfix">
        <div class="copyright mx-auto">
            &copy; {{ now()->year }}
            Copyright <strong><span>Rivvana Inc</span></strong> All Rights Reserved
        </div>
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
