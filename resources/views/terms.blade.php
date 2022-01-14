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
                                    <h1>Our Terms and Conditions</h1>
                                </div>
                                @if (\Session::has('message'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!! \Session::get('message') !!}</strong>
                                    </div>
                                @endif
                                <div class="slider_text_desc pt-4">
                                    <p>Please read these terms and conditions www.geepaworld.com ("terms") carefully before using www.geepaworld.com website (“website”, "service") operated by [Excellent Student Limited and UK Student World] ("us", 'we", "our").</p>
                                </div>
                                <div class="slider_button pt-5 d-flex">
                                    <div class="button">
                                        <a href="{{route('terms')}}#about">Continue Reading <br><i class="fa fa-long-arrow-down"></i></a>
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
                <h3>Terms and Conditions</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Conditions of Use</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>By using this website, you certify that you have read and reviewed this Agreement and that you agree to comply with its terms. If you do not want to be bound by the terms of this Agreement, you are advised to leave the website accordingly. Www.geepaworld.com only grants use and access of this website, its products, and its services to those who have accepted its terms.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Privacy policy</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>Before you continue using our website, we advise you to read our privacy policy regarding our user data collection. It will help you better understand our practices.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Applicable Law</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>By visiting this website, you agree that the laws of the [Kenya], without regard to principles of conflict laws, will govern these terms and conditions, or any dispute of any sort that might come between www.geepaworld.com and you, or its business partners and associates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Disputes</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>Any dispute related in any way to your visit to this website or to products you purchase from us shall be arbitrated by state or federal court [Kenya] and you consent to exclusive jurisdiction and venue of such courts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Indemnification</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>You agree to indemnify www.geepaworld.com and its affiliates and hold www.geepaworld.com harmless against legal claims and demands that may arise from your use or misuse of our services. We reserve the right to select our own legal counsel. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Age restriction</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>You must be at least 10 (Ten) years of age before you can use this website. By using this website, you warrant that you are at least 10 years of age and you may legally adhere to this Agreement. www.geepaworld.com assumes no responsibility for liabilities related to age misrepresentation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Intellectual Property</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>You agree that all materials, products, and services provided on this website are the property of Www.geepaworld.com, its affiliates, directors, officers, employees, agents, suppliers, or licensors including all copyrights, trade secrets, trademarks, patents, and other intellectual property. You also agree that you will not reproduce or redistribute the www.geepaworld.com’s intellectual property in any way, including electronic, digital, or new trademark registrations.
                                    You grant Www.geepaworld.com a royalty-free and non-exclusive license to display, use, copy, transmit, and broadcast the content you upload and publish. For issues regarding intellectual property claims, you should contact the company in order to come to an agreement.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>User Accounts</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>As a user of this website, you may be asked to register with us and provide private information. You are responsible for ensuring the accuracy of this information, and you are responsible for maintaining the safety and security of your identifying information. You are also responsible for all activities that occur under your account or password.
                                    If you think there are any possible issues regarding the security of your account on the website, inform us immediately so we may address them accordingly.
                                    We reserve all rights to terminate accounts, edit or remove content and cancel orders at our sole discretion.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_content_text bold pt-5">
                            <p>Limitation on liability</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>[www.geepaworld.com] is not liable for any damages that may occur to you as a result of your misuse of our website.
                                    [www.geepaworld.com] reserves the right to edit, modify, and change this Agreement at any time. We shall let our users know of these changes through electronic mail. This Agreement is an understanding between www.www.geepaworld.com and the user, and this supersedes and replaces all prior agreements regarding the use of this website.
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
                            <img src="frontendIT/assets/images/fav-icon/logo-white.jpg" alt="" />
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
                            <p>© {{\Carbon\Carbon::now()->year}} Geepa.All Rights Reserved. </p>
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

