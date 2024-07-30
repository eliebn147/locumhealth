@extends('/users.layout')

@section('mainarea')
    <div class="container my-5">
        <div class="row">
            <div class="col-12 bg-white">{!! $dynamicPage->header_content !!}</div>
        </div>
    </div>

    @include('users/include/jobs_home', ['values' => $values])


    <div class="container mt-5">
        <div class="row">
            <div class="col-12 bg-white">{!! $dynamicPage->body_content !!}</div>
        </div>
    </div>


    @include('users/include/top_companies')

    <div class="section-full p-t120 p-b90 twm-about-8-area">
        <div class="container">
            <div class="twm-about-9-section-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="twm-about-9-section">
                            <div class="twm-media">
                                <img src="images/home-9/pic1.png" alt="">
                            </div>
                            <div class="img-bg-circle"></div>
                            <div class="twm-card-blocks-2 bounce2">
                                <div class="twm-pics">
                                    <span><img src="images/main-slider/slider2/user/u-1.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-2.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-3.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-4.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-5.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider2/user/u-6.jpg" alt=""></span>
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-green">
                                        <span class="counter">3</span>K+
                                    </div>
                                    <p class="icon-content-info">Jobs Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="twm-about-9-section-right">
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div>About Locum Health UK</div>
                                </div>
                                <h2 class="wt-title">Millions of jobs. Find the
                                    one that’s right for you.</h2>

                            </div>
                            <p>
                                Locum Health UK is one of the leading Healthcare Recruitment agencies specialising in
                                Primary Care. It was created to help organisations find a cost effective way of recruiting
                                whilst delivering qualified, professional, and compliant staff to services across the UK.
                                Locum Health is here to help find your specialists in the most effective way possible.
                            </p>
                            <p>
                                With over 30 years’ experience in the Primary Care industry, we understand that matching up
                                and finding the most efficient and well trained specialist can make a big impact on an
                                individual as well as an entire community. Therefore we understand all types of wants and
                                needs that our customers, clients and staff demand before carefully studying and handpicking
                                the best specialists for the corresponding organisation.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    $miscellaneous = \App\Models\tb_posts::where('type', 'Testimonials')->get();
    ?>

    <div class="section-full p-t120 p-b90 site-bg-light twm-testimonial-8-area">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head left wt-small-separator-outer">
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                        <div>Client Testimonials</div>
                    </div>
                    <h2 class="wt-title">Testimonials</h2>
                </div>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="owl-carousel twm-testimonial-8-carousel m-b30 owl-btn-bottom-center ">
                    @foreach ($miscellaneous as $r_data)
                        <!-- COLUMNS 1 -->
                        <div class="item ">
                            <div class="testimonials-v site-bg-white">
                                <div class="twm-testi-media">
                                    <img src="upload/{{ $r_data->pic }}" alt="#">
                                </div>
                                <div class="testimonial-v-content">
                                    <div class="t-testimonial-top">
                                        <div class="t-quote"><i class="fa fa-quote-left"></i></div>
                                        <div class="t-rating">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>

                                    <div class="t-discription"><?php echo $r_data->desciption; ?>
                                    </div>

                                    <div class="twm-testi-detail">
                                        <div class="twm-testi-name">{{ $r_data->title }}</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- COLUMNS 2 -->
                </div>
            </div>
        </div>
    </div>

    @include ('users/include/about_part_01')
@endsection
