@include ('users/include/head')

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

        @section('mainarea')


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
