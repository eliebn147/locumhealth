
      @extends('/admin.layout')

@section('mainarea')
                
           <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    
                    <!-- end page title -->

                    <div class="row">
                        <!--end col-->
                        <div class="col-xxl-3">
                          
                        </div>
                        <div class="col-xxl-9">
                            
                            <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Personal Details</h6>
												 @if(Session::get('Error_message') !=null)
             <div class="alert_danger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Sorry!</strong> {{ Session::get('Error_message')}}.
</div>
@endif
@if(Session::get('success_message') !=null)
             <div class="alert_succes">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Great!</strong> {{ Session::get('success_message')}}.
</div>
@endif
                                        </div>
                                        <div class="card-body">
                                            <form action="save_user" method="post">
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
                                                 
                                                    <!--end col-->
                   @if($values['admin_edit']=="")         
 <div class="col-lg-4">
 <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Enter username" name="username" >
                                                        </div>     

</div> 
                       
 <div class="col-lg-4">
                                                  

												   <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="emailInput" placeholder="Enter Password" name="password" >
                                                        </div>
														
                                                    </div>
													@endif
                                <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Role</label>
													  <select class="form-control" data-choices data-choices-search-false name="role" id="passedYear">
                                                                                <option value="">Select </option>
                                                                                <option value="Superadmin">Superadmin</option>
                                                                                <option value="Admin">Admin</option>
                                                                                <option value="Agent">Agent</option>
                                                                               
                                                                            </select>
													
													
													
                                                    </div>

												   <div class="col-lg-4">
													
													
													
													
													<label for="emailInput" class="form-label">.</label>
                                                        <div class="hstack gap-2 ">
														
                                                            <button type="submit" class="btn btn-primary">Sabmit</button>
                                                          
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