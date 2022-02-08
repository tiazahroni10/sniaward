@extends('layouts.evaluator.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Profil Evaluator</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-lg-8 col-md-7 order-md-1">
                            <form class="needs-validation" action="{{ route('profilevaluator.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"  value="{{ old('nama_lengkap',$dataEvaluator->nama_lengkap) }}">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="gelar_sebelum_nama">Gelar Sebelum Nama</label>
                                        <input type="text" class="form-control" id="gelar_sebelum_nama" name="gelar_sebelum_nama"  value="{{ old('gelar_sebelum_nama',$dataEvaluator->gelar_sebelum_nama) }}">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Gelar Sesudah Nama</label>
                                        <input type="text" class="form-control" id="gelar_setelah_nama" name="gelar_setelah_nama"  value="{{ old('gelar_setelah_nama',$dataEvaluator->gelar_setelah_nama) }}">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"  value="{{ $data->email }}" disabled>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control" id="status" name="status" value="{{ old('status',$dataEvaluator->status) }}" disabled>
                                            <div class="invalid-feedback">
                                                Please select a valid country.
                                            </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $dataEvaluator->tgl_lahir) }}" >
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_instansi">Nama Instansi</label>
                                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ old('nama_instansi',$dataEvaluator->nama_instansi) }}" >
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan',$dataEvaluator->pekerjaan) }}" >
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="form-group mb-0">
                                        @if ($dataEvaluator->jenis_kelamin== "P")
                                            <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="L"> Laki Laki</label>
                                            <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="P" checked> Perempuan</label>
                                        @else
                                            <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="L" checked> Laki Laki</label>
                                            <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                                        @endif
                                    </div>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat',$dataEvaluator->alamat) }}" >
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="master_provinsi_id">Provinsi</label>
                                        <select  id="master_provinsi_id" name="master_provinsi_id" >
                                            <option value="">Pilih...</option>
                                            @foreach ($dataProvinsi as $provinsi)
                                            @if (old('master_provinsi_id',$dataEvaluator->master_provinsi_id)==$provinsi->id)
                                                <option value="{{ $provinsi->id }}" selected>{{ $provinsi->nama }}</option>
                                            @else
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="master_kota_kabupaten_id">Kabupaten</label>
                                        <select  id="master_kota_kabupaten_id" name="master_kota_kabupaten_id">
                                            <option value="">Pilih...</option>
                                            @foreach ($dataKabupaten as $kabupaten)
                                            @if (old('master_kota_kabupaten_id',$dataEvaluator->master_kota_kabupaten_id)==$kabupaten->id)
                                                <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->nama }}</option>
                                            @else
                                                <option value="{{ $kabupaten->id }}">{{ $kabupaten->nama }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="nomor_telepon">No Telepon</label>
                                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"  value="{{ old('nomor_telepon',$dataEvaluator->nomor_telepon) }}" >
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <label for="gambar">Gambar</label>
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
                                <div class="row">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <label for="npwp">Npwp</label>
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
                                <div class="row">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <label for="ktp">Ktp</label>
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
                                <div class="row">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <label for="cv" class="">Cv</label>
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