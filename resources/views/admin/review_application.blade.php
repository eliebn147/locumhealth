
      @extends('/admin.layout')

@section('mainarea')
                
           <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    
                    <!-- end page title -->
	<center>
															      			<a href="#" class="btn btn-primary" onclick="printContent('print')" >Print</a>					
</center>
</br>
                    <div class="row">
                        <!--end col-->
                        <div class="col-xxl-3">
                          
                        </div>
                        <div class="col-xxl-9" id="print">
						

						 <div class="card">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                       
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                 
                                                <tbody class="list form-check-all">
                                                    
													  <tr> 
													  <th>Date:   {{ $values['aplic']->date }}</th> 
													   <th style="text-align:right;">Status:  {{ $values['aplic']->status }}</th> 
													  
													  </tr>

                                                   
													
													
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
                                            <h6 class="card-title mb-0">Program applying for</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                 
                                                <tbody class="list form-check-all">
                                                    
													  <tr> 
													  <th>Program</th> <td>
													  
													  @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$values['program_info']->Title)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
													  
													  </td>
													   <th>Type</th> <td>
													   @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$values['aplic']->type)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
																				 
													   
													  </td>
													  
													  </tr>
												      <tr> 
													  <th>University</th> <td colspan="1">
													  		@foreach($values['universities'] as $item_data)
																				   @if($item_data->id==$values['aplic']->university)
																			{{ $item_data->name}}
																				   @endif
																				 @endforeach
													  
													  </td>
													   <th>Intake</th> <td>
													  
													  @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$values['aplic']->intake)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
																				 
																				 
													  
													  </td>
													    </tr>

									  <tr> 
													  <th>Applying as</th> <td>
													  {{ $values['aplic']->applying_as }}
													  
													  </td>
													   <th>English is your first language</th> <td>  {{ $values['aplic']->English_language }}</td>
													  
													  </tr>
                                                   
													
													
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
                                            <h6 class="card-title mb-0">Personal Information</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                 
                                                <tbody class="list form-check-all">
                                                    
													  <tr> 
													  <th rowspan="8">
													  <img src="upload/{{ $values['aplic']->profile_pic }}" width="120px">
													  </th>
													  <th>Name</th> <td>
													  
													   {{ $values['aplic']->name }}
													  
													  </td>
													   <th>Email</th> <td>
													   {{ $values['aplic']->email }}
													   </td>
													    </tr>
														
														<tr> 
													  <th>Phone</th> <td>
													  
													   {{ $values['aplic']->phone }}
													  
													  </td>
													   <th>Whatsapp</th> <td>
													   {{ $values['aplic']->whatsapp }}
													   </td>
													    </tr>
														
														
														
														
														<tr> 
													  <th>Address</th> <td>
													  
													   {{ $values['aplic']->Address }}
													  
													  </td>
													   <th>Country</th> <td>
													   {{ $values['aplic']->country }}
													   </td>
													    </tr>
														
														<tr> 
													  <th>Father</th> <td>
													  
													   {{ $values['aplic']->Father }}
													  
													  </td>
													   <th>Mother</th> <td>
													   {{ $values['aplic']->Mother }}
													   </td>
													    </tr>
														
															
														
														<tr> 
													  <th>Gender</th> <td>
													  
													   {{ $values['aplic']->Gender }}
													  
													  </td>
													   <th>Date of Birth</th> <td>
													   {{ $values['aplic']->Date_of_Birth }}
													   </td>
													    </tr>
														
														<tr> 
													  <th>Place of birth</th> <td>
													  
													   {{ $values['aplic']->Place_of_birth }}
													  
													  </td>
													    <th>CNIC</th> <td>
													  
													   {{ $values['aplic']->cnic }}
													  
													  </td>
													    </tr>


                                                         														
														
														
														
														
														
														<tr> 
													  <th>Passport</th> <td>
													  
													   {{ $values['aplic']->Passport }}
													  
													  </td>
													   <th>Date of Issue</th> <td>
													   {{ $values['aplic']->doi }}
													   </td>
													    </tr>
														
														<tr> 
													  <th>Date of expiry</th> <td>
													  
													   {{ $values['aplic']->doe }}
													  
													  </td>
													   <th>Country of Issue</th> <td>
													   {{ $values['aplic']->coi }}
													   </td>
													    </tr>
													  
													  
													  
										
															  
													  
												
                                                   
													
													
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
                                            <h6 class="card-title mb-0">Attached Documents</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                 
                                                <tbody class="list form-check-all">
  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['application_documents'] as $r_data)
                                                 <?php if($sr==1){ ?>                                                      
													  <tr>
												 <?php } ?>
												 <?php   $sr++; ?>
                                                            
															    <th>{{ $r_data->title}} </th>
															   
                                                                
													
                                                          <?php if($sr==1){ ?>                                                      
													  </tr>
												 <?php }
                                                    if($sr==3)
													{
														$sr = 1;
													}
                                                   
												 ?>
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
                                            <h6 class="card-title mb-0">Education & Qualification</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                    <tr>
                                                       
                                                     <th>Sr</th>
										 <th >School / University / College</th>
                                        <th>Country</th>
										<th>Date from</th>
										 <th>Date to</th>
										 <th >Qualification</th>
                                        <th>Main Subjects</th>
										<th>Result</th>
									
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
															    <td >{{ $r_data->end_year}}</td>
																    <td >{{ $r_data->Qualification}}</td>
															    <td >{{ $r_data->Main_Subject}}</td>
																    <td >{{ $r_data->Result}}</td>
                                                                
														
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
                                            <h6 class="card-title mb-0">Sponsor & Representative </h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                 
                                                <tbody class="list form-check-all">
                                                    
													  <tr> 
													  <th>Funding Source</th> <td>
													  
													  {{ $values['aplic']->Source_funds }}
													  </td>
													   <th>Sponsor name</th> <td>
													  {{ $values['aplic']->sponsor_name }}
																				 
													   
													  </td>
													  
													  </tr>
													  
													  



												      <tr> 
													  <th>Sponsor Relationship</th> <td colspan="1">
													  	 {{ $values['aplic']->Sponsor_Relationship }}
													  
													  </td>
													   <th>Representative code</th> <td>
													  
												 {{ $values['aplic']->representative }}
																				 
																				 
													  
													  </td>
													    </tr>

									 
                                            

													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
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

 <script type="text/javascript">



function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);

}

</script>
               
          @endsection