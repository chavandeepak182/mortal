@extends('frontend.layouts.header')
@section('title', "Authorized distributors & Suppliers of Burner Controls")
@section('keywords', "Authorized distributors & Suppliers of Burner Controls, Flame Monitoring System, Gas Train Components, Gas Train Burners.")

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

        <section class="hero-section" data-background="{{ asset('theme/img/bg-img/hero-bg.png')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content section-heading">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Software & IT Solutions !</h4>
                            <h1 class="section-title wow fade-in-bottom" data-wow-delay="400ms">We Are Best Software It Solution <span>Business.</span></h1>
                            <p class=" wow fade-in-bottom" data-wow-delay="500ms">
                                We are tailored it design, management & support services business softwaer elit, sed do
                                eiusmod tempor.
                            </p>
                            <div class="hero-box wow fade-in-bottom" data-wow-delay="600ms">
                                <img src="{{ asset('theme/img/images/hero-box-img.jpg')}}" alt="hero">
                                <ul>
                                    <li><i class="fa-sharp fa-solid fa-circle-check"></i>We provide a revolutionary</li>
                                    <li><i class="fa-sharp fa-solid fa-circle-check"></i>This man for it solution.</li>
                                </ul>
                            </div>
                            <div class="hero-btn-wrap wow fade-in-bottom" data-wow-delay="700ms">
                                <a href="contact.html" class="mt-primary-btn primary-2">Contact Now</a>
                                <div class="video-btn">
                                    <a
                                        class="video-popup"
                                        data-autoplay="true"
                                        data-vbtype="video"
                                        href="https://youtu.be/iyd7qUH3oH0">
                                        <div class="play-btn">
                                            <img src="{{ asset('theme/img/icon/hero-play.png')}}" alt="play">
                                            <div class="ripple-2"></div>
                                        </div>
                                        <span>Watch Video</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <img class="hero-shape shape-1" src="{{ asset('theme/img/shapes/hero-anim-1.png')}}" alt="shapes">
                <img class="hero-shape shape-2" src="{{ asset('theme/img/shapes/hero-anim-2.png')}}" alt="shapes">
                <img class="hero-shape shape-3" src="{{ asset('theme/img/shapes/hero-anim-3.png')}}" alt="shapes">
            </div>
            <div class="hero-img-wrap">
                <img src="{{ asset('theme/img/shapes/hero-img-shape.png')}}" class="hero-shape" alt="shape">
                <img src="{{ asset('theme/img/shapes/hero-circle.png')}}" class="hero-circle" alt="circle">
                <div class="hero-img-inner">
                    <img src="{{ asset('theme/img/images/hero-img.png')}}" alt="hero">
                </div>
            </div>
        </section>
        <!-- ./ hero-section -->

        <div class="sponsor-section pt-100 pb-100">
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

        <section class="about-section pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img wow slide-in-left" data-wow-delay="500ms">
                            <img src="{{ asset('theme/img/images/about-img-1.jpg')}}" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-heading mb-30">
                                <h4 class="sub-heading wow fade-in-right" data-wow-delay="300ms">Our About Us</h4>
                                <h3 class="section-title wow fade-in-right" data-wow-delay="400ms">Complete Managing About Software Business</h3>
                                <p class="wow fade-in-right" data-wow-delay="500ms">
                                    Softewer being able to crank out videos consistently, localize this them for
                                    different regions, and still save resources, time, energy has been a game change
                                </p>
                            </div>
                            <div class="about-tab wow fade-in-right" data-wow-delay="600ms">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link active"
                                            id="home-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#home"
                                            type="button"
                                            role="tab"
                                            aria-controls="home"
                                            aria-selected="true"
                                        >
                                            Our Solution
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link"
                                            id="profile-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#profile"
                                            type="button"
                                            role="tab"
                                            aria-controls="profile"
                                            aria-selected="false"
                                        >
                                            Our Mission
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link"
                                            id="contact-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#contact"
                                            type="button"
                                            role="tab"
                                            aria-controls="contact"
                                            aria-selected="false"
                                        >
                                            Support
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div
                                        class="tab-pane fade show active"
                                        id="home"
                                        role="tabpanel"
                                        aria-labelledby="home-tab"
                                    >
                                        <p>
                                            Softewer being able to crank out videos consistently, this them for
                                            different regions, and still senergy.
                                        </p>
                                        <ul class="about-list">
                                            <li><i class="fa-sharp fa-solid fa-circle-check"></i>We a revolutionary</li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>This softewer solution.
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="profile"
                                        role="tabpanel"
                                        aria-labelledby="profile-tab"
                                    >
                                        <p>
                                            Softewer being able to crank out videos consistently, this them for
                                            different regions, and still senergy.
                                        </p>
                                        <ul class="about-list">
                                            <li><i class="fa-sharp fa-solid fa-circle-check"></i>We a revolutionary</li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>This softewer solution.
                                            </li>
                                        </ul>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="contact"
                                        role="tabpanel"
                                        aria-labelledby="contact-tab"
                                    >
                                        <p>
                                            Softewer being able to crank out videos consistently, this them for
                                            different regions, and still senergy.
                                        </p>
                                        <ul class="about-list">
                                            <li><i class="fa-sharp fa-solid fa-circle-check"></i>We a revolutionary</li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>This softewer solution.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="about-author wow fade-in-right" data-wow-delay="700ms">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('theme/img/images/about-author.jpg')}}" alt="author">
                                    </div>
                                    <h3 class="name">Porata Marat <span>Co-Founder</span></h3>
                                </div>
                                <img class="sign" src="{{ asset('theme/img/images/sign.png')}}" alt="sign">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

        <section class="counter-section pb-0">
            <div class="bg-color"></div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item wow fade-in-bottom" data-wow-delay="300ms">
                            <div class="shape"><img src="{{ asset('theme/img/shapes/counter-shape.png')}}" alt="shape"></div>
                            <div class="counter-icon"><img src="{{ asset('theme/img/icon/counter-1.png')}}" alt="counter"></div>
                            <h3 class="title"><span class="odometer" data-count="56">0</span>k+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item wow fade-in-bottom" data-wow-delay="400ms" style="--mt-color-theme-secondary: #f792ff">
                            <div class="shape"><img src="{{ asset('theme/img/shapes/counter-shape.png')}}" alt="shape"></div>
                            <div class="counter-icon"><img src="{{ asset('theme/img/icon/counter-2.png')}}" alt="counter"></div>
                            <h3 class="title"><span class="odometer" data-count="322">0</span>k</h3>
                            <p>Customer Ratings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item wow fade-in-bottom" data-wow-delay="500ms" style="--mt-color-theme-secondary: #ff8c91">
                            <div class="shape"><img src="{{ asset('theme/img/shapes/counter-shape.png')}}" alt="shape"></div>
                            <div class="counter-icon"><img src="{{ asset('theme/img/icon/counter-3.png')}}" alt="counter"></div>
                            <h3 class="title"><span class="odometer" data-count="79">0</span>k+</h3>
                            <p>Project Delivered</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fade-in-bottom" data-wow-delay="600ms">
                        <div class="counter-item" style="--mt-color-theme-secondary: #a6e155">
                            <div class="shape"><img src="{{ asset('theme/img/shapes/counter-shape.png')}}" alt="shape"></div>
                            <div class="counter-icon"><img src="{{ asset('theme/img/icon/counter-4.png')}}" alt="counter"></div>
                            <h3 class="title"><span class="odometer" data-count="186">0</span>+</h3>
                            <p>Business Award</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ counter-section -->

        <section class="service-section bg-grey pt-100 pb-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading bg-white wow fade-in-bottom" data-wow-delay="400ms">Our Flexibility Service</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="500ms">Our Best Service Solution</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms" style="--mt-color-theme-primary: #ffc330">
                            <div class="shape">
                                <svg
                                    style="
                                        shape-rendering: geometricPrecision;
                                        text-rendering: geometricPrecision;
                                        image-rendering: optimizeQuality;
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    "
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <g>
                                        <path
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z">
                                       </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme/img/icon/service-1.png')}}" alt="service">
                            </div>
                            <h3 class="title"><a href="service-details.html">Online Documentation</a></h3>
                            <p>
                                Softewer business it before tab providet Payroll & Worksite Servicesfull for applica
                                best agency for business solution.
                            </p>
                            <a href="service-details.html" class="read-more"
                                >Read More<i class="fa-solid fa-circle-chevron-right"></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item item-2 text-center wow fade-in-bottom" data-wow-delay="500ms">
                            <div class="shape">
                                <svg
                                    style="
                                        shape-rendering: geometricPrecision;
                                        text-rendering: geometricPrecision;
                                        image-rendering: optimizeQuality;
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    "
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <g>
                                        <path
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z">
                                       </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme/img/icon/service-2.png')}}" alt="service">
                            </div>
                            <h3 class="title"><a href="service-details.html">Web Development</a></h3>
                            <p>
                                Softewer business it before tab providet Payroll & Worksite Servicesfull for applica
                                best agency for business solution.
                            </p>
                            <a href="service-details.html" class="read-more"
                                >Read More<i class="fa-solid fa-circle-chevron-right"></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms" style="--mt-color-theme-primary: #ff8c91">
                            <div class="shape">
                                <svg
                                    style="
                                        shape-rendering: geometricPrecision;
                                        text-rendering: geometricPrecision;
                                        image-rendering: optimizeQuality;
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    "
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <g>
                                        <path
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z">
                                       </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme/img/icon/service-3.png')}}" alt="service">
                            </div>
                            <h3 class="title"><a href="service-details.html">Business To Change</a></h3>
                            <p>
                                Softewer business it before tab providet Payroll & Worksite Servicesfull for applica
                                best agency for business solution.
                            </p>
                            <a href="service-details.html" class="read-more"
                                >Read More<i class="fa-solid fa-circle-chevron-right"></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="400ms" style="--mt-color-theme-primary: #a6e155">
                            <div class="shape">
                                <svg
                                    style="
                                        shape-rendering: geometricPrecision;
                                        text-rendering: geometricPrecision;
                                        image-rendering: optimizeQuality;
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    "
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <g>
                                        <path
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z">
                                       </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme/img/icon/service-4.png')}}" alt="service">
                            </div>
                            <h3 class="title"><a href="service-details.html">Digital This Agency</a></h3>
                            <p>
                                Softewer business it before tab providet Payroll & Worksite Servicesfull for applica
                                best agency for business solution.
                            </p>
                            <a href="service-details.html" class="read-more"
                                >Read More<i class="fa-solid fa-circle-chevron-right"></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="500ms" style="--mt-color-theme-primary: #f792ff">
                            <div class="shape">
                                <svg
                                    style="
                                        shape-rendering: geometricPrecision;
                                        text-rendering: geometricPrecision;
                                        image-rendering: optimizeQuality;
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    "
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <g>
                                        <path
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z">
                                       </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme/img/icon/service-5.png')}}" alt="service">
                            </div>
                            <h3 class="title"><a href="service-details.html">Business Marketing</a></h3>
                            <p>
                                Softewer business it before tab providet Payroll & Worksite Servicesfull for applica
                                best agency for business solution.
                            </p>
                            <a href="service-details.html" class="read-more"
                                >Read More<i class="fa-solid fa-circle-chevron-right"></i
                            ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item text-center wow fade-in-bottom" data-wow-delay="600ms" style="--mt-color-theme-primary: #7cf1ea">
                            <div class="shape">
                                <svg
                                    style="
                                        shape-rendering: geometricPrecision;
                                        text-rendering: geometricPrecision;
                                        image-rendering: optimizeQuality;
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    "
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <g>
                                        <path
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z">
                                       </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme/img/icon/service-6.png')}}" alt="service">
                            </div>
                            <h3 class="title"><a href="service-details.html">Community Forums</a></h3>
                            <p>
                                Softewer business it before tab providet Payroll & Worksite Servicesfull for applica
                                best agency for business solution.
                            </p>
                            <a href="service-details.html" class="read-more"
                                >Read More<i class="fa-solid fa-circle-chevron-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-section -->

        <section class="skill-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="skill-content pt-100 pb-100">
                            <div class="section-heading">
                                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="300ms">Our Skill Now</h4>
                                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">This Digital Solutions Skill Service Software</h2>
                                <p class="wow fade-in-bottom" data-wow-delay="500ms">
                                    Softewer being able to crank out videos consistently, localize this them for
                                    different regions, and still save resources, time, energy has been a game change
                                </p>
                            </div>
                            <div class="skills-items wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="skills-item" style="--mt-color-theme-primary: #ffc330">
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
                                <div class="skills-item">
                                    <div class="title-wrap">
                                        <div class="progress-count">
                                            (<span class="odometer" data-count="82"></span>%)
                                        </div>
                                        <h4 class="title">Design</h4>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay="0ms"
                                            data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 82%"
                                        >
                                            <div class="arrow">
                                                <i class="fa-solid fa-triangle"></i><i class="fa-solid fa-triangle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills-item" style="--mt-color-theme-primary: #ff8c91">
                                    <div class="title-wrap">
                                        <div class="progress-count">
                                            (<span class="odometer" data-count="60"></span>%)
                                        </div>
                                        <h4 class="title">It Solution</h4>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay="0ms"
                                            data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 60%"
                                        >
                                            <div class="arrow">
                                                <i class="fa-solid fa-triangle"></i><i class="fa-solid fa-triangle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills-item" style="--mt-color-theme-primary: #a6e155">
                                    <div class="title-wrap">
                                        <div class="progress-count">
                                            (<span class="odometer" data-count="65"></span>%)
                                        </div>
                                        <h4 class="title">Support</h4>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar wow slideInLeft"
                                            data-wow-delay="0ms"
                                            data-wow-duration="2000ms"
                                            role="progressbar"
                                            style="width: 65%"
                                        >
                                            <div class="arrow">
                                                <i class="fa-solid fa-triangle"></i><i class="fa-solid fa-triangle"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-btn-wrap wow fade-in-bottom" data-wow-delay="700ms">
                                <a href="about.html" class="mt-primary-btn primary-2">Skill More</a>
                                <div class="skill-number">
                                    <i class="fa-solid fa-phone"></i>
                                    <div class="numbers">
                                        <a href="tel:+955426535255">+955426535255</a>
                                        <a href="tel:+210154444564">+210154444564</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="man" data-background="{{ asset('theme/img/images/skill-img.png')}}"></div>
        </section>
        <!-- ./ skill-section -->

        <section class="cta-section">
            <div class="cta-wrap" data-background="{{ asset('theme/img/bg-img/cta-bg.jpg')}}">
                <div class="overlay"></div>
                <div class="top-shape"></div>
                <div class="cta-content wow fade-in-bottom" data-wow-delay="300ms">
                    <a
                        class="video-popup video-btn"
                        data-autoplay="true"
                        data-vbtype="video"
                        href="https://youtu.be/iyd7qUH3oH0"
                        ><i class="fa-light fa-circle-play"></i>
                        <div class="ripple"></div>
                    </a>
                    <h3 class="title wow fade-in-bottom" data-wow-delay="400ms">We Can Save Softwere This For Video</h3>
                    <p class="wow fade-in-bottom" data-wow-delay="500ms">
                        Softwere being able to crank out videos consistently, localize this them for different regions,
                        and still save resources, time, energy has been a game change
                    </p>
                    <a href="about.html" class="mt-primary-btn primary-2 wow fade-in-bottom" data-wow-delay="600ms">Video More</a>
                </div>
            </div>
        </section>
        <!-- ./ cta-section -->

        <section class="project-section pt-100 pb-100">
            <div class="project-container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Projects Now</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Work Gallery Recent Projects</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="project-filter text-center">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".design ">Website Design</li>
                            <li data-filter=".develop">Development</li>
                            <li data-filter=".app">App Design</li>
                            <li data-filter=".brand">Branding Design</li>
                        </ul>
                    </div>
                </div>
                <div class="row filter-items">
                    <div class="col-lg-4 col-md-6 single-item design app">
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
                    <div class="col-lg-4 col-md-6 single-item develop brand">
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
                    <div class="col-lg-4 col-md-6 single-item design brand">
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
                    <div class="col-lg-4 col-md-6 single-item develop design">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <img src="{{ asset('theme/img/images/project-img-9.png')}}" alt="project">
                            </div>
                            <div class="project-content">
                                <h3 class="title">
                                    <a href="project-details.html">Information Security</a> <span>Creative Theme</span>
                                </h3>
                                <a href="project-details.html" class="project-btn">
                                    <i class="fa-regular fa-arrow-left-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item app brand">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <img src="{{ asset('theme/img/images/project-img-1.png')}}" alt="project">
                            </div>
                            <div class="project-content">
                                <h3 class="title">
                                    <a href="project-details.html">IT Consultancy</a> <span>Creative Theme</span>
                                </h3>
                                <a href="project-details.html" class="project-btn">
                                    <i class="fa-regular fa-arrow-left-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item app brand">
                        <div class="project-item">
                            <div class="project-thumb">
                                <div class="overlay"></div>
                                <img src="{{ asset('theme/img/images/project-img-2.png')}}" alt="project">
                            </div>
                            <div class="project-content">
                                <h3 class="title">
                                    <a href="project-details.html">Product Development</a> <span>Creative Theme</span>
                                </h3>
                                <a href="project-details.html" class="project-btn">
                                    <i class="fa-regular fa-arrow-left-long"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ project-section -->

        <section class="testimonial-section pt-100 pb-100" data-background="{{ asset('theme/img/bg-img/testi-bg.jpg')}}">
            <div class="overlay"></div>
            <div class="testi-shape" data-background="{{ asset('theme/img/shapes/testi-shape.png')}}"></div>
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our Testimonial Say</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="500ms">What Clients Say Digital Services</h2>
                    <p class="wow fade-in-bottom" data-wow-delay="600ms">
                        Softewer being able to crank out videos consistently, localize this them for different regions,
                        and still save resources, time, energy has been a game change
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="testi-carousel-wrap">
                            <div class="quote-3"><img src="{{ asset('theme/img/icon/quote-3.png')}}" alt="quote"></div>
                            <div class="testi-thumb-wrap">
                                <div class="swiper thumb-carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testi-thumb">
                                                <img src="{{ asset('theme/img/images/testi-author-1.png')}}" alt="testi">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testi-thumb">
                                                <img src="{{ asset('theme/img/images/testi-author-2.png')}}" alt="testi">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testi-thumb">
                                                <img src="{{ asset('theme/img/images/testi-author-3.png')}}" alt="testi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper content-carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="quote"><img src="{{ asset('theme/img/icon/quote.png')}}" alt="quote"></div>
                                            <p>
                                                We are privileged to work with hundreds future what They Say About
                                                businesses, including many of the world’s for best this tobe software,
                                                and this softewer brands.
                                            </p>
                                            <h3 class="author">Karon Metara<span>Founder</span></h3>
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="quote"><img src="{{ asset('theme/img/icon/quote.png')}}" alt="quote"></div>
                                            <p>
                                                We are privileged to work with hundreds future what They Say About
                                                businesses, including many of the world’s for best this tobe software,
                                                and this softewer brands.
                                            </p>
                                            <h3 class="author">David Willey<span>Founder</span></h3>
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="quote"><img src="{{ asset('theme/img/icon/quote.png')}}" alt="quote"></div>
                                            <p>
                                                We are privileged to work with hundreds future what They Say About
                                                businesses, including many of the world’s for best this tobe software,
                                                and this softewer brands.
                                            </p>
                                            <h3 class="author">Henry John <span>Founder</span></h3>
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testi-content">
                                            <div class="quote"><img src="{{ asset('theme/img/icon/quote.png')}}" alt="quote"></div>
                                            <p>
                                                We are privileged to work with hundreds future what They Say About
                                                businesses, including many of the world’s for best this tobe software,
                                                and this softewer brands.
                                            </p>
                                            <h3 class="author">Karon Metara<span>Founder</span></h3>
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ testimonial-section -->

        <section class="about-section-2 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-info">
                            <div class="section-heading">
                                <h4 class="sub-heading wow fade-in-left" data-wow-delay="300ms">Our Choose Us</h4>
                                <h2 class="section-title wow fade-in-left" data-wow-delay="400ms">Digital Solutions Choose Provide This About.</h2>
                                <p class="wow fade-in-left" data-wow-delay="500ms">
                                    Softewer being able to crank out videos consistently, localize this them for
                                    different regions, and still save resources, time, energy has been a game change
                                </p>
                            </div>
                        </div>
                        <div class="about-items">
                            <div class="about-item wow fade-in-left" data-wow-delay="600ms">
                                <div class="about-icon">
                                    <img src="{{ asset('theme/img/icon/about-1.png')}}" alt="icon">
                                </div>
                                <div class="about-item-content">
                                    <h3 class="title">Branding Services <span>Step: 01</span></h3>
                                    <p>Softewer business it before tab providet Payroll & Worksite Servicesfull for</p>
                                </div>
                            </div>
                            <div class="about-item wow fade-in-left" data-wow-delay="700ms" style="--mt-color-theme-secondary: #175cff">
                                <div class="top-shape">
                                    <img src="{{ asset('theme/img/shapes/arrow-bottom.png')}}" alt="arrow">
                                </div>
                                <div class="top-shape shape-2">
                                    <img src="{{ asset('theme/img/shapes/arrow-top.png')}}" alt="arrow">
                                </div>
                                <div class="about-icon">
                                    <img src="{{ asset('theme/img/icon/about-2.png')}}" alt="icon">
                                </div>
                                <div class="about-item-content">
                                    <h3 class="title">Solution Marketing <span>Step: 02</span></h3>
                                    <p>Softewer business it before tab providet Payroll & Worksite Servicesfull for</p>
                                </div>
                            </div>
                            <div class="about-item wow fade-in-left" data-wow-delay="800ms" style="--mt-color-theme-secondary: #ff8c91">
                                <div class="about-icon">
                                    <img src="{{ asset('theme/img/icon/about-3.png')}}" alt="icon">
                                </div>
                                <div class="about-item-content">
                                    <h3 class="title">Get latest update <span>Step: 03</span></h3>
                                    <p>Softewer business it before tab providet Payroll & Worksite Servicesfull for</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <img src="{{ asset('theme/img/images/about-img-2.png')}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section-2 -->

        <section class="call-area">
            <div class="custom-container call-wrap wow fade-in-bottom" data-wow-delay="500ms" data-background="{{ asset('theme/img/bg-img/call-area-bg.jpg')}}">
                <div class="call-icon"><img src="{{ asset('theme/img/shapes/call-icon.png')}}" alt="icon"></div>
                <div class="content-wrap">
                    <h3 class="title">Let's Try! Get Free Support Solution?</h3>
                    <div class="btn-group">
                        <a href="contact.html" class="mt-primary-btn primary-2">Contact With Us</a>
                        <a
                            class="video-popup video-btn"
                            data-autoplay="true"
                            data-vbtype="image"
                            href="https://youtu.be/iyd7qUH3oH0"
                        >
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ call-area  -->

        <section class="blog-section pt-100 pb-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="400ms">Our News & Blogs</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="600ms">Largest The News & Blog</h2>
                </div>
                <div class="blog-carousel-wrap">
                    <div class="blog-carousel swiper">
                        <div class="swiper-wrapper swiper-container">
                            <div class="swiper-slide">
                                <div class="post-card card-1">
                                    <div class="post-thumb">
                                        <img src="{{ asset('theme/img/blog/post-1.jpg')}}" alt="post">
                                        <a href="#" class="category">Solution</a>
                                    </div>
                                    <div class="post-content-wrap">
                                        <div class="post-content">
                                            <ul class="post-meta">
                                                <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                                <li>Comments (02)</li>
                                            </ul>
                                            <h3 class="title">
                                                <a href="blog-details.html"
                                                    >Get Latest Updates Best Blog This Business</a
                                                >
                                            </h3>
                                            <p class="desc">
                                                We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                            </p>
                                        </div>
                                        <div class="post-review-wrap">
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>(05)</span></li>
                                            </ul>
                                            <a href="blog-details.html"
                                                >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{ asset('theme/img/blog/post-2.jpg')}}" alt="post">
                                        <a href="#" class="category">Solution</a>
                                    </div>
                                    <div class="post-content-wrap">
                                        <div class="post-content">
                                            <ul class="post-meta">
                                                <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                                <li>Comments (02)</li>
                                            </ul>
                                            <h3 class="title">
                                                <a href="blog-details.html"
                                                    >Solution This Business For is Marketing Blog</a
                                                >
                                            </h3>
                                            <p class="desc">
                                                We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                            </p>
                                        </div>
                                        <div class="post-review-wrap">
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>(05)</span></li>
                                            </ul>
                                            <a href="blog-details.html"
                                                >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{ asset('theme/img/blog/post-3.jpg')}}" alt="post">
                                        <a href="#" class="category bg-white">Support</a>
                                    </div>
                                    <div class="post-content-wrap">
                                        <div class="post-content">
                                            <ul class="post-meta">
                                                <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                                <li>Comments (02)</li>
                                            </ul>
                                            <h3 class="title">
                                                <a href="blog-details.html"
                                                    >We Should be Descriptive This Business</a
                                                >
                                            </h3>
                                            <p class="desc">
                                                We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                            </p>
                                        </div>
                                        <div class="post-review-wrap">
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>(05)</span></li>
                                            </ul>
                                            <a href="blog-details.html"
                                                >Read More <i class="fa-solid fa-circle-chevron-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{ asset('theme/img/blog/post-4.jpg')}}" alt="post">
                                        <a href="#" class="category">Solution</a>
                                    </div>
                                    <div class="post-content-wrap">
                                        <div class="post-content">
                                            <ul class="post-meta">
                                                <li>By: <a href="#">Admin, </a>May 02, 2024</li>
                                                <li>Comments (02)</li>
                                            </ul>
                                            <h3 class="title">
                                                <a href="blog-details.html"
                                                    >How digital marketing can increase your profit!</a
                                                >
                                            </h3>
                                            <p class="desc">
                                                We business standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                            </p>
                                        </div>
                                        <div class="post-review-wrap">
                                            <ul class="review">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><span>(05)</span></li>
                                            </ul>
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
            </div>
        </section>
        <!-- ./ blog-section -->

        

        <div id="scrollup">
            <button id="scroll-top" class="scroll-to-top"><i class="fa-regular fa-arrow-up-long"></i></button>
        </div>
@endsection       