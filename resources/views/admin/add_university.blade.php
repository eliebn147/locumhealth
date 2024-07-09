
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
                                            <form action="save_university" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="rec_id"  value="{{$values['rec_edit']->id ?? ''}}" >
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">University Name</label>
                                                            <input type="text" class="form-control" id="firstnameInput" placeholder="University Name" name="name"  value="{{$values['rec_edit']->name ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Logo</label>
                                                            <input type="file" class="form-control" id="lastnameInput"  name="Logo"  />
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Cover img</label>
                                                            <input type="file" class="form-control" id="lastnameInput"  name="cover_img"  />
                                                        </div>
                                                    </div>
													
													
											 		
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your address" name="Address" value="{{$values['rec_edit']->Address ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">State</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="State" name="State" value="{{$values['rec_edit']->State ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Country</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Country" name="Country" value="{{$values['rec_edit']->Country ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Website</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Website" name="Website" value="{{$values['rec_edit']->Website ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Map Link</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Map Link" name="Map_Link" value="{{$values['rec_edit']->Map_Link ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Video</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Video" name="Video" value="{{$values['rec_edit']->Video ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
   
                                                     <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Status</label>
													  <select class="form-control" data-choices data-choices-search-false name="Status" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->Status ?? ''}}" >Select </option>
                                                                                <option value="Show">Show</option>
                                                                                <option value="Hide">Hide</option>
                                                                               
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