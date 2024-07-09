
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
                                <h2 class="wt-title">About Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href=".\">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
           
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
      
 @include ('users/include/about_part_01')
        </div>
        <!-- CONTENT END -->
          @endsection