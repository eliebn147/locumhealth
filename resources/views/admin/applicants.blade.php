
      @extends('/admin.layout')

@section('mainarea')
                
                  <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Applicants List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Applicants</a></li>
                                            <li class="breadcrumb-item active">Applicants List</li>
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
                                                <h6 class="card-title mb-0">Applicants List </h6>
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
										 <th  style="width:100px !important;">Name</th>
                                        <th>Phone</th>
										 <th>Email</th>
                                        <th>Gender</th>
										<th>City</th>
										<th>Country</th>
										<th>Agent</th>
										<th>Action</th>
                                                    </tr>
													
													
													
													
													
                                                </thead>
                                                <tbody class="list form-check-all">
                                                  


												
                                                      

  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['cpi'] as $r_data)
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    <td style="width:100px !important;">{{ $r_data->name." ".$r_data->Surname}}</td>
															    <td>{{ $r_data->mobile}}</td>
															    <td>{{ $r_data->email}}</td>
                                                                <td>{{ $r_data->gender}}</td>
														        <td>{{ $r_data->city}}</td>
																 <td>{{ $r_data->country}}</td>
																  <td>{{ $r_data->agent_id}}</td>
														  <td>
			<a href="add-user?id={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-pencil"></i></a>
            <a href="users-list?dell={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
<a href="users-list?login={{$r_data->username}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><img src="upload/enter.png" style="width:20px;"></a>			
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