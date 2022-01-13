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
                            <a class="dtbtn" href="{{ route('login') }}">Login</a>
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
                                    <h1>Connecting Students</h1>
                                </div>
                                @if (\Session::has('message'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!! \Session::get('message') !!}</strong>
                                    </div>
                                @endif
                                <div class="slider_text_desc pt-4">
                                    <p>GEEPA is an international educational and exchange program targeting students of ages 10 to 18 in secondary schools.
                                        The program connects students from other continent to those in Africa for a collaborative learning experience that climaxes at the development of a Community Impact Project (CIP) to solve real-world problems.</p>
                                </div>
                                <div class="slider_button pt-5 d-flex">
                                    <div class="button">
                                        <a href="{{route('welcome')}}#how-it-works">How IT Work <i class="fa fa-long-arrow-right"></i></a>
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
    <!----- Start Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div class="flipbox_area top_feature">
        <div class="container">
            <div class="row nagative_margin">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-global-1"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Connect</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Connect</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Link with students from other countries in our e-classrooms and bi-monthly workshops </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-data"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Collaborate</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Collaborate</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Work together on global topics in peer reviews and panel discussions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-interaction"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Create</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Create</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Create solutions to sustainable development in our CIP programs while collaborating with international peers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <!--==================================================-->
    <!----- Start Techno How IT Work Area ----->
    <!--==================================================-->
    <div class="how_it_work pt-50 pb-65" id="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-60 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>HOW IT WORKS</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Working Process</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>1</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Sign Up</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>Register for free</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>2</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Register</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>Choose a preferred plan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list three pb-5">
                                <span>3</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Get Started</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>Collaborate with international peers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno How IT Work Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Area ----->
    <!--==================================================-->

    <div class="flipbox_area pt-85 pb-70" id="services" style="background-image:url(frontendIT/assets/images/slider/slider-4.jpg)"; >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center white mb-55">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>CURRICULUM</h6>
                        </div>
                        <div class="section_main_title">
                            <p class="lead">GEEPA has an original curriculum mapped to the global and general student learning outcomes and indicators A core pedagogical objective is enabling students to teach one another. Discussing the topic with peers around the world provides the opportunity for students to identify different perspectives on shared problems. Students learn that global issues are complex, that they affect everyone, and that their solutions are complex and interdisciplinary.</p>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Students Complete an Assignment </h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature1.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Students Complete an Assignment</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Check assignments in the e-class discussion board and complete them according to the guidelines</p>
                                </div>
                                {{-- <div class="flipbox_button">
                                    <a  href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-intelligent"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Posting of original work</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature2.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Posting of original work</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Post your original work on the discussion board as guided by the facilitators</p>
                                </div>
                                {{-- <div class="flipbox_button">
                                    <a  href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-code"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Complete Follow-up Activities</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature3.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Complete Follow-up Activities</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Check assignments in the e-class discussion board and complete them according to the guidelines</p>
                                </div>
                                {{-- <div class="flipbox_button">
                                    <a  href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-content-writing"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Students Review Posts from Peers</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature3.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Students Review Posts from Peers</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Check assignments in the e-class discussion board and complete them according to the guidelines</p>
                                </div>
                                {{-- <div class="flipbox_button">
                                    <a  href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Respond to Peers</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature1.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Respond to Peers</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Check assignments in the e-class discussion board and complete them according to the guidelines</p>
                                </div>
                                {{-- <div class="flipbox_button">
                                    <a  href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-business-and-finance"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Students check for feedback on their work</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature2.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Students check for feedback on their work</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Check assignments in the e-class discussion board and complete them according to the guidelines</p>
                                </div>
                                {{-- <div class="flipbox_button">
                                    <a  href="https://web.whatsapp.com/send?phone=254708444398&amp;text=Hello, I need some help with my online course"  target="_blank">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==================================================-->
    <!----- End Techno Flipbox Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-70 pb-70" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>ABOUT US</h6>
                        </div>
                        {{-- <div class="section_main_title">
                            <h1>Let's Share <span>Ideas</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div> --}}
                        <div class="section_content_text bold pt-5">
                            <p>GEEPA is run by Excellent Student Limited, a Kenyan registered company, and UK Student World, registered in London, UK. We pride in our vision of connecting students in Africa with those on other continents on a platform of education exchange.</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>The powerful force of economic and cultural interdependence among nations called globalization, with all its strengths and drawbacks, is here to stay. How can the next generation of students be prepared for the challenges they will face? So how do we create value for students in Africa and on other continents?</p>
                                <p>We have a shared vision of enabling students to access and enjoy the myriad opportunities available in a globalized world. This is through access to an effective global educational exchange program and an acquisition of the 21st Century skills.</p>
                            </div>
                        </div>
                        <div class="singel_about_left_inner pl-4">
                            <div class="button two">
                                <a href="#contact">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner">
                            <img src="frontendIT/assets/images/about-img2.png" alt="" />
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
    <!----- Start Techno CIP Area ----->
    <!--==================================================-->
    <div class="about_area pt-70 pb-70" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner">
                            <img src="frontendIT/assets/images/new/wt4.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>Community Impact Projects (CIP)</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Curriculum <span>Impact</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text bold pt-5">
                            <p>The CIP program has been designed to enable students in the GEEPA program take the leading role in championing sustainable development as a way of solving real-world problems. One of the key roles of education is to prepare people to effectively engage with these, real-world challenges, problems, and questions. This program will allow students to innovate by implementing their solutions, designs or ideas to audiences outside the classroom.</p>
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
    <!----- End Techno Case Study Area ----->
    <!--==================================================-->




    <!--==================================================-->
    <!----- Start Techno Portfolio Area ----->
    <!--==================================================-->
    <div class="portfolio_area pt-80 pb-70" id="portfolio">
        <div class="container">
            <div class="row">
                <!-- Start Section Tile -->
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>PORTFOLIO</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>What makes us Stand out</h1>

                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio_nav">
                        <div class="portfolio_menu">
                            <ul class="menu-filtering">
                                <li class="current_menu_item" data-filter="*">Project-based Learning</li>
                                <li data-filter=".physics" >Global Student Audience</li>
                                <li data-filter=".cemes" >Global Diversity</li>
                                <li data-filter=".math" >Education for Sustainable Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row image_load">
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item physics english">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p1.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Workshops and Seminars</span>
                                <h2><a href="#">Cengage | Canvas</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p2.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Community Impact Projects (CIP)</span>
                                <h2><a href="#">Management | Analysis | Development</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p3.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Teachers’ Continuous professional Dev’pt </span>
                                <h2><a href="#">Short Custom Essays | Quiz | Tests</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes math">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p4.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Peer Reviews</span>
                                <h2><a href="#">Thesis | Project Proposals</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 grid-item physics english">
                    <div class="single_portfolio admin">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p5.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p5.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Online Proctored Exam</span>
                                <h2><a href="#">Peasonvue | Examity</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 grid-item math">
                    <div class="single_portfolio admin">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p6.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p6.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Discussion Posts</span>
                                <h2><a href="#">Discussion Response | Reflective Reviews</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!----- Start Techno Video Area ----->
    <!--==================================================-->
    <div class="video_area pt-100 pb-200"style="background-image:url(frontendIT/assets/images/slider/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center white mb-55">
                        <div class="section_main_title">
                            <h1>We Create Real Impact For Those</h1>
                            <h1>Who Partner With Us.</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video_area pb-200">
        <div class="container">
            <div class="row mrt-200">
                <div class="col-lg-12">
                    <div class="single_video">
                        <div class="single_video_thumb">
                            <img src="frontendIT/assets/images/slider/video.png" alt="" />
                        </div>
                    </div>
                    <div class="single-video text-center">
                        <div class="video-icon mrt-345">
                            <h1 class="lead text-white">We are You Best Partner Ever</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Video Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- Start Techno Testimonial Area ----->
    <!--==================================================-->
    <div id="review" class="testimonial-bg pt-100 pb-70">
        <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
            <section id="section-quote">
                <div class="col-lg-12">
                    <div class="section_title text_center mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>TESTIMONIAL</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Happy <span>Clients Says</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <div class="container-pe-quote left">
                    <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <!--Center Testimonials-->
                <div class="container-quote carousel-on">
                    <!--Testimonial 1-->
                    <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                        <p>'Global exchange is great, it has given me a chance to know about Ethiopians and their way of life. This is an awesome experience :)'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Ambokile Baraka</div>
                            <div class="job">Student</div>
                        </div>
                    </div>
                    <!--Testimonial 2-->
                    <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                        <p>'I look forward to participating in the Community Impact Project and creating a solution to e-waste management, which is currently a global menace in the technology era'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Benite Marie</div>
                            <div class="job">Student</div>
                        </div>
                    </div>
                    <!--Testimonial 3-->
                    <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                        <p>'I love reading and telling stories, hopefully, I can tell the world about our Kenyan culture.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Daniel Sichendi</div>
                            <div class="job">Product Designer</div>
                        </div>
                    </div>
                    <!--Testimonial 4-->
                    <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                        <p>'The internet is the driver of the global village, GEEPA uses this innovation to create an actual student village. This should be a great experience for the students and teachers involved'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">David Mugori</div>
                            <div class="job">Student</div>
                        </div>
                    </div>
                    <!--Testimonial 5-->
                    <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                        <p>'It’s a great honor mentoring students globally and listening to their brilliant ideas on sustainable development'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Everlyne Awuor</div>
                            <div class="job">Networking Student</div>
                        </div>
                    </div>
                    <!--Testimonial 6-->
                    <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                        <p>'I have always desired to meet fellow students in East Africa, GEEPA has made it possible for me to be on the same platform with students from other continents. It is Great to be here!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Jackline Warigia</div>
                            <div class="job">Business Student</div>
                        </div>
                    </div>
                    <!--Testimonial 7-->
                    <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                        <p>'What a great space to be in. Students rule the world!!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Jackson Kamiti</div>
                            <div class="job">Accounts Student</div>
                        </div>
                    </div>
                    <!--Testimonial 8-->
                    <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                        <p>'This is a great opportunity for my students to take part in global discussions to solve real-world problems.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Marjani Liya</div>
                            <div class="job">Student Ambassador</div>
                        </div>
                    </div>
                    <!--Testimonial 9-->
                    <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                        <p>'From Kenya to the world, GEEPA is wonderful.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Mwadimu Mulemazandi</div>
                            <div class="job">IT student</div>
                        </div>
                    </div>
                    <!--Testimonial 10-->
                    <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                        <p>'I give it up to my school for hosting GEEPA for us, I love the experience on board'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Sophie Miremba</div>
                            <div class="job">Student</div>
                        </div>
                    </div>
                    <!--Testimonial 11-->
                    <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                        <p>'Global education exchange program is the safe route to global culture exchange and awareness. I believe all schools should embrace GEEPA.
                            Wonderful!
                            '</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Aizivaishe Aneni</div>
                            <div class="job">Communication Student</div>
                        </div>
                    </div>
                    <!--Testimonial 12-->
                    <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                        <p>'GEEPA gives students a platform to shine while telling their stories, researching and solving global challenges through the CIP program. I love the entire program. Keep it up'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Ambokile Baraka</div>
                            <div class="job">Student</div>
                        </div>
                    </div>
                </div>
                <!--Right Bubble Images-->
                <div class="container-pe-quote right">
                    <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Testimonial Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Contact Area ----->
    <!--==================================================-->
    <div class="contact_area pt-85 pb-90" style="background-image:url(frontendIT/assets/images/bg-cnt.jpg)" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title white text_center mb-60 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>CONTACT US</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Have Questions?</h1>
                            <h1>We Got you Covered</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="quote_wrapper">
                        <form id="contact_form" action="" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name"  placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="phone" placeholder="WhatsApp Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message" required></textarea>
                                    </div>
                                    <div class="quote_btn text_center">
                                        <button class="btn" type="submit">Submit Query</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Contact Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Brand Area ----->
    <!--==================================================-->

    <div class="brand_area pt-30 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <!--brand owl curousel -->
                        <div class="brand_list owl-carousel curosel-style">
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/3.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/4.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/5.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Brand Area ----->
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
                                <a href="#"><i class="fa fa-skype"></i></a>
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
                            <a class="absod" href="#">Privacy Policy </a>
                            <a href="#"> Terms & Conditions</a>
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

