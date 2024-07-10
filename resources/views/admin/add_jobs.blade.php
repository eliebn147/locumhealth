
      @extends('/admin.layout')

@section('mainarea')
                <?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   
  
  ?>  
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
                                            <h6 class="card-title mb-0">Job Details</h6>
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
                                            <form action="save_programs" method="post" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="rec_id"  value="{{$values['rec_edit']->id ?? ''}}" >
                                                <div class="row">
                                              
													
													
													
													
													
													
													
                                                 
													
													
											
													
                                                    <!--end col-->
                                                    <div class="col-lg-8">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="phonenumberInput" placeholder="title" required name="title" value="{{$values['rec_edit']->title ?? ''}}" >
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">  
                                                            <label for="emailInput" class="form-label">Post Date</label>
                                                            <input type="date" class="form-control" id="emailInput" placeholder="Post Date" required name="date" value="{{$values['rec_edit']->date ?? ''}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Location</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Location" required name="Location" value="{{$values['rec_edit']->Location ?? ''}}">
                                                        </div>
                                                    </div>
													
													   <div class="col-lg-4">
													 <label for="emailInput" class="form-label">Category</label>
													  <select class="form-control" data-choices data-choices-search-false name="category" id="passedYear">
                                                                                <option value="{{$values['rec_edit']->category ?? ''}}">Select </option>
																				
																				  @foreach($miscellaneous as $r_data)
																				
                                                                                <option value="{{ $r_data->id}}">{{ $r_data->title}}</option>
                                                                               @endforeach
                                                                            </select>
													
													
													
                                                    </div>
												
													
													
													
													
													 <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Salary From TO</label>
                                                            <input type="text" class="form-control" id="emailInput" placeholder="Salary From TO" required name="Salary" value="{{$values['rec_edit']->Salary ?? ''}}">
                                                        </div>
                                                    </div>


													
													
													
                                                    <!--end col-->
                                    
                                                    
													
													 <div class="col-lg-12">
													 <label for="emailInput" class="form-label">Details</label>
													  <textarea class="ckeditor-classic"  name="job_details" id="passedYear">{{$values['rec_edit']->job_details ?? ''}}</textarea>
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

                </div>
                <!-- container-fluid -->
            </div><!-- End Page-content -->


               
          @endsection