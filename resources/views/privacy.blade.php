<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GEEPA</title>
        <meta name="description" content="GEEPA is an international educational and exchange program targeting students of ages 10 to 18 in secondary schools.
        The program connects students in Africa and those on other continents for a collaborative learning experience that climaxes at the development of a Community Impact Project (CIP) to solve real-world problems.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="frontendIT/assets/images/fav-icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="frontendIT/assets/images/fav-icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="frontendIT/assets/images/fav-icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="frontendIT/assets/images/fav-icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="frontendIT/assets/images/fav-icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="frontendIT/assets/images/fav-icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="frontendIT/assets/images/fav-icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="frontendIT/assets/images/fav-icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="frontendIT/assets/images/fav-icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="frontendIT/assets/images/fav-icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="frontendIT/assets/images/fav-icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="frontendIT/assets/images/fav-icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="frontendIT/assets/images/fav-icon/favicon-16x16.png">
        <link rel="manifest" href="frontendIT/assets/images/fav-icon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="frontendIT/assets/images/fav-icon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/bootstrap.min.css" type="text/css" media="all" />
        <!-- carousel CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/owl.carousel.min.css" type="text/css" media="all" />
        <!-- responsive CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/responsive.css" type="text/css" media="all" />
        <!-- nivo-slider CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/nivo-slider.css" type="text/css" media="all" />
        <!-- animate CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/animate.css" type="text/css" media="all" />
        <!-- animated-text CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/animated-text.css" type="text/css" media="all" />
        <!-- font-awesome CSS -->
        <link type="text/css" rel="stylesheet" href="frontendIT/assets/fonts/font-awesome/css/font-awesome.min.css">
        <!-- font-flaticon CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/flaticon.css" type="text/css" media="all" />
        <!-- theme-default CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/theme-default.css" type="text/css" media="all" />
        <!-- meanmenu CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/meanmenu.min.css" type="text/css" media="all" />
        <!-- Main Style CSS -->
        <link rel="stylesheet"  href="frontendIT/style.css" type="text/css" media="all" />
        <!-- transitions CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/owl.transitions.css" type="text/css" media="all" />
        <!-- venobox CSS -->
        <link rel="stylesheet" href="frontendIT/venobox/venobox.css" type="text/css" media="all" />
        <!-- widget CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/widget.css" type="text/css" media="all" />
        <!-- modernizr js -->
        <script type="text/javascript" src="frontendIT/assets/js/vendor/modernizr-3.5.0.min.js"></script>

    </head>
    <body class="antialiased">

    <!--==================================================-->
    <!----- Start Techno Main Menu Area ----->
    <!--==================================================-->
    <div id="sticky-header" class="techno_nav_manu transparent_menu white d-md-none d-lg-block d-sm-none d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo mt-4">
                        <a class="logo_img" href="{{route('welcome')}}" title="Geepa">
                            <img src="frontendIT/assets/images/fav-icon/logo.jpg" size="56x56" alt="" />
                        </a>
                        <a class="main_sticky" href="{{route('welcome')}}" title="Geepa">
                            <img src="frontendIT/assets/images/fav-icon/logo.jpg" alt="astute" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <nav class="techno_menu">
                        <ul class="nav_scroll">
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('welcome')}}#about">About Us</a></li>
                            <li><a href="{{route('welcome')}}#services">Curriculum</a></li>
                            {{-- <li><a href="{{route('welcome')}}#how-it-works">How it Works</a></li> --}}
                            <li><a href="{{route('welcome')}}#portfolio">Portfolio</a></li>
                            <li><a href="{{route('welcome')}}#portfolio">CIP</a></li>
                            <li><a href="/forums">Forum</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                        <div class="donate-btn-header">
                            <a class="dtbtn" href="{{ route('login') }}">Login | Register</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!----- Techno Mobile Menu Area ----->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul class="nav_scroll">
                    <<li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('welcome')}}#about">About Us</a></li>
                    <li><a href="{{route('welcome')}}#services">Curriculum</a></li>
                    {{-- <li><a href="{{route('welcome')}}#how-it-works">How it Works</a></li> --}}
                    <li><a href="{{route('welcome')}}#portfolio">Portfolio</a></li>
                    <li><a href="{{route('welcome')}}#portfolio">CIP</a></li>
                    <li><a href="/forums">Forum</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Slider Area ----->
    <!--==================================================-->
    <div class="slider_area d-flex align-items-center slider2 landing" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_slider">
                        <div class="slider_content text-center">
                            <div class="slider_text">
                                <div class="slider_text_inner">
                                    <h1>Our Privacy Policy</h1>
                                </div>
                                @if (\Session::has('message'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!! \Session::get('message') !!}</strong>
                                    </div>
                                @endif
                                <div class="slider_text_desc pt-4">
                                    <p>This privacy policy ("policy") will help you understand how www.geepaworld.com ("us", "we", "our") uses and protects the data you provide to us when you visit and use www.geepaworld.com ("website", "service").
                                        We reserve the right to change this policy at any given time, of which you will be promptly updated. If you want to make sure that you are up to date with the latest changes, we advise you to frequently visit this page.
                                        </p>
                                </div>
                                <div class="slider_button pt-5 d-flex">
                                    <div class="button">
                                        <a href="{{route('privacy')}}#about">Continue Reading <br><i class="fa fa-long-arrow-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__bg">
            <canvas id="intro__canvas" data-colors='["#FBA500", "#FF3C00", "#fff"]'></canvas>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Slider Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-70 pb-70" id="about">
        <div class="container">
            <div class="section_sub_title uppercase mb-3 text-center">
                <h3>Privacy Policies</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>What User Data We Collect</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>When you visit the website, we may collect the following data:
                                <ul>
                                    <li>Your IP address.</li>
                                    <li>Your contact information and email address..</li>
                                    <li>Other information such as interests and preferences.</li>
                                    <li>Data profile regarding your online behavior on our website.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Why We Collect Your Data</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>We are collecting your data for several reasons:
                                <ul>
                                    <li>To better understand your needs</li>
                                    <li>To improve our services and products.</li>
                                    <li>To send you promotional emails containing the information we think you will find interesting.</li>
                                    <li>To contact you to fill out surveys and participate in other types of market research.</li>
                                    <li>To customize our website according to your online behavior and personal preferences.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Our Cookie Policy</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>Once you agree to allow our website to use cookies, you also agree to use the data it collects regarding your online behavior (analyze web traffic, web pages you spend the most time on, and websites you visit).
                                    The data we collect by using cookies is used to customize our website to your needs. After we use the data for statistical analysis, the data is completely removed from our systems.
                                    Please note that cookies don't allow us to gain control of your computer in any way. They are strictly used to monitor which pages you find useful and which you do not so that we can provide a better experience for you.
                                    If you want to disable cookies, you can do it by accessing the settings of your internet browser.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Safeguarding and Securing the Data</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>www.geepaworld.com is committed to securing your data and keeping it confidential. www.geepaworld.com has done all in its power to prevent data theft, unauthorized access, and disclosure by implementing the latest technologies and software, which help us safeguard all the information we collect online.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Links to Other Websites</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>Our website contains links that lead to other websites. If you click on these links, www.geepaworld.com is not held responsible for your data and privacy protection. Visiting those websites is not governed by this privacy policy agreement. Make sure to read the privacy policy documentation of the website you go to from our website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Restricting the Collection of your Personal Data</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>At some point, you might wish to restrict the use and collection of your personal data. You can achieve this by doing the following:
                                    When you are filling the forms on the website, make sure to check if there is a box that you can leave unchecked, if you don't want to disclose your personal information.
                                    If you have already agreed to share your information with us, feel free to contact us via email and we will be more than happy to change this for you.
                                    www.geepaworld.com will not lease, sell or distribute your personal information to any third parties unless we have your permission. We might do so if the law forces us. Your personal information will be used when we need to send you promotional materials if you agree to this privacy policy.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- Start Techno Footer Middle Area ----->
    <!--==================================================-->
    <div class="footer-middle bg-dark2 pt-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <div class="footer-bottom-logo pb-40">
                            <img src="frontendIT/assets/images/fav-icon/logo.jpg" alt="" />
                        </div>
                        <div class="company-info-desc">
                            <p>We are a team of professional experts in the IT, and Software engineering industry who are passionate and here to help you out to balance between work, online course and family time
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text mr-3">
                                <a href="#"><p>Follow Us</p></a>
                            </div>
                            <div class="follow-company-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Our Services</h4>
                        <div class="menu-quick-link-container ml-4">
                            <ul id="menu-quick-link" class="menu">
                                <li><a href="#">Online IT Courses</a></li>
                                <li><a href="#">Final Course Projects</a></li>
                                <li><a href="#">Custom Essays</a></li>
                                <li><a href="#">Proctored Exams and Quiz</a></li>
                                <li><a href="#">Thesis and Dissertations</a></li>
                                <li><a href="#">Coding and Programming Tasks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <h3 class="widget-title pb-4">Geepa</h3>
                        <div class="company-info-desc">
                            <p>Quality Above Everything</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Phone :</span>254708444398</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Email :</span>admin@Geepa.com</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div id="em-recent-post-widget">
                        <div class="single-widget-item">
                            <h4 class="widget-title pb-3">Popular Post</h4>
                            <div class="recent-post-item active pb-3">
                                <div class="recent-post-image mr-3">
                                    <a href="#">
                                        <img width="80" height="80" src="frontendIT/assets/images/recent1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-text">
                                    <h6><a href="#">
                                            The Best Student Platform
                                        </a>
                                    </h6>
                                    <span class="rcomment">December 12, 2020</span>
                                </div>
                            </div>
                            <div class="recent-post-item pt-1">
                                <div class="recent-post-image mr-3">
                                    <a href="#">
                                        <img width="80" height="80" src="frontendIT/assets/images/recent3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-text">
                                    <h6><a href="#">
                                            How can use our latest news by
                                        </a>
                                    </h6>
                                    <span class="rcomment">December 15, 2020</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© {{\Carbon\Carbon::now()->year}} Geepa World.All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-right">
                        <div class="footer-bottom-right-text">
                            <a class="absod" href="{{ route('privacy')}}" target="_blank">Privacy Policy </a>
                            <a href="{{ route('terms')}}" target="_blank"> Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #whatsAppLink {
            position: fixed;
            z-index: 9999;
            float: left;
            left: 1.3em;
            top: 91%;
            margin-top: -25px;
            cursor: pointer;
            min-width: 50px;
            max-width: 240px;
            color: #fff;
            text-align: center;
            padding: 12px 21px;
            margin: 0 auto 0 auto;
            background: #20B038;
            -webkit-transition: All 0.5s ease;
            -moz-transition: All 0.5s ease;
            -o-transition: All 0.5s ease;
            -ms-transition: All 0.5s ease;
            transition: All 0.5s ease;
            border-radius: 50px;
        }
        @media(max-width: 768px){
            .visible-xs{
                display: block;
            }
            .visible-lg{
                display: none;
            }
        }
        @media(min-width: 768px){
            .visible-xs{
                display: none;
            }
            .visible-lg{
                display: inline-block;
            }
        }
        strong{
            color: #13425f !important;
        }
    </style>
    <!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->
    <a class="visible-lg" id="whatsAppLink" href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">
        <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; WhatsApp Us
    </a>

    <a class="visible-xs" id="whatsAppLink" href="https://api.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">
        <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; WhatsApp Us
    </a>
    <!-- jquery js -->
    <script type="text/javascript" src="frontendIT/assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="frontendIT/assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="frontendIT/assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="frontendIT/assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script type="text/javascript" src="frontendIT/assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="frontendIT/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="frontendIT/venobox/venobox.js"></script>
    <!-- OnePage Nav js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.nav.js"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="frontendIT/assets/ajax-mail.html"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="frontendIT/assets/js/testimonial.js"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="frontendIT/assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="frontendIT/venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="frontendIT/assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.nivo.slider.pack.js"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script type="text/javascript" src="frontendIT/assets/js/theme.js"></script>
    <!-- jquery js -->
    <!--<script src="//code.tidio.co/odd0ytvu6qwx3o4gjr8j44w4ogftxlzr.js" async></script>-->

    </body>

</html>

