@extends('layouts.admin.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb d-flex justify-content-between align-items-center">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Dokumentasi</a></li>
                <li><a href="/admin/tambahdokumentasi" class="btn btn-primary btn-event w-100" style="color: #ffffff">
                    <span class="align-middle"><i class="ti-plus"></i></span> Tambah Dokumen
                </a></li>
            </ol>
        </div>
        <div class="row">
            
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/2.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="ecom-product-detail.html">Juara 1 SNI Award</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection