@extends('layouts.evaluator.master')
@section('content')
  <div class="content-body">
    <div class="container-fluid">
      <div class="page-titles ">
        <ol class="breadcrumb d-flex justify-content-between align-items-center">
          <li class="breadcrumb-item active mr-auto"><a href="javascript:void(0)">Daftar Peserta</a></li>
          <li>
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
                      <th class="pl-5 width200">Nama Peserta</th>
                      <th class="pl-5">Status</th>
                      <th class="pl-5">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="customers">
                      <tr class="btn-reveal-trigger">
                        <td class="py-3 col-2">
                          <a href="#">
                            <div class="media-body">
                              <h5 class="mb-0 fs--1"></h5>
                            </div>
                          </a>
                        </td>
                        <td class="py-2 pl-5 wspace-no col-8"></td>
                        <td>
                          <a class="badge badge-warning text-white" style=" pointer-events:none " href="">Unggah File</a>
                        </td>
                        <td>
                          <div class="badge badge-success text-white"  >Selesai</div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Modal Tambah SNI --}}
  <div class="modal fade" id="form-upload-file">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Umpan balik</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="comment-form" action="{{ route('uploadFilePenugasanSe') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="id" id="upload-id">
                    <div class="row">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" accept=".pdf" class="custom-file-input @error('file_penilaian') is-invalid @enderror" name="file_penilaian">
                                <label class="custom-file-label">Pilih File ...</label>
                                @error('file_penilaian')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="submit btn btn-sm btn-warning text-white" name="submit">Simpan</button>
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    {{-- Modal Tambah SNI --}}
@endsection
@push('scripts')
<script>
    $(document).on("click", ".btn-form-upload", function() {
    var id = $(this).data('id');

    console.log(id);

    if (id != null) {
        $(".modal-body #upload-id").val(id);
    }
    });
</script>
@endsection
