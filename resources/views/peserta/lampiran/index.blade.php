@extends('layouts.peserta.master')
@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-responsive-lg text-black">
                                        <thead>
                                            
                                                <th class="align-middle">Nama Lampiran</th>
                                                <th class="align-middle pr-7">Tanggal Upload</th>
                                                <th class="align-middle text-right">Status</th>
                                                <th class="align-middle text-right">Aksi</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orders">
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">Scan legalitas hukum organisasi (SIUP/Akte Perusahaan)</td>
                                                <td class="py-2">20/04/2020</td>
                                                
                                                <td class="py-2 text-right"><span class="badge badge-success">Sukses<span
                                                            class="ml-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-right"><a href="{{ route('lampiran.create') }}" class="btn btn-primary btn-xs">Unggah</a></td>
                                                
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">Lembar Pernyataan Tidak Terlibat Hukum Selama 3 Tahun Terakhir</td>
                                                <td class="py-2">20/04/2020</td>
                                                
                                                <td class="py-2 text-right"><span class="badge badge-light">Belum<span
                                                            class="ml-1 fa fa-warning"></span></span>
                                                </td>
                                                <td class="py-2 text-right"><a href="{{ route('lampiran.create') }}" class="btn btn-primary btn-xs">Unggah</a></td>
                                                
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">Sertifikat SNI yang dimiliki</td>
                                                <td class="py-2">20/04/2020</td>
                                                
                                                <td class="py-2 text-right"><span class="badge badge-light">Belum<span
                                                            class="ml-1 fa fa-warning"></span></span>
                                                </td>
                                                <td class="py-2 text-right"><a href="{{ route('lampiran.create') }}" class="btn btn-primary btn-xs">Unggah</a></td>
                                                
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">SK Kemenkumham (untuk organisasi Pendidikan)</td>
                                                <td class="py-2">20/04/2020</td>
                                                
                                                <td class="py-2 text-right"><span class="badge badge-light">Belum<span
                                                            class="ml-1 fa fa-warning"></span></span>
                                                </td>
                                                <td class="py-2 text-right"><a href="{{ route('lampiran.create') }}" class="btn btn-primary btn-xs">Unggah</a></td>
                                                
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">Sertifikat Akreditasi BAN/BAN-PT (untuk organisasi Pendidikan)</td>
                                                <td class="py-2">20/04/2020</td>
                                                
                                                <td class="py-2 text-right"><span class="badge badge-light">Belum<span
                                                            class="ml-1 fa fa-warning"></span></span>
                                                </td>
                                                <td class="py-2 text-right"><a href="{{ route('lampiran.create') }}" class="btn btn-primary btn-xs">Unggah</a></td>
                                                
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">Sertifikat Akreditasi BAN/BAN-PT (untuk organisasi Pendidikan)</td>
                                                <td class="py-2">20/04/2020</td>
                                                
                                                <td class="py-2 text-right"><span class="badge badge-light">Belum<span
                                                            class="ml-1 fa fa-warning"></span></span>
                                                </td>
                                                <td class="py-2 text-right"><a href="{{ route('lampiran.create') }}" class="btn btn-primary btn-xs">Unggah</a></td>
                                                
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
                                
                            </div>


@endsection