
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
                                <div class="row">
                                  <div class="col-md-6">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Login</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form  class="custom-form" method="post" action="#" name="contactform" id="contactform">
                                                    <fieldset>
													
														
														 <div class="form-group col-md-12">
                                                        <label>Email :</label>
                                                        <input type="email" name="Email" class="form-control" placeholder="Email :" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-12">
                                                        <label>Password:</label>
                                                        <input type="password" name="password" class="form-control" placeholder="password *" value=""/>
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
                                    <div class="col-md-6">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Sign Up</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form  class="custom-form" method="post" action="#" name="contactform" id="contactform">
                                                    <fieldset>
													 <div class="form-group col-md-12">
                                                        <label>Full Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Full Name" value=""/>
														</div>
														
														 <div class="form-group col-md-12">
                                                        <label>Whatsapp</label>
                                                        <input type="text" name="Whatsapp" class="form-control" placeholder="Whatsapp" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-12">
                                                        <label>Email</label>
                                                        <input type="email" name="Email" class="form-control" placeholder="Email" value=""/>
                                                       
														</div>
													    <div class="form-group col-md-12">
                                                        <label>Password:</label>
                                                        <input type="password" name="password" class="form-control" placeholder="password *" value=""/>
														</div>
														
														
														<div class="form-group col-md-12">
														
                                                      <button class="btn float-btn color2-bg " id="submit" style="width:100%;">Sign Up </button>
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