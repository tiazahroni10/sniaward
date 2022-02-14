@extends('layouts.admin.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <label for="pendidikan">Biodata</label> <br><br>
                        <div class="row">
                            <div class="col-4">
                                <h5>Nama Lengkap</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->nama_lengkap }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Gelar Sebelum Nama</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->gelar_sebelum_nama }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Gelar Setelah Nama</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->gelar_setelah_nama }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Status</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->status }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Tanggal Lahir</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->tgl_lahir }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Pekerjaan</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->pekerjaan }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Nama Instansi</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->nama_instansi }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Nama Instansi</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $dataEvaluator->nama_instansi }}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>Jenis Kelamin</h5>
                            </div>
                            <div class="col-md-auto">
                                @if ($dataEvaluator->jenis_kelamin == "L")
                                    <h5>Laki-laki</h5>
                                @else
                                    <h5>Perempuan</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <label for="pendidikan">Pekerjaan</label> <br><br>
                        @foreach ($dataPekerjaan as $data)
                        <div class="row">
                            <div class="col-4">
                                <h5>{{ $data->instansi }}</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $data->jabatan }}</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5>{{ $data->jabatan }}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <label for="pendidikan">Sertifikat</label> <br><br>
                        @foreach ($dataSertifikat as $data)
                        <div class="row">
                            <div class="col-4">
                                <h5>{{ $data->nama_sertifikat }}</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5><a href="/storage/{{ $data->nama_file }}">Lihat</a></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <label for="pendidikan">Pendidikan</label> <br><br>
                        @foreach ($dataPendidikan as $data)
                        <div class="row">
                            <div class="col-4">
                                <h5>{{ $data->nama_kampus }}</h5>
                            </div>
                            <div class="col-2">
                                <h5>{{ $data->tahun_lulus }}</h5>
                            </div>
                            <div class="col-md-auto">
                                <h5><a href="/storage/{{ $data->ijazah }}">Lihat</a></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="#" class="btn btn-success">Verifikasi</a>
                <a href="#" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </div>
</div>
@endsection