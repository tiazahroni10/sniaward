@extends('layouts.evaluator.master')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-lg mb-0 table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="pl-5 widt300">Nama Organisasi</th>
                                <th class="pl-5 text-right">Mulai</th>
                                <th class="pl-5 text-right">Hingga</th>
                                <th class="pl-5 text-center">Status</th>
                                <th class="pl-5 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="customers">
                            @foreach ($penugasanSe as $item)
                            <tr class="btn-reveal-trigger">
                                <td class="py-3">
                                    <div class="media-body">
                                    <h5 class="mb-0 fs--1">{{ $loop->iteration }}</h5>
                                    </div>
                                </td>
                                <td class="py-2 pl-5 wspace-no">{{ $item->nama_organisasi }}</td>
                                <td class="py-2 pl-5 wspace-no text-right">{{ date('d F Y', strtotime($item->mulai)) }}</td>
                                <td class="py-2 pl-5 wspace-no text-right">{{ date('d F Y', strtotime($item->hingga)) }}</td>
                                <td class="py-2 pl-5 wspace-no text-right">
                                    @if ($item->status)
                                        <div class="badge badge-success text-white"><span>Sukses</span></div>
                                    @else
                                        <div class="badge badge-warning text-black"><span>Tertunda</span></div>
                                    @endif
                                </td>
                                <td class="py-2 pl-5 wspace-no text-right">
                                    <a href="{{ $item->id }}" type="submit"
                                        class="badge badge-danger text-white"><span>Verifikasi</span>
                                    </a>
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

@endsection