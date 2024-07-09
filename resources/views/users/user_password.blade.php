
      @extends('/users.layout')

@section('mainarea')
                 
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                   	@include ('users/include/dashboardheader')
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="gray-bg main-dashboard-sec" id="sec1">
                        <div class="container">
                            <!--  dashboard-menu-->
                            <div class="col-md-3">
                                <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
                                <div class="clearfix"></div>
                                
								
								@include ('users/include/user_nav')
								
                                <div class="clearfix"></div>
                            </div>
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                            <div class="col-md-9">
                                <div class="dashboard-title fl-wrap">
                                    <h3>Change Password</h3>
                                </div>
                                <!-- profile-edit-container-->
                                <div class="profile-edit-container fl-wrap block_box">
					@include("users/include/alertbox")
                                    <div class="custom-form">
									   <form  class="custom-form" method="post" action="account_working" >
                                                    @csrf       
                                              <input type="hidden" name="type"  value="4"/>   
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name="Old_pass" placeholder="Old Password" value=""/>
                                            </div>
                                            <div class="col-sm-6">
                                                 <label>New Password</label>
                                                <input type="password"  class="form-control" name="New_pass" placeholder="New Password" value=""/>
                                            </div>
                                            <div class="col-sm-6">
                                                 <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="Confirm" placeholder="Confirm Password" value=""/>
                                            </div>
                                         
											
											  <div class="col-sm-6">
                                                
                                        <button type="submit" class="btn    color2-bg  float-btn" style="margin-top:28px;width:100%;">Save Changes</button>
                                            </div>
                                        </div>
                                     </form>
										
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->
                             
                                <!-- profile-edit-container-->
                              
                                <!-- profile-edit-container end-->
                            </div>
                            <!-- dashboard content end-->
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
               
          @endsection