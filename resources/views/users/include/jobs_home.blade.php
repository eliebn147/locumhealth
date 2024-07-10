   <!-- JOB POST START -->
            <div class="section-full p-t120 p-b90 site-bg-gray twm-bg-ring-wrap2">
                <div class="twm-bg-ring-right"></div>
                <div class="twm-bg-ring-left"></div>
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <!--<div class="wt-small-separator site-text-primary">-->
                                    <!--<div>All Jobs Post</div>                                -->
                                    <!--</div>-->
                                    <h2 class="wt-title">Latest jobs vacancies</h2>
                                </div>                  
                                <!-- TITLE END-->
                            </div>
                           
                        </div>
                    </div>
                   
                    <div class="section-content">
                       <div class="twm-jobs-grid-wrap">
                           <div class="row">
						    @foreach($values['jobs_lst'] as $r_data)
                                <div class="col-lg-4 col-md-6">
                                    <div class="twm-jobs-grid-style1  ">
                                       
                                       
                                        
                                        <div class="twm-mid-content">
                                            <a href="item?id=<?php echo urlencode($r_data->id); ?>" class="twm-job-title">
                                                <h4 style="">{{ $r_data->title}}</h4>
                                            </a>
											<hr>
                                            <p class="twm-job-address"><i class="fa fa-map-marker" style="color:red"></i> {{ $r_data->Location}}</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount"><i class="fa fa-money" aria-hidden="true"></i> {{ $r_data->Salary}} <span></span></div>
                                            <a href="item?title=<?php echo urlencode($r_data->title); ?>" class="twm-jobs-browse site-text-primary"><?php echo date('d M Y', strtotime($r_data->date)); ?></a>
                                        </div>
										 <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">@foreach($values['miscellaneous'] as $item_data)
												@if($item_data->id==$r_data->category)
												{{ $item_data->title}}
												 @endif
												 @endforeach <span></span></div>
                                            <a  data-bs-toggle="modal" href="#apply_job{{ $r_data->id}}" role="button"  class="twm-jobs-browse site-text-primary">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
								
								
								   <div class="modal fade twm-sign-up" id="apply_job{{ $r_data->id}}" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="apply_job" method="post"  enctype="multipart/form-data" >
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title" id="sign_up_popupLabel">Apply for <br> {{ $r_data->title}}</h4>
                               
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                  
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
												
												    <input name="job_id" type="hidden" value="{{ $r_data->id}}"  />
												
                                                   <input name="redirect_url" type="hidden" value="jobs"  />
                                                   <input name="name" type="text" required="" class="form-control" placeholder="Name*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="email" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="cv_file" type="file" class="form-control" >
                                                </div>
                                            </div>
                                            
											 <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <textarea name="message" class="form-control" placeholder="Message*" rows="10"></textarea>
                                                </div>
                                            </div>
											
											
                                          
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Submit</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Signup Employer Content--> 
                             
                                    
                                    </div>
                                </div> 
                            </div>

                          

                        </form>
                    </div>
                </div>
                
            </div>
								
								
                                @endforeach
                               
                                <center>
  <div class="twm-upload-file">
       <br> <br>
                                                <a href="jobs" class="site-button">View All Jobs</a>
                                            </div>
                                             </center>
                            </div>
                           
                       </div>
                    </div>
                   
                </div>
            </div>
            <!-- JOB POST END -->