
      @extends('/users.layout')

@section('mainarea')
      <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">{{ $values['job_info']->title; }}</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href=".\">Home</a></li>
                                    <li>Job Detail</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->



            <!-- OUR BLOG START -->
            <div class="section-full  p-t120 p-b90 bg-white">
                <div class="container">
                
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                        
                            <div class="col-lg-8 col-md-12">
                                <!-- Candidate detail START -->
                                <div class="cabdidate-de-info">
                                    <div class="twm-job-self-wrap">
                                        <div class="twm-job-self-info">
                                            <div class="twm-job-self-top">
                                                
                                                
                                                
                                                <div class="twm-mid-content">

                                                

                                                    <h4 class="twm-job-title">{{ $values['job_info']->title; }} <span class="twm-job-post-duration">/ Posted on <?php echo date('d M Y', strtotime($values['job_info']->date)); ?></span></h4>
                                                    <p class="twm-job-address"><i class="feather-map-pin"></i> {{ $values['job_info']->Location}}</p>
                                                    <div class="twm-job-self-mid">
                                                        <div class="twm-job-self-mid-left">
                                                            
                                                            <div class="twm-jobs-amount">{{ $values['job_info']->Salary}} </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="twm-job-self-bottom">
													<br><br><br>
                                                        <a class="site-button" data-bs-toggle="modal" href="#apply_jobsss" role="button">
                                                            Apply Now
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <h4 class="twm-s-title">Job Description:</h4>

                                    <p><?php echo $values['job_info']->job_details ;?>
                                    </p>

                                  
                                  
                                   

                                  

                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 rightSidebar" style="display:none;">

                                <div class="side-bar mb-4">
                                    <div class="twm-s-info2-wrap mb-5">
                                        <div class="twm-s-info2">
                                            <h4 class="section-head-small mb-4">Job Information</h4>
                                            <ul class="twm-job-hilites">
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span class="twm-title">Date Posted</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-eye"></i>
                                                    <span class="twm-title">8160 Views</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-file-signature"></i>
                                                    <span class="twm-title">6 Applicants</span>
                                                </li>
                                            </ul>
                                            <ul class="twm-job-hilites2">
    
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <span class="twm-title">Date Posted</span>
                                                        <div class="twm-s-info-discription">April 22, 2023</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span class="twm-title">Location</span>
                                                        <div class="twm-s-info-discription">Munchen, Germany</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Job Title</span>
                                                        <div class="twm-s-info-discription">Web Developer</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-clock"></i>
                                                        <span class="twm-title">Experience</span>
                                                        <div class="twm-s-info-discription">3 Year</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-suitcase"></i>
                                                        <span class="twm-title">Qualification</span>
                                                        <div class="twm-s-info-discription">Bachelor Degree </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-venus-mars"></i>
                                                        <span class="twm-title">Gender</span>
                                                        <div class="twm-s-info-discription">Both</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <span class="twm-title">Offered Salary</span>
                                                        <div class="twm-s-info-discription">$2000-$2500 / Month</div>
                                                    </div>
                                                </li>
    
                                            </ul>
                                            
                                        </div>
                                    </div>
    
                                    <div class="widget tw-sidebar-tags-wrap">
                                        <h4 class="section-head-small mb-4">Job Skills</h4>
                                        
                                        <div class="tagcloud">
                                            <a href="javascript:void(0)">Html</a>
                                            <a href="javascript:void(0)">Python</a>
                                            <a href="javascript:void(0)">WordPress</a>                                            
                                            <a href="javascript:void(0)">JavaScript</a>
                                            <a href="javascript:void(0)">Figma</a>
                                            <a href="javascript:void(0)">Angular</a>
                                            <a href="javascript:void(0)">Reactjs</a>
                                            <a href="javascript:void(0)">Drupal</a>
                                            <a href="javascript:void(0)">Joomla</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="twm-s-info3-wrap mb-5">
                                    <div class="twm-s-info3">
                                        <div class="twm-s-info-logo-section">
                                            <div class="twm-media">
                                                <img src="images/jobs-company/pic1.jpg" alt="#">
                                            </div>
                                            <h4 class="twm-title">Senior Web Designer , Developer</h4>
                                        </div>
                                        <ul>

                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-building"></i>
                                                    <span class="twm-title">Company</span>
                                                    <div class="twm-s-info-discription">Software Development</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-mobile-alt"></i>
                                                    <span class="twm-title">Phone</span>
                                                    <div class="twm-s-info-discription">+291  560 56456</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-at"></i>
                                                    <span class="twm-title">Email</span>
                                                    <div class="twm-s-info-discription">thewebmaxdemo@gmail.com</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-desktop"></i>
                                                    <span class="twm-title">Website</span>
                                                    <div class="twm-s-info-discription">https://themeforest.net</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span class="twm-title">Address</span>
                                                    <div class="twm-s-info-discription">1363-1385 Sunset Blvd Angeles, CA
                                                        90026 ,USA</div>
                                                </div>
                                            </li>

                                        </ul>
                                        <a href="about-1.html" class=" site-button">Vew Profile</a>
                                        
                                    </div>
                                </div>

                                <div class="twm-advertisment" style="background-image:url(images/add-bg.jpg);">
                                    <div class="overlay"></div>
                                    <h4 class="twm-title">Recruiting?</h4>
                                    <p>Get Best Matched Jobs On your <br>
                                     Email. Add Resume NOW!</p>
                                     <a href="javascript:;" class="site-button white">Read More</a> 
                                 </div>
    
    
                            </div>
                        
                        </div>
                                                
                    </div>
                    
                </div>
                
            </div>   
            <!-- OUR BLOG END -->          
            
     
        </div>

		   <div class="modal fade twm-sign-up" id="apply_jobsss" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="apply_job" method="post"  enctype="multipart/form-data" >
                            @csrf
                            <div class="modal-header">
                                <h4 class="modal-title" id="sign_up_popupLabel">Apply for <br> <?php echo $values['job_info']->title ;?> </h4>
                               
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
												
												    <input name="job_id" type="hidden" value="<?php echo $values['job_info']->id ;?>"  />
												
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
            
                                            <div class="col-lg-12" style="margin-bottom: 16px">
                                                <input type="file" name="cv_file" id="cv_input2" style="display:none;" class="form-control" required=""/>
                                                <label for="cv_input2" style="background:#f0f6fe;font-size:14px;width:100%;padding:15px; border-radius:10px;"><img src="upload/upload.png" width="24" style="margin-right:15px;" />  <span id="file_label3">Click to select cv </span></label>
                                                <script>
                                                    document.getElementById('cv_input2').onchange = function () {
                                                        var files = event.target.files
      var filename = files[0].name
      var extension = files[0].type
      
      document.getElementById('file_label3').innerHTML = filename;
      
      
    
   };
                                                    </script>
                                            </div>
                                            
											 <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <textarea name="message" class="form-control" placeholder="Message*" rows="10"></textarea>
                                                </div>
                                            </div>
											
											
                                            {{-- <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <a class="form-check-label" href="{{ asset('files/Locum-Health-Terms-and-Conditions.pdf') }}" target="_blank">I agree to the Terms and conditions</a>
                                                    </div>
                                                </div>
                                            </div> --}}
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


@endsection