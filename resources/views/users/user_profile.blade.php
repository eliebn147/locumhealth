
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
                                    <h3>Your Profile</h3>
                                </div>
                                <!-- profile-edit-container-->
                                <div class="profile-edit-container fl-wrap block_box">
								@include("users/include/alertbox")

                                    <div class="custom-form">
                        <form  class="custom-form" method="post" action="account_working" >
                                                    @csrf    
                                      <input type="hidden" name="type"  value="3"/>   													
									  <div class="row">
                                            <div class="col-sm-6">
                                                <label>Full Name </label>
                                                <input type="text" class="form-control"  name="name" placeholder="Full Name" value="{{ session()->get('user_name') }}"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>WhatsApp </label>
                                                <input type="text"  class="form-control"  name="whatsapp" placeholder="WhatsApp" value="{{ session()->get('user_whatsapp') }}"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Date of bith  </label>
                                                <input type="date" class="form-control"  name="dob" value="{{ session()->get('user_dob') }}"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Address  </label>
                                                <input type="text"  class="form-control" name="Address" placeholder="Address" value="{{ session()->get('user_Address') }}"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label> City   </label>
                                                <input type="text" class="form-control" name="City" placeholder="City" value="{{ session()->get('user_City') }}"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label> Country   </label>
                                                <input type="text" class="form-control" name="Country" placeholder="Country" value="{{ session()->get('user_Country') }}"/>
                                            </div>
											
											  <div class="col-sm-6">
                                               
                                        <button class="btn    color2-bg  float-btn">Save Changes</button>
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