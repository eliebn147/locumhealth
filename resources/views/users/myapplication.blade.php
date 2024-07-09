
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
                                <div class="dashboard-title   fl-wrap">
                                    <h3>My Applications</h3>
                                </div>
                                <!-- dashboard-list-box-->
                                <div class="dashboard-list-box  fl-wrap">
                                    <!-- dashboard-list -->
									 @foreach($values['records_lst'] as $r_data)
									       <?php 
  
   $program = \App\Models\programs::where('uniq_shufl',$r_data->program)->first();
   $university = \App\Models\universities::where('id',$r_data->university)->first();
   $miscellaneous = \App\Models\miscellaneous::get();
  
  ?>  
                                    <div class="dashboard-list fl-wrap">
                                        <div class="dashboard-message">
                                            <div class="booking-list-contr" style="background:#ffc925;color:#ffffff;box-shadow: 3px 3px 2px lightblue;">
											{{ $r_data->status }}
                                            </div>
                                            <div class="dashboard-message-text">
                                                <img src="upload/{{ $university->Logo }}" alt="">
												
                                                <h4><a href="#">
												@foreach($miscellaneous as $item_data)
												@if($item_data->id==$program->Title)
												{{ $item_data->title}}
												 @endif
												 @endforeach
												
												</a>
												
												</h4>
                                            
											      <?php echo $university->Address;?> , <?php echo $university->Country;?>
													<br><br><br>		
                                            </div>
											
														
														
                                        </div>
										
										<table id="progpoints" style="">
															<tr> <td> Duration: {{ $program->Duration}} </td> <td id="rightpat"> Medium: {{ $program->Medium}} </td></tr>
															
															<tr> <td> Intake:  @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$program->Intake)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach </td>
																				 <td id="rightpat"> Speciality: @foreach($values['miscellaneous'] as $item_data)
																				   @if($item_data->id==$program->Speciality)
																			{{ $item_data->title}}
																				   @endif
																				 @endforeach </td>
																				 
																				 </tr>
																				 
																				 
															
																				 
															<tr> <td> Deadline: {{ $program->Deadline}} </td> <td id="rightpat"> Fee:  {{ $program->Fee}} </td></tr>
															</table>
                                    </div>
									@endforeach 
                                    <!-- dashboard-list end-->
                                    <!-- dashboard-list -->
                                 
                                    <!-- dashboard-list end-->
                                </div>
                                <!-- dashboard-list-box end
                                <div class="pagination">
                                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                    <a href="#">1</a>
                                    <a href="#" class="current-page">2</a>
                                    <a href="#">3</a>
                                    <a href="#">...</a>
                                    <a href="#">7</a>
                                    <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                </div> -->
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