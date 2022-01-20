@extends('layouts.evaluator.master')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Pendidikan Evaluator</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-lg-8 col-md-7 order-md-1">
                            <form class="needs-validation" novalidate="">
                                <div class="mb-3">
                                    <label for="namainstansi">Nama Instansi</label>
                                    <input type="text" class="form-control" id="namainstansi" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="jenjang">Jenjang</label>
                                        <select class="d-block w-50 default-select" id="jenjang" required="">
                                            <option value="">Pilih...</option>
                                            <option value="Sma">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="tahunlulus">Tahun Lulus</label>
                                        <select class="d-block w-50 default-select" id="tahunlulus" required="">
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

                                <div class="row">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <label for="jazah">Ijazah</label>
                                    </div>
                                    <div class="col-md">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
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