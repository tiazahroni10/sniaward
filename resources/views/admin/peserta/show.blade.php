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
        <div class="row">
            <div class="col-12">
            <div class="profile card card-body p-3" style="height: auto">
                <div class="profile-head">
                <div class="profile-info">
                    <div class="profile-photo mt-0">
                    {{-- <a href="/storage/{{ $dataPeserta->gambar }}"><img src="/storage/{{ $$dataPeserta->gambar }}" class="img-fluid rounded-circle"></a> --}}
                    </div>
                    <div class="profile-details">
                    <div class="profile-name px-3 pt-2">
                        <h3 class="text-primary mb-0">{{ $dataPeserta->nama_organisasi }}</h3>
                    </div>
                    <div class="dropdown ml-auto">
                        <button type="button" data-toggle="modal" data-target="#edit-profile-modal" class="btn btn-sm btn-warning text-white mr-2">
                        Edit Profile
                        </button>
                        {{-- <button class="btn btn-sm btn-info">Pdf</button> --}}
                    </div>
                    </div>
                </div>
                <div style="padding: 15px 20px">
                    <table>
                    <tr>
                        <td>Alamat Organisasi</td>
                        <td class="col-data">: {{ $dataPeserta->alamat_organisasi }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Pabrik</td>
                        <td class="col-data">: {{ $dataPeserta->alamat_pabrik }}</td>
                    </tr>
                    <tr>
                        <td>Email Sekretaris Perusahaan</td>
                        <td class="col-data">: {{ $dataPeserta->email_perusahaan }}</td>
                    </tr>
                    <tr>
                        <td>No. Telepon Perusahaan</td>
                        <td class="col-data">: {{ $dataPeserta->nomor_telepon }}</td>
                    </tr>
                    <tr>
                        <td>Website</td>
                        <td class="col-data">: {{ $dataPeserta->website }}</td>
                    </tr>
                    <tr>
                        <td>Organisasi Beroperasi Sejak</td>
                        <td class="col-data">: {{ date('d F Y', strtotime($dataPeserta->tahun_berdiri)) }}</td>
                    </tr>
                    <tr>
                        <td>Status Kepemilikan</td>
                        <td class="col-data">: {{ $dataPeserta->status_kepemilikan }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Produk Yang Dihasilkan</td>
                        <td class="col-data">: {{ $dataPeserta->tipe_produk }}</td>
                    </tr>
                    <tr>
                        <td>Apakah Produk Yang Dihasilkan Telah Diekspor?</td>
                        <td class="col-data">: {{ 1 == ($dataPeserta->ekspor) ? 'ya' : 'tidak' ; }} </td>
                    </tr>
                    <tr>
                        <td>Sektor dan Kategori Organisasi</td>
                        <td class="col-data">: {{ $dataPeserta->master_sektor_kategori_id }} </td>
                    </tr>
                    <tr>
                        <td>Kekayaan Bersih Organisasi</td>
                        <td class="col-data">: {{ "Rp " . number_format($dataPeserta->kekayaan_organisasi,2,',','.')}}</td>
                    </tr>
                    <tr>
                        <td>Hasil Penjualan Tahunan Organisasi</td>
                        <td class="col-data">:  {{ "Rp " . number_format($dataPeserta->hasil_penjualan_organisasi,2,',','.')}}</td>
                    </tr> 
                    <tr>
                        <td>Organisasi yang Didaftarkan Merupakan</td>
                        <td class="col-data">: {{ $dataPeserta->tipe_organisasi }}</td>
                    </tr>
                    <tr>
                        <td>Standar Nasional Indonesia yang Dimiliki</td>
                        <td class="col-data">: {{ $dataPeserta->tipe_sni  }} </td>
                    </tr>
                    </table>
                </div>
                </div>
            </div>
            </div>
            <div class="col-12">
            <div class="card card-body">
                <div style="justify-content: space-between; display: flex">
                <h3>Standar Nasional Indonesia yang Dimiliki</h3>
                <button type="button" data-toggle="modal" data-target="#form-sni-modal" class="btn btn-form-sni btn-sm btn-warning text-white mr-2">
                    Tambah
                </button>
                </div>
                <hr>
                @foreach ($dataSniPeserta as $item)
                <div class="row mt-2">
                    <div class="col-8 my-4">
                        <div>
                            <h4>
                            <b>{{ $item->no_sni}}</b>
                            <p>{{ $item->judul_sni }}</p>
                            
                            </h4>
                            <h5>{{ $item->nama_lembaga_sertifikasi }}</h5>
                        </div>
                    </div>
                    <div class="col- col-md-4 align-self-center">
                        <button type="button" data-toggle="modal" data-target="#form-sni-modal" data-id="{{ $item->id }}"
                            data-nomor-sni="{{ $item->master_sni_id }}" data-nama-lembaga-sertifikasi="{{ $item->nama_lembaga_sertifikasi }}"
                            class="btn btn-form-sni btn-sm btn-warning text-white float-right mr-2">Edit
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection