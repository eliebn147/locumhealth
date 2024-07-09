
      @extends('/users.layout')

@section('mainarea')
         
        <!-- HEADER END -->
    
        <!-- CONTENT START -->
        <div class="page-content">
            <!--Banner Start-->
            <div class="twm-home-9-banner-section" style="background-image: url(images/home-9/banner-bg/pic1.jpg);">
                <div class="container">
                    <div class="row">
                        
                        <!--Left Section-->
                        <div class="col-xl-7 col-lg-12 col-md-12">
                            <div class="twm-bnr-left-section">
                                <div class="twm-bnr-title-large">
                                    <span>Locum Health offers same day payments</span>
                                  
                                </div> 
                                <div class="twm-bnr-search-bar">
                                    <form action="jobs">
                                        <div class="row">
                                            <!--Title-->
                                            <div class="form-group col-xl-8 col-lg-8 col-md-8">
                                                <label>Search here</label>
                                                <div class="twm-single-iput">
                                                    <input name="q" type="text" required class="form-control  bg-none" placeholder="Job title, Keywords, or company">
                                                </div>
                                            </div>
        
                                            <!--Find job btn-->
                                            <div class="form-group col-xl-4 col-lg-4 col-md-4">
                                                <button type="submit" class="site-button">Find Job</button>
                                            </div>
        
                                        </div>
                                    </form>
                                </div>
                               <div class="twm-bnr-popular-search">
                                    <span class="twm-title">Locum Health UK is one of the leading Healthcare Recruitment agencies specialising in Primary Care. It was created to help organisations find a cost effective way of recruiting whilst delivering qualified, professional, and compliant staff to services across the UK. Locum Health is here to help find your specialists in the most effective way possible.</span>
                                   
                                </div>
                            </div>
                        </div>

                        <!--right Section-->
                        <div class="col-xl-5 col-lg-12 col-md-12 twm-bnr-right-section">
                            <div class="twm-bnr-right-content">
                                <div class="bnr-media">
                                    <img src="images/home-9/banner-bg/right-pic1.png" alt="#">
                                </div>
                                <div class="slider-thumb-wrap">
                                    <div class="slider-thumb"></div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Banner End-->

            <!-- JOBS CATEGORIES SECTION START -->
           <!-- <div class="section-full twm-job-categories-carousal-area-9">
                <div class="container">

                    <div class="twm-job-categories-carousal-section">
                        <div class="owl-carousel twm-job-categories-carousal">
                        <?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   
  
  ?>  
                           
                     @foreach($miscellaneous as $r_data)
                            
                            <div class="item">
                                <div class="job-categories-3-wrap">
                                    <div class="job-categories-3">
                                        <div class="twm-media">
                                            <div class="flaticon-project-management"></div>
                                        </div>                                   
                                        <div class="twm-content" style="height:100px;">
                                            <div class="twm-jobs-available">Explore</div>
                                            <a href="#?item={{$r_data->id}}"> {{ $r_data->title}}</a>
                                        </div>                               
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                            
                        </div>
                    </div>

                </div>

            </div>   -->
            <!-- JOBS CATEGORIES SECTION END -->
           
            <!-- ABOUT SECTION START -->
			
			  @include ('users/include/top_companies')
			
			
            <div class="section-full p-t120 p-b90 twm-about-8-area">
                        
                <div class="container">
                    <div class="twm-about-9-section-wrap">
                        <div class="row">
                            
                            <div class="col-lg-6 col-md-12">
                                <div class="twm-about-9-section">
                                    <div class="twm-media">
                                        <img src="images/home-9/pic1.png" alt="">
                                    </div>
                                    <div class="img-bg-circle"></div>
                                    <!--icon-block-2-->
                                    <div class="twm-card-blocks-2 bounce2">
                                        <div class="twm-pics">
                                            <span><img src="images/main-slider/slider2/user/u-1.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider2/user/u-2.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider2/user/u-3.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider2/user/u-4.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider2/user/u-5.jpg" alt=""></span>
                                            <span><img src="images/main-slider/slider2/user/u-6.jpg" alt=""></span>
                                        </div>
                                        <div class="twm-content">
                                            <div class="tw-count-number text-clr-green">
                                                <span class="counter">3</span>K+
                                            </div>
                                            <p class="icon-content-info">Jobs Done</p>
                                        </div>
                                    </div> 

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="twm-about-9-section-right">
                                    <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                                <div>About Locum Health UK</div>                                
                                            </div>
                                            <h2 class="wt-title">Millions of jobs. Find the
                                                one that’s right for you.</h2>
                                            
                                        </div>
                                    <!-- TITLE END-->
                                       <p>
									   Locum Health UK is one of the leading Healthcare Recruitment agencies specialising in Primary Care. It was created to help organisations find a cost effective way of recruiting whilst delivering qualified, professional, and compliant staff to services across the UK. Locum Health is here to help find your specialists in the most effective way possible.
</p> <p>
With over 30 years’ experience in the Primary Care industry, we understand that matching up and finding the most efficient and well trained specialist can make a big impact on an individual as well as an entire community. Therefore we understand all types of  wants and needs that  our customers, clients and staff demand before carefully studying and handpicking the best specialists for the corresponding organisation.
									   
									   </p> 
                                        
                                        
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>   
            <!-- ABOUT SECTION END -->

            @include ('users/include/jobs_home')

            @include ('users/include/about_part_01')

            <?php 
  
   $miscellaneous = \App\Models\tb_posts::where('type','Testimonials')->get();
   
  
  ?>  
            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-light twm-testimonial-8-area">
                
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head left wt-small-separator-outer">
                        <div class="section-head center wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                               <div>Client Testimonials</div>                                
                            </div>
                            <h2 class="wt-title">Testimonials</h2>
                        </div>
                    </div>                  
                    <!-- TITLE END-->

                    <div class="section-content"> 
                        
                        <div class="owl-carousel twm-testimonial-8-carousel m-b30 owl-btn-bottom-center ">
                         @foreach($miscellaneous as $r_data)
                            <!-- COLUMNS 1 --> 
                            <div class="item ">
                                <div class="testimonials-v site-bg-white">
                                    <div class="twm-testi-media">
                                        <img src="upload/{{ $r_data->pic}}" alt="#">
                                    </div>
                                    <div class="testimonial-v-content">
                                        <div class="t-testimonial-top">
                                            <div class="t-quote"><i class="fa fa-quote-left"></i></div>
                                            <div class="t-rating">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                        </div>
                                        
                                        <div class="t-discription"><?php echo $r_data->desciption; ?>
                                        </div>

                                        <div class="twm-testi-detail">
                                            <div class="twm-testi-name">{{ $r_data->title}}</div>
                                            
                                        </div>
                                    </div>   
                                </div>
                            </div>
                           @endforeach
                            <!-- COLUMNS 2 --> 
                            
                            

                        </div>
                        
                    </div>                              
                </div>
                
            </div>
            <!-- TESTIMONIAL SECTION END -->

     

 	
               
          @endsection