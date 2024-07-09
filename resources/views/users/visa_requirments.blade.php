
      @extends('/users.layout')

@section('mainarea')
                 
       <?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   $universities = \App\Models\universities::get();
  
  ?>  
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true">
                        <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <!--ms-container-->
                                <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }" >
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--ms_item-->
                                            <div class="swiper-slide">
                                                <div class="ms-item_fs fl-wrap full-height">
                                                    <div class="bg" data-bg="images/bg/30.jpeg"></div>
                                                    <div class="overlay op7"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                            <!--ms_item-->
                                            <div class="swiper-slide ">
                                                <div class="ms-item_fs fl-wrap full-height">
                                                    <div class="bg" data-bg="images/bg/29.jpeg"></div>
                                                    <div class="overlay op7"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                            <!--ms_item-->
                                            <div class="swiper-slide">
                                                <div class="ms-item_fs fl-wrap full-height">
                                                    <div class="bg" data-bg="images/bg/31.jpg"></div>
                                                    <div class="overlay op7"></div>
                                                </div>
                                            </div>
                                            <!--ms_item end-->
                                        </div>
                                    </div>
                                </div>
                                <!--ms-container end-->
                            </div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>FIND YOUR STUDY PROGRAM & APPLY </h1>
                                </div>
                                <h3>Find some of the best tips from around the city from our partners and friends.</h3>
                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                
                                <!--tabs -->                       
                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
										<form action="programs" method="get">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-keyboard"></i></label>
                                                        <input type="text" placeholder="What are you looking for?" name="q" value=""/>
                                                    </div>
                                                    
                                                    <div class="main-search-input-item">
                                                        <select   class="chosen-select" name="category" >
                                                            <option value="All">All Categories</option>
                                                          
                                                           @foreach($miscellaneous as $r_data)
																				   @if($r_data->type=="Speciality")
  <option value="{{ $r_data->id}}">{{ $r_data->title}}</option>
																				@endif
																				 @endforeach
                                                        </select>
                                                    </div>
                                                    <button class="main-search-button color2-bg" >Search <i class="far fa-search"></i></button>
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab -->
                                   
                                    <!--tab end-->                                
                                    <!--tab -->
                                  
                                    <!--tab end-->                                  
                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- main-search-input-tabs end-->
                           
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                
                  
                    <!--  section  -->
                    <!--section end-->
                   
                    <!--section end--> 
                    <!--section  -->
                    <section>  
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Most Popular Universities</span></h2>
                                <div class="section-subtitle">Best Universities</div>
                                <span class="section-separator"></span>
                            </div>
                           
                            <div class="grid-item-holder gallery-items fl-wrap">
                                <!--  gallery-item-->
                               
                                    <!-- listing-item  -->
									
									@foreach($universities as $r_data)
												   
									
									 <div class="gallery-item restaurant events">
									
                                    <div class="listing-item" style="float:left;">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="programs?university={{$r_data->id}}" class="geodir-category-img-wrap fl-wrap">
                                                <img src="upload/{{ $r_data->cover_img}}" alt=""> 
                                                </a>
                                                <div class="listing-avatar"><a href="programs?university={{$r_data->id}}"><img src="upload/{{ $r_data->Logo}}" alt=""></a>
                                                    <span class="avatar-tooltip"> <strong>{{ $r_data->name}}</strong></span>
                                                </div>
                                                
                                               
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="programs?university={{$r_data->id}}">{{ $r_data->name}}</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> {{ $r_data->Address}} {{ $r_data->State}} {{ $r_data->Country}} </a></div> 
                                                    </div>
                                                </div>
                                               
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap" href="programs?university={{$r_data->id}}">
                                                        <div class="listing-item-category red-bg"><i class="fal fa-book"></i></div>
                                                        <span>Offering programs</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="{{ $r_data->Website}}" target="_blank" class="show_gcc"><i class="fal fa-globe"></i><span class="geodir-opt-tooltip">Website</span></a></li>
                                                            <li><a href="{{ $r_data->Map_Link}}" target="_blank" class="single-map-item" ><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong></strong></span> </a></li>
                                                            
															@if($r_data->Video !="")
															<li><a href="{{ $r_data->Video}}" target="_blank" class="single-map-item" ><i class="fal fa-video"></i><span class="geodir-opt-tooltip">Video <strong></strong></span> </a></li>
                                                              @endif
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
									</div>
									@endforeach
                                    <!-- listing-item end -->                              
                                
                                <!-- gallery-item  end-->
                                <!--  gallery-item-->
                              
                                <!-- gallery-item  end-->                                                                                                                        
                            </div>
                        </div>
                    </section>
                    <!--section end--> 
                    <!--section  -->
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/11.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <!--container-->
                        <div class="container">
                            <div class="video_section-title fl-wrap">
                                <h4>Aliquam erat volutpat interdum</h4>
                                <h2>Get ready to start your exciting journey. <br> Our agency will lead you through the amazing digital world</h2>
                            </div>
                            <a href="https://vimeo.com/70851162" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <section      data-scrollax-parent="true">
                        <div class="container">
                            <div class="section-title">
                                <h2>How it works</h2>
                                <div class="section-subtitle">Discover &amp; Connect </div>
                                <span class="section-separator"></span>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 </span>
                                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <h4> Find Interesting Place</h4>
                                            <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02</span>
                                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                            <h4> Contact a Few Owners</h4>
                                            <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03</span>
                                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                            <h4> Make a Listing</h4>
                                            <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fal fa-check"></i></div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <section class="gradient-bg hidden-section" data-scrollax-parent="true">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="colomn-text  pad-top-column-text fl-wrap">
                                        <div class="colomn-text-title">
                                            <h3>Our App   Available Now</h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</p>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i>  Apple Store </a>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i>  Google Play </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="collage-image">
                                        <img src="images/api.png" class="main-collage-image" alt="">                               
                                        <div class="images-collage-title color2-bg icdec"> <img src="images/logo.png"   alt=""></div>
                                        <div class="images-collage_icon green-bg" style="right:-20px; top:120px;"><i class="fal fa-thumbs-up"></i></div>
                                        <div class="collage-image-min cim_1"><img src="images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-min cim_2"><img src="images/api/2.jpg" alt=""></div>
                                        <div class="collage-image-btn green-bg">Booking now</div>
                                        <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                        <div class="circle-wrap" style="left:270px;top:120px;" data-scrollax="properties: { translateY: '-200px' }">
                            <div class="circle_bg-bal circle_bg-bal_small"></div>
                        </div>
                        <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
                            <div class="circle_bg-bal circle_bg-bal_big"></div>
                        </div>
                        <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
                            <div class="circle_bg-bal circle_bg-bal_big"></div>
                        </div>
                        <div class="circle-wrap" style="left:40%;bottom:-70px;"  >
                            <div class="circle_bg-bal circle_bg-bal_middle"></div>
                        </div>
                        <div class="circle-wrap" style="right:40%;top:-10px;"  >
                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
                        </div>
                        <div class="circle-wrap" style="right:55%;top:90px;"  >
                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
                        </div>
                    </section>
                    <!--section end-->   
                    <!--section  -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2> Testimonilas</h2>
                                <div class="section-subtitle">Clients Reviews</div>
                                <span class="section-separator"></span>
                                <p>Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonilas-carousel-wrap fl-wrap">
                            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="testimonilas-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Andy Dimasky</h3>
                                                        <h4>Restaurant Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Twitter</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Frank Dellov</h3>
                                                        <h4>Hotel Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Centa Simpson</h3>
                                                        <h4>Restaurant Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="images/avatar/5.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Instagram</a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Linda Svensky</h3>
                                                        <h4>Shop Owner</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                    </div>
                                </div>
                            </div>
                            <div class="tc-pagination"></div>
                        </div>
                        <div class="waveWrapper waveAnimation">
                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('images/wave-top.png')"></div>
                          </div>
                        </div> 						
                    </section>
                    <!--section end-->                
                    <!--section  -->
                    <section class="gray-bg">
                        <div class="container">
                            <div class="clients-carousel-wrap fl-wrap">
                                <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                                <div class="clients-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/2.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/3.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/2.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="images/clients/3.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->                                                                                                                                                                                                                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
        
               
          @endsection