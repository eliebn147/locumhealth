
      @extends('/users.layout')

@section('mainarea')
                  <?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   $universities = \App\Models\universities::get();
  
  ?>  
  
 
  
        <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/29.jpeg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Programs List</span></h2>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->
                    <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
                        <div class="container">
                            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="#">Home</a><span>Programs List</span> 
                            </div>
                            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                            <div class="fl-wrap">
                                <div class="row">
								
								
								
                                     <div class="col-md-4">
                                        <div class=" fl-wrap lws_mobile">
                                            <!--box-widget-item -->
                                          
                                            <!--box-widget-item end -->  
                                           
                                            <!--box-widget-item end --> 
                                            <!--box-widget-item -->
                                            <div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">
                                                    <h3>Universities</h3>
                                                </div>
                                                <div class="box-widget fl-wrap">
                                                    <div class="box-widget-content">
                                                        <ul class="cat-item no-list-style">
															@foreach($universities as $r_data)
								   <li><a href="programs?university={{$r_data->id}}">  {{ $r_data->name}} </a></li>					   
									@endforeach
                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
											  <div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">
                                                    <h3>Programs</h3>
                                                </div>
                                                <div class="box-widget fl-wrap">
                                                    <div class="box-widget-content">
                                                        <ul class="cat-item no-list-style">
                                                          @foreach($miscellaneous as $r_data)
																				   @if($r_data->type=="Speciality")
																			 <li><a href="programs?speciality={{$r_data->id}}">  {{ $r_data->title}} </a></li>	

																				@endif
																				 @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
											
											
											<div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">
                                                    <h3>Intake</h3>
                                                </div>
                                                <div class="box-widget fl-wrap">
                                                    <div class="box-widget-content">
                                                        <ul class="cat-item no-list-style">
                                                            @foreach($miscellaneous as $r_data)
																				   @if($r_data->type=="Intakes")
																			 <li><a href="programs?Intake={{$r_data->id}}">  {{ $r_data->title}} </a></li>	

																				@endif
																				 @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">
                                                    <h3>Program types</h3>
                                                </div>
                                                <div class="box-widget fl-wrap">
                                                    <div class="box-widget-content">
                                                        <ul class="cat-item no-list-style">
                                                           @foreach($miscellaneous as $r_data)
																				   @if($r_data->type=="Program types")
																			 <li><a href="programs?types={{$r_data->id}}">  {{ $r_data->title}} </a></li>	

																				@endif
																				 @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
											
                                            <!--box-widget-item end -->  
                                            <!--box-widget-item -->
                                          
                                            <!--box-widget-item end -->                                              
                                            <!--box-widget-item -->
                                            
                                            <!--box-widget-item end -->                                            
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <!-- list-main-wrap-header-->
                                       
                                        <!-- list-main-wrap-header end-->                            
                                        <!-- listing-item-container -->
                                        <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic">
                                            <!-- listing-item  -->
											
											 @foreach($values['records_lst'] as $r_data)
                                                       
                                                      
											
											
                                            <div class="listing-item">
                                                <article class="geodir-category-listing fl-wrap">
                                                    <div class="geodir-category-img">
                                                       <?php $Address = "";?>
													    <?php $title = "";?>
                                                        <a href="#" class="geodir-category-img-wrap fl-wrap">
														@foreach($values['universities'] as $item_data)
																				   @if($item_data->id==$r_data->University)
																			  <?php $Address = $item_data->Address;?>
														    <img src="upload/{{ $item_data->cover_img}}" alt=""> 				
																				   @endif
																				 @endforeach
                                                    
                                                        </a>
                                                       
                                                    </div>
                                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                                        <div class="geodir-category-content-title fl-wrap">
                                                            <div class="geodir-category-content-title-item">
                                                                <h3 class="title-sin_map"><a href="#">
																@foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$r_data->Title)
																			{{ $item_data->title}}
																		 <?php $title = $item_data->title;?>
																				   @endif
																				 @endforeach
																				 
																				 </a>
																				 
																				
																				 <span class="verified-badge"><i class="fal fa-check"></i></span></h3>
																				  <br> <br><hr>
                                                                <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> <?php echo $Address;?></a></div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-text fl-wrap">
                                                            <!--<p class="small-text">{{ $r_data->Details}}</p> -->
															<table id="progpoints">
															<tr> <td> Duration: {{ $r_data->Duration}} </td> <td id="rightpat"> Medium: {{ $r_data->Medium}} </td></tr>
															
															<tr> <td> Intake:  @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$r_data->Intake)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach </td>
																				 <td id="rightpat"> Speciality: @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$r_data->Speciality)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach </td>
																				 
																				 </tr>
																				 
																				 
															
																				 
															<tr> <td> Deadline: {{ $r_data->Deadline}} </td> <td id="rightpat"> Fee:  {{ $r_data->Fee}} </td></tr>
															</table>
														
														  
														
										
														  
														  
                                                        </div>
                                                       														<center>
                                                            <a href="apply-now?item={{ $r_data->uniq_shufl}}" class="btn  color2-bg " style="padding-top:7px;margin:10px;">Apply Now</a>
                                                          </center>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- listing-item end -->                                       
                                            <!-- listing-item  -->
                                                    @endforeach                      
                                          
                                            <!-- listing-item end                                                                                   
                                            <div class="pagination fwmpag">
                                                <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                                <a href="#">1</a>
                                                <a href="#" class="current-page">2</a>
                                                <a href="#">3</a>
                                                <a href="#">...</a>
                                                <a href="#">7</a>
                                                <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                            </div> -->   
                                        </div>
                                        <!-- listing-item-container end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
        
               
          @endsection