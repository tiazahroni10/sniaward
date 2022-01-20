@extends('layouts.evaluator.master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Pekerjaan Evaluator</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-lg-8 col-md-7 order-md-1">
                            <form class="needs-validation" novalidate="">
                                <div class="mb-3">
                                    <label for="namaperusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="namaperusahaan" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="jabatan">Jabatan</label>
                                        <select class="d-block w-100 default-select" id="jabatan" required="">
                                            <option value="">Pilih...</option>
                                            <option value="CEO">CEO</option>
                                            <option value="Pegawai">Pegawai</option>
                                            <option value="Dosen">Dosen</option>
                                            <option value="Direktur">Direktur</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="tahunmulai">Tahun Mulai</label>
                                        <select class="d-block w-100 default-select" id="tahunmulai" required="">
                                            <option value="">Pilih...</option>
                                            @for ($tahun = 2000 ; $tahun < date('Y');$tahun++)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                            @endfor
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="tahunselesai">Tahun Selesai</label>
                                        <select class="d-block w-100 default-select" id="tahunselesai" required="">
                                            <option value="">Pilih...</option>
                                            @for ($tahun = 2000 ; $tahun < date('Y');$tahun++)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                            @endfor
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
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