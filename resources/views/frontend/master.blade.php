<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @include('frontend.includes.header')
    @stack('style')
</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!--====================  header area ====================-->
    
    @include('frontend.includes.nav')
    <!--====================  End of header area  ====================-->
    <div id="main-wrapper">
        @yield('content')
        <!--====================  footer area ====================-->
        @include('frontend.includes.footer')
        <!--====================  End of footer area  ====================-->
    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
    
    @include('frontend.includes.others')

    
    @include('frontend.includes.script')
    @stack('script')
</body>
</html>