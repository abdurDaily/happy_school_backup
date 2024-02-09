@extends('frontend.layout')
@section('frontend_layout')
<section class="why-choose-one">
    <div class="container">
        <div class="row">
            <!--Start Why Choose One Left-->
            <div class="col-xl-6 col-lg-6">
                <div class="why-choose-one__left">
                    <div class="section-title">
                        <span class="section-title__tagline">Why Choose Us?</span>
                        <h2 class="section-title__title">Benefits of Learning <br>from ETE</h2>
                    </div>
                    <p class="why-choose-one__left-text">There cursus massa at urnaaculis estie. Sed
                        aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed medy
                        fringilla vitae.</p>
                    <div class="why-choose-one__left-learning-box">
                        <div class="icon">
                            <span class="icon-professor"></span>
                        </div>
                        <div class="text">
                            <h4>Start learning from our experts and <br>enhance your skills</h4>
                        </div>
                    </div>
                    <div class="why-choose-one__left-list">
                        <ul class="list-unstyled">
                            <li class="why-choose-one__left-list-single">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>Making this the first true on the Internet</p>
                                </div>
                            </li>

                            <li class="why-choose-one__left-list-single">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>Lorem Ipsum is not simply random text</p>
                                </div>
                            </li>

                            <li class="why-choose-one__left-list-single">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p> If you are going to use a passage</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Why Choose One Left-->

            <!--Start Why Choose One Right-->
            <div class="col-xl-6 col-lg-6">
                <div class="why-choose-one__right wow slideInRight animated clearfix animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
                    <div class="why-choose-one__right-img clearfix">
                        <img src="{{ asset('frontend_assets/images/resources/why-choose-v1-img.jpg') }}" alt="">
                        <div class="why-choose-one__right-img-overlay">
                            <p>We’re the best institution</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Why Choose One Right-->

        </div>
    </div>
</section>






@endsection