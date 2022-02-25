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
      <div class="page-titles">
        <ol class="breadcrumb d-flex justify-content-between align-items-center">
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Dokumentasi</a></li>
          <li>
            <a href="{{ route('dokumentasi.create') }}" class="btn btn-primary btn-event w-100" style="color: #ffffff">
              <span class="align-middle"><i class="ti-plus"></i></span> Tambah Dokumen
            </a>
          </li>
        </ol>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive-lg mb-0 table-striped" id="dokumentasiTable">
                  <thead>
                    <tr>
                      <th>Judul Dokumentasi</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($dataGambar as $dokumentasi)
                      <tr>
                        <td>{{ $dokumentasi->judul }}</td>
                        <td>{{ $dokumentasi->deskripsi }}</td>
                        <td>
                          <img style="width: 240px; height: 180px; object-fit:cover;" src="{{ asset('storage/' . $dokumentasi->nama_file) }}" alt="">
                        </td>
                        <td>
                          <a class="btn btn-warning text-white" href="{{ route('dokumentasi.edit', $dokumentasi->id) }}">Edit</a>

                          <form class="d-inline" action="{{ route('dokumentasi.destroy', $dokumentasi->id) }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        {{-- @foreach ($dataGambar as $data)
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
                    <div class="dropdown ">
                      <button class="btn btn-primary tp-btn-light sharp " type="button" data-toggle="dropdown">
                        <span class="fs--1">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
                            version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                              <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                            </g>
                          </svg>
                        </span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right border py-0">
                        <form action="{{ route('dokumentasi.edit', $data->id) }}" method="GET">
                          @csrf
                          <button type="submit" class="dropdown-item"><span>Ubah</span>
                          </button>
                        </form>
                        <form action="{{ route('dokumentasi.destroy', $data->id) }}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="dropdown-item text-danger"
                            onclick="return confirm('apakah yakin ingin menghapus data ini? ')"><span>Hapus</span>
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach --}}
      </div>
    </div>
  </div>
@endsection
