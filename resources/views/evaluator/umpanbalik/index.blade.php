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
@endsection
