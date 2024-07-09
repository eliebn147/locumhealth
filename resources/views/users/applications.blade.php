
      @extends('/admin.layout')

@section('mainarea')
                
                  <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Programs List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Programs</a></li>
                                            <li class="breadcrumb-item active">Programs List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="coursesList">
                                    <div class="card-body">
                                        <div class="row align-items-center g-2">
                                            <div class="col-lg-3 me-auto">
                                                <h6 class="card-title mb-0">Programs List </h6>
                                            </div><!--end col-->
                                           
                                        </div>
										<hr>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                            <table class="table " id="example">
                                                <thead class="text-muted">
                                                    <tr>
                                                       
                                                     <th>Sr</th>
										  <th>Applicant</th>
										 <th >University</th>
                                       
										 <th>Program</th>
                                        <th>Type</th>
										<th>Duration</th>
										<th>Medium</th>
										<th>Fee</th>
										<th>Intake</th>
										<th>Status</th>
										<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
												
											
  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['records_lst'] as $r_data)
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    <td>
																@foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$r_data->Category)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
																</td>
															    <td style="width:100px !important;">
																@foreach($values['universities'] as $item_data)
																				   @if($item_data->id==$r_data->University)
																			{{ $item_data->name}}
																				   @endif
																				 @endforeach
																
																</td>
															
                                                                <td>
																@foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$r_data->Title)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
																				 </td>
																 <td>{{ $r_data->Type}}</td>
																 <td>{{ $r_data->Duration}}</td>
																 <td>{{ $r_data->Medium}}</td>
																 <td>{{ $r_data->Fee}}</td>
																
																    <td>
																@foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$r_data->Intake)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach
																				 </td>
																  <td>{{ $r_data->Status}}</td>
														  <td>
			<a href="add-program?id={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-pencil"></i></a>
            <a href="programs-list?dell={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
			</td>
                                                        </tr>
                                                       @endforeach

									
                                                   
													
													
													
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        
                                        </div>
                                        
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div>

               
          @endsection