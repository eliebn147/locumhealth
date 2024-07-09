
      @extends('/users.layout')

@section('mainarea')




     <?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   $universities = \App\Models\universities::get();
  
  ?>  
    <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- listing-carousel-wrap -->
              
                    <!-- listing-carousel-wrap end-->
                    <!-- scroll-nav-wrapper-->
                    <div class="scroll-nav-wrapper fl-wrap">
                        <div class="container">
                            <nav class="scroll-nav scroll-init">
                                <ul class="no-list-style">
                                  
                                    <li><a href="#sec2"><i class="fal fa-info"></i>Details</a></li>
                                    <li><a href="#sec3"><i class="fal fa-info"></i>Desciption </a></li>
                                    <li><a href="#sec5"><i class="fal fa-info"></i>Apply Now</a></li>
                                </ul>
                            </nav>
                            <div class="scroll-nav-wrapper-opt">
                                <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Save </a>
                                <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Share </a>
                                <div class="share-holder hid-share">
                                    <div class="share-container  isShare"></div>
                                </div>
                               
                            </div>
                        </div>
                    </div> 
                    <!-- scroll-nav-wrapper end-->
                    <section class="gray-bg no-top-padding">
                        <div class="container">
                            <div class="breadcrumbs inline-breadcrumbs fl-wrap">
                                <a href="#">Home</a><a href="#">Programs </a><span>Apply Now</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <!-- list-single-main-wrapper-col -->
                                <div class="col-md-12">
								
								@if(!isset($_GET['doc']) && !isset($_GET['edu']))
								
                                  <form action="save_application" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="user_type"  value="0" >
				 <input type="hidden" name="item"  value="<?php echo $_GET['item'];?>" >
				 
				 
				 <input type="hidden" name="rec_id"  value="{{$values['rec_edit']->id ?? ''}}" >
				 <input type="hidden" name="applicant"  value="{{ session()->get('user_shufl_id') }}" >
                                                <div class="row">
												 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Applying for</label>
                                                   	  <select class="form-control" required data-choices data-choices-search-false name="type" id="uni">
                                                                                <option value="{{$values['p_i']->Category ?? ''}}" >{{$values['Category'] ?? 'Select'}} </option>
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
                                                                                <option value="{{$values['p_i']->University ?? ''}}" >{{$values['University'] ?? 'Select'}} </option>
                                                                                 @foreach($values['universities'] as $r_data)
																				
																				<option value="{{$r_data->id}}">{{ $r_data->name}}</option>
																				  
																				 @endforeach   
                                                                            </select>
											
		
		 
																			</div>
																			 <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Select Program</label>
													 <div id="prgrm_list">
														  <select class="form-control" data-choices data-choices-search-false name="program" id="passedYear">
                                                                                <option value="{{$values['p_i']->Title ?? ''}}" > {{$values['Title'] ?? 'Select'}} </option>
                                                                                 
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
                                                            <input type="text" class="form-control"   id="emailInput" placeholder="Representative" name="representative" value="{{$values['rec_edit']->representative ?? ''}}">
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
											@endif
						@if(isset($_GET['edu']))	
                             <form action="application_education" method="post" enctype="multipart/form-data">
				 @csrf
				   <input type="hidden" name="user_type"  value="0" >
				 <input type="hidden" name="item"  value="<?php echo $_GET['item'];?>" >
				 <input type="hidden" name="rec_id"  value="<?php echo $_GET['edu']; ?>" >
				 <input type="hidden" name="appoinment_id"  value="<?php echo $_GET['edu']; ?>" >
                                                <div class="row">
												  <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Name of School / University / College</label>
                                                            <input type="text" class="form-control" required  placeholder="Name of School / University / College" name="institute" value="{{$values['rec_edit']->institute ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Country  </label> 
															
															 <select class="form-control"  required data-choices data-choices-search-false name="Country" id="Country">
                                                                                <option value="{{$values['rec_edit']->Country ?? ''}}" >Select  </option>
                                                                                  
																				  @include ('country_name')
                                                                            </select>
															
															
                                                        </div>
                                                    </div>
													
													<div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Passing Year </label>
                                                            <input type="text" class="form-control" required  name="start_year" value="{{$values['rec_edit']->start_year ?? ''}}">
                                                        </div>
                                                    </div> 

													<div class="col-lg-4" style="display:none;">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Date to </label>
                                                            <input type="date" class="form-control" id="emailInput"  name="end_year" value="{{$values['rec_edit']->end_year ?? ''}}">
                                                        </div>
                                                    </div> 
													
													
													<div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Qualification \ Award obtained</label>
                                                        	 <select class="form-control" required data-choices data-choices-search-false name="Qualification" id="Qualification">
                                                                                <option value="{{$values['rec_edit']->Qualification ?? ''}}" >Select  </option>
																				 <option value="High school" >
                                    HIGH SCHOOL
                                </option>
                                <option value="Diploma" >
                                    DIPLOMA
                                </option>
                                <option value="AA" >
                                    AA
                                </option>
                                <option value="AS" >
                                    AS
                                </option>
                                <option value="AAS" >
                                    AAS
                                </option>
                                <option value="BA" >
                                    BA
                                </option>
                                <option value="BSc" >
                                    BSc
                                </option>
                                <option value="BFA" >
                                    BFA
                                </option>
                                <option value="BAS" >
                                    BAS
                                </option>
                                <option value="MA" >
                                    MA
                                </option>
                                <option value="MSc" >
                                    MSc
                                </option>
                                <option value="MBA" >
                                    MBA
                                </option>
                                <option value="MFA" >
                                    MFA
                                </option>
                                <option value="PhD" >
                                    PhD
                                </option>
                                                                            </select>
														
														
														</div>
                                                    </div>
													
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Main Subject</label>
                                                            <input type="text" class="form-control"  required placeholder="Main Subject" name="Main_Subject" value="{{$values['rec_edit']->Main_Subject ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                 <div class="col-lg-4">  
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Result (grade, classification, etc.)</label>
                                                            <input type="text" class="form-control" required placeholder="Result (grade, classification, etc.)" name="Result" value="{{$values['rec_edit']->Result ?? ''}}">
                                                        </div>
                                                    </div>
													
													
												   <div class="col-lg-12">
													<center>
													
													<button type="submit" class="btn btn-primary">Save  </button>
                                                    </center>
													
													</div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
<hr>

<hr>
              <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " id="example">
                                                <thead class="text-muted">
                                                    <tr>
                                                       
                                                     <th>Sr</th>
										 <th >School / University / College</th>
                                        <th>Country</th>
										<th>Passing Year</th>
										 <th >Qualification</th>
                                        <th>Main Subjects</th>
										<th>Result</th>
										<th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['application_education'] as $r_data)
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    <td >{{ $r_data->institute}}</td>
															    <td >{{ $r_data->Country}}</td>
																    <td >{{ $r_data->start_year}}</td>
																    <td >{{ $r_data->Qualification}}</td>
															    <td >{{ $r_data->Main_Subject}}</td>
																    <td >{{ $r_data->Result}}</td>
                                                                
														  <td>
            <a href="apply?item=<?php echo $_GET['item']; ?>&edu=<?php echo $_GET['edu']; ?>&dell_edu={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" style="color:red;"  >Remove</a>
			</td>
                                                        </tr>
														
                                                       @endforeach

									
                                                   
													
													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
                                        </div>
											 
											 <a href="apply?item=<?php echo $_GET['item'];?>&edu=<?php echo $_GET['edu'];?>" class="btn btn-primary" style="width:100%;">Save & Continue </a>
                            @endif								
							@if(isset($_GET['doc']))	
                             <form action="Upload_Document" method="post" enctype="multipart/form-data">
				 @csrf
				  <input type="hidden" name="user_type"  value="0" >
				 <input type="hidden" name="item"  value="<?php echo $_GET['item'];?>" >
				 
				 <input type="hidden" name="rec_id"  value="<?php echo $_GET['doc']; ?>" >
				 <input type="hidden" name="application_id"  value="<?php echo $_GET['doc']; ?>" >
                                                <div class="row">
												  <!--end col-->
                                                  
                                                    <!--end col-->
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Document Type  </label> 
															
															 <select   class="form-control" required data-choices data-choices-search-false name="title" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->title ?? ''}}" >Select  </option>
                                                                                  
																				 @foreach($values['eq_document'] as $r_data)
																				  <option value="{{$r_data->title ?? ''}}" >{{$r_data->title ?? ''}}  </option>
																				  @endforeach
																				 
                                                                            </select>
															
															
                                                        </div>
                                                    </div>
													
													
                                                    <!--end col-->
                                                 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Select File</label>
                                                            <input type="file" required class="form-control" id="emailInput" name="file_doc" />
                                                        </div>
                                                    </div>
													
													
												   <div class="col-lg-4">
													<center>
													<label for="emailInput" class="form-label"><br></label>
													<button type="submit" class="btn btn-primary" style="width:100%;">Submit </button>
                                                    </center>
													</div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>	
<hr>

<hr>
              <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " id="example">
                                                <thead class="text-muted">
                                                    <tr>
                                                       
                                                     <th style="width:30px !important;">Sr</th>
										 <th  >Document Title</th>
                                        <th style="width:50px !important;">File</th>
										<th style="width:50px !important;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['application_documents'] as $r_data)
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    <td style="width:100px !important;">{{ $r_data->title}}</td>
															    <td><a href="upload/{{ $r_data->file_doc}}" target="_blank" >View </a></td>
                                                                
														  <td>
            <a href="apply?item=<?php echo $_GET['item']; ?>&doc=<?php echo $_GET['doc']; ?>&dell_doc={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" style="color:red;" >Remove</a>
			</td>
                                                        </tr>
                                                       @endforeach

									
                                                   
													
													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
                                        </div>
											 
											 <a href="apply?item=<?php echo $_GET['item'];?>&edu=<?php echo $_GET['doc'];?>" class="btn btn-primary" style="width:100%;">Save & Continue </a>
                            @endif								
                                </div>
                              
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>

@endsection