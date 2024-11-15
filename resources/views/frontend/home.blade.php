@extends('frontend.layouts.header')
@section('title', "Web & App Development")
@section('keywords', "Website Development, App Development")

@section('content')       

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" class="popup-search" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Search here...">
                    <button id="popup-search-button" type="submit" name="submit"></button>
                </form>
            </div>
        </div>
        <!-- /#popup-search-box -->

        <div id="sidebar-area" class="sidebar-area">
            <button class="sidebar-trigger close">
                <svg
                    class="sidebar-close"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    width="16px"
                    height="12.7px"
                    viewBox="0 0 16 12.7"
                    style="enable-background: new 0 0 16 12.7"
                    xml:space="preserve"
                >
                    <g>
                        <rect
                            x="0"
                            y="5.4"
                            transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)"
                            width="16"
                            height="2"
                        ></rect>
                        <rect
                            x="0"
                            y="5.4"
                            transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)"
                            width="16"
                            height="2"
                        ></rect>
                    </g>
                </svg>
            </button>
            <div class="side-menu-content">
                <div class="side-menu-logo">
                    <img src="{{ asset('theme/img/logo/logo.png')}}" alt="logo">
                </div>
                <div class="side-menu-about">
                    <div class="side-menu-header">
                        <h3>About Us</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="contact.html" class="mt-primary-btn">Contact Us</a>
                </div>
                <div class="side-menu-contact">
                    <div class="side-menu-header">
                        <h3>Contact Us</h3>
                    </div>
                    <ul class="side-menu-list">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Valentin, Street Road 24, New York, </p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+000123456789">+000 123 (456) 789</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope-open-text"></i>
                            <a href="mailto:moratcontact@gmail.com">moratcontact@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <ul class="side-menu-social">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="g-plus"><a href="#"><i class="fab fa-fab fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <!--/.sidebar-area-->

        <div class="mobile-side-menu">
            <div class="side-menu-content">
                <div class="side-menu-head">
                    <a href="index.html"><img src="{{ asset('theme/img/logo/logo.png')}}" alt="logo"></a>
                    <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="side-menu-wrap"></div>
                <ul class="side-menu-list">
                    <li><i class="fa-light fa-location-dot"></i>Address : <span>Amsterdam, 109-74</span></li>
                    <li><i class="fa-light fa-phone"></i>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                    <li><i class="fa-light fa-envelope"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
        </div>
        <!-- /.mobile-side-menu -->
        <div class="mobile-side-menu-overlay"></div>

        <div id="preloader">
            <div class="preloader-close">x</div>
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>

        <section class="hero-section-2" data-background="{{ asset('theme/img/bg-img/hero-bg-2.jpg')}}">
            <div class="overlay d-lg-none"></div>
            <div class="custom-container">
                <div class="hero-content content-2">
                    <div class="shape" data-background="{{ asset('theme/img/shapes/hero-shape-1.png')}}"></div>
                    <h4 class="hero-sub-title wow fade-in-bottom" data-wow-delay="400ms"><span>Welcome to</span> VajraTechne!</h4>
                    <h1 class="title wow fade-in-bottom" data-wow-delay="500ms">The Best Projects Code It Solution <span>Working.</span></h1>
                    <p class="wow fade-in-bottom" data-wow-delay="600ms">
                        We are tailored it design, management & support services business softwaer elit, sed do eiusmod
                        tempor.
                    </p>
                    <div class="btn-wrap wow fade-in-bottom" data-wow-delay="700ms">
                        <a href="contact.html" class="mt-primary-btn">Contact Now</a>
                        <a href="contact.html" class="mt-primary-btn active">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="hero-social">
                <ul class="social-list">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <h4 class="follow">Follow Social:</h4>
            </div>
        </section>
        <!-- ./ hero-section -->

        <section class="feature-section feature-1 pt-100 pb-100">
            <div class="top-shape" data-background="{{ asset('theme/img/shapes/top-left-shape.png')}}"></div>
            <div class="bottom-shape" data-background="{{ asset('theme/img/shapes/top-left-shape.png')}}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-content">
                            <div class="section-heading">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Features</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Power Your Business Features Now!</h2>
                                <p class="wow fade-in-bottom" data-wow-delay="500ms">
                                    Softewer being able to crank out videos consistently, them for different regions,
                                    and still save resources, has been a game change
                                </p>
                                <a href="about.html" class="mt-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="600ms">Read More</a>
                            </div>
                            <div class="feature-img wow fade-in-bottom" data-wow-delay="700ms">
                                <img src="{{ asset('theme/img/images/feature-img.jpg')}}" alt="feature">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row feature-item-wrap">
                            <div class="col-md-6">
                                <div class="feature-item wow fade-in-bottom" data-wow-delay="300ms">
                                    <div class="bottom-shape"></div>
                                    <span class="number">01</span>
                                    <div class="feature-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="90" height="101">
                                            <path
                                                d="M0 0 C4.05425366 2.89913111 6.62683317 4.86781331 8.03515625 9.75 C8.17732061 18.27986177 5.46802797 24.22507079 0.92993164 31.36352539 C-1.5875667 35.43661747 -2.82203812 38.69772317 -2.90234375 43.5 C-1.71123104 47.04144515 -1.71123104 47.04144515 0.22265625 50.4375 C0.54379395 51.04867676 0.86493164 51.65985352 1.19580078 52.28955078 C2.96047691 55.60172566 4.87808202 58.76394121 6.97265625 61.875 C9.34583049 65.61792581 10.91342028 69.00891198 10.09765625 73.5 C5.6249016 82.27413939 -5.33081013 87.59176569 -14.3125 90.66796875 C-28.82174029 94.35148267 -43.25019471 92.97931175 -56.26953125 85.29296875 C-68.61935627 76.88262797 -75.91364915 66.59332717 -79.4921875 52.11328125 C-81.7417604 37.7802882 -79.25512265 23.4643288 -70.90234375 11.5 C-53.28779517 -10.19525233 -23.66411165 -15.39129213 0 0 Z "
                                                fill="currentColor"
                                                transform="translate(79.90234375,8.5)">
                                            </path>
                                        </svg>
                                        <i class="fa-solid fa-chart-pie-simple"></i>
                                    </div>
                                    <h3 class="title"><a href="service-details.html">Modern Renovate</a></h3>
                                    <p>
                                        Softewer business it before providet Payroll & Worksite Servicesfull for agency
                                        for business.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item item-2 wow fade-in-bottom" data-wow-delay="400ms" style="--mt-color-theme-secondary: #175cff">
                                    <div class="bottom-shape"></div>
                                    <span class="number">02</span>
                                    <div class="feature-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="90" height="101">
                                            <path
                                                d="M0 0 C4.05425366 2.89913111 6.62683317 4.86781331 8.03515625 9.75 C8.17732061 18.27986177 5.46802797 24.22507079 0.92993164 31.36352539 C-1.5875667 35.43661747 -2.82203812 38.69772317 -2.90234375 43.5 C-1.71123104 47.04144515 -1.71123104 47.04144515 0.22265625 50.4375 C0.54379395 51.04867676 0.86493164 51.65985352 1.19580078 52.28955078 C2.96047691 55.60172566 4.87808202 58.76394121 6.97265625 61.875 C9.34583049 65.61792581 10.91342028 69.00891198 10.09765625 73.5 C5.6249016 82.27413939 -5.33081013 87.59176569 -14.3125 90.66796875 C-28.82174029 94.35148267 -43.25019471 92.97931175 -56.26953125 85.29296875 C-68.61935627 76.88262797 -75.91364915 66.59332717 -79.4921875 52.11328125 C-81.7417604 37.7802882 -79.25512265 23.4643288 -70.90234375 11.5 C-53.28779517 -10.19525233 -23.66411165 -15.39129213 0 0 Z "
                                                fill="currentColor"
                                                transform="translate(79.90234375,8.5)">
                                            </path>
                                        </svg>
                                        <img src="{{ asset('theme/img/icon/service-2.png')}}" alt="feature">
                                    </div>
                                    <h3 class="title"><a href="service-details.html">Digital Marketing</a></h3>
                                    <p>
                                        Softewer business it before providet Payroll & Worksite Servicesfull for agency
                                        for business.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item wow fade-in-bottom" data-wow-delay="500ms" style="--mt-color-theme-secondary: #ff8c91">
                                    <div class="bottom-shape"></div>
                                    <span class="number">03</span>
                                    <div class="feature-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="90" height="101">
                                            <path
                                                d="M0 0 C4.05425366 2.89913111 6.62683317 4.86781331 8.03515625 9.75 C8.17732061 18.27986177 5.46802797 24.22507079 0.92993164 31.36352539 C-1.5875667 35.43661747 -2.82203812 38.69772317 -2.90234375 43.5 C-1.71123104 47.04144515 -1.71123104 47.04144515 0.22265625 50.4375 C0.54379395 51.04867676 0.86493164 51.65985352 1.19580078 52.28955078 C2.96047691 55.60172566 4.87808202 58.76394121 6.97265625 61.875 C9.34583049 65.61792581 10.91342028 69.00891198 10.09765625 73.5 C5.6249016 82.27413939 -5.33081013 87.59176569 -14.3125 90.66796875 C-28.82174029 94.35148267 -43.25019471 92.97931175 -56.26953125 85.29296875 C-68.61935627 76.88262797 -75.91364915 66.59332717 -79.4921875 52.11328125 C-81.7417604 37.7802882 -79.25512265 23.4643288 -70.90234375 11.5 C-53.28779517 -10.19525233 -23.66411165 -15.39129213 0 0 Z "
                                                fill="currentColor"
                                                transform="translate(79.90234375,8.5)">
                                            </path>
                                        </svg>
                                        <img src="{{ asset('theme/img/icon/service-3.png')}}" alt="feature">
                                    </div>
                                    <h3 class="title"><a href="service-details.html">Research Work</a></h3>
                                    <p>
                                        Softewer business it before providet Payroll & Worksite Servicesfull for agency
                                        for business.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item item-4 wow fade-in-bottom" data-wow-delay="600ms" style="--mt-color-theme-secondary: #a6e155">
                                    <div class="bottom-shape"></div>
                                    <span class="number">04</span>
                                    <div class="feature-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="90" height="101">
                                            <path
                                                d="M0 0 C4.05425366 2.89913111 6.62683317 4.86781331 8.03515625 9.75 C8.17732061 18.27986177 5.46802797 24.22507079 0.92993164 31.36352539 C-1.5875667 35.43661747 -2.82203812 38.69772317 -2.90234375 43.5 C-1.71123104 47.04144515 -1.71123104 47.04144515 0.22265625 50.4375 C0.54379395 51.04867676 0.86493164 51.65985352 1.19580078 52.28955078 C2.96047691 55.60172566 4.87808202 58.76394121 6.97265625 61.875 C9.34583049 65.61792581 10.91342028 69.00891198 10.09765625 73.5 C5.6249016 82.27413939 -5.33081013 87.59176569 -14.3125 90.66796875 C-28.82174029 94.35148267 -43.25019471 92.97931175 -56.26953125 85.29296875 C-68.61935627 76.88262797 -75.91364915 66.59332717 -79.4921875 52.11328125 C-81.7417604 37.7802882 -79.25512265 23.4643288 -70.90234375 11.5 C-53.28779517 -10.19525233 -23.66411165 -15.39129213 0 0 Z "
                                                fill="currentColor"
                                                transform="translate(79.90234375,8.5)">
                                            </path>
                                        </svg>
                                        <img src="{{ asset('theme/img/icon/service-1.png')}}" alt="feature">
                                    </div>
                                    <h3 class="title"><a href="service-details.html">Get Updates </a></h3>
                                    <p>
                                        Softewer business it before providet Payroll & Worksite Servicesfull for agency
                                        for business.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ feature-section -->

        <section class="about-section-3 pt-100 pb-100">
            <div class="bg-shape" data-background="{{ asset('theme/img/bg-img/about-bg-shape.png')}}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-info-2">
                            <div class="section-heading">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our About Us</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Complete Managing About Software Business</h2>
                                <p class="wow fade-in-bottom" data-wow-delay="500ms">
                                    Softewer being able to crank out videos consistently, localize this them for
                                    different regions, and still save resources, time, energy has been a game change
                                </p>
                            </div>
                            <ul class="about-list wow fade-in-bottom" data-wow-delay="600ms">
                                <li><i class="fa-solid fa-circle-check"></i>We a revolutionary</li>
                                <li><i class="fa-solid fa-circle-check"></i>Softewer solution.</li>
                                <li><i class="fa-solid fa-circle-check"></i>We a revolutionary</li>
                                <li><i class="fa-solid fa-circle-check"></i>Video Dedicated Support solution.</li>
                                <li><i class="fa-solid fa-circle-check"></i>Business Team Support.</li>
                            </ul>
                            <span class="btn-content wow fade-in-bottom" data-wow-delay="700ms">
                                <i class="fas fa-plus"></i>Softewer being able to crank out videos consistently
                                <a href="about.html">Read More</a></span>
                            <div class="skills-items wow fade-in-bottom" data-wow-delay="800ms">
                                <div class="skills-item">
                                    <div class="title-wrap">
                                        <div class="progress-count">
                                            (<span class="odometer" data-count="73"></span>%)
                                        </div>
                                        <h4 class="title">Development</h4>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay="0ms"
                                            data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 73%"
                                        >
                                            <div class="arrow">
                                                <i class="fa-solid fa-triangle"></i><i class="fa-solid fa-triangle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="about.html" class="mt-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="800ms">About More</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-counter-wrap wow fade-in-right" data-wow-delay="400ms">
                            <i class="fa-sharp fa-light fa-circle-check"></i>
                            <div class="about-counter">
                                <h3 class="title"><span class="odometer" data-count="2683">0</span>k+</h3>
                                <span class="project">Complete Projects</span>
                            </div>
                            <div class="author-img">
                                <img src="{{ asset('theme/img/images/about-author-2.jpg')}}" alt="author">
                            </div>
                        </div>
                        <div class="about-img-2 wow fade-in-right" data-wow-delay="500ms">
                            <div class="about-items">
                                <div class="shape expression">
                                    <h3 class="title"><span class="odometer" data-count="29">0</span>+</h3>
                                    <span class="challange">Expressions Challenge</span>
                                </div>
                                <div class="shape shape-1">
                                    <img src="{{ asset('theme/img/shapes/about-img-shape-1.jpg')}}" alt="shape">
                                </div>
                                <div class="shape shape-2">
                                    <img src="{{ asset('theme/img/shapes/about-img-shape-2.png')}}" alt="shape">
                                </div>
                            </div>
                            <img class="main" src="{{ asset('theme/img/images/about-img-4.png')}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

        <section class="faq-section pt-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading">Our Faq Now</h4>
                    <h2 class="section-title">General Ask For The Questions</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-img wow fade-in-left" data-wow-delay="400ms">
                            <img src="{{ asset('theme/img/images/faq-img.png')}}" alt="faq">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fade-in-right" data-wow-delay="400ms">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"
                                            aria-expanded="true"
                                            aria-controls="collapseOne"
                                        >
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Maecenas facilisis erat id
                                            odio <span class="number">01</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample"
                                        style=""
                                    >
                                        <div class="accordion-body">
                                            <p>
                                                There are many variations of passages of is psum the majority have
                                                suffered alteration in some we by injected humour,
                                            </p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme/img/images/faq-body-img.jpg')}}" alt="faq">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fade-in-right" data-wow-delay="400ms" style="--mt-color-theme-secondary: #004ce9">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo"
                                        >
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Phasellus et vehicula
                                            nulla <span class="number">02</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample"
                                        style=""
                                    >
                                        <div class="accordion-body">
                                            <p>
                                                There are many variations of passages of is psum the majority have
                                                suffered alteration in some we by injected humour,
                                            </p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme/img/images/faq-body-img.jpg')}}" alt="faq">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fade-in-right" data-wow-delay="400ms" style="--mt-color-theme-secondary: #ff8c91">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree"
                                        >
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Maecenas malesuada <span class="number">03</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <p>
                                                There are many variations of passages of is psum the majority have
                                                suffered alteration in some we by injected humour,
                                            </p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme/img/images/faq-body-img.jpg')}}" alt="faq">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fade-in-right" data-wow-delay="400ms" style="--mt-color-theme-secondary: #afe466">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour"
                                        >
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Why you join our team <span class="number">04</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample"
                                        style=""
                                    >
                                        <div class="accordion-body">
                                            <p>
                                                There are many variations of passages of is psum the majority have
                                                suffered alteration in some we by injected humour,
                                            </p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme/img/images/faq-body-img.jpg')}}" alt="faq">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fade-in-right" data-wow-delay="400ms" style="--mt-color-theme-secondary: #d98fff">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive"
                                            aria-expanded="false"
                                            aria-controls="collapseFive"
                                        >
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Maecenas malesuada <span class="number">05</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <p>
                                                There are many variations of passages of is psum the majority have
                                                suffered alteration in some we by injected humour,
                                            </p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme/img/images/faq-body-img.jpg')}}" alt="faq">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section -->

        <div class="sponsor-section pb-80 pt-80 bd-bottom">
            <div class="container">
                <div class="sponsor-carousel swiper">
                    <div class="swiper-wrapper swiper-container">
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme/img/sponsor/sponsor-1.png')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme/img/sponsor/sponsor-2.png')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme/img/sponsor/sponsor-3.png')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme/img/sponsor/sponsor-4.png')}}" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme/img/sponsor/sponsor-5.png')}}" alt="sponsor"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./ sponsor-section -->

        <section class="team-section pt-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Team Member</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Meet The Team Member Metting</h2>
                </div>
                <div class="team-carousel-wrap">
                    <div class="swiper team-carousel">
                        <div class="swiper-wrapper swiper-container">
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-logo">
                                        <img src="{{ asset('theme/img/shapes/team-shape.png')}}" alt="shape">
                                    </a>
                                    <div class="team-thumb">
                                        <img src="{{ asset('theme/img/team/team-1.png')}}" alt="team">
                                        <div class="team-social">
                                            <div class="expand"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                                            <ul class="social-list">
                                                <li>
                                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="google"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="team-details.html">Morata Baram</a></h3>
                                        <span>Founder</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-logo">
                                        <img src="{{ asset('theme/img/shapes/team-shape.png')}}" alt="shape">
                                    </a>
                                    <div class="team-thumb">
                                        <img src="{{ asset('theme/img/team/team-2.png')}}" alt="team">
                                        <div class="team-social">
                                            <div class="expand"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                                            <ul class="social-list">
                                                <li>
                                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="google"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="team-details.html">Daniel Honey</a></h3>
                                        <span>Manager</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-logo">
                                        <img src="{{ asset('theme/img/shapes/team-shape.png')}}" alt="shape">
                                    </a>
                                    <div class="team-thumb">
                                        <img src="{{ asset('theme/img/team/team-3.png')}}" alt="team">
                                        <div class="team-social">
                                            <div class="expand"><i class="fa-sharp fa-solid fa-share-nodes"></i></div>
                                            <ul class="social-list">
                                                <li>
                                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="google"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title"><a href="team-details.html">Mark Wough</a></h3>
                                        <span>Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ team-section -->

        <section class="cta-section-2" data-background="{{ asset('theme/img/bg-img/cta-bg-2.jpg')}}">
            <div class="container">
                <div class="cta-content-wrap wow fade-in-bottom" data-wow-delay="400ms" data-background="{{ asset('theme/img/bg-img/cta-info-bg.png')}}">
                    <div class="cta-info">
                        <div class="cta-icon">
                            <img src="{{ asset('theme/img/icon/cta-icon.png')}}" alt="icon">
                        </div>
                        <h3 class="title">
                            Let's Try! Get This Free Support Solution?<span
                                >Digital Conferanc Great Speak Call:
                                <a href="tel:99955122422441">(99) 955122422441</a></span
                            >
                        </h3>
                    </div>
                    <div class="cta-btn">
                        <a href="contact.html" class="mt-primary-btn primary-2">Contact Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ cta-section-2 -->

        <section class="project-section pt-100 pb-100">
            <div class="project-container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Projects Now</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Work Gallery Recent Projects</h2>
                </div>
                <div class="project-carousel swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('theme/img/images/project-img-6.png')}}" alt="project">
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="project-details.html">Mobile Application</a> <span>Creative Theme</span>
                                    </h3>
                                    <a href="project-details.html" class="project-btn">
                                        <i class="fa-regular fa-arrow-left-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('theme/img/images/project-img-7.png')}}" alt="project">
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="project-details.html">Process Automation</a> <span>Creative Theme</span>
                                    </h3>
                                    <a href="project-details.html" class="project-btn">
                                        <i class="fa-regular fa-arrow-left-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('theme/img/images/project-img-8.png')}}" alt="project">
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="project-details.html">Content Management</a> <span>Creative Theme</span>
                                    </h3>
                                    <a href="project-details.html" class="project-btn">
                                        <i class="fa-regular fa-arrow-left-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('theme/img/images/project-img-3.png')}}" alt="project">
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="project-details.html">Network Protection</a> <span>Creative Theme</span>
                                    </h3>
                                    <a href="project-details.html" class="project-btn">
                                        <i class="fa-regular fa-arrow-left-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        <section class="solution-section" data-background="{{ asset('theme/img/bg-img/solution-bg.png')}}">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Software Solution</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Design This Services Best Solution</h2>
                </div>
                <div class="solution-tab">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="pills-home-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-home"
                                type="button"
                                role="tab"
                                aria-controls="pills-home"
                                aria-selected="true"
                            >
                                <img src="{{ asset('theme/img/icon/solution-tab-1.png')}}" alt="solution">Team Support
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="pills-profile-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-profile"
                                type="button"
                                role="tab"
                                aria-controls="pills-profile"
                                aria-selected="false"
                            >
                            <img src="{{ asset('theme/img/icon/solution-tab-2.png')}}" alt="solution">Our Conferance
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="pills-contact-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-contact"
                                type="button"
                                role="tab"
                                aria-controls="pills-contact"
                                aria-selected="false"
                            >
                            <img src="{{ asset('theme/img/icon/solution-tab-3.png')}}" alt="solution">Settings Fast
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="row solution-wrap">
                    <div class="col-lg-6">
                        <div class="solution-content-wrap">
                            <div class="solution-content pt-90 pb-90">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="pills-home"
                                        role="tabpanel"
                                        aria-labelledby="pills-home-tab"
                                    >
                                        <div class="solution-header">
                                            <h4 class="title">Softawer Solution:</h4>
                                            <p>
                                                Softewer being able to crank out videos consistently, localize this them
                                                for different regions, and still save resources, time, energy has been a
                                                game change
                                            </p>
                                        </div>
                                        <div class="solution-box">
                                            <img src="{{ asset('theme/img/images/solution-img.jpg')}}" alt="img">
                                            <ul class="solution-list">
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Softewer being able to out videos
                                                    consistently
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Event mangement being able to
                                                    business
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Continually network effective
                                                    bandwidth
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="solution-icon">
                                            <div class="icon"><img src="{{ asset('theme/img/icon/bulb.png')}}" alt="bulb"></div>
                                            <h3 class="title">
                                                Agency Website Service <span>App Design, Website</span>
                                            </h3>
                                        </div>
                                        <a href="about.html" class="mt-primary-btn primary-2">About More</a>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-profile"
                                        role="tabpanel"
                                        aria-labelledby="pills-profile-tab"
                                    >
                                        <div class="solution-header">
                                            <h4 class="title">Softawer Solution:</h4>
                                            <p>
                                                Softewer being able to crank out videos consistently, localize this them
                                                for different regions, and still save resources, time, energy has been a
                                                game change
                                            </p>
                                        </div>
                                        <div class="solution-box">
                                            <img src="{{ asset('theme/img/images/solution-img.jpg')}}" alt="img">
                                            <ul class="solution-list">
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Softewer being able to out videos
                                                    consistently
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Event mangement being able to
                                                    business
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Continually network effective
                                                    bandwidth
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="solution-icon">
                                            <div class="icon"><img src="{{ asset('theme/img/icon/bulb.png')}}" alt="bulb"></div>
                                            <h3 class="title">
                                                Agency Website Service <span>App Design, Website</span>
                                            </h3>
                                        </div>
                                        <a href="about.html" class="mt-primary-btn primary-2">About More</a>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-contact"
                                        role="tabpanel"
                                        aria-labelledby="pills-contact-tab"
                                    >
                                        <div class="solution-header">
                                            <h4 class="title">Softawer Solution:</h4>
                                            <p>
                                                Softewer being able to crank out videos consistently, localize this them
                                                for different regions, and still save resources, time, energy has been a
                                                game change
                                            </p>
                                        </div>
                                        <div class="solution-box">
                                            <img src="{{ asset('theme/img/images/solution-img.jpg')}}" alt="img">
                                            <ul class="solution-list">
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Softewer being able to out videos
                                                    consistently
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Event mangement being able to
                                                    business
                                                </li>
                                                <li>
                                                    <i class="fa-regular fa-plus"></i>Continually network effective
                                                    bandwidth
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="solution-icon">
                                            <div class="icon"><img src="{{ asset('theme/img/icon/bulb.png')}}" alt="bulb"></div>
                                            <h3 class="title">
                                                Agency Website Service <span>App Design, Website</span>
                                            </h3>
                                        </div>
                                        <a href="about.html" class="mt-primary-btn primary-2">About More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="solution-counter">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="counter-item">
                                            <div class="shape">
                                                <img src="{{ asset('theme/img/shapes/counter-shape.png')}}" alt="shape">
                                            </div>
                                            <div class="counter-icon"><img src="{{ asset('theme/img/icon/counter-1.png')}}" alt="icon"></div>
                                            <h3 class="title"><span class="odometer" data-count="56">0</span>k+</h3>
                                            <p>Happy Clients</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="counter-item" style="--mt-color-theme-secondary: #a6e155">
                                            <div class="shape">
                                                <img src="{{ asset('theme/img/shapes/counter-shape.png')}}" alt="shape">
                                            </div>
                                            <div class="counter-icon"><img src="{{ asset('theme/img/icon/counter-2.png')}}" alt="icon"></div>
                                            <h3 class="title"><span class="odometer" data-count="186">0</span>+</h3>
                                            <p>Business Award</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="solution-img">
                            <img src="{{ asset('theme/img/images/solution-img-2.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ solution-section -->

        <section class="pricing-section pt-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Pricing Plan</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Pricing is a Process of Fixing</h2>
                </div>
                <div class="swiper pricing-carousel">
                    <div class="swiper-wrapper swiper-container">
                        <div class="swiper-slide">
                            <div class="pricing-item">
                                <h4 class="sub-title">Basic Plan</h4>
                                <h3 class="title">$100 <span>/Mo</span></h3>
                                <ul class="pricing-list">
                                    <li><i class="fa-light fa-circle-check"></i>Analyzer Solution</li>
                                    <li><i class="fa-regular fa-xmark"></i>Team Best Support</li>
                                    <li><i class="fa-light fa-circle-check"></i>Solution Process</li>
                                    <li><i class="fa-light fa-circle-check"></i>No Risk Garrunty</li>
                                </ul>
                                <a href="#" class="mt-primary-btn primary-2">Get Started</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pricing-item item-2" style="--mt-color-theme-secondary: #3751ea">
                                <h4 class="sub-title">Business Plan</h4>
                                <h3 class="title">$150 <span>/Mo</span></h3>
                                <ul class="pricing-list">
                                    <li><i class="fa-light fa-circle-check"></i>Analyzer Solution</li>
                                    <li><i class="fa-regular fa-xmark"></i>Team Best Support</li>
                                    <li><i class="fa-light fa-circle-check"></i>Solution Process</li>
                                    <li><i class="fa-light fa-circle-check"></i>No Risk Garrunty</li>
                                </ul>
                                <a href="#" class="mt-primary-btn primary-2">Get Started</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pricing-item" style="--mt-color-theme-secondary: #ff8c91">
                                <h4 class="sub-title">Enterprise Plan</h4>
                                <h3 class="title">$200 <span>/Mo</span></h3>
                                <ul class="pricing-list">
                                    <li><i class="fa-light fa-circle-check"></i>Analyzer Solution</li>
                                    <li><i class="fa-regular fa-xmark"></i>Team Best Support</li>
                                    <li><i class="fa-light fa-circle-check"></i>Solution Process</li>
                                    <li><i class="fa-light fa-circle-check"></i>No Risk Garrunty</li>
                                </ul>
                                <a href="#" class="mt-primary-btn primary-2">Get Started</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="pricing-item" style="--mt-color-theme-secondary: #a6e155">
                                <h4 class="sub-title">Advance Plan</h4>
                                <h3 class="title">$250 <span>/Mo</span></h3>
                                <ul class="pricing-list">
                                    <li><i class="fa-light fa-circle-check"></i>Analyzer Solution</li>
                                    <li><i class="fa-regular fa-xmark"></i>Team Best Support</li>
                                    <li><i class="fa-light fa-circle-check"></i>Solution Process</li>
                                    <li><i class="fa-light fa-circle-check"></i>No Risk Garrunty</li>
                                </ul>
                                <a href="#" class="mt-primary-btn primary-2">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ./ pricing-section -->

        <section class="contact-section bg-dark-1 pt-100 pb-100">
            <div class="contact-shapes">
                <div class="shape headphone"><img src="{{ asset('theme/img/icon/headphone.png')}}" alt="img"></div>
                <div class="shape bulb"><img src="{{ asset('theme/img/icon/bulb-2.png" alt="img')}}"></div>
                <div class="shape bg top-shape" data-background="{{ asset('theme/img/shapes/contact-shape-2.png')}}"></div>
                <div class="shape bg bottom-shape" data-background="{{ asset('theme/img/shapes/contact-shape-1.png')}}"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-thumb wow fade-in-left" data-wow-delay="500ms">
                            <img src="{{ asset('theme/img/images/contact-img.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <div class="section-heading">
                                <h4 class="sub-heading bg-white wow fade-in-right" data-wow-delay="300ms">Our Contact Us</h4>
                                <h2 class="section-title wow fade-in-right" data-wow-delay="400ms">Have Any Contact! Say The People Trust Us</h2>
                                <p class=" wow fade-in-right" data-wow-delay="500ms">Business tailored it design, management & support services business agency elit, sed do eiusmod tempor. </p>
                            </div>
                            <div class="form-wrap wow fade-in-right" data-wow-delay="600ms">
                                <form action="#" method="post" id="ajax_contact" class="form-horizontal">
                                    <div class="form-group colum-row row">
                                        <div class="col-sm-6">
                                            <input
                                                type="text"
                                                id="fullname"
                                                name="fullname"
                                                class="form-control"
                                                placeholder="Your Name"
                                           >
                                        </div>
                                        <div class="col-sm-6">
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Your Email"
                                           >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <textarea
                                                id="message"
                                                name="message"
                                                cols="30"
                                                rows="5"
                                                class="form-control address"
                                                placeholder="Message"
                                            ></textarea>
                                        </div>
                                    </div>
                                    <button id="submit" class="mt-primary-btn primary-2" type="submit">
                                        Send Request
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ contact-section -->

        <section class="blog-section blog-2 pb-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our News & Blogs</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Largest The News & Blog</h2>
                </div>
                <div class="blog-carousel swiper">
                    <div class="swiper-wrapper swiper-container">
                        <div class="swiper-slide">
                            <div class="post-card card-2">
                                <div class="post-content-wrap">
                                    <div class="post-content">
                                        <div class="post-author"><img src="{{ asset('theme/img/blog/blog-author-1.png')}}" alt="author"></div>
                                        <a href="#" class="category">Solution</a>
                                        <ul class="post-meta">
                                            <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                        </ul>
                                        <h3 class="title">
                                            <a href="blog-details.html"
                                                >How digital marketing can increase your profit!</a
                                            >
                                        </h3>
                                        <p class="desc">
                                            We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                        </p>
                                        <h2 class="news">News</h2>
                                    </div>
                                    <div class="post-review-wrap">
                                        <a href="blog-details.html"
                                            >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="post-card card-2 item-2">
                                <div class="post-content-wrap">
                                    <div class="post-content">
                                        <div class="post-author"><img src="{{ asset('theme/img/blog/blog-author-2.png')}}" alt="author"></div>
                                        <a href="#" class="category">Solution</a>
                                        <ul class="post-meta">
                                            <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                        </ul>
                                        <h3 class="title">
                                            <a href="blog-details.html"
                                                >Simple guidance for you in web development.</a
                                            >
                                        </h3>
                                        <p class="desc">
                                            We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                        </p>
                                        <h2 class="news">News</h2>
                                    </div>
                                    <div class="post-review-wrap">
                                        <a href="blog-details.html"
                                            >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="post-card card-2 item-3">
                                <div class="post-content-wrap">
                                    <div class="post-content">
                                        <div class="post-author"><img src="{{ asset('theme/img/blog/blog-author-3.png')}}" alt="author"></div>
                                        <a href="#" class="category">Solution</a>
                                        <ul class="post-meta">
                                            <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                        </ul>
                                        <h3 class="title">
                                            <a href="blog-details.html"
                                                >Get Latest Updates Best Blog This Business</a
                                            >
                                        </h3>
                                        <p class="desc">
                                            We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                        </p>
                                        <h2 class="news">News</h2>
                                    </div>
                                    <div class="post-review-wrap">
                                        <a href="blog-details.html"
                                            >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Dots -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ./ blog-section -->

        

        <div id="scrollup">
            <button id="scroll-top" class="scroll-to-top"><i class="fa-regular fa-arrow-up-long"></i></button>
        </div>
        <!--scrollup-->

        <!-- JS here -->
        <script src="{{ asset('theme/js/vendor/jquary-3.6.0.min.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/bootstrap-bundle.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/imagesloaded-pkgd.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/waypoints.min.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/venobox.min.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/smooth-scroll.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/odometer.min.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/meanmenu.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/jquery.isotope.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/wow.min.js')}}"></script>
        <script src="{{ asset('theme/js/vendor/swiper.min.js')}}"></script>
        <script src="{{ asset('theme/js/ajax-form.js')}}"></script>
        <script src="{{ asset('theme/js/main.js')}}"></script>
 @endsection
