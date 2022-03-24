@extends('layouts.admin.master')
@section('content')
  <div class="content-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-warning mr-md-4 mr-3">
                  <img alt="image" width="40" height="37" src="{{ asset('admin') }}/icons/peserta.svg" alt="">
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Peserta</p>
                  <span class="title text-black font-w600"></span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                  <span class="sr-only"></span>
                </div>
              </div>
            </div>
            <div class="effect bg-warning"></div>
          </div>
        </div>
        
        <div class="col-sm-6">
          <div class="card avtivity-card">
            <div class="card-body">
              <div class="media align-items-center">
                <span class="activity-icon bgl-warning mr-md-4 mr-3">
                  <img alt="image" width="40" height="37" src="{{ asset('admin') }}/icons/evaluator.svg" alt="">
                </span>
                <div class="media-body">
                  <p class="fs-14 mb-2">Evaluator</p>
                  <span class="title text-black font-w600"></span>
                </div>
              </div>
              <div class="progress" style="height:5px;">
                <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                  <span class="sr-only"></span>
                </div>
              </div>
            </div>
            <div class="effect bg-warning"></div>
          </div>
        </div>
      </div>

      <div class="page-titles ">
        <ol class="breadcrumb d-flex justify-content-between align-items-center">
          <li class="breadcrumb-item active mr-auto align-items-center"><a href="javascript:void(0)">Daftar Acara Yang Akan Datang</a></li>
          <li>
            
          </li>
        </ol>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Akhir</th>
					  <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
    
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
