@extends('frontend.layout')
@section('frontend_layout')


{{-- ABOUT INSTITUTE  --}}
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="about-two__single-img">
                        <img src="{{ $aboutData->about_galary_img }}" alt="">
                    </div>
                </div>

              
            </div>

            <div class="about-two__bottom-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-two__title-box">
                            <div class="section-title">
                                <span class="section-title__tagline">About Our Department</span>
                                <h2 class="section-title__title">{{ $aboutData->about_galary_text }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="about-two__text-box">
                            <p class="about-two__text-box-text">
                                {{ $aboutData->about_institute }}
                            </p>
                            <div class="about-two__text-box-btn">
                                <a href="{{ route('frontend.courses.index') }}" class="thm-btn">view all courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



{{-- STUDENTS COUNT  --}}
<section class="counter-one counter-one--about jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: none;" data-jarallax-original-styles="background-image: url(assets/images/backgrounds/Counters-v1-bg.jpg);">
    <div class="container">
        <div class="row">
            <!--Start Counter One Left-->
            <div class="col-xl-5 col-lg-5">
                <div class="counter-one__left">
                    <div class="section-title">
                        <span class="section-title__tagline">Fun Facts</span>
                        <h2 class="section-title__title">Zilom Mission is to <br>Polish your skill</h2>
                    </div>
                    <p class="counter-one__left-text">There are many variations of passages of lore ipsum available but the majority have suffered.</p>
                </div>
            </div>
            <!--End Counter One Left-->

            <!--Start Counter One Right-->
            <div class="col-xl-7 col-lg-7">
                <div class="counter-one__right">
                    <ul class="counter-one__right-box list-unstyled">
                        <!--Start Counter One Right Single-->
                        <li class="counter-one__right-single wow slideInUp animated animated" data-wow-delay="0.1s" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0.1s; animation-name: slideInUp;">
                           <div class="counter-one__right-single-icon">
                               <span class="icon-teacher"></span>
                           </div>
                            <h3 class="odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">6</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></h3>
                            <p class="counter-one__right-text">Teachers</p>
                        </li>
                        <!--End Counter One Right Single-->

                        <!--Start Counter One Right Single-->
                        <li class="counter-one__right-single wow slideInUp animated animated" data-wow-delay="0.3s" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0.3s; animation-name: slideInUp;">
                            <div class="counter-one__right-single-icon">
                                <span class="icon-online-course"></span>
                            </div>
                             <h3 class="odometer odometer-auto-theme" data-count="9800"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></h3>
                             <p class="counter-one__right-text">Total Graduate</p>
                         </li>
                         <!--End Counter One Right Single-->

                         <!--Start Counter One Right Single-->
                        <li class="counter-one__right-single wow slideInUp animated animated" data-wow-delay="0.5s" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0.5s; animation-name: slideInUp;">
                            <div class="counter-one__right-single-icon">
                                <span class="icon-student"></span>
                            </div>
                             <h3 class="odometer odometer-auto-theme" data-count="10"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-formatting-mark">,</span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">7</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></h3>
                             <p class="counter-one__right-text">Total Staffs</p>
                         </li>
                         <!--End Counter One Right Single-->
                    </ul>
                </div>
            </div>
            <!--End Counter One Right-->
        </div>
    </div>
<div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;file:///D:/template/layerdrops.com/zilom/assets/images/backgrounds/Counters-v1-bg.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1533px; height: 432.8px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -5.9px; transform: translate3d(0px, 54.1px, 0px);"></div></div>

</section>






{{-- SUBSCRIBE --}}
<section class="newsletter-one">
    <div class="container">
        <div class="row">
            <!--Start Newsletter One Left-->
            <div class="col-xl-6 col-lg-6">
                <div class="newsletter-one__left">
                    <div class="section-title">
                        <h2 class="section-title__title">Subscribe to Our <br>Newsletter to Get Daily <br>Content!</h2>
                    </div>
                </div>
            </div>
            <!--End Newsletter One Left-->

            <!--Start Newsletter One Right-->
            <div class="col-xl-6 col-lg-6">
                <div class="newsletter-one__right">
                    <div class="shape1 zoom-fade"><img src="{{ asset('frontend_assets/images/shapes/thm-shape2.png') }}" alt=""></div>
                    <div class="shape2 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;"><img src="{{ asset('frontend_assets/images/shapes/thm-shape3.png') }}" alt=""></div>
                  
                    <div class="newsletter-form wow slideInDown animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: slideInDown;">
                        <form action="about.html#">
                            <input type="text" name="email" placeholder="Enter your email">
                            <button type="submit"><span class="icon-paper-plane"></span></button>
                        </form>
                        <div class="newsletter-one__right-checkbox">
                            <input type="checkbox" name="agree " id="agree" checked="">
                            <label for="agree"><span></span>I agree to all terms and policies of the company</label>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Newsletter One Right-->
        </div>
    </div>
</section>
@endsection