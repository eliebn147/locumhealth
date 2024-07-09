
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

 <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Upload Document (Upload All Required dataocuments)</h6>
											<hr>
												
                                        </div>
                                        <div class="card-body">
                                            <form action="Upload_Document" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="rec_id"  value="<?php echo $_GET['id']; ?>" >
				 <input type="hidden" name="application_id"  value="<?php echo $_GET['id']; ?>" >
                                                <div class="row">
												  <!--end col-->
                                                  
                                                    <!--end col-->
													 <div class="col-lg-6">
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
                                                 <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Select File</label>
                                                            <input type="file" required class="form-control" id="emailInput" name="file_doc" />
                                                        </div>
                                                    </div>
													
													
												   <div class="col-lg-12">
													<center>
													
													<button type="submit" class="btn btn-primary">Submit </button>
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
							

                              <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Documents List</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " id="example">
                                                <thead class="text-muted">
                                                    <tr>
                                                       
                                                     <th>Sr</th>
										 <th  style="width:100px !important;">Document Title</th>
                                        <th>File</th>
										<th>Action</th>
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
            <a href="other-info?id={{$r_data->application_id}}&dell_id={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
			</td>
                                                        </tr>
                                                       @endforeach

									
                                                   
													
													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Education & Qualification (You can add multiple records by filling bellow form multiple time)</h6>
											<hr>
												
                                        </div>
                                        <div class="card-body">
                                            <form action="application_education" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="rec_id"  value="<?php echo $_GET['id']; ?>" >
				 <input type="hidden" name="appoinment_id"  value="<?php echo $_GET['id']; ?>" >
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
                                        </div>
                                    </div>
                                  
                                   
                                    <!--end tab-pane-->
                                </div>
                            </div>
							
							    <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Education & Qualification</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
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
            <a href="other-info?id={{$r_data->appoinment_id}}&dell_edu={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
			</td>
                                                        </tr>
														
                                                       @endforeach

									
                                                   
													
													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        
                                        <div class="card-body">
							
							 <div class="col-lg-12">
													<center>
													
													<a href="agent-review?id=<?php echo $_GET['id'];?>&confirm=0" class="btn btn-primary">Review Application  </a>
                                                    </center>
													
													</div>
													</div>
													</div>
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