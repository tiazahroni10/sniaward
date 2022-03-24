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
                    <tr>
                      <td>KTP</td>
                      <td class="col-data">: <a href="" class="text-warning">Lihat Dokumen</a> </td>
                    </tr>
                    <tr>
                      <td>NPWP</td>
                      <td class="col-data">: <a href="" class="text-warning">Lihat Dokumen</a> </td>
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

            {{-- Modals Edit Profil --}}
    <div class="modal fade" id="edit-profile-modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Profil</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="comment-form" action="{{ route('profilpeserta.update', $user->id) }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Nama Organisasi <span class="required text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $user->peserta->nama_organisasi }}" name="nama_organisasi">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Alamat Organisasi <span class="required"></label>
                    <textarea rows="8" class="form-control" name="alamat_organisasi" required>{{ $user->peserta->alamat_organisasi }}</textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Provinsi <span class="text-danger">*</span></label>
                    <select class="form-control" id="provinsi" name="master_provinsi_id">
                      @foreach ($dataProvinsi as $provinsi)
                        @if (old('master_provinsi_id',$user->peserta->master_provinsi_id)==$provinsi->id)
                            <option value="{{ $provinsi->id }}" selected>{{ $provinsi->nama }}</option>
                        @else
                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Kota <span class="required text-danger">*</span></label>
                    <select class="form-control" id="kabupaten" name="master_kota_kabupaten_id">
                      @foreach ($dataKabupaten as $kabupaten)
                          @if (old('master_kota_kabupaten_id',$user->peserta->master_kota_kabupaten_id)==$kabupaten->id)
                              <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->nama }}</option>
                          @endif
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Alamat Pabrik <span class="required"></label>
                    <textarea rows="8" class="form-control" name="alamat_pabrik" required>{{ $user->peserta->alamat_pabrik }}</textarea>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Email Sekretariat Perusahaan <span class="required text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $user->peserta->email_perusahaan }}" name="email_perusahaan">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">No. Telepon Perusahaan <span class="required text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $user->peserta->nomor_telepon }}" name="nomor_telepon">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Website <span class="required text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $user->peserta->website }}" name="website">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Organisasi Beroperasi Sejak <span class="required text-danger">*</span></label>
                    <input type="date" class="form-control" value="{{ $user->peserta->tahun_berdiri }}" name="tahun_berdiri">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Status Kepemilikan <span class="required">*</span></label>
                    <select name="status_kepemilikan" id="" class="form-control">
                      <option value="">Pilih Status</option>
                      <option {{ $user->peserta->status_kepemilikan == 'pribadi' ? 'selected' : '' }} value="pribadi">Pribadi</option>
                      <option {{ $user->peserta->status_kepemilikan == 'umum' ? 'selected' : '' }} value="umum">Umum</option>
                      <option {{ $user->peserta->status_kepemilikan == 'negara' ? 'selected' : '' }} value="negara">Negara</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Jenis Produk yang Dihasilkan <span class="required text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ $user->peserta->tipe_produk }}" name="tipe_produk">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Apakah Produk Telah Diekspor? <span class="required text-danger">*</span></label>
                    <input type="radio" name="ekspor" id="ya" value="1">
                    <label for="ya">YA</label>
                    <input type="radio" name="ekspor" id="tidak" value="0">
                    <label for="tidak">TIDAK</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" value="" placeholder="Negara" name="negara_ekspor">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="year" class="form-control" value="" placeholder="Tahun" name="tahun_ekspor">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Sektor Kategori Organisasi <span class="required text-danger">*</span></label>
                    <select name="master_sektor_kategori_id" id="master_sektor_kategori_id">
                        @if ($user->peserta->master_sektor_kategori_id)
                            <option value="">Pilih...</option>
                        @endif
                      @foreach ($dataSektorKategori as $item)
                        @if (old('master_sektor_kategori_id',$user->peserta->master_sektor_kategori_id)==$item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->nama_kategori }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                        @endif
                      @endforeach
                      
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Kekayaan Bersih Organisasi <span class="required text-danger">*</span></label>
                    <input type="number" class="form-control" value="{{ $user->peserta->kekayaan_organisasi }}" name="kekayaan_organisasi">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Hasil Penjualan Tahunan Organisasi <span class="required text-danger">*</span></label>
                    <input type="number" class="form-control" value="{{ $user->peserta->hasil_penjualan_organisasi }}" name="hasil_penjualan_organisasi">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Organisasi yang Didaftarkan Merupakan <span class="required text-danger">*</span></label>
                    <select name="tipe_organisasi" id="tipe_organisasi">
                      <option {{ $user->peserta->tipe_organisasi == 'induk' ? 'selected' : '' }} value="induk">Induk</option>
                      <option {{ $user->peserta->tipe_organisasi == 'anak' ? 'selected' : '' }} value="anak">Anak Perusahaan</option>
                      <option {{ $user->peserta->tipe_organisasi == 'cabang' ? 'selected' : '' }} value="cabang">Cabang</option>
                      <option {{ $user->peserta->tipe_organisasi == 'none' ? 'selected' : '' }} value="none">Tidak Memiliki Anak Perusahaan atau Cabang
                      </option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Standar Nasional yang Dimiliki <span class="required text-danger">*</span></label>
                    <br>
                    <input type="checkbox" name="sni[]" id="sni-produk" value="produk" @if (str_contains($user->peserta->tipe_sni, 'produk')) checked @endif>
                    <label for="sni-produk">Produk</label>
                    <input type="checkbox" name="sni[]" id="sni-sistem" value="sistem" @if (str_contains($user->peserta->tipe_sni, 'sistem')) checked @endif>
                    <label for="sni-sistem">Sistem</label>
                    <input type="checkbox" name="sni[]" id="sni-proses" value="proses" @if (str_contains($user->peserta->tipe_sni, 'proses')) checked @endif>
                    <label for="sni-proses">Proses</label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Foto Profil</label>
                    <div class="form-group" id="imagePreview">
                        @if ($user->peserta->gambar)
                        <img src="/storage/{{ $user->peserta->gambar }}" class="img-preview img-fluid mb-3 col-sm-5">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                  </div>
                  <div class="custom-file">
                      <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input @error('gambar') is-invalid @enderror" name="gambar">
                      <label class="custom-file-label">Pilih file</label>
                  @error('gambar')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                  </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-black font-w600">KTP <span class="required text-danger">*</span></label>
                  <div class="form-group" id="imagePreview">
                      @if ($user->peserta->gambar)
                      <img src="/storage/{{ $user->peserta->gambar }}" class="img-preview img-fluid mb-3 col-sm-5">
                      @else
                      <img class="img-preview img-fluid mb-3 col-sm-5">
                      @endif
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input @error('gambar') is-invalid @enderror" name="gambar">
                    <label class="custom-file-label">Pilih file</label>
                @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-black font-w600">NPWP <span class="required text-danger">*</span></label>
                  <div class="form-group" id="imagePreview">
                      @if ($user->peserta->gambar)
                      <img src="/storage/{{ $user->peserta->gambar }}" class="img-preview img-fluid mb-3 col-sm-5">
                      @else
                      <img class="img-preview img-fluid mb-3 col-sm-5">
                      @endif
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input @error('gambar') is-invalid @enderror" name="gambar">
                    <label class="custom-file-label">Pilih file</label>
                @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0 text-right">
                    <button type="submit" class="submit btn btn-sm btn-warning text-white" name="submit">Simpan</button>
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                    
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- Modal Edit Profil --}}
        </div>
    </div>
</div>
@endsection