@extends('layouts.peserta.master')
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
                            <form class="needs-validation" novalidate="">
                                <div class="mb-3">
                                    <label for="namaorganisasi">Nama Organisasi</label>
                                    <input type="text" class="form-control" id="namaorganisasi" placeholder="" value="" required="">
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="sniid">No SNI</label>
                                    <select name="sniid" id="sniid">
                                        <option value="">Pilih...</option>
                                        @foreach ($dataSni as $sni)
                                            <option value="{{ $sni->id }}">{{ $sni->no_sni }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatorganisasi">Alamat Organisasi</label>
                                    <input type="text" class="form-control" id="alamatorganisasi" placeholder="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatpabrik">Alamat Pabrik</label>
                                    <input type="text" class="form-control" id="alamatpabrik" placeholder="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="provinsi">Provinsi</label>
                                        <select class="" id="provinsi" name="provinsi" required="">
                                            <option value="">Pilih...</option>
                                            @foreach ($dataProvinsi as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="kabupaten">Kabupaten</label>
                                        <select class="" id="kabupaten" required="">
                                            <option value="">Pilih...</option>
                                            @foreach ($dataKabupaten as $kabupaten)
                                            <option value="{{ $kabupaten->id }}">{{ $kabupaten->nama }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Email Perusahaan</label>
                                        <input type="email" class="form-control" id="email" placeholder="">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="notelepon">No Telepon</label>
                                        <input type="text" class="form-control" id="notelepon" placeholder="">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tahunberdiri">Tahun Berdiri</label>
                                    <select class="" id="tahunberdiri" required="">
                                        <option value="">Pilih...</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="statuskepemilikan">Status Kepemilikan</label>
                                    <input type="text" class="form-control" id="statuskepemilikan" placeholder="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tipeproduk">Tipe Produk</label>
                                        <select class="" id="tipeproduk" name="tipeproduk" required="">
                                            <option value="">Pilih...</option>
                                            <option value="Induk">Induk</option>
                                            <option value="Organisasi Menengah Jasa">Anak</option>
                                            <option value="Cabang">Cabang</option>
                                            <option value="Tunggal">Tunggal</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="sektorkategori">Sektor atau Kategori</label>
                                        <select class="" id="sektorkategori" name="sektorkategori" required="">
                                            <option value="">Pilih...</option>
                                            @foreach ($dataSektorKategori as $sektor)
                                                <option value="{{ $sektor->id }}">{{ $sektor->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="kekayaanorganisasi">Kekayaan Organisasi</label>
                                        <input type="text" class="form-control" id="kekayaanorganisasi" placeholder="">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="hasilpenjulan">Hasil Penjualan Organisasi</label>
                                        <input type="text" class="form-control" id="hasilpenjulan" placeholder="">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="tipeorganisasi">Tipe Organisasi</label>
                                    <select class="w-50" id="tipeorganisasi" required="">
                                        <option value="">Pilih...</option>
                                        <option value="Induk">Induk</option>
                                        <option value="Organisasi Menengah Jasa">Anak</option>
                                        <option value="Cabang">Cabang</option>
                                        <option value="Tunggal">Tunggal</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
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