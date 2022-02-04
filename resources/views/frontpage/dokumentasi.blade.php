<!-- End Screenshot Area -->
    <section id="screenshots" class="screenshot-area ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Dokumentasi</h2>
                <div class="bar"></div>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt  labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> --}}
            </div>

            <div class="screenshot-slider owl-carousel owl-theme">
                @foreach ($dataGambar as $data)
                <div class="screenshot-item">
                    <div class="image">
                        <img src="/storage/{{ $data->nama_file }}" alt="image">
                        <h6>{{ $data->judul }}</h6>
                        <p>{{ $data->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Screenshot Area -->