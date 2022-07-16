
    <div class="demo-option-container">

        <!-- Start Quick Link -->
        <div class="demo-option-wrapper">
            <div class="demo-panel-header">
                <div class="title">
                    <h6 class="heading mt-30">IT Solutions Horizon - Technology, IT Solutions & Services</h6>
                </div>

                <div class="panel-btn mt-20">
                    <a class="ht-btn ht-btn-md" href=""></i> Buy Now </a>
                </div>
            </div>
            <div class="demo-quick-option-list">
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/home-01.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/home-02.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/home-03.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/home-04.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/home-05.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/home-06.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-modern-it-company.html" aria-label="Modern IT Company">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/modern-it-company.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-machine-learning.html" aria-label="Machine Learning">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/machine-learning.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-software-innovation.html" aria-label="Software Innovation">
                    <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/demo-images/software-innovation.webp" alt="Images">
                </a>
            </div>
        </div>
        <!-- End Quick Link -->
    </div>
    <!-- End Toolbar -->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('frontend') }}/assets/images/logo/logo-final-dark.png" width="160" height="48" class="img-fluid dark-logo" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="has-children">
                            <a href="#">Our Service</a>
                            <ul class="sub-menu">
                                @foreach(\App\Models\Service::get() as $service)
                                    <li><a href="{{ url('/service/'.$service->id.'/'.$service->slug) }}"><span>{{ $service->name ?? ' ' }}</span></a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Technologies</a>
                            <ul class="sub-menu">
                                @foreach(\App\Models\Technology::all() as $technology)
                                    <li><a href="{{ url('/technologies/'.$technology->id . '/' .$technology->slug) }}"><span>{{ $technology->name ?? ' ' }}</span></a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Career</a>
                            <ul class="sub-menu">
                                @foreach(\App\Models\Career::all() as $career)
                                    <li><a href="{{ url('/careers/'.$career->id . '/' . $career->slug) }}"><span>{{ $career->name ?? ' ' }}</span></a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="{{ url('/mission/vision') }}">Mission & Vision</a>
                        </li>
                        <li class="has-children">
                            <a href="{{ url('/portfolio') }}">Portfolio</a>
                        </li>
                        <li class="has-children">
                            <a href="#about">About Us</a>
                        </li>
                        <li class="has-children">
                            <a href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->
    <!--====================  search overlay ====================-->
    <!--====================  End of search overlay  ====================-->
