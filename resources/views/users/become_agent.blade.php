
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
                                <h2><span>partner</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>Partner</span></div>
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
                                  
                                    <div class="col-md-12">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Become Agent</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Please fill out bellow form .</p>
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form  class="custom-form" method="post" action="save_agent"  enctype="multipart/form-data">
                                                    @csrf   
                                                    <fieldset>
													 <div class="form-group col-md-4">
                                                        <label>Consultancy Name:</label>
                                                        <input type="text" name="first_name" required class="form-control" placeholder="Consultancy Name *" value=""/>
														</div>
														 <div class="form-group col-md-4">
                                                        <label>Date Of Establishment:</label>
                                                        <input type="date" name="Date_Of_Establishment" required class="form-control" placeholder="Date Of Establishment" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-4">
                                                        <label>NTN #:</label>
                                                        <input type="text" name="NTN" required class="form-control" placeholder="NTN #:" value=""/>
                                                       
														</div>
														
														
											
											
														
														 <div class="form-group col-md-4">
                                                        <label>Address :</label>
                                                        <input type="text" name="Address" required class="form-control" placeholder="Address :" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-4">
                                                        <label>Major Countries Dealing With:</label>
                                                        <input type="text" name="Countries" required class="form-control" placeholder="Major Countries Dealing With:" value=""/>
                                                      
														</div>
														 <div class="form-group col-md-4">
                                                        <label>Average Student's Enrollment Per Year:</label>
                                                        <input type="text" name="Average_Student" required class="form-control" placeholder="Average Student's Enrollment Per Year:" value=""/>
                                                    
														</div>
														 <div class="form-group col-md-4">
                                                        <label>CEO Name:</label>
                                                        <input type="text" name="CEO_Name" required class="form-control" placeholder="CEO Name:" value=""/>
                                                        
														</div>
														 <div class="form-group col-md-4">
                                                        <label>Mobile / Whatsapp # :</label>
                                                        <input type="text" name="Mobile_Whatsapp" required class="form-control" placeholder="Mobile / Whatsapp # :" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-4">
                                                        <label>Landline# :</label>
                                                        <input type="text" name="phone" required class="form-control"  placeholder="Landline *" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-4">
                                                        <label>Email :</label>
                                                        <input type="text" name="email" required class="form-control" placeholder="Email :" value=""/>
                                                       
														</div>
														 <div class="form-group col-md-4">
                                                        <label>CNIC # :</label>
                                                        <input type="text" name="CNIC" required class="form-control" placeholder="CNIC # :" value=""/>
                                                       
														</div>
													
                                             
									
											
															 <div class="form-group col-md-4">
                                                        <label>Registration Document:</label>
                                                        <input type="file" name="doc_01"  class="form-control"  />
                                                       
														</div>
															 <div class="form-group col-md-4">
                                                        <label>Registration Document :</label>
                                                        <input type="file" name="doc_02"  class="form-control" />
                                                       
														</div>
														
														<div class="form-group col-md-4">
														
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