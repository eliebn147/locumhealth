
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
                       
                        <div class="col-xxl-9">
                            
                            <div class="card">
                                <div class="tab-content">

                                    
                                    <!--end tab-pane-->
                                    <div class="tab-pane active" id="changePassword" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Changes Password</h6>
                                        </div>
                                        <div class="card-body">
                                            <form action="save_pass" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="rec_id"  value="{{$values['admin_edit']->id ?? ''}}" >
                                                <div class="row g-2 justify-content-lg-between align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control password-input" id="oldpasswordInput" name="Old_pass"   placeholder="Old Password" >
                                                                <button class="btn btn-link position-absolute top-0 end-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="password-input" class="form-label">New Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control password-input" id="password-input" onpaste="return false" name="New_pass"  placeholder="New Password" aria-describedby="passwordInput"  required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="auth-pass-inputgroup">
                                                            <label for="confirm-password-input" class="form-label">Confirm Password*</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control password-input" onpaste="return false" id="confirm-password-input" name="Confirm"  placeholder="Confirm Password"  required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button"><i class="ri-eye-fill align-middle"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="">

                                                            <button type="submit" class="btn btn-success">Change Password</button>
                                                        </div>
                                                    </div>

                                                    <!--end col-->

                                                   
                                                </div>
                                                <!--end row-->
                                            </form>
                                           
                                           
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                   
                                    <!--end tab-pane-->
                                   
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