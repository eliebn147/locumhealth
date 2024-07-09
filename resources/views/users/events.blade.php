
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
                                <h2><span>Events</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>	Events</span></div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->               
                    <!--  section  -->
                     <!--section  -->
                    <section>  
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Upcoming Events</span></h2>
                                <div class="section-subtitle">Upcoming Events</div>
                                <span class="section-separator"></span>
                            </div>
                           
                            <div class="grid-item-holder gallery-items fl-wrap">
                                <!--  gallery-item-->
                               
                                    <!-- listing-item  -->
									
									@foreach($values['tb_posts'] as $r_data)
												   
									
									 <div class="gallery-item restaurant events">
									
                                    <div class="listing-item" style="float:left;">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                              
                                                <a href="item?title=<?php echo urlencode($r_data->title); ?>" class="geodir-category-img-wrap fl-wrap">
                                                <img src="upload/{{ $r_data->pic}}" alt=""> 
                                                </a>
                                                <div class="listing-avatar">
                                                    <span class="avatar-tooltip"> <strong>{{ $r_data->title}}</strong></span>
                                                </div>
                                                
                                              
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="item?title=<?php echo urlencode($r_data->title); ?>">{{ $r_data->title}}</a></h3>
                                                        
                                                    </div>
                                                </div>
                                               
                                                <div class="geodir-category-footer fl-wrap">
                                                    <table style="width:100%;">
													<tr>
													<td style="text-align:left;"> Posted On :   <?php echo date("d F Y", strtotime($r_data->date) ); ?>  </td>
													<td ><a  href="item?title=<?php echo urlencode($r_data->title); ?>" class="btn  color2-bg pull-right"  style="margin-top:-0px;">Explore</a></td>
													</tr>
													</table>

                                                    
                                                   
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
                </div>
                <!--content end-->
            </div>
        
               
          @endsection