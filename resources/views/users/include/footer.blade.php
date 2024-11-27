   <!-- FOOTER START -->
   <footer class="footer-light">
       <div class="container">

           <div class="footer-top">
               <div class="row">

                   <div class="col-lg-4 col-md-12">

                       <div class="widget widget_about">
                           <h3 class="widget-title">Contact us</h3>
                           <ul class="ftr-list">
                               <li>
                                   <p><span>Address :</span> 352-356 Battersea park road, London, SW11 3BY.</p>
                               </li>
                               <li>
                                   <p><span>Email :</span>info@locumhealth.co.uk</p>
                               </li>
                               <li>
                                   <p><span>Call :</span>0203 9315313</p>
                               </li>
                           </ul>
                       </div>

                   </div>

                   <div class="col-lg-8 col-md-12">
                       <div class="row">



                           <div class="col-lg-6 col-md-6 col-sm-6">
                               <div class="widget widget_services ftr-list-center">
                                   <h3 class="widget-title">Helpful Resources</h3>
                                   <ul>
                                       <li><a data-bs-toggle="modal" href="#upload_cv" role="button">Upload CV</a></li>
                                       <li><a href="#refer_friend" data-bs-toggle="modal">Refer a friend</a></li>
                                       <li><a href="contact">Leave feedback</a></li>
                                       <li><a href="jobs">Apply Now</a></li>
                                   </ul>
                               </div>
                           </div>

                           <div class="col-lg-6 col-md-6 col-sm-6">
                               <div class="widget widget_services ftr-list-center">
                                   <h3 class="widget-title">Quick Links</h3>
                                   <ul>
                                       <li class=""><a href=".\">Home</a> </li>
								<li class=""><a
                                                   href="about">About Us</a> </li>

                                       <li class=""><a href="jobs">Jobs</a> </li>
                                       <li class=""><a href="candidates">Candidates</a> </li>
                                       <li class=""><a href="employers">Employers</a> </li>

                                       <li class=""><a href="contact">Contact</a> </li>
                                   </ul>
                               </div>
                           </div>

                       </div>

                   </div>

               </div>
           </div>
           <!-- FOOTER COPYRIGHT -->
           <div class="footer-bottom">
               <br>
               <center>

                   <span class="copyrights-text" style="color:#17171d;width:100%;text-align:center;">Copyright ©
                       <?php echo date('Y'); ?> All Rights Reserved.</span>
               </center>
               <br>
           </div>

       </div>

   </footer>
   <!-- FOOTER END -->

   <!-- BUTTON TOP START -->
   <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

   <!--Model Popup Section Start-->
   <!--Signup popup -->

   <div class="modal fade twm-sign-up" id="refer_friend" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
       tabindex="-1">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <form action="upload_cv" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="modal-header">
                       <h2 class="modal-title" id="sign_up_popupLabel">Refer a friend</h2>

                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>

                   <div class="modal-body">
                       <div class="twm-tabs-style-2">

                           <div class="tab-content" id="myTabContent">
                               <!--Signup Candidate Content-->
                               <div class="tab-pane fade show active" id="sign-candidate">
                                   <div class="row">

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="redirect_url" type="hidden" value="jobs" />
                                               <input name="name" type="text" required="" class="form-control"
                                                   placeholder="Friend Name*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="email" type="email" class="form-control" required=""
                                                   placeholder="Friend Email*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="phone" type="text" class="form-control" required=""
                                                   placeholder="Friend Phone*">
                                           </div>
                                       </div>



                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <textarea name="message" class="form-control" placeholder="Message*" rows="10"></textarea>
                                           </div>
                                       </div>


                                       <!--<div class="col-lg-12">-->
                                       <!--    <div class="form-group mb-3">-->
                                       <!--        <div class=" form-check">-->
                                       <!--            <input type="checkbox" class="form-check-input" id="agree1">-->
                                       <!--            <label class="form-check-label" for="agree1">I agree to the Terms and conditions</label>-->

                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                       <div class="col-md-12">
                                           <button type="submit" class="site-button">Submit</button>
                                       </div>

                                   </div>
                               </div>
                               <!--Signup Employer Content-->


                           </div>
                       </div>
                   </div>



               </form>
           </div>
       </div>

   </div>


   <div class="modal fade twm-sign-up" id="Submit_Vacancy" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
       tabindex="-1">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <form action="submit_Vacancy" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="modal-header">
                       <h2 class="modal-title" id="sign_up_popupLabel">Submit a Vacancy</h2>

                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>

                   <div class="modal-body">
                       <div class="twm-tabs-style-2">

                           <div class="tab-content" id="myTabContent">
                               <!--Signup Candidate Content-->
                               <div class="tab-pane fade show active" id="sign-candidate">
                                   <div class="row">

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="redirect_url" type="hidden" value="jobs" />
                                               <input name="name" type="text" required=""
                                                   class="form-control" placeholder="Name*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="email" type="email" class="form-control"
                                                   required="" placeholder="Email*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="phone_no" type="text" class="form-control"
                                                   required="" placeholder="Phone*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="location" type="text" class="form-control"
                                                   required="" placeholder="Location*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <textarea name="description" class="form-control" placeholder="Job description *" rows="10"></textarea>
                                           </div>
                                       </div>


                                       <!--<div class="col-lg-12">-->
                                       <!--    <div class="form-group mb-3">-->
                                       <!--        <div class=" form-check">-->
                                       <!--            <input type="checkbox" class="form-check-input" id="agree1">-->
                                       <!--            <label class="form-check-label" for="agree1">I agree to the Terms and conditions</label>-->

                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                       <div class="col-md-12">
                                           <button type="submit" class="site-button">Submit</button>
                                       </div>

                                   </div>
                               </div>
                               <!--Signup Employer Content-->


                           </div>
                       </div>
                   </div>



               </form>
           </div>
       </div>

   </div>



   <div class="modal fade twm-sign-up" id="upload_cv" aria-hidden="true" aria-labelledby="sign_up_popupLabel"
       tabindex="-1">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <form action="upload_cv" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="modal-header">
                       <h2 class="modal-title" id="sign_up_popupLabel">Upload CV</h2>

                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>

                   <div class="modal-body">
                       <div class="twm-tabs-style-2">

                           <div class="tab-content" id="myTabContent">
                               <!--Signup Candidate Content-->
                               <div class="tab-pane fade show active" id="sign-candidate">
                                   <div class="row">

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="redirect_url" type="hidden" value="jobs" />
                                               <input name="name" type="text" required=""
                                                   class="form-control" placeholder="Name*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="email" type="email" class="form-control"
                                                   required="" placeholder="Email*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="phone" type="text" class="form-control"
                                                   required="" placeholder="Phone*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12" style="margin-bottom: 16px">
                                           <input type="file" name="cv_file" id="cv_input" style="display:none;"
                                               class="form-control" required="" />
                                           <label for="cv_input"
                                               style="background:#f0f6fe;font-size:14px;width:100%;padding:15px; border-radius:10px;"><img
                                                   src="upload/upload.png" width="24"
                                                   style="margin-right:15px;" /> <span id="file_label">Click to select
                                                   cv </span></label>
                                           <script>
                                               document.getElementById('cv_input').onchange = function() {
                                                console.log("inside on change")
                                                   var files = event.target.files
                                                   var filename = files[0].name
                                                   var extension = files[0].type

                                                   console.log("filename ", filename)
                                                   console.log("element ", document.getElementById('file_label'))

                                                   document.getElementById('file_label').innerHTML = filename;
                                               };
                                           </script>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <textarea name="message" class="form-control" placeholder="Message*" rows="10"></textarea>
                                           </div>
                                       </div>


                                       {{-- <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <a class="form-check-label" href="{{ asset('files/Locum-Health-Terms-and-Conditions.pdf') }}" target="_blank">I agree to the Terms and conditions</a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                       <div class="col-md-12">
                                           <button type="submit" class="site-button">Submit</button>
                                       </div>

                                   </div>
                               </div>
                               <!--Signup Employer Content-->


                           </div>
                       </div>
                   </div>



               </form>
           </div>
       </div>

   </div>
   <!--Login popup -->
   <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2"
       tabindex="-1">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">

               <form>
                   <div class="modal-header">
                       <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                       <p>Login and get access to all the features of Jobzilla</p>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <div class="twm-tabs-style-2">
                           <ul class="nav nav-tabs" id="myTab2" role="tablist">

                               <!--Login Candidate-->
                               <li class="nav-item">
                                   <button class="nav-link active" data-bs-toggle="tab"
                                       data-bs-target="#login-candidate" type="button"><i
                                           class="fas fa-user-tie"></i>Candidate</button>
                               </li>
                               <!--Login Employer-->
                               <li class="nav-item">
                                   <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer"
                                       type="button"><i class="fas fa-building"></i>Employer</button>
                               </li>

                           </ul>

                           <div class="tab-content" id="myTab2Content">
                               <!--Login Candidate Content-->
                               <div class="tab-pane fade show active" id="login-candidate">
                                   <div class="row">

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="username" type="text" required=""
                                                   class="form-control" placeholder="Usearname*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="email" type="text" class="form-control"
                                                   required="" placeholder="Password*">
                                           </div>
                                       </div>


                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <div class=" form-check">
                                                   <input type="checkbox" class="form-check-input" id="Password3">
                                                   <label class="form-check-label rem-forgot" for="Password3">Remember
                                                       me <a href="javascript:;">Forgot Password</a></label>

                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <button type="submit" class="site-button">Log in</button>
                                           <div class="mt-3 mb-3">Don't have an account ?
                                               <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                                   data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                               <!--Login Employer Content-->
                               <div class="tab-pane fade" id="login-Employer">
                                   <div class="row">

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="username" type="text" required=""
                                                   class="form-control" placeholder="Usearname*">
                                           </div>
                                       </div>

                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <input name="email" type="text" class="form-control"
                                                   required="" placeholder="Password*">
                                           </div>
                                       </div>


                                       <div class="col-lg-12">
                                           <div class="form-group mb-3">
                                               <div class=" form-check">
                                                   <input type="checkbox" class="form-check-input" id="Password4">
                                                   <label class="form-check-label rem-forgot" for="Password4">Remember
                                                       me <a href="javascript:;">Forgot Password</a></label>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="col-md-12">
                                           <button type="submit" class="site-button">Log in</button>
                                           <div class="mt-3 mb-3">Don't have an account ?
                                               <button class="twm-backto-login" data-bs-target="#sign_up_popup"
                                                   data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                           </div>
                                       </div>

                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <span class="modal-f-title">Login or Sign up with</span>
                       <ul class="twm-modal-social">
                           <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a>
                           </li>
                           <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a>
                           </li>
                           <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                       </ul>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!--Model Popup Section End-->
