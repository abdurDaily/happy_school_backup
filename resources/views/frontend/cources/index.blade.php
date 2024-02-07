@extends('frontend.layout')
@section('frontend_layout')
    @push('search')
        <div class="main-menu__right-cart-search">
            <div class="main-menu__right-cart-box">
                <a href="index.html#"><span class="icon-shopping-cart"></span></a>
            </div>
            <div class="main-menu__right-search-box">
                <a href="index.html#" class="thm-btn search-toggler">Search</a>
            </div>
        </div>
    @endpush



    <div class="preloader">
        <img class="preloader__image" width="60" src="frontend_assets/images/loader.png" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('frontend_assets/images/backgrounds/page-header-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>Courses</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Courses</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->



    <!--Courses One Start-->
    <section class="courses-one courses-one--courses">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Checkout New List</span>
                <h2 class="section-title__title">Explore Courses</h2>
            </div>

            <div class="row">
                <!--Start case-studies-one Top-->
                <div class="courses-one--courses__top">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="courses-one--courses__menu-box">
                            <ul class="project-filter clearfix post-filter has-dynamic-filters-counter list-unstyled">
                                <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                                <li data-filter=".featured"><span class="filter-text">Featured</span></li>
                                <li data-filter=".business"><span class="filter-text">Business</span></li>
                                <li data-filter=".photography"><span class="filter-text">Photography</span></li>
                                <li data-filter=".development"><span class="filter-text">Development</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End case-studies-one Top-->
            </div>


            <div class="row filter-layout masonary-layout">
                <!--Start Single Courses One-->

                @forelse ($getAllData as $data)
                <?php
                    $video_id = explode("?v=", $data->video_url);
                    $video_id = $video_id[1];
                ?>
                <a target="_blank" href="{{ 'https://www.youtube.com/' . 'embed/' . $video_id }}">
                        <div class="col-xl-3 col-lg-6 col-md-6 filter-item development business">
                            <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <div class="courses-one__single-img">
                                
                                    



                                    <img src="{{ 'http://img.youtube.com/vi/' . $video_id . '/maxresdefault.jpg' }}" alt=""/>
                                    <div class="overlay-text">
                                        {{-- <p>Featured</p> --}}
                                    </div>
                                </div>
                                <div class="courses-one__single-content">
                                    <div class="courses-one__single-content-overlay-img">
                                        <img src="frontend_assets/images/resources/courses-v1-overlay-img1.png" alt=""/>
                                    </div>
                                    <h6 class="courses-one__single-content-name">{{ $data->Subject->author }}</h6>
                                    <h4 class="courses-one__single-content-title"><a href="course-details.html">{{ $data->Subject->subject_name }}</a></h4>

                                    <p style="font-size: 12px;"> <b>Lecture Title:</b> <span style="text-transform: capitalize;">{{ $data->video_title }}</span></p>
                                    <ul class="courses-one__single-content-courses-info list-unstyled">
                                        <li>Uploaded at:</li>
                                        {{-- <li></li> --}}
                                        <li>{{ date('d-M-Y', strtotime($data->created_at))  }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
               </a>
                @empty
                    <h4>No Data Found!</h4>
                @endforelse
                <!--End Single Courses One-->

            </div>
            {{ $getAllData->links()}}
        </div>

    </section>
    <!--Courses One End-->
















    </div><!-- /.page-wrapper -->


    <a href="courses.html#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    @push('frontend_css')
    <style>
        .pagination{
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }
        .page-link {
            background-color: #085da3;
            color: #fff;
            margin: 0 10px;
            width: 120px;
            text-align: center;
        }
        .page-link:hover {
            background-color: #5F61E6;
            color: #fff;
        }
        .page-item{
            margin: 0 5px;
        }
        .page-item.disabled .page-link {
            background-color: #5F61E6;
            color: #fff;
        }
        @media (max-width: 575.98px) {
            table {
                width: 100%;
                margin-top: 20px !important;
            }
        }
    </style>
    @endpush
@endsection