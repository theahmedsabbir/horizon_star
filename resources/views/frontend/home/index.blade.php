@extends('frontend.master')

@section('title')
    Home
@endsection

@push('style')

<div class="site-wrapper-reveal">
    <!--============ Machine learning Hero Start ============-->
    <div class="machine-learning-hero machine-learning-hero-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="machine-learning-hero-text wow move-up">
                        <h1 class="font-weight--reguler text-white mb-15" style="font-size: 24px;"><span class="text-color-secondary">{{ $data['consult']->title ?? ' ' }} </span> </h1>
                        <p>{{ $data['consult']->description ?? ' ' }}</p>
                        <div class="hero-button mt-30">
                            <a href="#contact" class="btn btn--secondary">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- hero brand logo -->
                    <div class="hero-brand-wrap">
                        <div class="brand-logo">
                            <a href="#">
                                <div class="brand-logo__image">
{{--                                    <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-07.webp" class="img-fluid" alt="">--}}
                                </div>
                                <div class="brand-logo__image-hover">
{{--                                    <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-07-hover.webp" class="img-fluid" alt="">--}}
                                </div>
                            </a>
                        </div>
                        <div class="brand-logo">
                            <a href="#">
                                <div class="brand-logo__image">
{{--                                    <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-06.webp" class="img-fluid" alt="">--}}
                                </div>
                                <div class="brand-logo__image-hover">
{{--                                    <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-06-hover.webp" class="img-fluid" alt="">--}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- hero brand logo -->
                </div>
            </div>
        </div>
    </div>
    <!--============ Infotechno Hero End ============-->
    <!--=========== fun fact Wrapper Start ==========-->
    <div class="fun-fact-wrapper bg-theme-three section-space--pt_40">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--five text-center">
                        <div class="fun-fact__count counter">1970</div>
                        <h6 class="fun-fact__text">Happy clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--five text-center">
                        <div class="fun-fact__count counter">491</div>
                        <h6 class="fun-fact__text">Finished projects</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--five text-center">
                        <div class="fun-fact__count counter">245</div>
                        <h6 class="fun-fact__text">Skilled Experts</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--five text-center">
                        <div class="fun-fact__count counter">1090</div>
                        <h6 class="fun-fact__text">Media Posts</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->

    <!--=========== About Company Area Start ==========-->
    <div class="machine-learning-about-company-area machine-learning-about-bg section-space--ptb_120" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-left section-space--mb_30">
                        <h6 class="section-sub-title mb-20">ABOUT COMPANY</h6>
                        <h2 class="heading">{{ $data['about']->heading ?? ' ' }}</h2>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-inner-video-section">
                        <div class="main-video-box video-popup">
                            <a href="" class="video-link  mt-30">
                                <div class="single-popup-wrap">
                                    <img class="img-fluid border-radus-5" src="{{ asset('/assets/about/'.$data['about']->image) }}" alt="">
                                    <div class="ht-popup-video video-button">
                                        <div class="video-mark">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                        </div>
                                        <div class="video-button__two">
                                            <div class="video-play">
                                                <span class="video-play-icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="machine-learning-mark-text mt-30">
                            {{ $data['about']->image_content ?? ' ' }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ms-auto mt-30">
                    <div class="machine-learning-about-content">
                        <div class="section-title mb-20">
                            <h4>{{ $data['about']->title ?? ' ' }}</h4>
                            <p class="dec-text mt-20">{!! $data['about']->description ?? ' ' !!}.</p>
                            <div class="button-box mt-30">
                                <a href="#contact" class="ht-btn ht-btn-md">Talk to a consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== About Company Area End ==========-->

    <!--=========== Machine Learning Service Area Start ==========-->
    <div class="machine-learning-service-area machine-learning-service-bg section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_30">
                        <h6 class="section-sub-title mb-20">WHY CHOOSE Horizon</h6>
                        <h3 class="heading">Managed IT services customized<br> for <span class="text-color-primary">your industry</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-images__five">
                        <div class="row">
                            @foreach($data['industryServices'] as $industryService)
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-05">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="{{ asset('/assets/industry/'.$industryService->image) }}" alt="" style="height: 100px; width: 100px; border-radius: 50%">
                                            </div>
                                            <div class="hover-images">
                                                <img class="img-fulid" src="{{ asset('/assets/industry/'.$industryService->image) }}" alt="" style="height: 100px; width: 100px; border-radius: 50%">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">{{ $industryService->title ?? ' ' }}</h5>
                                            <div class="text">{{ $industryService->description ?? ' ' }}
                                            </div>
                                            <div class="box-images-arrow">
                                                <a href="#">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="far fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--=========== Machine Learning Service Area End ==========-->

    <!--====================  Conact us Section Start ====================-->
    <div class="contact-us-section-wrappaer machine-learning-contact-us-bg section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="conact-us-wrap-three">
                        <h6 class="mb-3 section-sub-title">OUR SOLUTION</h6>
                        <h3 class="heading text-white">{{ $data['solution']->title ?? ' ' }}.</h3>
                    </div>
                    <div class="contact-info-two mt-40 text-left">
                        <div class="contact-us-button mt-20">
                            <a href="#contact" class="btn btn--secondary">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Conact us Section End  ====================-->

    <!-- ============ Team Member Wrapper Start =============== -->
    <div class="team-member-wrapper section-space--pt_100 section-space--pb_40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title section-space--mb_60">
                        <h3 class="heading">Our <span class="text-color-primary">experience </span> experts</h3>
                        <p class="text mt-30">Horizon specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. </p>

                        <div class="sider-title-button-box mt-30">
                            <a href="#contact" class="ht-btn ht-btn-md">Join us now</a>
                            <a href="#contact" class="btn-text font-weight--bold small-mt__20">View all team <i class="ml-1 button-icon far fa-long-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 ht-team-member-style-one">
                    <div class="row">
                        @foreach($data['experts'] as $expert)
                            <div class="col-lg-6 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="{{ asset('/assets/expert/'.$expert->image) }}" alt="">
                                        </div>
                                        <div class="team-info ">
                                            <h5 class="name">{{ $expert->name }} </h5>
                                            <div class="position">{{ $expert->position }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============ Team Member Wrapper End =============== -->

    <!--===========  Projects wrapper Start =============-->
    {{-- <div class="projects-wrapper machine-learning-project-bg section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Case studies</h6>
                        <h3 class="heading">Our projects make us proud</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="projects-wrap swiper-container projects-slider__container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-01 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/projects/case-study-01-480x298.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Aeroland-Smart Vision</h6>
                                            <div class="post-categories">Cyber Security</div>
                                            <div class="text">At Horizon, we have a holistic and integrated approach towards core modernization to experience technological evolution.
                                            </div>
                                            <div class="box-projects-arrow">
                                                <span class="button-text">View case study</span>
                                                <i class="fa fa-long-arrow-right ml-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-01 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/projects/case-study-02-480x298.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Arden-Internal Networking</h6>
                                            <div class="post-categories">Cyber Security</div>
                                            <div class="text">The prospects for a company operating in this new market are varied and exciting. The potential …
                                            </div>
                                            <div class="box-projects-arrow">
                                                <span class="button-text">View case study</span>
                                                <i class="fa fa-long-arrow-right ml-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-01 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/projects/case-study-03-480x298.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">A Freeserve case study</h6>
                                            <div class="post-categories">Cyber Security</div>
                                            <div class="text">The prospects for a company operating in this new market are varied and exciting. The potential …
                                            </div>
                                            <div class="box-projects-arrow">
                                                <span class="button-text">View case study</span>
                                                <i class="fa fa-long-arrow-right ml-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-01 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/projects/case-study-04-480x298.webp" alt="">
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Aqua – Research and Energy</h6>
                                            <div class="post-categories">Cyber Security</div>
                                            <div class="text">The prospects for a company operating in this new market are varied and exciting. The potential …
                                            </div>
                                            <div class="box-projects-arrow">
                                                <span class="button-text">View case study</span>
                                                <i class="fa fa-long-arrow-right ml-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>

                        </div>
                        <div class="swiper-pagination swiper-pagination-project mt_20"></div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_40">Stop wasting time and money on technology <a href="#">Let’s get started</a></div>

                </div>
            </div>
        </div>
    </div> --}}
    <!--===========  Projects wrapper End =============-->

    <style>
        .testimonial-info{
            margin-bottom: 50px;
        }
    </style>

    <!--=========== Testimonials Area Start =============-->
    <div class="testimonials-area infotechno-contact-us-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="projects-wrap swiper-container testimonial-slider-machine">
                        <div class="swiper-wrapper">
                            @foreach($data['testimonials'] as $testimonial)
                            <div class="swiper-slide">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="testimonials-contails-machine tablet-mt__60 small-mt__60">
                                            <h6>TESTIMONIALS</h6>
                                            <p>{!! $testimonial->description !!}</p>
                                            <div class="testimonial-info">
                                                <div class="testimonial-name">{{ $testimonial->position }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-pagination-machine mt_20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Testimonials Area End =============-->

    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area service-contact-bg section-space--ptb_100" id="contact">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="contact-info sytle-one service-contact text-left">

                        <div class="contact-info-title-wrap text-center">
                            <h3 class="heading text-white mb-10">4.9/5.0</h3>
                            <div class="ht-star-rating lg-style">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="sub-text">by 700+ customers for 3200+ clients</p>
                        </div>

                        <div class="contact-list-item" style="margin-top: -41px">
                            {{-- <a href="tel:190068668" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call for advice now!</h6>
                                            <div class="text">1900 68668</div>
                                        </div>
                                    </div>
                                </div>
                            </a> --}}
                            <a href="info@horizonsolutions.tech" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Say hello</h6>
                                            <div class="text" style="font-size: 18px;">info@horizonsolutions.tech</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 ms-auto">
                    <div class="contact-form-service-wrap">
                        <div class="contact-title text-center section-space--mb_40">
                            <h3 class="mb-10">Need a hand?</h3>
                            <p class="text">Reach out to the world’s most reliable IT services.</p>
                        </div>

                        <form class="contact-form" id="" action="{{ url('/contact-us') }}" method="post">
                            @csrf
                            <div class="contact-form__two">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="Name *" required>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="message" placeholder="Please describe what you need." required></textarea>
                                </div>
                                <div class="comment-submit-btn">
                                    <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============ Contact Us Area End =================-->
    <!--====================  brand logo slider area ====================-->
    {{-- <div class="brand-logo-slider-area section-space--ptb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-01.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-01-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-02.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-02-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-03.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-03-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-04.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-04-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-05.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-05-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-06.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-06-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-07.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-07-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-08.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-08-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-09.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{ asset('frontend') }}/assets/images/brand/mitech-client-logo-09-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====================  End of brand logo slider area  ====================-->
</div>

@endpush

@section('content')

@endsection

@push('script')

@endpush
