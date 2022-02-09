@extends('layouts.peserta.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Dokumen</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-lg-8 col-md-7 order-md-1">
                            <form class="needs-validation" action="{{ route('lampiran.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_dokumen">Nama Dokumen</label>
                                    <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" placeholder="" value="{{ old('nama_lengkap') }}" required="">
                                </div>
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('nama_file') is-invalid @enderror" name="nama_file">
                                            <label class="custom-file-label">Pilih file</label>
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