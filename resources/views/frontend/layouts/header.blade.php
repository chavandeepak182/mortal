<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from html.rrdevs.net/morat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 20:10:26 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="Keywords" content="@yield('keywords')">
    
    <!-- Site Title -->
    <title>Morat - Software & Solution HTML5 Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme') }}/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('theme') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/keyframe-animation.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/odometer.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/main.css">
</head>

<body class="header-2">
    <!-- header-area-start -->
        <header class="header sticky-active">
            <div class="header-container">
                <!-- <div class="top-bar">
                    <ul class="top-bar-list">
                        <li><i class="fa-light fa-clock"></i>Mon - Sat 8.00 - 18.00. Sun Closed</li>
                        <li><i class="fa-light fa-location-dot"></i>1010 Avenue, NY 10018 US.</li>
                    </ul>
                    <ul class="top-btn-list">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div> -->
                <div class="primary-header">
                    <div class="primary-header-inner">
                        <div class="header-logo d-lg-block">
                            <a href="index.html">
                                <img src="{{ asset('theme') }}/img/logo/logo-2.png" alt="Logo">
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
                                <a href="contact.html" class="mt-primary-btn primary-2 header-btn">Get A Quote</a>
                                <div class="sidebar-icon">
                                    <button class="sidebar-trigger open">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                                <div class="header-logo d-none d-lg-none">
                                    <a href="index.html">
                                        <img src="{{ asset('theme') }}/img/logo/logo.png" alt="Logo">
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
                    <img src="{{ asset('theme') }}/img/logo/logo.png" alt="logo">
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
                    <a href="index.html"><img src="{{ asset('theme') }}/img/logo/logo.png" alt="logo"></a>
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

        <!-- <div id="preloader">
            <div class="preloader-close">x</div>
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div> -->

       

        {{-- main content --}}
        <div class="main-content">
            @yield('content')
        </div>
        {{-- end main content --}}

        @include('frontend.layouts.footer')
   </body>
<!-- Mirrored from html.rrdevs.net/morat/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 20:11:35 GMT -->
</html>
