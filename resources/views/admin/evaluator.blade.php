@extends('layouts.admin.master')
@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles ">
					<ol class="breadcrumb d-flex justify-content-between align-items-center">
						<li class="breadcrumb-item active mr-auto"><a href="javascript:void(0)">Daftar Nama Evaluator</a></li>
                        <li><div class="input-group search-area d-xl-inline-flex d-none mr-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Cari Evaluator . . .">
                        </div>
                        </li>
                        <li><a href="javascript:void()" class="btn btn-primary btn-event w-100" style="color: #ffffff">
                            <span class="align-middle"><i class="ti-plus"></i></span> Tambah Evaluator
                        </a></li>
                        
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
                                                <th class="">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkAll">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
                                                </th>
                                                <th>User Id</th>
                                                <th class="pl-5 width200">Nama Evaluator</th>
                                                <th class="pl-5 width200">Status</th>
                                                <th class="pl-5 width200">No Telepon</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <tr class="btn-reveal-trigger">
                                                <td>
                                                    <div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkbox1">
														<label class="custom-control-label" for="checkbox1"></label>
													</div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="#">
                                                        <div class="media-body">
                                                            <h5 class="mb-0 fs--1">1</h5>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2 pl-5 wspace-no"><a
                                                        href="mailto:ricky@example.com">Ridhal Fajri</a></td>
                                                <td class="py-2 pl-5 wspace-no">Ketua Evaluator</td>
                                                <td class="py-2 pl-5 wspace-no">082285497645</td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2"><a class="dropdown-item"  href="#!">Ubah</a><a class="dropdown-item text-danger" href="#!">Hapus</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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