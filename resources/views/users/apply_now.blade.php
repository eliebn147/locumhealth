
      @extends('/users.layout')

@section('mainarea')
     <?php 
  
   $miscellaneous = \App\Models\miscellaneous::get();
   $universities = \App\Models\universities::get();
  
  ?>  
    <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- listing-carousel-wrap -->
              
                    <!-- listing-carousel-wrap end-->
                    <!-- scroll-nav-wrapper-->
                    <div class="scroll-nav-wrapper fl-wrap">
                        <div class="container">
                            <nav class="scroll-nav scroll-init">
                                <ul class="no-list-style">
                                  
                                    <li><a href="#sec2"><i class="fal fa-info"></i>Details</a></li>
                                    <li><a href="#sec3"><i class="fal fa-info"></i>Desciption </a></li>
                                    <li><a href="#sec5"><i class="fal fa-info"></i>Apply Now</a></li>
                                </ul>
                            </nav>
                            <div class="scroll-nav-wrapper-opt">
                                <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Save </a>
                                <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Share </a>
                                <div class="share-holder hid-share">
                                    <div class="share-container  isShare"></div>
                                </div>
                               
                            </div>
                        </div>
                    </div> 
                    <!-- scroll-nav-wrapper end-->
                    <section class="gray-bg no-top-padding">
                        <div class="container">
                            <div class="breadcrumbs inline-breadcrumbs fl-wrap">
                                <a href="#">Home</a><a href="#">Programs </a><span>Apply Now</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <!-- list-single-main-wrapper-col -->
                                <div class="col-md-8">
                                    <!-- list-single-main-wrapper -->
                                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                                        <!-- list-single-header -->
                                        <div class="list-single-header list-single-header-inside block_box fl-wrap">
                                            <div class="list-single-header-item  fl-wrap">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h1>  	@foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$values['program_info']->Title)
																			{{ $item_data->title}}
																		
																				   @endif
																				 @endforeach   <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-university"></i> 
														@foreach($values['universities'] as $item_data)
																				   @if($item_data->id==$values['program_info']->University)
																			  <?php echo $item_data->name;?>
														    			
																				
                                                    
													
														</a>  <a href="#"><i class="fas fa-map-marker-alt"></i>  <?php echo $item_data->Address;?> , <?php echo $item_data->Country;?> </a> 
														
															 
														 <a href="<?php echo $item_data->Map_Link;?>" target="_blank"><i class="fal fa-map-marker"></i>  Map Location</a>
														 
														    @endif
																				 @endforeach
														 </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="list-single-header_bottom fl-wrap">
                                              <table id="progpoints">
															<tr> <td> Duration: {{ $values['program_info']->Duration}} </td> <td id="rightpat"> Medium: {{ $values['program_info']->Medium}} </td></tr>
															
															<tr> <td> Intake:  @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$values['program_info']->Intake)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach </td>
																				 <td id="rightpat"> Speciality: @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$values['program_info']->Speciality)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach </td>
																				 
																				 </tr>
																				 
																				 
															
																				 
															<tr> <td> Deadline: {{ $values['program_info']->Deadline}} </td> <td id="rightpat"> Fee:  {{ $values['program_info']->Fee}} </td></tr>
															</table>
                                            </div>
                                        </div>
                                        <!-- list-single-header end -->
                                        <!-- list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap block_box">
                                            <div class="list-single-main-item-title">
                                                <h3>Description</h3>
                                            </div>
                                            <div class="list-single-main-item_content fl-wrap">
                                                <p>{{ $values['program_info']->Details }}</p>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->
                                       
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item-->
                                        
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-facts -->
                                      
                                        <!-- list-single-facts end -->
                                        <!-- list-single-main-item-->
                                       
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->
                                       
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap block_box" id="sec6">
                                          
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="add-review-box">
											<br>
                                                <!-- Review Comment -->
												<center>
												   @if(session()->get('user_id') =="")
                                                  <a href="account?item=<?php echo $_GET['item']; ?>" class="btn  color2-bg " >Please login to  Apply</a>
											      @else
                                                  <a href="apply?item=<?php echo $_GET['item']; ?>" class="btn  color2-bg " >Apply Now</a>
                                                  @endif
                                                </center>  
<br>												
										   </div>
                                            <!-- Add Review Box / End -->
                                        </div>
                                        <!-- list-single-main-item end -->
                                    </div>
                                </div>
                                <!-- list-single-main-wrapper-col end -->
                                <!-- list-single-sidebar -->
                                <div class="col-md-4">
                                    <!--box-widget-item -->
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
                                <!-- list-single-sidebar end -->
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>

@endsection