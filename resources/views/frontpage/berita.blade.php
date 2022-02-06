 <!-- Start Berita Area -->
    <section class="blog-area pt-100 pb-70" id="berita">
        <div class="container" style="border-bottom:3px solid #E3B04B;position:relative">
            <a href="" class="shadow-sm d-flex align-items-center justify-content-center" style="position:absolute;bottom:-2.2vh;right:0;border:2px solid #E3B04B;border-radius:50px;padding:5px 15px;background:white;color:#E3B04B;font-weight:550">Lihat Semua <i class="lni lni-arrow-right ml-2 mt-1" style="font-size:22px"></i></a>
                <h2>{{ $data->berita }}</h2>
                <div class="bar"></div>
                <p>{{ $data->ket_berita }}</p>

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
                            <h3>{{ $data->judul }}</h3>
                            <p>Acara SNI Award tahun 2021 diikuti oleh banyak peserta</p>
                            <a href="/detailberita" class="read-more">
                                Baca selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Blog Area -->