@extends('layouts.evaluator.master')
@section('content')
  <div class="content-body">
    <div class="container-fluid">
        <div class="page-titles ">
            <ol class="breadcrumb d-flex justify-content-between align-items-center">
              <li class="breadcrumb-item active mr-auto"><a href="javascript:void(0)">Feedback</a></li>
              <li>
                
              </li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-responsive-lg mb-5 table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th class="pl-5 width200">Nama Organisasi</th>
                          <th>Tipe Organisasi</th>
                          <th>No Telepon</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                    </table>         
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection