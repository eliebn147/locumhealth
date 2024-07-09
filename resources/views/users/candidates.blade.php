
      @extends('/users.layout')

@section('mainarea')
                 
          <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Candidates</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href=".\">Home</a></li>
                                    <li>Candidates</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
			   <?php 
  
   $miscellaneous = \App\Models\tb_posts::where('type','Posts')->get();
   
  
  ?>  
			 <!--<div class="section-full p-t120  p-b90 site-bg-white">-->
    <!--            <div class="container">-->

    <!--                <div class="masonry-wrap row d-flex">-->
    <!--                    @foreach($miscellaneous as $r_data)-->
    <!--                    <div class="masonry-item col-lg-4 col-md-12">-->

    <!--                        <div class="blog-post twm-blog-post-1-outer">-->
    <!--                            <div class="wt-post-media">-->
    <!--                                <a href="blog-single.html"><img src="upload/{{ $r_data->pic}}" alt=""></a>-->
    <!--                            </div>                                    -->
    <!--                            <div class="wt-post-info">-->
                                    
    <!--                                <div class="wt-post-title ">-->
    <!--                                    <h4 class="post-title">-->
    <!--                                        <a href="#">{{ $r_data->title}}</a>-->
    <!--                                    </h4>-->
    <!--                                </div>-->
    <!--                                <div class="wt-post-text ">-->
    <!--                                    <p>-->
    <!--                                        <?php echo $r_data->desciption; ?>-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                                <div class="wt-post-readmore ">-->
    <!--                                    <a href="jobs" class="site-button-link site-text-primary">Explore Jobs</a>-->
    <!--                                </div>                                        -->
    <!--                            </div>                                -->
    <!--                        </div>-->

    <!--                    </div>-->
						
				<!--		 @endforeach-->
						
				<!--		  </div>-->

                   

    <!--            </div>-->
    <!--        </div>   -->
			
               @include ('users/include/about_part_02')
			   @include ('users/include/about_part_01')
          @endsection