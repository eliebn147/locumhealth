<!DOCTYPE html>
<html lang="en">

<head>
    {!! $dynamicPage->head_tags !!}
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="BjPxPtJqG4-yydmxzDT8jt1VKk4cEDFSdcMOaihHm_E" />

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-22BCWB35VR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-22BCWB35VR');
    </script>

    <!-- Contact Address Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Locum Health",
        "image": "https://locumhealthuk.com/images/logo.gif",
        "url": "https://locumhealthuk.com/",
        "telephone": "02039315313",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "352-356 Battersea park road",
            "addressLocality": "London",
            "postalCode": "SW11 3BY",
            "addressCountry": "GB"
        },
        "sameAs": [
            "https://www.facebook.com/LocumHealthUK/",
            "https://www.instagram.com/locumhealth_uk/",
            "https://twitter.com/LocumHealthUK",
            "https://www.linkedin.com/company/locum-health-uk"
        ]
    }
    </script>

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Locum Health",
        "alternateName": "locumhealth",
        "url": "https://locumhealthuk.com/",
        "logo": "https://locumhealthuk.com/images/logo.gif",
        "sameAs": [
            "https://www.facebook.com/LocumHealthUK/",
            "https://twitter.com/LocumHealthUK?t=IrlV9uAPwTwoC9ix28u9TA&s=09",
            "https://www.instagram.com/locumhealth_uk/",
            "https://www.linkedin.com/company/locum-health-uk"
        ]
    }
    </script>

    <!-- Image Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ImageObject",
        "author": "Locum Health",
        "contentUrl": "https://locumhealthuk.com/images/logo.gif",
        "thumbnail": "https://locumhealthuk.com/images/logo.gif",
        "description": "Locum Health UK is a renowned locum medical jobs recruitment agency in the UK specializing in primary care. We offer the best locum jobs and same-day payments.",
        "name": "locumhealth"
    }
    </script>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/feather.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="css/select.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" class="skin" type="text/css" href="css/skins-type/skin-6.css">
    <link rel="stylesheet" type="text/css" href="css/switcher.css">

    <style>
        .wt-bnr-inr {
            max-height: 150px;
        }
    </style>
</head>

<body data-anm=".anm">
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

        @include ('users/include/header')
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
                                        <span><img src="images/main-slider/slider2/user/u-4.jpg"
                                                alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-5.jpg"
                                                alt=""></span>
                                        <span><img src="images/main-slider/slider2/user/u-6.jpg"
                                                alt=""></span>
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
                                    Locum Health UK is one of the leading Healthcare Recruitment agencies specialising
                                    in
                                    Primary Care. It was created to help organisations find a cost effective way of
                                    recruiting
                                    whilst delivering qualified, professional, and compliant staff to services across
                                    the UK.
                                    Locum Health is here to help find your specialists in the most effective way
                                    possible.
                                </p>
                                <p>
                                    With over 30 years’ experience in the Primary Care industry, we understand that
                                    matching up
                                    and finding the most efficient and well trained specialist can make a big impact on
                                    an
                                    individual as well as an entire community. Therefore we understand all types of
                                    wants and
                                    needs that our customers, clients and staff demand before carefully studying and
                                    handpicking
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


    @show

    @include ('users/include/footer')

</div>

<!-- JAVASCRIPT  FILES ========================================= -->
<script src="js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script src="js/lc_lightbox.lite.js"></script><!-- IMAGE POPUP -->
<script src="js/bootstrap-select.min.js"></script><!-- Form js -->
<script src="js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
<script src="js/jquery.scrollbar.js"></script><!-- scroller -->
<script src="js/bootstrap-datepicker.js"></script><!-- scroller -->
<script src="js/jquery.dataTables.min.js"></script><!-- Datatable -->
<script src="js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
<script src="js/chart.js"></script><!-- Chart -->
<script src="js/anm.js"></script>
<script src="js/bootstrap-slider.min.js"></script><!-- Price range slider -->
<script src="js/swiper-bundle.min.js"></script><!-- Swiper JS -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/switcher.js"></script><!-- SHORTCODE FUCTIONS  -->




</body>


</html>
