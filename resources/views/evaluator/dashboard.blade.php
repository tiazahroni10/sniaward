@extends('layouts.evaluator.master')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
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
