<?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   
  
  ?>  

 <header  class="site-header header-style-3 no-fixed mobile-sider-drawer-menu">

            <div class=" main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href=".\">
                                <img src="images/logo.gif" alt="">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
 
                            <ul class=" nav navbar-nav">
                                <li class=""><a href=".\">Home</a> </li>
								<li class=""><a href="about">About Us</a> </li>
								
								<li class=""><a href="jobs">Jobs</a> </li>
								<li class=""><a href="candidates">Candidates</a> </li>
								<li class=""><a href="employers">Employers</a> </li>
								
								<li class=""><a href="contact">Contact</a> </li>
								
					






			
                               
                               
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <!--<div class="extra-cell">-->
                            <!--    <div class="header-search">-->
                            <!--        <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>-->
                            <!--    </div>                                -->
                            <!--</div>-->
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left" >
                                        <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#upload_cv" role="button"  style=" background-color: #053597;
  color: #ffffff;">
                                            <i class="feather-file"></i> Upload CV
                                        </a>
                                    </div>
                                    <div class="twm-nav-btn-right">
                                        <a href="tel:02039315313" class="twm-nav-post-a-job">
                                            <i class="feather-phone"></i> 0203 9315313 
                                        </a>
                                    </div>
                                </div>
                            </div> 
                                
                        </div>                            
                    
                                                    
                        
                    </div>    
                
                
                </div>

                <!-- SITE Search -->
                <!--<div id="search"> -->
                <!--    <span class="close"></span>-->
                <!--    <form role="search" id="searchform" action="jobs" method="get" class="radius-xl">-->
                <!--        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>-->
                <!--        <span class="input-group-append">-->
                <!--            <button type="submit" class="search-btn">-->
                <!--                <i class="fa fa-paper-plane"></i>-->
                <!--            </button>-->
                <!--        </span>-->
                <!--    </form>-->
                <!--</div> -->
            </div>



            
             


            
        </header>