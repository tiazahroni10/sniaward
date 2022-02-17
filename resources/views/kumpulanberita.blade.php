@extends('layouts.frontend.master')
@section('content')
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
                    @foreach ($dataBerita as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog">
                                <div class="image">
                                    <a href="/berita/{{ $item->slug }}">
                                        <img src="/storage/{{ $item->gambar }}" alt="image">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="post-meta">
                                        <li>
                                            <i class="fa fa-calendar"></i>
                                            {{ $item->rilis }}
                                        </li>
                                    </ul>

                                    <h3>
                                        <a href="/berita/{{ $item->slug }}">
                                            {{ $item->judul }}
                                        </a>
                                    </h3>
                                    <p>{{ $item->potongan_berita }}</p>
                                    <a href="/berita/{{ $item->slug }}" class="read-more">
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

@endsection