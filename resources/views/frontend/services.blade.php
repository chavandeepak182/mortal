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
                            <h1 class="title">Service</h1>
                            <h4 class="sub-title"><a href="index.html">Home </a><a href="#" class="inner-page">/ Service Page</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ Page Header -->

        <section class="service-section service-page pt-100 pb-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading bg-white">Our Flexibility Service</h4>
                    <h2 class="section-title">Our Best Service Solution</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
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
                                <img src="{{ asset('theme') }}/img/icon/service-1.png" alt="service">
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
                                <img src="{{ asset('theme') }}/img/icon/service-4.png" alt="service">
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
                        <div class="service-item text-center" style="--mt-color-theme-primary: #f792ff">
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
                                <img src="{{ asset('theme') }}/img/icon/service-5.png" alt="service">
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
                        <div class="service-item text-center" style="--mt-color-theme-primary: #7cf1ea">
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
                                <img src="{{ asset('theme') }}/img/icon/service-6.png" alt="service">
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

        <footer class="footer-section footer-2" data-background="{{ asset('theme') }}/img/bg-img/footer-bg.jpg">
            <div class="bg-color"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="footer-top">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('theme') }}/img/logo/logo.png" alt="logo" /></a>
                    </div>
                    <div class="footer-form-wrap">
                        <h3 class="news">Our Newsletter <span>We are dolor sit amet csectetur</span></h3>
                        <div class="footer-form">
                            <form action="#" class="mt-subscribe-form">
                                <input
                                    class="form-control"
                                    type="email"
                                    name="email"
                                    placeholder="Enter Your Email"
                                    required=""
                                />
                                <input type="hidden" name="action" value="mailchimpsubscribe" />
                                <button class="submit">Subscribe</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="widget-header">About</h3>
                            <ul class="address-list">
                                <li>
                                    <i class="fa-regular fa-clock"></i>Open Hours of Government: Mon - Fri: 8.00 am. -
                                    6.00 pm.
                                </li>
                                <li><i class="fa-solid fa-location-dot"></i> 13/A, Miranda Halim City .</li>
                                <li>
                                    <i class="fa-sharp fa-solid fa-phone"></i
                                    ><a href="tel:09969569535">099 695 695 35</a>
                                </li>
                            </ul>
                            <ul class="social-list">
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="pinterest" style="--mt-color-theme-secondary: #3d72fc">
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="twitter" style="--mt-color-theme-secondary: #ff8c91">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="instagram" style="--mt-color-theme-secondary: #d1efa7">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget widget-2">
                            <h3 class="widget-header">Service</h3>
                            <ul class="footer-list">
                                <li><a href="#">Why Choose Us</a></li>
                                <li><a href="#">Our solutions</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Core values</a></li>
                                <li><a href="#">Our projects</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget widget-3">
                            <h3 class="widget-header">Quick Links</h3>
                            <ul class="footer-list">
                                <li><a href="#">Residents</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Online Service</a></li>
                                <li><a href="#">Visiting</a></li>
                                <li><a href="#">Employment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget widget-4">
                            <h3 class="widget-header">Recent Post</h3>
                            <div class="footer-post mb-30">
                                <a href="#"><img src="{{ asset('theme') }}/img/blog/footer-post-1.png" alt="post" /> </a>
                                <div class="post-content">
                                    <span>23 jun 2024</span>
                                    <h4 class="title"><a href="#">We round Solution york Blog</a></h4>
                                </div>
                            </div>
                            <div class="footer-post">
                                <a href="#"><img src="{{ asset('theme') }}/img/blog/footer-post-2.png" alt="post" /> </a>
                                <div class="post-content">
                                    <span>23 jun 2024</span>
                                    <h4 class="title"><a href="#">We round Solution york Blog</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-content">
                        <p>Copyright © 2024 <span>Morat</span>, All Rights Reserved.</p>
                        <ul class="copy-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ./ footer-section -->

        <div id="scrollup">
            <button id="scroll-top" class="scroll-to-top"><i class="fa-regular fa-arrow-up-long"></i></button>
        </div>
        <!--scrollup-->

        <!-- JS here -->
        <script src="{{ asset('theme') }}/js/vendor/jquary-3.6.0.min.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/bootstrap-bundle.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/imagesloaded-pkgd.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/waypoints.min.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/venobox.min.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/odometer.min.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/meanmenu.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/smooth-scroll.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/jquery.isotope.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/wow.min.js"></script>
        <script src="{{ asset('theme') }}/js/vendor/swiper.min.js"></script>
        <script src="{{ asset('theme') }}/js/ajax-form.js"></script>
        <script src="{{ asset('theme') }}/js/main.js"></script>
    </body>

<!-- Mirrored from html.rrdevs.net/morat/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 20:13:55 GMT -->
</html>
