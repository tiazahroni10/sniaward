 <!-- Start Berita Area -->
    <section class="blog-area pt-100 pb-70" id="berita">
        <div class="container" style="border-bottom:3px solid #E3B04B;position:relative">
            <a href="/kumpulanberita" class="shadow-sm d-flex align-items-center justify-content-center" style="position:absolute;bottom:-2.2vh;right:0;border:2px solid #E3B04B;border-radius:50px;padding:5px 15px;background:white;color:#E3B04B;font-weight:550">Lihat Semua <i class="lni lni-arrow-right ml-2 mt-1" style="font-size:22px"></i></a>
                <div class="section-title">
                    <h2>{{ $data->berita }}</h2>
                    <div class="bar"></div>
                    <p>{{ $data->ket_berita }}</p>
                </div>

            <div class="row">
                @foreach ($dataBerita as $data)
                    <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                                <img src="/storage/{{ $data->gambar }}" alt="image">
                        </div>
                        <div class="content">
                            <ul class="post-meta"> 
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    {{ $data->rilis }}
                                </li>
                            </ul>
<<<<<<< HEAD
                            <h3>{{ $data->judul }}</h3>
                            <p>{{ $data->potongan_berita }}</p>
                            <a href="/{{ $data->slug }}" class="read-more">
=======

                            <h3>
                                <a href="/detailberita">
                                    Kumpulan Daftar Peraih SNI Awards 2021
                                </a>
                            </h3>
                            <p>Acara SNI Award tahun 2021 diikuti oleh banyak peserta</p>
                            <a href="/detailberita" class="read-more">
>>>>>>> Edit-Frontend
                                Baca selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

<<<<<<< HEAD
=======
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="/detailberita">
                                <img src="{{ asset('assets') }}/img/blog/1.jpg" alt="image">
                            </a>
                            <div class="btn">
                                <a href="/detailberita">Beberapa Kategori Pemenang SNI Award 2021</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    18 Maret 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="/detailberital">
                                    Kategori Pemenang SNI Award Tahun 2021
                                </a>
                            </h3>
                            <p>Acara SNI Award tahun 2021 diikuti oleh banyak peserta</p>
                            <a href="/detailberita" class="read-more">
                                Baca selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="image">
                            <a href="/detailberita">
                                <img src="{{ asset('assets') }}/img/blog/1.jpg" alt="image">
                            </a>
                            <div class="btn">
                                <a href="/detailberita">Penyerahan Hadiah SNI Award 2021</a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    28 Maret 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="/detailberita">
                                 Penyerahan Hadiah kepada Pemenang SNI Award 
                                </a>
                            </h3>
                            <p>Acara SNI Award tahun 2021 diikuti oleh banyak peserta</p>
                            <a href="/detailberita" class="read-more">
                                Baca selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
>>>>>>> Edit-Frontend
            </div>
        </div>
    </section>
    <!-- End Blog Area -->