@extends('layouts.evaluator.master')
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
      @if (session()->has('lengkapi'))
        <div class="alert alert-warning solid alert-dismissible fade show">
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
      <div class="page-titles ">
        <ol class="breadcrumb d-flex justify-content-between align-items-center">
          <li class="breadcrumb-item active mr-auto"><a href="javascript:void(0)">Verifikasi Dokumen</a></li>
          <li>
            <div class="input-group search-area d-xl-inline-flex d-none mr-3">
              <div class="input-group-append">
                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
              </div>
              <input type="text" class="form-control" placeholder="Cari Dokumen . . .">
            </div>
          </li>
        </ol>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive-lg mb-0 table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th class="pl-5 width200">Nama File</th>
                      <th class="pl-5">Status</th>
                      <th class="text-right">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="customers">
                    @foreach ($dataDokumen as $data)
                      <tr class="btn-reveal-trigger">
                        <td class="py-3">
                          <a href="#">
                            <div class="media-body">
                              <h5 class="mb-0 fs--1">{{ $loop->iteration }}</h5>
                            </div>
                          </a>
                        </td>
                        <td class="py-2 pl-5"><a href="/storage/{{ $data->nama_file }}">{{ $data->nama_dokumen }}</a></td>
                        <td class="py-2 pl-5">
                          @if ($data->status == 1)
                              <span class="badge badge-success">Telah verifikasi</span>
                          @elseif($data->status == 2)
                              <span class="badge badge-warning">Belum lengkap</span>
                          @else
                              <span class="badge badge-dark">Menunggu</span>
                          @endif
                        </td>
                        <td class="text-right">
                          @if (!$data->status)
                            <a href="{{ route('verifikasiBerkasDokumen', [$data->id, $data->user_id, $data->master_unggah_lampiran_id]) }}" class="badge badge-secondary" type="submit">Verifikasi</a>
                            <a href="{{ route('lengkapiBerkasDokumen', [$data->id, $data->user_id, $data->master_unggah_lampiran_id]) }}" class="badge badge-danger" style="display: inline" type="submit">Belum lengkap</a>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <h4 class="mt-4">Feedback</h4>
              <form action="">
                <textarea class="form-control mt-2" name="feedback" id="feedback" cols="30" rows="10"></textarea>
                <button class="btn btn-primary mt-2">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
