@extends('layouts.peserta.master')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							
							<div class="col-sm-6">
								<div class="card avtivity-card">
									<div class="card-body">
										<div class="media align-items-center">
											<span class="activity-icon bgl-warning  mr-md-4 mr-3">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"/>
													<path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"/>
													<path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"/>
													<path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"/>
													<path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"/>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-2">Jumlah Peserta</p>
												<span class="title text-black font-w600">-</span>
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
											<span class="activity-icon bgl-warning  mr-md-4 mr-3">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"/>
													<path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"/>
													<path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"/>
													<path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"/>
													<path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"/>
												</svg>
											</span>
											<div class="media-body">
												<p class="fs-14 mb-2">Jumlah Evaluator</p>
												<span class="title text-black font-w600">-</span>
											</div>
										</div>
									</div>
									<div class="effect bg-warning"></div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-xl-3">
							<div class="card">
								<div class="card-body">
									<h4 class="card-intro-title">Calendar</h4>
	
									<div class="">
										<div id="external-events" class="my-3">
											<p>Drag and drop your event or click in the calendar</p>
											<div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
											<div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>My Event
											</div>
											<div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
											<div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
										</div>
										<!-- checkbox -->
										<div class="checkbox custom-control checkbox-event custom-checkbox pt-3 pb-5">
											<input type="checkbox" class="custom-control-input" id="drop-remove">
											<label class="custom-control-label" for="drop-remove">Remove After Drop</label>
										</div>
										<a href="javascript:void()" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-event w-100">
											<span class="align-middle"><i class="ti-plus"></i></span> Create New
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9">
							<div class="card">
								<div class="card-body">
									<div id="calendar" class="app-fullcalendar"></div>
								</div>
							</div>
						</div>
						<!-- BEGIN MODAL -->
						<div class="modal fade none-border" id="event-modal">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title"><strong>Add New Event</strong></h4>
									</div>
									<div class="modal-body"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-success save-event waves-effect waves-light">Create
											event</button>
	
										<button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal Add Category -->
						<div class="modal fade none-border" id="add-category">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title"><strong>Add a category</strong></h4>
									</div>
									<div class="modal-body">
										<form>
											<div class="row">
												<div class="col-md-6">
													<label class="control-label">Category Name</label>
													<input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
												</div>
												<div class="col-md-6">
													<label class="control-label">Choose Category Color</label>
													<select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
														<option value="success">Success</option>
														<option value="danger">Danger</option>
														<option value="info">Info</option>
														<option value="pink">Pink</option>
														<option value="primary">Primary</option>
														<option value="warning">Warning</option>
													</select>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
									</div>
								</div>
							</div>
						</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
