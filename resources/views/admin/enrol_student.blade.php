
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
                                            <h6 class="card-title mb-0">Apply Now</h6>
											<hr>
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
                                            <form action="save_application" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="user_type"  value="1" >
				 <input type="hidden" name="rec_id"  value="{{$values['rec_edit']->id ?? ''}}" >
				 <input type="hidden" name="applicant"  value="{{ session()->get('username_admin') }}" >
                                                <div class="row">
												 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Applying for</label>
                                                   	  <select class="form-control" required data-choices data-choices-search-false name="type" id="uni">
                                                                                <option value="{{$values['rec_edit']->type ?? ''}}" >Select </option>
                                                                                 @foreach($values['miscellaneous'] as $r_data)
																			
																				   @if($r_data->type=="Program types")
																				<option value="{{$r_data->id}}">{{ $r_data->title}}</option>
																				   @endif
																				 @endforeach
                                                                            </select>
																			
																			</div>
																			 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">University </label>
																				  <select class="form-control" required data-choices data-choices-search-false name="university" onchange="filter_programs(this.value,uni.value)" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->university ?? ''}}" >Select </option>
                                                                                 @foreach($values['universities'] as $r_data)
																				
																				<option value="{{$r_data->id}}">{{ $r_data->name}}</option>
																				  
																				 @endforeach
                                                                            </select>
																			
																			</div>
																			 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Select Program</label>
													 <div id="prgrm_list">
														  <select class="form-control" data-choices data-choices-search-false name="program" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->program ?? ''}}" >Select </option>
                                                                                 
                                                                            </select>
																			</div>
																			
															<script type="text/javascript">
function filter_programs(u,c){
$('#prgrm_list').load('https://studynortherncyprus.com/programs_list?u='+u+'&c='+c);
}

</script>	
																			</script>
																			
																			
																			</div>
																			 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Applying as</label>
																			  <select class="form-control" required data-choices data-choices-search-false name="applying_as" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->applying_as ?? ''}}" > Select </option>
																				 <option value="First Year" >First Year </option>
																				  <option value="Transfer" >Transfer </option>
                                                                            </select>
																			
																			</div>
																			 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Intake</label>
																			
																			 <select class="form-control" required data-choices data-choices-search-false name="intake" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->intake ?? ''}}" >Select  </option>
                                                                                  @foreach($values['miscellaneous'] as $r_data)
																				   @if($r_data->type=="Intakes")
																				<option value="{{$r_data->id}}">{{ $r_data->title}}</option>
																				   @endif
																				 @endforeach
                                                                            </select>
</div>
																			 
																			
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Formal photo</label>
                                                            <input type="file" class="form-control" id="lastnameInput"  required name="profile_pic"  />
                                                        </div>
                                                    </div>
	 
													
													
													
											 		
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Name of Student</label>
                                                            <input type="text" class="form-control" required placeholder="Name of Student" name="name" value="{{$values['rec_edit']->name ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Email</label>
                                                            <input type="text" class="form-control" required placeholder="Email" name="email" value="{{$values['rec_edit']->email ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Phone</label>
                                                            <input type="text" class="form-control" required placeholder="Phone" name="phone" value="{{$values['rec_edit']->phone ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Whatsapp</label>
                                                            <input type="text" class="form-control" required placeholder="Whatsapp" name="whatsapp" value="{{$values['rec_edit']->whatsapp ?? ''}}">
                                                        </div>
                                                    </div>
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Address</label>
                                                            <input type="text" class="form-control" required placeholder="Address" name="Address" value="{{$values['rec_edit']->Address ?? ''}}">
                                                        </div>
                                                    </div>
													
														
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Country  </label> 
															
															 <select class="form-control" required data-choices data-choices-search-false name="country" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->country ?? ''}}" >Select  </option>
                                                                                  
																				  @include ('country_name')
                                                                            </select>
															
															
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Passport</label>
                                                            <input type="text" class="form-control" required placeholder="Passport" name="Passport" value="{{$values['rec_edit']->Passport ?? ''}}">
                                                        </div>
                                                    </div>
													
													
														 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Date of Issue </label>
                                                            <input type="date" class="form-control" required placeholder="Date of Issue" name="doi" value="{{$values['rec_edit']->doi ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Date of expiry </label>
                                                            <input type="date" class="form-control" required placeholder="Date of expiry" name="doe" value="{{$values['rec_edit']->doe ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Country of Issue </label> 
															
															 <select class="form-control" required data-choices data-choices-search-false name="coi" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->coi ?? ''}}" >Select  </option>
                                                                                  
																				  @include ('country_name')
                                                                            </select>
															
															
                                                        </div>
                                                    </div>
													
													
													 
	
	                                                 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Father's Name / Surname</label>
                                                            <input type="text" class="form-control" required placeholder="Father's Name / Surname" name="Father" value="{{$values['rec_edit']->Father ?? ''}}">
                                                        </div>
                                                    </div>
	 
	
													
                                        <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Mother's Name / Surname</label>
                                                            <input type="text" class="form-control" required placeholder="Mother's Name / Surname" name="Mother" value="{{$values['rec_edit']->Mother ?? ''}}">
                                                        </div>
                                                    </div>
													
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student National ID Number</label>
                                                            <input type="text" class="form-control" required placeholder="National ID Number" name="cnic" value="{{$values['rec_edit']->cnic ?? ''}}">
                                                        </div>
                                                    </div>
													
													

													<div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Gender</label>
                                                        	 <select class="form-control" required data-choices data-choices-search-false name="Gender" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->Gender ?? ''}}" >Select  </option>
																				<option value="Male" >Male  </option>
																				<option value="Female" >Female  </option>
                                                                                <option value="Other" >Other  </option> 
                                                                            </select>
														
														
														</div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Date of Birth</label>
                                                            <input type="date" class="form-control" required placeholder="Date of Birth" name="Date_of_Birth" value="{{$values['rec_edit']->Date_of_Birth ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Place of Birth</label>
                                                            <input type="text" class="form-control" required placeholder="Place of Birth" name="Place_of_birth" value="{{$values['rec_edit']->Place_of_birth ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">
Notarized Affidavits (if necessary)</label>
                                                            <input type="text" class="form-control"  placeholder="Affidavits" name="Affidavits" value="{{$values['rec_edit']->Affidavits ?? ''}}">
                                                        </div>
                                                    </div>
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">English is your first language ? </label> 
															
															 <select class="form-control" required data-choices data-choices-search-false name="English_language" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->English_language ?? ''}}" >Select  </option>
																				<option value="Yes" >Yes  </option>
																				<option value="No" >No  </option>
                                                                                 
                                                                            </select>
															
															
                                                        </div>
                                                    </div>
													
													  <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Sponsor / Funding Source</label>
																			
																			 <select class="form-control" required data-choices data-choices-search-false name="Source_funds" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->Source_funds ?? ''}}" >Select  </option>
                                                                              <option value="Self sponsored" >
                                                            SELF SPONSORED
                                                        </option>
                                                        <option value="Family funds" >
                                                            FAMILY FUNDS
                                                        </option>
                                                        <option value="Government / Company Sponsor" >
                                                            GOVERNMENT / COMPANY SPONSOR
                                                        </option>
                                                        <option value="Other" >
                                                            OTHER
                                                        </option>
                                                                            </select>
                                                        </div>
	 
	 
												

												
													
                                                    <!--end col-->
   
                                                     <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Student Sponsor name / Surname</label>
                                                            <input type="text" class="form-control" required placeholder="Sponsor name / Surname" name="sponsor_name" value="{{$values['rec_edit']->Place_of_birth ?? ''}}">
                                                        </div>
                                                    </div>
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Relationship of sponsor to applicant</label>
                                                            <input type="text" class="form-control" required placeholder="Relationship of sponsor to applicant" name="Sponsor_Relationship" value="{{$values['rec_edit']->Place_of_birth ?? ''}}">
                                                        </div>
                                                    </div>
                                                              
                                                 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Representative Code</label>
                                                            <input type="text" class="form-control"  readonly id="emailInput" placeholder="Representative" name="representative" value="{{$values['rec_edit']->representative ?? 'pAiqtceS'}}">
                                                        </div>
                                                    </div>

												   <div class="col-lg-12">
													<center>
													
													<button type="submit" class="btn btn-primary">Save & Continue </button>
                                                    </center>
													
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