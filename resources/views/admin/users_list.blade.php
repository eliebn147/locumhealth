
      @extends('/admin.layout')

@section('mainarea')
                
                  <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Users List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Courses</a></li>
                                            <li class="breadcrumb-item active">Users List</li>
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
                                                <h6 class="card-title mb-0">Users List </h6>
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
                                        <th>UserName</th>
										 <th>Email</th>
                                        <th>role</th>
										<th>Action</th>
                                                    </tr>
													
													
													
													
													
                                                </thead>
                                                <tbody class="list form-check-all">
                                                  


												
                                                       
                                                      

  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['admins'] as $r_data)
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    <td style="width:100px !important;">{{ $r_data->first_name." ".$r_data->last_name}}</td>
															    <td>{{ $r_data->phone}}</td>
															    <td>{{ $r_data->username}}</td>
                                                                <td>{{ $r_data->email}}</td>
														        <td>{{ $r_data->role}}</td>
														  <td>
			<a href="add-user?id={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-pencil"></i></a>
            <a href="users-list?dell={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
<a href="users-list?login={{$r_data->username}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><img src="upload/enter.png" style="width:20px;"></a>			
@if($r_data->role=="Agent")
<a href="agent-profile?agent={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-eye"></i></a>			
@endif
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