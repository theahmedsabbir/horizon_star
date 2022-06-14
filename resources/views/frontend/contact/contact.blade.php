@extends('frontend.master2')

@section('title')
    Contact
@endsection

@section('content')
    <div class="site-wrapper-reveal">
    <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_box text-center">
                            <h2 class="breadcrumb-title">Contact US</h2>
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="site-wrapper-reveal">
                <!--====================  Conact us Section Start ====================-->
                <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-lg-6">
                                <div class="conact-us-wrap-one mb-30">
                                    <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via our social channels. </h3>
                                    <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lg-6">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                <div class="contact-form-wrap">
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
                <!--====================  Conact us Section End  ====================-->
    </div>
@endsection
