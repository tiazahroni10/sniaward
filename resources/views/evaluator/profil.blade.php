@extends('layouts.evaluator.master')
@section('content')
  <div class="content-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
              <div class="photo-content">
                <div class="cover-photo"></div>
              </div>
              <div class="profile-info">
                <div class="profile-photo">
                  <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                </div>
                <div class="profile-details">
                  <div class="profile-name px-3 pt-2">
                    <h4 class="text-primary mb-0">{{ $user->nama_lengkap }}</h4>
                    <p>{{ $peran }}</p>
                  </div>
                  <div class="profile-email px-2 pt-2">
                    <h4 class="text-muted mb-0">{{ $user->email }}</h4>
                    <p>Email</p>
                  </div>
                  <div class="dropdown ml-auto">
                    <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"></rect>
                          <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                          <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                          <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                        </g>
                      </svg></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                      <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                      <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                      <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <div class="profile-statistics">
                <!-- Modal -->
                <div class="modal fade" id="sendMessageModal">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Send Message</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form class="comment-form">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="text-black font-w600">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="text-black font-w600">Email <span class="required">*</span></label>
                                <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="text-black font-w600">Comment</label>
                                <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group mb-0">
                                <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="profile-blog mb-4">
                <h5 class="text-primary d-inline">Kontak</h5><a href="javascript:void()" class="pull-right f-s-16">Edit</a>
                <img src="images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                <h6><a href="post-details.html" class="text-black">Ridhal Fajri</a></h6>
                <small class="mb-0">{{ $user->nomor_telepon }}</small>
              </div>
              <div class="profile-interest mb-4">
                <h5 class="text-primary d-inline">Organisasi</h5>
                </h5><a href="javascript:void()" class="pull-right f-s-16">Edit</a>
                <h6><a href="post-details.html" class="text-black">PT Pertamina </a></h6>
              </div>
              <div class="profile-interest mb-4">
                <h5 class="text-primary d-inline">Produk</h5>
                </h5><a href="javascript:void()" class="pull-right f-s-16">Edit</a>
                <h6><a href="post-details.html" class="text-black">Bahan bakar minyak </a></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
