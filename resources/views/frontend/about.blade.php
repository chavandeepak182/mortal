@extends('frontend.layouts.header')
@section('title', "Website & Mobile App Developem Company")
@section('description', "")
@section('keywords', "")

@section('content')
<section class="page-header bg-grey" data-background="{{ asset('theme') }}/img/bg-img/page-header-bg.png">
    <div class="shapes">
        <div class="shape shape-1"><img src="{{ asset('theme') }}/img/shapes/page-header-shape-1.png" alt=""></div>
        <div class="shape shape-2"><img src="{{ asset('theme') }}/img/shapes/page-header-shape-2.png" alt=""></div>
        <div class="shape shape-3"><img src="{{ asset('theme') }}/img/shapes/page-header-shape-3.png" alt=""></div>
    </div>
    <div class="custom-container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="page-header-content">
                    <h1 class="title">About VajraTechne</h1>
                    <h4 class="sub-title"><a href="{{ url('/') }}">Home </a><a href="about.html" class="inner-page">/ About Us</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ Page Header -->

        <section class="about-section bd-bottom pt-100 pb-100">
            <div class="about-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-2 about-page md-pb-50">
                            <div class="about-items">
                                <div class="shape expression">
                                    <h3 class="title"><span class="odometer" data-count="29">0</span>+</h3>
                                    <span class="challange">Expressions Challenge</span>
                                </div>
                                <div class="shape shape-1">
                                    <img src="{{ asset('theme') }}/img/shapes/about-img-shape-3.png" alt="shape" />
                                </div>
                                <div class="shape shape-2">
                                    <div class="about-counter-wrap">
                                        <i class="fa-sharp fa-light fa-circle-check"></i>
                                        <div class="about-counter">
                                            <h3 class="title"><span class="odometer" data-count="2683">0</span>k+</h3>
                                            <span class="project">Complete Projects</span>
                                        </div>
                                        <div class="author-img">
                                            <img src="{{ asset('theme') }}/img/images/about-author-2.jpg" alt="author" />
                                        </div>
                                    </div>
                                </div>
                                <div class="shape shape-3">
                                    <img src="{{ asset('theme') }}/img/shapes/about-img-shape-4.jpg" alt="shape" />
                                </div>
                            </div>
                            <img class="main" src="{{ asset('theme') }}/img/images/about-img-8.png" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content about-page">
                            <div class="section-heading mb-30">
                                <h4 class="sub-heading">About Us</h4>
                                <h3 class="section-title">Innovative Web/App Solutions Tailored for You</h3>
                                <p>At <strong>VajraTechne</strong>, we specialize in crafting cutting-edge web and app solutions designed to meet your unique business needs. Whether you’re a startup looking to establish an online presence or an established company aiming to scale, our innovative approaches ensure results that exceed expectations. We don’t just build websites and apps; we create tailored solutions that drive growth, enhance engagement, and empower your business to thrive in the digital era.</p>
                            </div>

                            <div class="about-tab">
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
                                        <p>Our expert team combines creativity, technology, and strategic insights to deliver seamless, user-friendly digital experiences.</p>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="profile"
                                        role="tabpanel"
                                        aria-labelledby="profile-tab"
                                    >
                                        <p>From responsive websites to intuitive mobile apps, we prioritize functionality, aesthetics, and performance to help you stand out in a competitive market.</p>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="contact"
                                        role="tabpanel"
                                        aria-labelledby="contact-tab"
                                    >
                                        <p>Partner with us to turn your vision into reality, and let’s build solutions that truly resonate with your audience. At <strong>VajraTechne</strong>, innovation meets excellence!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="about-author">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('theme') }}/img/images/about-author.jpg" alt="author" />
                                    </div>
                                    <h3 class="name">Porata Marat <span>Co-Founder</span></h3>
                                </div>
                                <img class="sign" src="{{ asset('theme') }}/img/images/sign.png" alt="sign" />
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

        <section class="sponsor-section pt-100 pb-100">
            <div class="container">
                <div class="sponsor-carousel swiper">
                    <div class="swiper-wrapper swiper-container">
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme') }}/img/sponsor/sponsor-1.png" alt="sponsor" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme') }}/img/sponsor/sponsor-2.png" alt="sponsor" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme') }}/img/sponsor/sponsor-3.png" alt="sponsor" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme') }}/img/sponsor/sponsor-4.png" alt="sponsor" /></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor-item">
                                <a href="#"><img src="{{ asset('theme') }}/img/sponsor/sponsor-5.png" alt="sponsor" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ sponsor-section -->

        <section class="service-section bg-grey pt-100 pb-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading bg-white">Our Flexibility Service</h4>
                    <h2 class="section-title">Our Best Service Solution</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item text-center" style="--mt-color-theme-primary: #ffc330">
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
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <i class="fa-solid fa-chart-pie-simple" style="font-size: 45px;"></i>
                            </div>
                            <h3 class="title"><a>Web Development</a></h3>
                            <p>We offer expert services for responsive, high-performing, and user-friendly websites.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item item-2 text-center">
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
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme') }}/img/icon/service-2.png" alt="service">
                            </div>
                            <h3 class="title"><a>Digital Marketing</a></h3>
                            <p>We provide result-driven digital marketing services to boost your online presence and drive growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item text-center" style="--mt-color-theme-primary: #ff8c91">
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
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme') }}/img/icon/service-3.png" alt="service">
                            </div>
                            <h3 class="title"><a>App Development</a></h3>
                            <p>We craft high-performance iOS and Android mobile apps customized to meet your business needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item text-center" style="--mt-color-theme-primary: #a6e155">
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
                                            d="M 30.5,-0.5 C 35.8333,-0.5 41.1667,-0.5 46.5,-0.5C 46.5,4.5 46.5,9.5 46.5,14.5C 51.8333,14.5 57.1667,14.5 62.5,14.5C 62.5,19.8333 62.5,25.1667 62.5,30.5C 67.5,30.5 72.5,30.5 77.5,30.5C 77.5,35.8333 77.5,41.1667 77.5,46.5C 72.5,46.5 67.5,46.5 62.5,46.5C 62.5,51.8333 62.5,57.1667 62.5,62.5C 57.1667,62.5 51.8333,62.5 46.5,62.5C 46.5,67.5 46.5,72.5 46.5,77.5C 41.1667,77.5 35.8333,77.5 30.5,77.5C 30.5,72.5 30.5,67.5 30.5,62.5C 25.1667,62.5 19.8333,62.5 14.5,62.5C 14.5,57.1667 14.5,51.8333 14.5,46.5C 9.5,46.5 4.5,46.5 -0.5,46.5C -0.5,41.1667 -0.5,35.8333 -0.5,30.5C 4.5,30.5 9.5,30.5 14.5,30.5C 14.5,25.1667 14.5,19.8333 14.5,14.5C 19.8333,14.5 25.1667,14.5 30.5,14.5C 30.5,9.5 30.5,4.5 30.5,-0.5 Z M 33.5,1.5 C 36.8333,1.5 40.1667,1.5 43.5,1.5C 43.5,5.16667 43.5,8.83333 43.5,12.5C 40.1667,12.5 36.8333,12.5 33.5,12.5C 33.5,8.83333 33.5,5.16667 33.5,1.5 Z M 31.5,15.5 C 36.1667,15.5 40.8333,15.5 45.5,15.5C 45.5,20.5 45.5,25.5 45.5,30.5C 40.8333,30.5 36.1667,30.5 31.5,30.5C 31.5,25.5 31.5,20.5 31.5,15.5 Z M 17.5,17.5 C 21.1667,17.5 24.8333,17.5 28.5,17.5C 28.5,21.1667 28.5,24.8333 28.5,28.5C 24.8333,28.5 21.1667,28.5 17.5,28.5C 17.5,24.8333 17.5,21.1667 17.5,17.5 Z M 48.5,17.5 C 52.1667,17.5 55.8333,17.5 59.5,17.5C 59.5,21.1667 59.5,24.8333 59.5,28.5C 55.8333,28.5 52.1667,28.5 48.5,28.5C 48.5,24.8333 48.5,21.1667 48.5,17.5 Z M 15.5,31.5 C 20.5,31.5 25.5,31.5 30.5,31.5C 30.5,36.1667 30.5,40.8333 30.5,45.5C 25.5,45.5 20.5,45.5 15.5,45.5C 15.5,40.8333 15.5,36.1667 15.5,31.5 Z M 46.5,31.5 C 51.5,31.5 56.5,31.5 61.5,31.5C 61.5,36.1667 61.5,40.8333 61.5,45.5C 56.5,45.5 51.5,45.5 46.5,45.5C 46.5,40.8333 46.5,36.1667 46.5,31.5 Z M 1.5,33.5 C 5.16667,33.5 8.83333,33.5 12.5,33.5C 12.5,36.8333 12.5,40.1667 12.5,43.5C 8.83333,43.5 5.16667,43.5 1.5,43.5C 1.5,40.1667 1.5,36.8333 1.5,33.5 Z M 33.5,33.5 C 36.8333,33.5 40.1667,33.5 43.5,33.5C 43.5,36.8333 43.5,40.1667 43.5,43.5C 40.1667,43.5 36.8333,43.5 33.5,43.5C 33.5,40.1667 33.5,36.8333 33.5,33.5 Z M 64.5,33.5 C 68.1667,33.5 71.8333,33.5 75.5,33.5C 75.5,36.8333 75.5,40.1667 75.5,43.5C 71.8333,43.5 68.1667,43.5 64.5,43.5C 64.5,40.1667 64.5,36.8333 64.5,33.5 Z M 31.5,46.5 C 36.1667,46.5 40.8333,46.5 45.5,46.5C 45.5,51.5 45.5,56.5 45.5,61.5C 40.8333,61.5 36.1667,61.5 31.5,61.5C 31.5,56.5 31.5,51.5 31.5,46.5 Z M 17.5,48.5 C 21.1667,48.5 24.8333,48.5 28.5,48.5C 28.5,52.1667 28.5,55.8333 28.5,59.5C 24.8333,59.5 21.1667,59.5 17.5,59.5C 17.5,55.8333 17.5,52.1667 17.5,48.5 Z M 48.5,48.5 C 52.1667,48.5 55.8333,48.5 59.5,48.5C 59.5,52.1667 59.5,55.8333 59.5,59.5C 55.8333,59.5 52.1667,59.5 48.5,59.5C 48.5,55.8333 48.5,52.1667 48.5,48.5 Z M 33.5,64.5 C 36.8333,64.5 40.1667,64.5 43.5,64.5C 43.5,68.1667 43.5,71.8333 43.5,75.5C 40.1667,75.5 36.8333,75.5 33.5,75.5C 33.5,71.8333 33.5,68.1667 33.5,64.5 Z"
                                        />
                                    </g>
                                </svg>
                            </div>
                            <div class="service-icon">
                                <img src="{{ asset('theme') }}/img/icon/service-1.png" alt="service">
                            </div>
                            <h3 class="title"><a>Graphics & Animations</a></h3>
                            <p>Designing eye-catching visuals that communicate your brand’s story with creativity and precision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-section -->

        <section class="faq-section pt-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading">Our Faq Now</h4>
                    <h2 class="section-title">General Ask For The Questions</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-img wow fade-in-left" data-wow-delay="400ms">
                            <img src="{{ asset('theme') }}/img/images/faq-img.png" alt="faq">
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
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>What is digital marketing, and why is it important? <span class="number">01</span>
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
                                            <p>Digital marketing involves using online platforms and tools to promote businesses, products, or services. It’s essential because it allows you to reach a broader audience, target specific demographics, and measure performance effectively.</p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme') }}/img/images/faq-body-img.jpg" alt="faq">
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
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> What services do you offer? <span class="number">02</span>
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
                                            <p>We provide a range of services, including Website & Mobile App Development, SEO (Search Engine Optimization), social media management, PPC (Pay-Per-Click) advertising, content marketing, email marketing, web design, and analytics.</p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme') }}/img/images/faq-body-img.jpg" alt="faq">
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
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Do you work with businesses in all industries? <span class="number">03</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <p>Yes, we cater to businesses across various sectors, including e-commerce, healthcare, real estate, education, and more.</p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme') }}/img/images/faq-body-img.jpg" alt="faq">
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
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>How soon can we get started? <span class="number">04</span>
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
                                            <p>After an initial consultation and agreement, we can start within 1-2 weeks. Our pricing depends on the scope of services and project duration. We offer customizable packages to fit various budgets.</p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme') }}/img/images/faq-body-img.jpg" alt="faq">
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
                                            <i class="fa-sharp fa-solid fa-circle-check"></i> Can you train my team in digital marketing? <span class="number">05</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <p>Yes, we offer training sessions to help your in-house team understand and implement digital marketing strategies.</p>
                                            <div class="body-img">
                                                <img src="{{ asset('theme') }}/img/images/faq-body-img.jpg" alt="faq">
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

        <section class="team-section-2 pt-100 pb-100 about-team">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading">Our Team Member</h4>
                    <h2 class="section-title">Meet The Team Member Metting</h2>
                </div>
                <div class="swiper team-carousel-2">
                    <div class="swiper-wrapper swiper-container">
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="team-thumb">
                                    <img src="{{ asset('theme') }}/img/team/team-4.png" alt="team">
                                </div>
                                <div class="team-content text-center">
                                    <h3 class="title"><a href="#">Deepak Chavan</a></h3>
                                    <span>Founder</span>
                                </div>
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
                        </div>
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="team-thumb">
                                    <img src="{{ asset('theme') }}/img/team/team-5.png" alt="team">
                                </div>
                                <div class="team-content text-center">
                                    <h3 class="title"><a href="#">VaiBhav SaxEna</a></h3>
                                    <span>CTO</span>
                                </div>
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
                        </div>
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="team-thumb">
                                    <img src="{{ asset('theme') }}/img/team/team-6.png" alt="team">
                                </div>
                                <div class="team-content text-center">
                                    <h3 class="title"><a href="#">Shalaka Nakhate</a></h3>
                                    <span>Digital Marketing Head</span>
                                </div>
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
                        </div>
                        <div class="swiper-slide">
                            <div class="team-box">
                                <div class="team-thumb">
                                    <img src="{{ asset('theme') }}/img/team/team-7.png" alt="team">
                                </div>
                                <div class="team-content text-center">
                                    <h3 class="title"><a href="#">Sarta Laton</a></h3>
                                    <span>Team Captan</span>
                                </div>
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
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ./ team-section -->

        <section class="info-section pt-100 pb-100">
            <div class="info-wrap pt-70 pb-70" data-background="{{ asset('theme') }}/img/bg-img/info-bg.png">
                <div class="info-left">
                    <div class="section-heading">
                        <h2 class="section-title"> Ready To Get Started of Strategy Business.</h2>
                        <p>Softewer being able to crank out videos consistently, localize this them for different regions, and still save resources, time,
                            has been a game change</p>
                    </div>
                    <div class="info-box">
                        <div class="icon">
                            <img src="{{ asset('theme') }}/img/icon/bulb-black.png" alt="bulb">
                        </div>
                        <h3 class="title">Manage Your Software <span>App Design, Website</span></h3>
                    </div>
                </div>
                <div class="info-right">
                    <a href="#" class="mt-primary-btn info-btn">Get Started Now</a>
                </div>
                <div class="robot">
                    <img src="{{ asset('theme') }}/img/images/robot.png" alt="robot">
                </div>
            </div>
        </section>
        <!-- ./ info-section -->
@endsection