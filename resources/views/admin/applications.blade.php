
      @extends('/admin.layout')

@section('mainarea')
                
                  <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Applications List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Applications</a></li>
                                            <li class="breadcrumb-item active">Applications List</li>
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
                                                <h6 class="card-title mb-0">Applications List </h6>
                                            </div><!--end col-->
                                           
                                        </div>
										<hr>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table-card" style="padding:0px 20px 0px 20px;">
                                               <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                     <tr>
                                                       
                                                     <th>Sr</th>
										 <th >Name</th>
                                       
										 <th>Email</th>
                                      
										<th>phone</th>
										<th>CV File</th>
										<th>Applied for</th>
										<th>Date</th>
										<th>Message</th>
										<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
											
  <?php 
                                                    $sr = 1;
                                                    ?>
                                                        @foreach($values['records_lst'] as $program)
									               <?php 
												   $miscellaneous = \App\Models\jobs_list::find($program->vacancies_type);
												   ?>
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															     <td>{{ $program->name}}</td>
																 <td>{{ $program->email}}</td>
																 <td>{{ $program->phone}}</td>
																
																 
																  <td>
																  <a href="upload/{{ $program->cv_file}}"  target="_blank" >CV File</a>
																  </td>
																   <td>{{ $miscellaneous->title ?? ''}} (ID: {{$program->vacancies_type}} )</td>
																   <td>{{ $program->date}}</td>
																   <td>{{ $program->message}}</td>
														  <td>
            <a href="applications?dell={{$program->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
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