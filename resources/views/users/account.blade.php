
      @extends('/users.layout')

@section('mainarea')
                 
          <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/29.jpeg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Account</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>Account</span></div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->               
                    <!--  section  -->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">
                            <!--about-wrap -->
                            <div class="about-wrap">
									@include("users/include/alertbox")
                                <div class="row">
                                  <div class="col-md-3">
                                      </div>
                                  <div class="col-md-6">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Student Login</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                 <form  class="custom-form" method="post" action="account_working" >
                                                    @csrf       
                                              <input type="hidden" name="type"  value="1"/> 
											  <?php 
											  if(isset($_GET['item'])){
											  
											  ?>
                                              <input type="hidden" name="redirect_link"  value="apply?item=<?php echo $_GET['item'];?>"/> 											  
                                              <?php }else{ ?>
										 <input type="hidden" name="redirect_link"  value="my-applications"/> 											  

											   <?php } ?>
												   <fieldset>
													
														
														 <div class="form-group col-md-12">
                                                        <label>Email :</label>
                                                        <input type="email" name="email" required class="form-control" placeholder="Email :" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-12">
                                                        <label>Password:</label>
                                                        <input type="password" name="Password"  required class="form-control" placeholder="password *" value=""/>
														<a href="#" style="float:right;"><i class="fa fa-lock"></i> Forgot Password</a>
														</div>
														<div class="form-group col-md-12">
														
                                                      <button class="btn float-btn color2-bg " id="submit" style="width:100%;">Submit </button>
                                                      <br><br><br><br>
                                                      Not a member yet? <a href="sign-up" ><i class="fa fa-user"></i>  Sign-up Now</a>
														</div>
														
														</fieldset>
                                                
                                                </form>
                                            </div>
                                            <!-- contact form  end--> 
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="display:none;">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Agent Login</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                	<form  class="custom-form" action="do_login" method="post">
				 @csrf      
                                              <input type="hidden" name="type"  value="1"/>   

												   <fieldset>
													
														
														 <div class="form-group col-md-12">
                                                        <label>Email :</label>
                                                        <input type="email" name="username" required class="form-control" placeholder="Email :" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-12">
                                                        <label>Password:</label>
                                                        <input type="password" name="password" required class="form-control" placeholder="password *" value=""/>
														<a href="#" style="float:right;"><i class="fa fa-lock"></i> Forgot Password</a>
														</div>
														<div class="form-group col-md-12">
														
                                                      <button class="btn float-btn color2-bg " id="submit" style="width:100%;">Submit </button>
														</div>
														
														</fieldset>
                                                    
                                                </form>
                                            </div>
                                            <!-- contact form  end--> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  --> 
                        </div>
                    </section>
                    <section class="no-padding-section">
                        <div class="map-container">
                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
                        </div>
                    </section>
                </div>
                <!--content end-->
            </div>
        
               
          @endsection