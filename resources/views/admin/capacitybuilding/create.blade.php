@extends('layouts.admin.master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Dokumen</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                            <div class="compose-content">
                                <form method="POST" action="{{ route('capacitybuilding.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent @error('nama_file') is-invalid @enderror" name="nama_file" placeholder=" Judul:">
                                        @error('nama_file')
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
                                            <input type="file" class="custom-file-input @error('nama_dokumen') is-invalid @enderror" name="nama_dokumen">
                                            <label class="custom-file-label">Pilih file</label>
                                            @error('nama_dokumen')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="text-left mt-4 mb-2">
                                        <button class="btn btn-primary btn-sl-sm mr-2" type="submit"><span class="mr-2"></span>Simpan</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="button"><span class="mr-2"></span>Batal</button>
                                    </div>
                                </form>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection