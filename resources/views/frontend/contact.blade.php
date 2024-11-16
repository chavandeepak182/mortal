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
                            <h1 class="title">Contact Page</h1>
                            <h4 class="sub-title"><a href="index.html">Home </a><a href="#" class="inner-page">/ Contact Page</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ Page Header -->
        
        <section class="contact-top-area pt-100 pb-100">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fa-sharp fa-solid fa-house fa-fw"></i></div>
                            <h3 class="title">London,Dh2 <span>Ratan House:522</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item item-2" style="--mt-color-theme-secondary: #175cff">
                            <div class="contact-icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                            <h3 class="title">Call Number <span><a href="tel:+550000015854">+550000015854</a></span></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item" style="--mt-color-theme-secondary: #ff8c91">
                            <div class="contact-icon"><i class="fa-sharp fa-solid fa-envelope"></i></div>
                            <h3 class="title">Email Us <span><a href="mailto:laronta@bara.com">laronta@bara.com</a></span></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-item" style="--mt-color-theme-secondary: #a6e155">
                            <div class="contact-icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                            <h3 class="title">Address <span>Dhaka 1,Betar33</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ contact-top-area -->

        <section class="contact-section bg-dark-1 pt-100 pb-100">
            <div class="contact-shapes">
                <div class="shape headphone"><img src="{{ asset('theme') }}/img/icon/headphone.png" alt="img"></div>
                <div class="shape bulb"><img src="{{ asset('theme') }}/img/icon/bulb-2.png" alt="img"></div>
                <div class="shape bg top-shape" data-background="{{ asset('theme') }}/img/shapes/contact-shape-2.png"></div>
                <div class="shape bg bottom-shape" data-background="{{ asset('theme') }}/img/shapes/contact-shape-1.png"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-thumb">
                            <img src="{{ asset('theme') }}/img/images/contact-img.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <div class="section-heading">
                                <h4 class="sub-heading bg-white">Our Contact Us</h4>
                                <h2 class="section-title">Have Any Contact! Say The People Trust Us</h2>
                                <p>Business tailored it design, management & support services business agency elit, sed do eiusmod tempor. </p>
                            </div>
                            <div class="form-wrap">
                                <form action="#" method="post" id="ajax_contact" class="form-horizontal">
                                    <div class="form-group colum-row row">
                                        <div class="col-sm-6">
                                            <input
                                                type="text"
                                                id="fullname"
                                                name="fullname"
                                                class="form-control"
                                                placeholder="Your Name"
                                            />
                                        </div>
                                        <div class="col-sm-6">
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Your Email"
                                            />
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

        <div class="map-wrapper pb-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

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