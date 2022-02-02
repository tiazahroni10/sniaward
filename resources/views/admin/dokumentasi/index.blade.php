@extends('layouts.admin.master')
@section('content')
<div class="content-body">
    @if (session()->has('sukses'))
				<div class="alert alert-success solid alert-dismissible fade show">
					<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
					<strong>{{ session('sukses') }}</strong>
					<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
					</button>
				</div>
				@endif
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb d-flex justify-content-between align-items-center">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Dokumentasi</a></li>
                <li><a href="{{ route('dokumentasi.create') }}" class="btn btn-primary btn-event w-100" style="color: #ffffff">
                    <span class="align-middle"><i class="ti-plus"></i></span> Tambah Dokumen
                </a></li>
            </ol>
        </div>
        <div class="row">
            
            @foreach ($dataGambar as $data)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" src="/storage/{{ $data->nama_file }}" alt="">
                                </div>
                                <div class="new-arrival-content text-center mt-3">
                                    <h4>{{ $data->judul }}</h4>
                                    <p>{{ $data->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection