@extends('frontend.master2')

@section('title')
    Technology
@endsection

@section('content')
    <div class="site-wrapper-reveal">
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">{{ $technology->name }}</h2>
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
                <!--===========  feature-icon-wrapper  Start =============-->
                <div class="feature-icon-wrapper section-space--ptb_100">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrap text-center section-space--mb_40" style="margin-top: -77px">
                                    <img src="{{ asset('assets/technology/'.$technology->image) }}" style="width: 100%; height: 300px; object-fit: cover">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="feature-list__one">
                                    {!! $technology->description  !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- breadcrumb-area end -->
    </div>
@endsection
