
    <div class="header-area header-area--absolute">
        <div class="header-bottom-wrap header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">
                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="index.html">
                                    <img src="{{ asset('frontend') }}/assets/images/logo/logo-final-white.png" width="160" height="48" class="img-fluid light-logo" alt="">
                                    <img src="{{ asset('frontend') }}/assets/images/logo/logo-final-dark.png" width="160" height="48" class="img-fluid dark-logo" alt="">
                                </a>
                            </div>

                            <div class="header-right">
                                <!-- navigation menu -->
                                <div class="header__navigation menu-style-four d-none d-xl-block">
                                    <nav class="navigation-menu">

                                        <ul>
                                            <li class="">
                                                <a href="{{ url('/') }}"><span>Home</span></a>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Our Service</span></a>
                                                <ul class="submenu">  
                                                    <li><a href="{{ url('/service/') }}"><span>Computer Vision</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>Data Science & Business Intelligence</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>Natural Language Processing</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>Web App Development</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>Mobile App Development</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>Data Analytics & Predictive Analysis</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>E-Commerce</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>ERP</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>IOT</span></a></li>
                                                    <li><a href="{{ url('/service/') }}"><span>Block Chain & Big Data</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Technologies</span></a>

                                                <ul class="submenu">  
                                                    <li><a href="{{ url('/technologies/') }}"><span>Recommendation System</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Mining</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Deep Learning</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Machine Learning</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Digital Image Processing</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Annotation</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Scraping</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Science</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Cleaning</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Pattern Matching</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Predictive Analytics</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Analytics</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Data Visualization</span></a></li>
                                                    <li><a href="{{ url('/technologies/') }}"><span>Python Development</span></a></li>
                                                </ul>
                                            </li>
 



                                            <li class="has-children has-children--multilevel-submenu">
                                                <a href="#"><span>Careers</span></a>

                                                <ul class="submenu">  
                                                    <li><a href="{{ url('/careers/') }}"><span>Job Opening</span></a></li>
                                                    <li><a href="{{ url('/careers/') }}"><span>Internship</span></a></li>
                                                    <li><a href="{{ url('/careers/') }}"><span>Life at Horizon Star</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href=""><span>Mission & Vision</span></a>
                                                <!-- multilevel submenu -->
                                            </li>
                                            <li class="">
                                                <a href=""><span>About us</span></a>
                                                <!-- multilevel submenu -->
                                            </li>
                                            <li class="">
                                                <a href="{{  url('/contact-us') }}"><span>Contact us</span></a>
                                                <!-- multilevel submenu -->
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="header-search-form-two white-icon">
                                    <form action="#" class="search-form-top-active">
                                        <div class="search-icon" id="search-overlay-trigger">
                                            <a href="javascript:void(0)">
                                                <i class="far fa-search"></i>
                                            </a>
                                        </div>
                                    </form>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon white-md-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>