@extends('layouts.admin.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        @if (session()->has('sukses'))
            <div class="alert alert-success solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                class="mr-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong>{{ session('sukses') }}</strong>
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>
        @endif
        @if (session()->has('gagal'))
            <div class="alert alert-danger solid alert-dismissible fade show">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                class="mr-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                <strong>{{ session('gagal') }}</strong>
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <label for="pendidikan">Biodata</label> <br><br>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Nama Organisasi</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->nama_organisasi }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>No SNI</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->no_sni }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Judul SNI</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->judul_sni }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Kategori</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->nama_kategori }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Alamat Organisasi</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->alamat_organisasi }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Alamat Pabrik</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->alamat_pabrik }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Email Perusahaan</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->email_perusahaan }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>No Telepon</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->nomor_telepon }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>website</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->website }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Tahun Berdiri</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->tahun_berdiri }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Status Kepemilikan</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->status_kepemilikan }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Tipe Produk</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->tipe_produk }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Kekayaan Organisasi</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->kekayaan_organisasi }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Hasil Penjualan Organisasi</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->hasil_penjualan_organisasi }}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <h5>Tipe Organisasi</h5>
                                </div>
                                <div class="col-md-auto">
                                    <h5>{{ $dataPeserta->tipe_organisasi }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-success">Verifikasi</button>
                    <a href="#" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection