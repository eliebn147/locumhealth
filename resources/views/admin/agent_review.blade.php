
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
                                        <div class="card-header">
                                            <h6 class="card-title mb-0">Agent Information</h6>
											<hr>
                                        </div>
                                        <div class="card-body">
                                             <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " >
                                                <thead class="text-muted">
                                                 
                                                <tbody class="list form-check-all">
                                                    
													  <tr> 
													 
													  <th>Consultancy Name</th> <td>
													  
													   {{ $values['admin']->first_name }}
													  
													  </td>
													   <th>Date Of Establishment</th> <td>
													   {{ $values['agents']->Date_Of_Establishment }}
													   </td>
													    </tr>
									
														<tr> 
													  <th>NTN </th> <td>
													  
													   {{ $values['agents']->NTN }}
			

					
													  </td>
													   <th>Address </th> <td>
													   {{ $values['agents']->Address }}
													   </td>
													    </tr>
														
														
														
														
														<tr> 
													  <th>Major Countries Dealing With</th> <td>
													  
													   {{ $values['agents']->Countries }}
													  
													  </td>
													   <th>Average Student's Enrollment Per Year</th> <td>
													   {{ $values['agents']->Average_Student }}
													   </td>
													    </tr>
														
														<tr> 
													  <th>CEO Name:</th> <td>
													  
													   {{ $values['agents']->CEO_Name }}
													  
													  </td>
													   <th>Mobile / Whatsapp # </th> <td>
													   {{ $values['agents']->Mobile_Whatsapp }}
													   </td>
													    </tr>
														
															
														
														<tr> 
													  <th>Landline</th> <td>
													  
													   {{ $values['agents']->phone }}
													  
													  </td>
													   <th>Email</th> <td>
													   {{ $values['admin']->email }}
													   </td>
													    </tr>
														
														<tr> 
													  <th>Joining Date</th> <td>
													  
													   {{ $values['agents']->joining_date }}
													  
													  </td>
													    <th>CNIC</th> <td>
													  
													   {{ $values['agents']->CNIC }}
													  
													  </td>
													    </tr>


                                           		
														
														
														
														
														<tr> 
													  <th>Registration Document</th> <td>
													  
													  <a href="upload/{{ $values['agents']->doc_01 }}" >View Doc 1</a>
													  
													  </td>
													   <th>Registration Document :</th> <td>
													    <a href="upload/{{ $values['agents']->doc_02 }}" >View Doc 2 </a>
													   </td>
													    </tr>
														
														<tr> 
													  <th>Status</th> <td>
													  
													   {{ $values['admin']->status }}
													  
													  </td>
													  
													    </tr>
													  
													  
													  
										
															  
													  
												
                                                   
													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
                                        </div>
										@if($values['admin']->status !="Active")
										<br><br>
										<center>
										<a href="agent-profile?agent=<?php echo $_GET['agent']; ?>&status=Active" class="btn btn-primary"  >Approve</a>					
										</center>
										<br><br>
										@endif
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