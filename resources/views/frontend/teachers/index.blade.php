@extends('frontend.layout')
@section('frontend_layout')

<section class="page-header clearfix" style="background-image: url({{ asset('frontend_assets/images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper clearfix">
                    <div class="page-header__title">
                        <h2>Teachers</h2>
                    </div>
                    <div class="page-header__menu">
                        <ul class="page-header__menu-list list-unstyled clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>










<section class="meet-teachers-one">
    <div class="container">
        <div class="row">
            <!--Start Single Meet Teachers One-->
            @foreach ($teachersData as $data)
            <div class="col-xl-4 col-lg-4">
                <div class="meet-teachers-one__single wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="meet-teachers-one__single-img">
                        <img src="{{ $data->employee_image }}" alt="">
                    </div>

                    <div class="meet-teachers-one__single-content">
                        <div class="meet-teachers-one__single-middle-content">
                            <div class="title">
                                <h4><a href="teachers-1.html#">{{ $data->name }}</a></h4>
                                <p>{{ $data->employee_designation }}</p>
                            </div>
                            <p class="meet-teachers-one__single-content-text">{{ $data->email }}</p>
                            <a href="tel:{{ $data->email }}"></a>
                        </div>

                        <div class="meet-teachers-one__single-bottom-content">
                            <div class="meet-teachers-one__single-content-courses-box">
                                {{-- <div class="text">
                                    <p>20 Courses</p>
                                </div> --}}
                                <div class="social-icon ">
                                    <ul class="list-unstyled">


                                        <li class="{{ $data->fb_link == '' ? 'd-none' : '' }}">
                                            <a href="{{ $data->fb_link }}"><i class="fab fa-facebook"></i></a>
                                        </li>

                                        
                                        <li class="{{ $data->twitter_link == '' ? 'd-none' : '' }}">
                                            <a href="{{ $data->twitter_link }}"><i class="fab fa-twitter"></i></a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--End Single Meet Teachers One-->

            
        </div>
    </div>
</section>




@endsection