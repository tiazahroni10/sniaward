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
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent" placeholder=" Judul:">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="text-left mt-4 mb-2">
                            <button class="btn btn-primary btn-sl-sm mr-2" type="button"><span class="mr-2"></span>Simpan</button>
                            <button class="btn btn-danger light btn-sl-sm" type="button"><span class="mr-2"></span>Discard</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection