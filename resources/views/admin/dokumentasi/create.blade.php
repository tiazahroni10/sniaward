@extends('layouts.admin.master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Dokumentasi</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-lg-8 col-md-7 order-md-1">
                            <form class="needs-validation" action="{{ route('dokumentasi.store') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="" value="" required="">
                                    @error('judul')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="" value="" required="">
                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('nama_dokumen') is-invalid @enderror" name="nama_file">
                                        <label class="custom-file-label">Pilih File ...</label>
                                        @error('nama_file')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection