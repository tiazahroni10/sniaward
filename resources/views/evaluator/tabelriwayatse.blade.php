@extends('layouts.evaluator.master')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="page-titles ">
					<ol class="breadcrumb d-flex justify-content-between align-items-center">
					  <li class="breadcrumb-item active mr-auto align-items-center"><a href="javascript:void(0)">Riwayat SE</a></li>
					  <li>
						
					  </li>
					</ol>
				  </div>
				<div class="row">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-responsive-lg mb-0 table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th class="pl-5 width200">Nama Instansi</th>
										<th class="pl-5 text-right">Tanggal Mulai</th>
										<th class="pl-5 text-right">Tanggal Selesai</th>
									</tr>
								</thead>
								<tbody id="customers">
									
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->