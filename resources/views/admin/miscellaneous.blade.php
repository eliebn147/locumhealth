
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
                                            <h6 class="card-title mb-0">Menage <?php echo $_GET['type']; ?></h6>
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
                                            <form action="save_miscellaneous" method="post">
				 @csrf
				 <input type="hidden" name="rec_id"  value="{{$values['miscellaneous_edit']->id ?? ''}}" >
				 <input type="hidden" name="type"  value="<?php echo $_GET['type']; ?>" />
				 
				 
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"><?php echo $_GET['type']; ?></label>
                                                            <input type="text" class="form-control" id="firstnameInput" placeholder="Enter <?php echo $_GET['type']; ?>" name="title"  value="{{$values['miscellaneous_edit']->title ?? ''}}" >
                                                        </div>
                                                    </div>
                                                   

												   <div class="col-lg-4">
													
													
													
													
													<label for="emailInput" class="form-label">.</label>
                                                        <div class="hstack gap-2 ">
														
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                          
                                                        </div>
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
<div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="coursesList">
                                    <div class="card-body">
                                        <div class="row align-items-center g-2">
                                            <div class="col-lg-3 me-auto">
                                                <h6 class="card-title mb-0"><?php echo $_GET['type']; ?> List </h6>
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
                                        <th>Title</th>
										<th>Action</th>
                                        </tr>
													
													
													
													
													
                                                </thead>
                                                <tbody class="list form-check-all">
                                                  


												
                                                       
                                                      

  <?php 
                                                    $sr = 1;
                                                    ?>
                                                         @foreach($values['miscellaneous'] as $r_data)
                                                        <tr>
                                                            <td><?php echo $sr++; ?></td>
															    <td>{{ $r_data->title}}</td>
														  <td>
			<a href="miscellaneous?type=Programs%20Title&id={{$r_data->id}}"   class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-pencil"></i></a>
            <a href="miscellaneous?type=Programs%20Title&dell={{$r_data->id}}"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn" ><i class="ph-trash"></i></a>
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
            </div><!-- End Page-content -->


               
               
          @endsection