
      @extends('/users.layout')

@section('mainarea')
                 
          <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                 <br> <br>
                    <!--  section  end-->               
                    <!--  section  -->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">
                            <!--about-wrap -->
                            <div class="about-wrap">
									@include("users/include/alertbox")
                                <div class="row">
                                  <div class="col-md-5">
                                       <img src="upload/agent_portal_pic.jpg" style="width:100%;">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ab_text">
                                          
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Partner Login</h3>
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
                                                      <br> <br> <br>  <br>
                                                      New member click to <a href="become-agent" ><i class="fa fa-user"></i> become partner</a>
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