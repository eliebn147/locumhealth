
      @extends('/admin.layout')

@section('mainarea')
                
           <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Profile Settings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Profile Settings</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <!--end col-->
                        <div class="col-xxl-3">
                            <div class="card overflow-hidden">
                                <div>
                                    <img src="assets/images/small/img-7.jpg" alt="" class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                                    <div>
                                       
                                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light btn-sm position-absolute end-0 top-0 m-3">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> 
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body pt-0 mt-n5">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto">
                                            <img src="upload/{{$values['admin_edit']->img ?? ''}}" alt="" class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit position-absolute end-0 bottom-0">
                                                
                                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="bi bi-camera"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5>{{$values['admin_edit']->first_name ?? ''}} {{$values['admin_edit']->last_name ?? ''}} <i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                                            <p class="text-muted">{{$values['admin_edit']->role ?? ''}}</p>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="card-body border-top">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Update Profile</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="javascript:void(0);" class="badge bg-info-subtle text-info fs-12"><i class="ri-add-fill align-bottom me-1"></i> Add</a>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            
                            <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Personal Details</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="update_profile" method="post" enctype="multipart/form-data">
				 @csrf
				  <input type="hidden" name="rec_id"  value="{{$values['admin_edit']->id ?? ''}}" >
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" name="first_name"  value="{{$values['admin_edit']->first_name ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your last name" name="last_name" value="{{$values['admin_edit']->last_name ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" name="phone" value="{{$values['admin_edit']->phone ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" name="email" value="{{$values['admin_edit']->email ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                   <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Profile Pic</label>
                                                            <input type="file" class="form-control" id="emailInput" name="img" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
													
													
													
													
													<label for="emailInput" class="form-label">.</label>
                                                        <div class="hstack gap-2 ">
														
                                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                                          
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                  
                                   
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content -->


               
          @endsection