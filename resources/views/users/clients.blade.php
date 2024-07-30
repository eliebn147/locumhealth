
      @extends('/users.layout')

@section('mainarea')
                 
          <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Employers</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href=".\">Home</a></li>
                                    <li>Employers</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
			   <?php 
  
   $miscellaneous = \App\Models\tb_posts::where('type','clients')->get();
   
  
  ?>  
			 <!--<div class="section-full p-t120  p-b90 site-bg-white">-->
    <!--            <div class="container">-->

    <!--                <div class="masonry-wrap row d-flex">-->
    <!--                    @foreach($miscellaneous as $r_data)-->
    <!--                    <div class="masonry-item col-lg-4 col-md-12">-->

    <!--                        <div class="blog-post twm-blog-post-1-outer">-->
    <!--                            <div class="wt-post-media">-->
    <!--                                <a href="blog-single.html"><img src="upload/{{ $r_data->pic}}" alt=""></a>-->
    <!--                            </div>                                    -->
    <!--                            <div class="wt-post-info">-->
                                    
    <!--                                <div class="wt-post-title ">-->
    <!--                                    <h4 class="post-title">-->
    <!--                                        <a href="#">{{ $r_data->title}}</a>-->
    <!--                                    </h4>-->
    <!--                                </div>-->
    <!--                                <div class="wt-post-text ">-->
    <!--                                    <p>-->
    <!--                                        <?php echo $r_data->desciption; ?>-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                                <div class="wt-post-readmore ">-->
    <!--                                    <a href="jobs" class="site-button-link site-text-primary">Explore Jobs</a>-->
    <!--                                </div>                                        -->
    <!--                            </div>                                -->
    <!--                        </div>-->

    <!--                    </div>-->
						
				<!--		 @endforeach-->
						
				<!--		  </div>-->

                   

    <!--            </div>-->
    <!--        </div>   -->
			     <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area2">
                        
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>Locum Health UK </div>                                
                                    </div>
                                    <h2 class="wt-title">Our Tailored Staffing Solutions</h2>
                                    
                                </div>
                                <ul class="description-list">
                                    <li>
                                        <i class="feather-check"></i>
                                        	Thoroughly screened candidates
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        	Competitive rates
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                       	Compliant checked
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                       	Out of hour support 
                                    </li>
                                </ul>                  
                            <!-- TITLE END-->
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="twm-w-process-steps-2-wrap">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-sky-light bg-sky-light-shadow">
                                                <span class="twm-large-number text-clr-sky">01</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon1.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Contact us<br></h4>
                                                <p>Call us or send us an email with your requirement.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
        
                                    	<div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-green-light bg-clr-light-shadow">
                                                <span class="twm-large-number text-clr-green">02</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Dedicated recruitments consultant</h4>
                                                <p>We will designate a specialist recruitment consultant to locate the ideal candidate you are seeking.</p>
                                            </div>
                                            
                                        </div>
                                    </div>
        
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-pink-light bg-pink-light-shadow">
                                                <span class="twm-large-number text-clr-pink">03</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">Last minute specialists</h4>
                                                <p>Our consultants will keep you updated on the progress we have made on finding you the locum you require.
</p>
                                            </div>
                                            
                                        </div>
                                    </div>

                        
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="twm-w-process-steps-2">
                                            <div class="twm-w-pro-top bg-clr-yellow-light bg-yellow-light-shadow">
                                                <span class="twm-large-number text-clr-yellow">04</span>
                                                <div class="twm-media">
                                                    <span><img src="images/work-process/icon4.png" alt="icon1"></span>
                                                </div>
                                                <h4 class="twm-title">We Deliver</h4>                                                
                                                <p>We promise to make recruitment stress free, help us to help you.</p>
                                            </div>
                                        
                                        </div>
                                    </div>
									
									
									
									

					
        
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="twm-how-it-work-section">
                        
                    </div>                  
                </div>

            </div>   
               

            <!-- EXPLORE NEW LIFE START -->
            <div class="section-full p-t120 p-b120 twm-explore-area bg-cover " style="background-image: url(images/background/bg-1.jpg);">
                <div class="container">

                    <div class="section-content">
                        <div class="row">

                            <div class="col-lg-4 col-md-12">
                                <div class="twm-explore-media-wrap">
                                    <div class="twm-media">
                                        <img src="images/gir-large.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12">
                                <div class="twm-explore-content-outer">
                                    <div class="twm-explore-content">

                                        <div class="twm-l-line-1"></div>
                                        <div class="twm-l-line-2"></div>

                                        <div class="twm-r-circle-1"></div>
                                        <div class="twm-r-circle-2"></div>

                                        <div class="twm-title-small">Locum Health UK</div>
                                        <div class="twm-title-large">
                                            <h3 style="color:#ffffff;">With a candidate database of over 110,000 applicants, it’s no surprise why we are the leading healthcare agency in the UK.  </h3>
                                            <p>
                              We are the trusted choice for staffing needs among thousands of dental practices, GP surgeries, hospitals, clinics, and other healthcare providers                                           
                                            </p>
                                        </div>
                                        <div class="twm-upload-file">
                                            <a data-bs-toggle="modal" href="#Submit_Vacancy" role="button" class="site-button">Submit a Vacancy  <i class="feather-upload"></i></a>
                                            <a href="{{ asset('files/Locum-Health-Terms-and-Conditions.pdf') }}" target="_blank" role="button" class="site-button" style="margin-left: 4px">Terms & Conditions</a>  
                                      
                                        </div>

                                        
                                    </div>
                                    <div class="twm-bold-circle-right"></div>
                                    <div class="twm-bold-circle-left"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- EXPLORE NEW LIFE END -->
			   @include ('users/include/about_part_01')
          @endsection