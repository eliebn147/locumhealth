
      @extends('/admin.layout')

@section('mainarea')
                <script src="https://www.gstatic.com/charts/loader.js"></script>
                <div class="page-content">
                    <div class="container-fluid">
                    
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card card-height-100 border-0 overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                                                    <div class="card-body">
                                                       
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                                                <i class="ph-folder-open"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Completed Applications</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="0">0</span> </h4>
                                                           
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-bottom rounded-0 mb-0">
                                                    <div class="card-body">
                                                       
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-dark-subtle text-dark rounded-circle fs-3">
                                                                <i class="ph-folder-open"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Pending APPLICATIONS</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="0">0</span></h4>
                                                         
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-end-md rounded-0 mb-0">
                                                    <div class="card-body">
                                                       
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-body rounded-circle fs-3">
                                                                <i class="ph-folder-open"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">INPROCESS APPLICATIONS</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="0">0</span></h4>
                                                           
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-top border-top-md-0 rounded-0 mb-0">
                                                    <div class="card-body">
                                                        
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-3">
                                                                <i class="ph-folder-open"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">CANCELLED APPLICATIONS</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="0">0</span></h4>
                                                            
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-8">
                               <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Applications Status</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                   

<div
id="myChart" style="width:100%; height:440px;">
</div>									
			<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Application', 'Mhl'],
  ['Pending',1],
  ['inprocess',2],
  ['Complete',1],
  ['Cancelled',2]
]);

// Set Options
const options = {
  title:''
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>						
									
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                            </div><!-- end col -->
							
                        </div><!--end row-->
                    
					
					
					
					
					
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="contactList">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Latest Application</h4>
                                        <div class="flex-shrink-0">
                                           
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                     <tr>
                                                       
                                                     <th>Sr</th>
										 <th >University</th>
                                       
										 <th>Program</th>
                                      
										<th>Duration</th>
										<th>Medium</th>
										<th>Fee</th>
										<th>Intake</th>
										<th>Status</th>
										<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
                                                 
											
  <?php 
                                                    $sr = 1;
                                                    ?>
                                                        @foreach($values['records_lst'] as $r_data)
									       <?php 
  
   $program = \App\Models\programs::where('id',$r_data->program)->first();
   $university = \App\Models\universities::where('id',$r_data->university)->first();
   $miscellaneous = \App\Models\miscellaneous::get();
   $applicant = \App\Models\users_list::find($r_data->applicant);
  
  ?>  
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    
															    <td style="width:100px !important;">
																 <?php echo $university->name;?> 
																
																</td>
															
                                                                <td>
																@foreach($miscellaneous as $item_data)
												@if($item_data->id==$program->Title)
												{{ $item_data->title}}
												 @endif
												 @endforeach
																				 </td>
																
																 <td>{{ $program->Duration}}</td>
																 <td>{{ $program->Medium}}</td>
																 <td>{{ $program->Fee}}</td>
																
																    <td>
																@foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$program->Intake)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
																				 </td>
																  <td>
																  {{ $r_data->status}}
																  </td>
														  <td>
			<a href="agent-review?id={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-eye"></i></a>
            <a href="other-info?id={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-file"></i></a>
			</td 
                                                        </tr>
                                                       @endforeach
                                                 
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                           
                        </div><!--end row-->
                    
                      
                    
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

               
          @endsection