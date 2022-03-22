@extends('layouts.evaluator.master')
<style>
  .col-data {
    padding-left: 48px;
  }

</style>
@section('content')
  <div class="content-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="profile card card-body p-3" style="height: auto">
            <div class="profile-head">
              <div class="profile-info">
                <div class="profile-photo mt-0">
                  <img src="@if($evaluator->gambar) /storage/{{ $evaluator->gambar }} @else images/profile/profile.png @endif" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="profile-details">
                  <div class="profile-name px-3 pt-2">

                    <h3 class="text-primary mb-0">{{ $evaluator->gelar_sebelum_nama }} {{ $evaluator->nama_lengkap }} {{ $evaluator->gelar_setelah_nama }}</h3>
                    <h4 class="text-muted mb-0">{{ $peran }}</h4>
                  </div>
                  <div class="dropdown ml-auto">
                    <button type="button" data-toggle="modal" data-target="#edit-profile-modal" onclick="showModal()" class="btn btn-sm btn-warning text-white mr-2">
                      Edit Profile
                    </button>
                    {{-- <button class="btn btn-sm btn-info">Pdf</button> --}}
                  </div>
                </div>
              </div>
              <div style="padding: 15px 20px">
                <table>
                  <tr>
                    <td>Gender</td>
                    <td class="col-data">: @if ($evaluator->jenis_kelamin == "P") Perempuan @else Laki Laki @endif</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td class="col-data">: {{ $evaluator->tgl_lahir }}</td>
                  </tr>
                  <tr>
                    <td>Pekerjaan</td>
                    <td class="col-data">: {{ $evaluator->pekerjaan }}</td>
                  </tr>
                  <tr>
                    <td>Nama Instansi</td>
                    <td class="col-data">: {{ $evaluator->nama_instansi }}</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td class="col-data">: {{ $evaluator->alamat }}</td>
                  </tr>
                  <tr>
                    <td>No. Telepon</td>
                    <td class="col-data">: {{ $evaluator->nomor_telepon }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card card-body">
            <div style="justify-content: space-between; display: flex">
              <h3>Riwayat Pendidikan</h3>
              <button type="button" data-toggle="modal" data-target="#form-riwayat-pendidikan-modal"
                class="btn btn-form-riwayat-pendidikan btn-sm btn-warning text-white mr-2">
                Tambah
              </button>
            </div>
            <hr>
            <div class="row mt-2">
              @foreach ($dataPendidikan as $pendidikan)
                <div class="col-12">
                  <div>
                    <h4>

                      <b>{{ $pendidikan->nama_kampus }}</b>
                      <button type="button" data-toggle="modal" data-target="#form-riwayat-pendidikan-modal" data-id="{{ $pendidikan->id }}"
                        data-nama-kampus="{{ $pendidikan->nama_kampus }}" data-jenjang="{{ $pendidikan->jenjang }}"
                        data-program-studi="{{ $pendidikan->program_studi }}" data-tahun-masuk="{{ $pendidikan->tahun_masuk }}"
                        data-tahun-lulus="{{ $pendidikan->tahun_lulus }}" data-old-ijazah = "{{ $pendidikan->ijazah }}"
                        class="btn btn-form-riwayat-pendidikan btn-sm btn-primary float-right mr-2">Edit</button>
                    </h4>
                    <h5>{{ $pendidikan->program_studi }}</h5>
                    <p>{{ $pendidikan->tahun_masuk }}-{{ $pendidikan->tahun_lulus }}</p>
                  </div>
                </div>
              @endforeach
            </div>
            <hr>

            <div style="justify-content: space-between; display: flex">
              <h3>Riwayat Pekerjaan</h3>
              <button type="button" data-toggle="modal" data-target="#form-riwayat-pekerjaan-modal"
                class="btn btn-form-riwayat-pekerjaan btn-sm btn-warning text-white mr-2">
                Tambah
              </button>
            </div>
            <hr>
            <div class="row mt-2">
              @foreach ($dataPekerjaan as $pekerjaan)
                <div class="col-12">
                  <div>
                    <h4>
                      <b>{{ $pekerjaan->jabatan }}</b>
                      <button type="button" data-toggle="modal" data-target="#form-riwayat-pekerjaan-modal" data-id="{{ $pekerjaan->id }}"
                        data-jabatan="{{ $pekerjaan->jabatan }}" data-instansi="{{ $pekerjaan->instansi }}"
                        data-tahun-mulai="{{ $pekerjaan->tahun_mulai }}" data-tahun-selesai="{{ $pekerjaan->tahun_selesai }}"
                        class="btn btn-form-riwayat-pekerjaan btn-sm btn-primary float-right mr-2">
                        Edit
                      </button>
                    </h4>
                    <h5>{{ $pekerjaan->instansi }}</h5>
                    <p>{{ $pekerjaan->tahun_mulai }}-{{ $pekerjaan->tahun_selesai }}</p>
                  </div>
                </div>
              @endforeach
            </div>
            <hr>

            <div style="justify-content: space-between; display: flex">
              <h3>Riwayat Pelatihan</h3>
              <button type="button" data-toggle="modal" data-target="#form-riwayat-pelatihan-modal"
                class="btn btn-form-riwayat-pelatihan btn-sm btn-warning text-white mr-2">
                Tambah
              </button>
            </div>
            <hr>
            <div class="row mt-2">
              @foreach ($dataPelatihan as $pelatihan)
                <div class="col-12">
                  <div>
                    <h4>
                      <b>{{ $pelatihan->nama_pelatihan }}</b>
                      <button type="button" data-toggle="modal" data-target="#form-riwayat-pelatihan-modal" data-id="{{ $pelatihan->id }}"
                        data-nama-pelatihan="{{ $pelatihan->nama_pelatihan }}" data-tahun-pelatihan="{{ $pelatihan->tahun_pelatihan }}" data-old-sertifikat = "{{ $pelatihan->sertifikat_pelatihan }}"
                        class="btn btn-form-riwayat-pelatihan btn-sm btn-primary float-right mr-2">

                        Edit
                      </button>
                    </h4>
                    <p>{{ $pelatihan->tahun_pelatihan }}</p>
                  </div>
                </div>
              @endforeach
            </div>
            <hr>

            <div style="justify-content: space-between; display: flex">
              <h3>Riwayat Desk Evaluation (DE)</h3>
              <button type="button" data-toggle="modal" data-target="#form-riwayat-de-modal" class="btn btn-sm btn-warning text-white mr-2">
                Tambah
              </button>
            </div>
            <hr>
            <div class="row mt-2">
              {{-- TODO: isi data dengan data real pake foreach, sementara pake data statis --}}
              {{-- @foreach ($dataDE as $de)
                <div class="col-12">
                  <div>
                    <h4>
                      <b>{{ $de['nama_kegiatan'] }}</b>
                      <button type="button" data-toggle="modal" data-target="#form-riwayat-de-modal" data-id="{{ $de['id'] }}"
                        data-nama-kegiatan="{{ $de['nama_kegiatan'] }}" data-nama-instansi="{{ $de['nama_instansi'] }}" data-tahun="{{ $de['tahun'] }}"
                        class="btn btn-form-riwayat-de btn-sm btn-warning text-white float-right mr-2">
                        Edit
                      </button>
                    </h4>
                    <h5>{{ $de['nama_instansi'] }}</h5>
                    <p>{{ $de['tahun'] }}</p>
                  </div>
                </div>
              @endforeach --}}
            </div>
            <hr>

            <div style="justify-content: space-between; display: flex">
              <h3>Riwayat Side Evaluation (SE)</h3>
              <button type="button" data-toggle="modal" data-target="#form-riwayat-se-modal" class="btn btn-sm btn-warning text-white mr-2">
                Tambah
              </button>
            </div>
            <hr>
            <div class="row mt-2">
              {{-- TODO: isi data dengan data real pake foreach, sementara pake data statis --}}
              {{-- @foreach ($dataSE as $se)
                <div class="col-12">
                  <div>
                    <h4>
                      <b>{{ $se['nama_kegiatan'] }}</b>
                      <button type="button" data-toggle="modal" data-target="#form-riwayat-se-modal" data-id="{{ $se['id'] }}"
                        data-nama-kegiatan="{{ $se['nama_kegiatan'] }}" data-nama-instansi="{{ $se['nama_instansi'] }}"
                        data-lokasi-instansi="{{ $se['lokasi_instansi'] }}" data-tahun="{{ $se['tahun'] }}"
                        class="btn btn-form-riwayat-se btn-sm btn-warning text-white float-right mr-2">
                        Edit
                      </button>
                    </h4>
                    <h5>{{ $se['nama_instansi'] }}</h5>
                    <p>{{ $se['tahun'] }}</p>
                  </div>
                </div>
              @endforeach --}}
            </div>
            <hr>
          </div>
        </div>
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
            <form class="comment-form" action="{{ route('profilevaluator.update', $evaluator->user_id) }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <input type="hidden" name="oldGambar" value="{{ $evaluator->gambar }}">
              <input type="hidden" name="oldNpwp" value="{{ $evaluator->npwp }}">
              <input type="hidden" name="oldKtp" value="{{ $evaluator->ktp }}">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Nama Lengkap <span class="required">*</span></label>
                    <input type="text" class="form-control" value="{{ $evaluator->nama_lengkap }}" name="nama_lengkap">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Gelar Sebelum Nama <span class="required">*</span></label>
                    <input type="text" class="form-control" value="{{ $evaluator->gelar_sebelum_nama }}" name="gelar_sebelum_nama">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Gelar Setelah Nama <span class="required">*</span></label>
                    <input type="text" class="form-control" value="{{ $evaluator->gelar_setelah_nama }}" name="gelar_setelah_nama">
                  </div>
                </div>
                <div class="col-lg-12">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <div class="form-group mb-0 @error('jenis_kelamin') is-invalid @enderror">
                      @if ($evaluator->jenis_kelamin== "P")
                          <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="L"> Laki Laki</label>
                          <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="P" checked> Perempuan</label>
                      @else
                          <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="L" checked> Laki Laki</label>
                          <label class="radio-inline mr-3"><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                      @endif
                  </div>
                  @error('jenis_kelamin')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Tanggal Lahir <span class="required">*</span></label>
                    <input type="date" class="form-control" value="{{ $evaluator->tgl_lahir }}" name="tgl_lahir">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Pekerjaan <span class="required">*</span></label>
                    <input type="text" class="form-control" value="{{ $evaluator->pekerjaan }}" name="pekerjaan">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Nama Instansi <span class="required">*</span></label>
                    <input type="text" class="form-control" value="{{ $evaluator->nama_instansi }}" name="nama_instansi">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Alamat <span class="required"></label>
                    <textarea rows="8" class="form-control" name="alamat" required>{{ $evaluator->alamat }}</textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Provinsi <span class="required">*</span></label>
                    <select class="form-control" id="provinsi" name="master_provinsi_id">
                      @foreach ($dataProvinsi as $provinsi)
                        @if (old('master_provinsi_id',$evaluator->master_provinsi_id)==$provinsi->id)
                            <option value="{{ $provinsi->id }}" selected>{{ $provinsi->nama }}</option>
                        @else
                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Kota <span class="required">*</span></label>
                    <select class="form-control" id="kabupaten" name="master_kota_kabupaten_id">
                      @foreach ($dataKabupaten as $kabupaten)
                          @if (old('master_kota_kabupaten_id',$evaluator->master_kota_kabupaten_id)==$kabupaten->id)
                              <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->nama }}</option>
                          @endif
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Telepon <span class="required">*</span></label>
                    <input type="text" class="form-control" value="{{ $evaluator->nomor_telepon }}" name="nomor_telepon">
                  </div>
                </div>
                <div class="col-lg-12">
                    <label for="gambar">gambar</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" accept=".png, .jpg, .jpeg" class="custom-file-input @error('gambar') is-invalid @enderror" name="gambar">
                            <label class="custom-file-label">Pilih File ...</label>
                            @error('gambar')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="ktp">KTP</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" accept=".pdf" class="custom-file-input @error('ktp') is-invalid @enderror" name="ktp">
                            <label class="custom-file-label">Pilih File ...</label>
                            @error('ktp')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="npwp">NPWP</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" accept=".pdf" class="custom-file-input @error('npwp') is-invalid @enderror" name="npwp">
                            <label class="custom-file-label">Pilih File ...</label>
                            @error('npwp')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
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

    {{-- Modal Form Riwayat Pendidikan --}}
    <div class="modal fade" id="form-riwayat-pendidikan-modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Simpan Riwayat Pendidikan</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="comment-form" action="{{ route('evaluatorPendidikan') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" id="pendidikan-id" name="id">
              <input type="hidden" id= "pendidikan-old-ijazah" name="oldIjazah">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Nama Universitas <span class="required">*</span></label>
                    <input type="text" class="form-control" value="" id="pedidikan-nama-kampus" name="nama_kampus">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Jenjang <span class="required">*</span></label>
                    <select class="form-control" id="pedidikan-jenjang" name="jenjang">
                      <option value="D3">D3</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Program Studi <span class="required">*</span></label>
                    <input type="text" class="form-control" id="pedidikan-program-studi" value="" name="program_studi">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Tahun Masuk <span class="required">*</span></label>
                    <input type="text" class="form-control" value="" id="pedidikan-tahun-masuk" name="tahun_masuk">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Tahun Keluar <span class="required">*</span></label>
                    <input type="text" class="form-control" value="" id="pedidikan-tahun-lulus" name="tahun_lulus">
                  </div>
                </div>
                <div class="col-lg-12">
                    <label for="ijazah">Ijazah</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" accept=".pdf" class="custom-file-input @error('ijazah') is-invalid @enderror" name="ijazah">
                            <label class="custom-file-label">Pilih File ...</label>
                            @error('ijazah')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
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
    {{-- Modal Form Riwayat Pendidikan --}}

    {{-- Modal Form Riwayat Pekerjaan --}}
    <div class="modal fade" id="form-riwayat-pekerjaan-modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Simpan Riwayat Pekerjaan</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="comment-form" action="{{ route('evaluatorPekerjaan') }}" method="POST">
              @csrf
              <input type="hidden" name="id" id="pekerjaan-id">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Jabatan <span class="required">*</span></label>
                    <input id="pekerjaan-jabatan" type="text" class="form-control" value="" name="jabatan">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Nama Instansi <span class="required">*</span></label>
                    <input id="pekerjaan-instansi" type="text" class="form-control" value="" name="instansi">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Tahun Mulai <span class="required">*</span></label>
                    <input id="pekerjaan-tahun-mulai" type="text" class="form-control" value="" name="tahun_mulai">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Tahun Selesai <span class="required">*</span></label>
                    <input id="pekerjaan-tahun-selesai" type="text" class="form-control" value="" name="tahun_selesai">
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
    {{-- Modal Form Riwayat Pekerjaan --}}

    {{-- Modal Form Riwayat Pelatihan --}}
    <div class="modal fade" id="form-riwayat-pelatihan-modal">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Simpan Riwayat Pelatihan</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="comment-form" action="{{ route('evaluatorPelatihan') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" id="pelatihan-id">
              <input type="hidden" name="oldSertifikat" id="pelatihan-old-sertifikat">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="text-black font-w600">Nama Pelatihan <span class="required">*</span></label>
                    <input type="text" class="form-control" value="" name="nama_pelatihan" id="pelatihan-nama-pelatihan">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="text-black font-w600">Tanggal Pelatihan <span class="required">*</span></label>
                    <input type="text" class="form-control" value="" name="tahun_pelatihan" id="pelatihan-tahun-pelatihan">
                  </div>
                </div>
                <div class="col-lg-12">
                    <label for="sertifikat_pelatihan">Sertifikat</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" accept=".pdf" class="custom-file-input @error('sertifikat_pelatihan') is-invalid @enderror" name="sertifikat_pelatihan">
                            <label class="custom-file-label">Pilih File ...</label>
                            @error('sertifikat_pelatihan')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
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
    {{-- Modal Form Riwayat Pelatihan --}}
  </div>
@endsection
@push('scripts')
  <script>
    $(document).on("click", ".btn-form-riwayat-pendidikan", function() {
      var id = $(this).data('id');

      if (id != null) {
        var oldIjazah = $(this).data('old-ijazah')
        var namaKampus = $(this).data('nama-kampus');
        var jenjang = $(this).data('jenjang');
        var programStudi = $(this).data('program-studi');
        var tahunMasuk = $(this).data('tahun-masuk');
        var tahunLulus = $(this).data('tahun-lulus');
        
        $(".modal-body #pendidikan-id").val(id);
        $(".modal-body #pendidikan-old-ijazah").val(oldIjazah);
        $(".modal-body #pedidikan-nama-kampus").val(namaKampus);
        $(".modal-body #pedidikan-jenjang").val(jenjang).change();
        $(".modal-body #pedidikan-program-studi").val(programStudi);
        $(".modal-body #pedidikan-tahun-masuk").val(tahunMasuk);
        $(".modal-body #pedidikan-tahun-lulus").val(tahunLulus);
      }
    });
    

    $(document).on("click", ".btn-form-riwayat-pekerjaan", function() {
      var id = $(this).data('id');

      if (id != null) {
        var jabatan = $(this).data('jabatan');
        var instansi = $(this).data('instansi');
        var tahunMulai = $(this).data('tahun-mulai');
        var tahunSelesai = $(this).data('tahun-selesai');

        $(".modal-body #pekerjaan-id").val(id);
        $(".modal-body #pekerjaan-jabatan").val(jabatan);
        $(".modal-body #pekerjaan-instansi").val(instansi).change();
        $(".modal-body #pekerjaan-tahun-mulai").val(tahunMulai);
        $(".modal-body #pekerjaan-tahun-selesai").val(tahunSelesai);
      }
    });

    $(document).on("click", ".btn-form-riwayat-pelatihan", function() {
      var id = $(this).data('id');

      if (id != null) {
        var namaPelatihan = $(this).data('nama-pelatihan');
        var tahun_pelatihan = $(this).data('tahun-pelatihan');
        var oldSertifikat = $(this).data('old-sertifikat');

        $(".modal-body #pelatihan-id").val(id);
        $(".modal-body #pelatihan-old-sertifikat").val(oldSertifikat);
        $(".modal-body #pelatihan-nama-pelatihan").val(namaPelatihan);
        $(".modal-body #pelatihan-tahun-pelatihan").val(tahun_pelatihan);
      }
    });

    $(document).on("click", ".btn-form-riwayat-de", function() {
      var id = $(this).data('id');

      if (id != null) {
        var namaKegiatan = $(this).data('nama-kegiatan');
        var namaInstansi = $(this).data('nama-instansi');
        var tahun = $(this).data('tahun');

        $(".modal-body #de-id").val(id);
        $(".modal-body #de-nama-kegiatan").val(namaKegiatan);
        $(".modal-body #de-nama-instansi").val(namaInstansi);
        $(".modal-body #de-tahun").val(tahun);
      }
    });

    $(document).on("click", ".btn-form-riwayat-se", function() {
      var id = $(this).data('id');

      if (id != null) {
        var namaKegiatan = $(this).data('nama-kegiatan');
        var namaInstansi = $(this).data('nama-instansi');
        var lokasiInstansi = $(this).data('lokasi-instansi');
        var tahun = $(this).data('tahun');

        $(".modal-body #se-id").val(id);
        $(".modal-body #se-nama-kegiatan").val(namaKegiatan);
        $(".modal-body #se-nama-instansi").val(namaInstansi);
        $(".modal-body #se-lokasi-instansi").val(lokasiInstansi).change();
        $(".modal-body #se-tahun").val(tahun);
      }
    });
  </script>
@endpush
