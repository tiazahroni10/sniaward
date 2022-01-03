@extends('layouts.frontend.master')
@section('content')
    <!-- Start Fun Facts Area -->
    <section id="about" class="fun-facts-area pt-100 pb-70">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <img src="assets/img/icon/lamp.png" alt="lamp">
                        </div>
                        <h3>
                            {{-- <span class="odometer" data-count="345">00</span> --}}
                        </h3>
                        <p>Seputar SNI Awards</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <img src="assets/img/icon/user.png" alt="lamp">
                        </div>
                        <h3>
                            {{-- <span class="odometer" data-count="10">00</span> --}}
                        </h3>
                        <p>Dewan Juri</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <img src="assets/img/icon/star.png" alt="lamp">
                        </div>
                        <h3>
                            {{-- <span class="odometer" data-count="1234">00</span> --}}
                        </h3>
                        <p>Peraih SNI Awards</p>
                    </div>
                </div>

                <div class="section-title mt-5">
                    <h2>Tentang SNI Awards</h2>
                    <div class="bar"></div>
                    <p>SNI Award merupakan sebuah pemberian penghargaan tertinggi dari Pemerintah Repubik Indonesia bagi organisasi yang menerapkan Standar Nasional Indonesia (SNI) secara konsisten, berkinerja tinggi, memiliki kemampuan mengelola dinamisasi perubahan dan melakukan transformasi yang diperlukan secara tepat.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start About Area -->
    <section id="download" class="about-area pb-100">
        <div class="container">
            

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3>Unduh Berkas</h3>
                        <div class="bar"></div>
                        <p>Kebebasan mengunduh berkas untuk mempermudah pendaftaran ajang SNI Award</p>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                Download Sekarang
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/vector_download.png" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Features Area -->
    <section id="features" class="features-area pb-70">
        <section id="features" class="features-area pb-70">
        <div class="container mt-5">
            {{-- <div class="section-title">
                <h2>Awsome Features</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div> --}}

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <img src="assets/img/icon/book.png" alt="image">
                        </div>
                        <h3>Syarat & Aturan SNI Award</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <img src="assets/img/icon/check.png" alt="image">
                        </div>
                        <h3>Kriteria SNI Award</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <img src="assets/img/icon/order.png" alt="image">
                        </div>
                        <h3>Surat Pertanyaan Tak Terlibat Hukum</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <img src="assets/img/icon/img_box.png" alt="image">
                        </div>
                        <h3>Logo SNI Award</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <img src="assets/img/icon/date.png" alt="image">
                        </div>
                        <h3>Berita</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc tinci dunt nec elei fend et tiram.</p> --}}
                    </div>
                </div>

            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Linimasa Area -->
    <section class="overview-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="overview-content">
                        <h3>Linimasa</h3>
                        <div class="bar"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
                        <div class="overview-btn">
                            <a href="#" class="default-btn">
                                Get It Now
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="overview-image">
                        <img src="assets/img/overview.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Area -->

    <!-- End Screenshot Area -->
    <section id="screenshots" class="screenshot-area ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Dokumentasi</h2>
                <div class="bar"></div>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> --}}
            </div>

            <div class="screenshot-slider owl-carousel owl-theme">
                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/1.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/2.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/3.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/4.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/5.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/6.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/1.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/2.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/3.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/4.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/5.png" alt="image">
                    </div>
                </div>

                <div class="screenshot-item">
                    <div class="image">
                        <img src="assets/img/screenshot/6.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Screenshot Area -->

    <!-- Start Pricing Area -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Pricing Plan</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="tab pricing-list-tab">
                <ul class="tabs">
                    <li>
                        <a href="#">
                            Monthly
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Yearly
                        </a>
                    </li>
                </ul>

                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Standard</h3>
                                    </div>

                                    <div class="price">
                                        <sup>$</sup>33 <sub>/ monthly</sub>
                                    </div>

                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Personal</h3>
                                    </div>

                                    <div class="price">
                                        <sup>$</sup>69 <sub>/ monthly</sub>
                                    </div>

                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Business</h3>
                                    </div>

                                    <div class="price">
                                        <sup>$</sup>99 <sub>/ monthly</sub>
                                    </div>

                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Standard</h3>
                                    </div>

                                    <div class="price">
                                        <sup>$</sup>133 <sub>/ yearly</sub>
                                    </div>

                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Personal</h3>
                                    </div>

                                    <div class="price">
                                        <sup>$</sup>169 <sub>/ yearly</sub>
                                    </div>

                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-pricing-table">
                                    <div class="pricing-header">
                                        <h3>Business</h3>
                                    </div>

                                    <div class="price">
                                        <sup>$</sup>199 <sub>/ yearly</sub>
                                    </div>

                                    <ul class="pricing-features">
                                        <li>
                                            <i class="fas fa-check"></i>
                                            Extra features
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Lifetime free support
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Upgrate options
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Full access
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            Web Design
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            App Design
                                        </li>
                                        <li>
                                            <i class="fa fa-times"></i>
                                            Web Developement
                                        </li>
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="#" class="default-btn">
                                            Purchase
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Pricing Area -->

    <!-- Start Faq Area -->
    <section id="faq" class="faq-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <div class="bar"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-accordion-content">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Apa yang dimaksud SNI Award ?
                                </a>
    
                                <p class="accordion-content show">SNI Award adalah apresiasi bagi industri/perusahaan yang menerapkan Standar Nasional Indonesia (SNI) atau standar lainnya dalam kegiatan usahannya.</p>
                            </li>
                            
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Apa saja kategori pesertanya ?
                                </a>
    
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                            </li>
                            
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Apa saja kriteria yang dinilai ?
                                </a>
    
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                            </li>
    
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="fa fa-chevron-down"></i>
                                    Bagaimana prosedurnya ?
                                </a>
    
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-image">
                        <img src="assets/img/faq.png" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Faq Area -->

    <!-- Start Berita Area -->
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Berita</h2>
                <div class="bar"></div>
                <p>Berita terbaru seputar SNI Award</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="assets/img/blog/1.jpg" alt="image">
                            </a>
                            <div class="btn">
                                <a href="#">Pengumuman Pemenang SNI Award 2021</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    12 March 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="single-blog.html">
                                    The Most Popular New Business Apps
                                </a>
                            </h3>
                            <p>Water plan dolor sit amet consturisi velised quiLorem</p>
                            <a href="single-blog.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="assets/img/blog/1.jpg" alt="image">
                            </a>
                            <div class="btn">
                                <a href="#">Beberapa Kategori Pemenang SNI Award 2021</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    18 March 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="single-blog.html">
                                    The Most Popular New Apps in 2021
                                </a>
                            </h3>
                            <p>Water plan dolor sit amet consturisi velised quiLorem</p>
                            <a href="single-blog.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="single-blog.html">
                                <img src="assets/img/blog/1.jpg" alt="image">
                            </a>
                            <div class="btn">
                                <a href="#">Penyerahan Hadiah kepada Pemenang SNI Award 2021</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    28 March 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="single-blog.html">
                                    The Best Marketing Management Tools
                                </a>
                            </h3>
                            <p>Water plan dolor sit amet consturisi velised quiLorem</p>
                            <a href="single-blog.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Contact Area -->
    <section id="contact" class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Kontak Kami</h2>
                <div class="bar"></div>
                <p>Tujuan dari Kontak BSN adalah untuk menampung permintaan layanan, pertanyaan maupun masukan yang berhubungan dengan kegiatan SNI Award. Semua masukan dari Kontak BSN akan diteruskan kepada pihak/narasumber yang mempunyai kompetensi sesuai dengan cakupan pertanyaan</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Masukkan Nama Anda!" placeholder="Nama Lengkap">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Masukkan Email Anda!" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Masukkan Nomor Telepon Anda!" class="form-control" placeholder="No. Telepon">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Masukkan Subject!" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Tulis Pesan Anda!" placeholder="Pesan "></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn">
                                            Kirim Pesan
                                            <span></span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h3>Contact with us by Your Phone Number or Email Address</h3>
                            <h2>
                                <a href="tel:+1-485-456-0102">+1-485-456-0102</a>
                                <span>Or</span>
                                <a href="mailto:hello@colugo.com">hello@colugo.com</a>
                            </h2>
    
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Subscribe Area -->
    <div class="subscribe-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="subscribe-content">
                        <h2>Subscribe for our Newsletter</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter" placeholder="Enter your Email" name="EMAIL" required autocomplete="off">
                        <button type="submit">
                            Subscribe Now
                        </button>
                        
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->
@stop