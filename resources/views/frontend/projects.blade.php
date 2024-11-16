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
                            <h1 class="title">Our Project</h1>
                            <h4 class="sub-title"><a href="index.html">Home </a><a href="#" class="inner-page">/ Project Page</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ Page Header -->

        <section class="project-section pt-100 pb-100">
            <div class="project-container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading">Our Projects Now</h4>
                    <h2 class="section-title">Work Gallery Recent Projects</h2>
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
                                <img src="{{ asset('theme') }}/img/images/project-img-6.png" alt="project" />
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
                                <img src="{{ asset('theme') }}/img/images/project-img-7.png" alt="project" />
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
                                <img src="{{ asset('theme') }}/img/images/project-img-8.png" alt="project" />
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
                                <img src="{{ asset('theme') }}/img/images/project-img-9.png" alt="project" />
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
                                <img src="{{ asset('theme') }}/img/images/project-img-1.png" alt="project" />
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
                                <img src="{{ asset('theme') }}/img/images/project-img-2.png" alt="project" />
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

        <section class="info-section">
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