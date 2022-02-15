<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/odometer.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.min.css">
        <!-- Slick CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">

        <title>SNI Award - Kumpulan Acara</title>

        <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/logosniaward.png">
    </head>

    <body data-spy="scroll" data-offset="120">

        <!-- Start Preloader Area -->
        
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <nav class=" navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('assets') }}/img/logosniaward.png" width="100px" alt="logo">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Beranda
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="/" class="nav-link">
                                Informasi
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="/" class="nav-link">
                                Berita
                            </a>
                        </li>
                        

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Download
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Linimasa
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Acara
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#dokumentasi" class="nav-link">
                                Dokumentasi
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                FAQ
                            </a>
                        </li>

                    </ul>

                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <div class="option-item">
                                <a href="/login" class="default-btn">
                                    Masuk
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar Area -->

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Kumpulan Berita</h2>
                            <ul>
                                <li><a href="/">Beranda</a></li>
                                <li>Kumpulan Berita</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-shape">
                <div class="shape-1">
                    <img src="{{ asset('assets') }}/img/shape/1.png" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="{{ asset('assets') }}/img/shape/2.png" alt="image">
                </div>

                <div class="shape-3">
                    <img src="{{ asset('assets') }}/img/shape/3.svg" alt="image">
                </div>

                <div class="shape-4">
                    <img src="{{ asset('assets') }}/img/shape/4.svg" alt="image">
                </div>

                <div class="shape-5">
                    <img src="{{ asset('assets') }}/img/shape/5.png" alt="image">
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section id="blog" class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Berita Terbaru</h2>
                    <div class="bar"></div>
                    <p>Kumpulan Berita Seputar SNI Award</p>
                </div>

                <div class="row">
                    @foreach ($dataBerita as $data)
                        <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="/berita/{{ $data->slug }}">
                                    <img src="/storage/{{ $data->gambar }}" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <ul class="post-meta">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        {{ $data->rilis }}
                                    </li>
                                </ul>

                                <h3>
                                    <a href="/berita/{{ $data->slug }}">
                                        {{ $data->judul }}
                                    </a>
                                </h3>
                                <p>{{ $data->potongan_berita }}</p>
                                <a href="/berita/{{ $data->slug }}" class="read-more">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="default-shape">
                <div class="shape-1">
                    <img src="{{ asset('assets') }}/img/shape/1.png" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="{{ asset('assets') }}/img/shape/2.png" alt="image">
                </div>

                <div class="shape-3">
                    <img src="{{ asset('assets') }}/img/shape/3.svg" alt="image">
                </div>

                <div class="shape-4">
                    <img src="{{ asset('assets') }}/img/shape/4.svg" alt="image">
                </div>

                <div class="shape-5">
                    <img src="{{ asset('assets') }}/img/shape/5.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End Blog Area -->


        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 text-center">
                        <div class="single-footer-widget">
                            <a href="/" class="logo">
                                <h2>SNI AWARDS</h2>
                            </a>
                                {{-- <p>{{ $data->ket_judul }}</p> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 text-center">
                        <div class="single-footer-widget pl-5">
                            <h3>Tautan</h3>
                            <ul class="list">
                                <li>
                                    <a href="/">
                                        Beranda
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        Informasi
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        Download
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        Linimasa
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        Acara
                                    </a>
                                </li>
                                <li>
                                    <a href="/">
                                        FaQ
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 text-center">
                        <div class="single-footer-widget">
                            <h3>Sosial Media</h3>
                            <ul class="list">
                                <li>
                                    {{-- <a href="{{ $data->linkfacebook }}" target="_blank"> --}}
                                        <i class="fab fa-facebook-f"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    {{-- <a href="{{ $data->linktwitter }}" target="_blank"> --}}
                                        <i class="fab fa-twitter"></i>
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    {{-- <a href="{{ $data->webbsn }}" target="_blank"> --}}
                                        <i class="fas fa-link"></i>
                                        BSN
                                    </a>
                                </li>
                                <li>
                                    {{-- <a href="{{ $data->linkinstagram }}" target="_blank"> --}}
                                        <i class="fab fa-instagram"></i>
                                        Instagram   
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copy-right">
            <div class="container">
                <div class="copy-right-content">
                    <p>
                        Copyright © {{ date("Y"); }}. All Rights Reserved by
                        <a href="https://bsn.go.id" target="_blank">
                            Badan Standardisasi Nasional
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="fa fa-chevron-up"></i>
            <i class="fa fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->

        <!-- jQuery Min JS -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Appear JS -->
        <script src="assets/js/jquery.appear.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <!-- Slick JS -->
        <script src="assets/js/slick.min.js"></script>
        <!-- Particles JS -->
        <script src="assets/js/particles.min.js"></script>
        <!-- Ripples JS -->
        <script src="assets/js/jquery.ripples-min.js"></script>
        <!-- Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- WOW Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- AjaxChimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>