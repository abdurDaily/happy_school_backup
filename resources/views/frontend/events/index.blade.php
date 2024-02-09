@extends('frontend.layout')
@section('frontend_layout')


<section class="page-header clearfix" style="background-image: url({{ asset('frontend_assets/images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper clearfix">
                    <div class="page-header__title">
                        <h2>Event</h2>
                    </div>
                    <div class="page-header__menu">
                        <ul class="page-header__menu-list list-unstyled clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Event</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="blog-one blog-one--blog">
    <div class="container">
        <div class="row">
            <!--Start Single Blog One-->

            @forelse ($newsData as $data)
                
            
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ $data->event_img }}" alt="">
                    </div>
                    <div class="blog-one__single-content">
                        <div class="blog-one__single-content-overlay-mata-info">
                            <ul class="list-unstyled">
                                <li><a href="news.html#"><span class="icon-clock"></span>{{ date('M Y', strtotime($data->created_at))  }}</a></li>
                                <li><a href="news.html#"><span class="icon-user"></span>Admin </a></li>
                                {{-- <li><a href="news.html#"><span class="icon-chat"></span> Comments</a></li> --}}
                            </ul>
                        </div>
                        <h2 class="blog-one__single-content-title"><a href="news-details.html">{{ Str::limit($data->event_title, 50, '...') }}</a></h2>
                        <p class="blog-one__single-content-text">{{Str::limit($data->event_detail, 100)}}</p>
                    </div>
                </div>
            </div>

            @empty
                <h4>No Event Data Found!</h4>
            @endforelse
            <!--End Single Blog One-->

            
        </div>
    </div>
</section>

@endsection