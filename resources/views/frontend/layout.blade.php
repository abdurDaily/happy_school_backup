<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home One || Zilom || Responsive HTML5 Template.</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="frontend_assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="frontend_assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="frontend_assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="frontend_assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/icomoon-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/vendors/twentytwenty/twentytwenty.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/zilom.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/zilom-responsive.css') }}" />
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('frontend_assets/images/loader.png') }}" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header main-header--one  clearfix">
            <div class="main-header--one__top clearfix">
                <div class="container">
                    <div class="main-header--one__top-inner clearfix">
                        <div class="main-header--one__top-left">
                            <div class="main-header--one__top-logo">
                                <a href="index.html"><img src="{{ asset('frontend_assets/images/resources/logo-1.png') }}" alt="" /></a>
                            </div>
                        </div>

                        <div class="main-header--one__top-right clearfix">
                            <ul class="main-header--one__top-social-link list-unstyled clearfix">
                                <li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="fab fa-facebook"></i></a></li>
                            </ul>

                            <div class="main-header--one__top-contact-info clearfix">
                                <ul class="main-header--one__top-contact-info-list list-unstyled">
                                    <li class="main-header--one__top-contact-info-list-item">
                                        <div class="icon">
                                            <span class="icon-phone-call-1"></span>
                                        </div>
                                        <div class="text">
                                            <h6>Call Agent</h6>
                                            <p><a href="tel:123456789">92 888 666 0000</a></p>
                                        </div>
                                    </li>
                                    <li class="main-header--one__top-contact-info-list-item">
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="text">
                                            <h6>Call Agent</h6>
                                            <p><a href="mailto:info@templatepath.com">etedepartment@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="main-header-one__bottom clearfix">
                <div class="container">
                    <div class="main-header-one__bottom-inner clearfix">
                        <nav class="main-menu main-menu--1">
                            <div class="main-menu__inner">
                                <a href="index.html#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                                <div class="left">
                                    <ul class="main-menu__list">
                                        <li class="dropdown current">
                                            <a href="{{ route('frontend.frontend.index') }}">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li class="dropdown">
                                                    <a href="index.html#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header One</a></li>
                                                        <li><a href="index-2.html">Header Two</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="dropdown">
                                            <a href="{{ route('frontend.courses.index') }}">Courses</a>
                                            <ul>
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index.html#"> Teachers</a>
                                            <ul>
                                                <li><a href="teachers-1.html"> Teachers</a></li>
                                                <li><a href="teachers-2.html">Become Teacher</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index.html#">News</a>
                                            <ul>
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>

                                <div class="right">
                                    <div class="main-menu__right">
                                        <div class="main-menu__right-login-register">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('admin.login') }}">Login</a></li>
                                                <li><a href="{{ route('frontend.create.admission') }}">Register</a></li>
                                            </ul>
                                        </div>
                                        {{-- SEARCH --}}
                                        @stack('search')
                                        {{-- <div class="main-menu__right-cart-search">
                                            <div class="main-menu__right-cart-box">
                                                <a href="index.html#"><span class="icon-shopping-cart"></span></a>
                                            </div>
                                            <div class="main-menu__right-search-box">
                                                <a href="index.html#" class="thm-btn search-toggler">Search</a>
                                            </div>
                                        </div> --}}
                                        {{-- SEARCH END --}}
                                    </div>
                                </div>

                            </div>
                        </nav>

                    </div>
                </div>
            </div>

        </header>





        @yield('frontend_layout')






        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__bg" style="background-image: url(frontend_assets/images/backgrounds/footer-v1-bg.jpg);">
            </div><!-- /.footer-one__bg -->
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <!--Start Footer Widget Column-->
                        <div class="col-xl-2 col-lg-4 col-md-4 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img src="frontend_assets/images/resources/footer-logo.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-2 col-lg-4 col-md-4 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-widget__column footer-widget__courses">
                                <h3 class="footer-widget__title">Courses</h3>
                                <ul class="footer-widget__courses-list list-unstyled">
                                    <li><a href="index.html#">UI/UX Design</a></li>
                                    <li><a href="index.html#">WordPress Development</a></li>
                                    <li><a href="index.html#">Business Strategy</a></li>
                                    <li><a href="index.html#">Software Development</a></li>
                                    <li><a href="index.html#">Business English</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-2 col-lg-4 col-md-4 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="footer-widget__column footer-widget__links">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="index.html#">Overview</a></li>
                                    <li><a href="teachers-1.html">Teachers</a></li>
                                    <li><a href="index.html#">Join Us</a></li>
                                    <li><a href="news.html">Our News</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="text">88 broklyn street, New York USA</p>
                                <p><a href="mailto:info@templatepath.com">etedepartment@gmail.com</a></p>
                                <p class="phone"><a href="tel:123456789">92 888 666 0000</a></p>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.9s">
                            <div class="footer-widget__column footer-widget__social-links">
                                <ul class="footer-widget__social-links-list list-unstyled clearfix">
                                    <li><a href="index.html#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
                                
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                    </div>
                </div>
            </div>

            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text text-center">
                                    <p>&copy; Copyright 2021 by Layerdrops.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One-->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="frontend_assets/images/resources/mobilemenu_logo.png"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@zilom.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="index.html#" class="fab fa-twitter"></a>
                    <a href="index.html#" class="fab fa-facebook-square"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="index.html#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <a href="index.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}

    <script src="{{ asset('frontend_assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('frontend_assets/vendors/parallax/parallax.min.js') }}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->

    @stack('frontend_js')
    <script src="{{ asset('frontend_assets/js/zilom.js') }}"></script>
</body>

</html>