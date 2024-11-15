<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from html.rrdevs.net/morat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 20:10:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
      <meta name="description" content="@yield('description')">
      <meta name="Keywords" content="@yield('keywords')">
        <!-- Site Title -->
        <title>Morat - Software & Solution HTML5 Template</title>

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- CSS here -->
        <link href="{{ asset('theme') }}/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('theme') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/fontawesome.min.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/venobox.min.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/keyframe-animation.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/odometer.min.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/swiper.min.css">
        <link rel="stylesheet" href="{{ asset('theme') }}/css/main.css">
    </head>

    <body>
        <!-- header-area-start -->
        <header class="header sticky-active">
            <div class="header-container">
                <div class="primary-header">
                    <div class="primary-header-inner">
                        <div class="header-logo d-lg-block">
                            <a href="index.html">
                                <img src="{{ asset('theme/img/logo/logo.png')}}" alt="Logo">
                            </a>
                        </div>
                        <div class="header-menu-wrap">
                            <div class="mobile-menu-items">
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children active">
                                        <a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">It Solution</a></li>
                                            <li><a href="index-2.html">Software Landing</a></li>
                                            <li><a href="index-3.html">Digital Marketing</a></li>
                                            <li><a href="index-4.html">Digital Agency</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="service.html">Service</a>
                                        <ul>
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="project.html">Project</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="error.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="blog-grid.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="header-right">
                                <a href="contact.html" class="mt-primary-btn header-btn">Get A Quote</a>
                                <div class="sidebar-icon">
                                    <button class="sidebar-trigger open">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                                <div class="header-logo d-none d-lg-none">
                                    <a href="index.html">
                                        <img src="assets/img/logo/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="header-right-item">
                                    <a href="javascript:void(0)" class="mobile-side-menu-toggle d-lg-none"
                                        ><i class="fa-sharp fa-solid fa-bars"></i
                                    ></a>
                                </div>
                            </div>
                            <!-- /.header-right -->
                        </div>
                        <!-- /.header-menu-wrap -->
                    </div>
                    <!-- /.primary-header-inner -->
                </div>
                <!-- /.primary-header -->
            </div>
        </header>
        <!-- /.Main Header -->

       

        {{-- main content --}}
        <div class="main-content">
            @yield('content')
        </div>
        {{-- end main content --}}

        @include('frontend.layouts.footer')
   </body>
<!-- Mirrored from html.rrdevs.net/morat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 20:11:35 GMT -->
</html>
