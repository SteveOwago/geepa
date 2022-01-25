<div class="footer-middle bg-dark2 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget widgets-company-info">
                    <div class="footer-bottom-logo pb-40">
                        <img src="frontendIT/assets/images/fav-icon/logo.jpg" alt="" />
                    </div>
                    <div class="company-info-desc">
                        <p>The GEEPA World is a team of specialists in education, IT, and business, passionate about getting students from across the globe to learn and collaborate in solving real-world problems while championing education for sustainable development in their communities.</p>
                    </div>
                    <div class="follow-company-info pt-3">
                        <div class="follow-company-text mr-3">
                            <a href="#"><p>Follow Us</p></a>
                        </div>
                        <div class="follow-company-icon">
                            <a href="https://web.facebook.com/globaleducationalandexchangeprogram" target="_blank"><i class="fa fa-facebook"></i></a>
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
                            <li><a href="#">Student Training and workshops</a></li>
                            <li><a href="#">Education for sustainable development </a></li>
                            <li><a href="#">Community impact projects</a></li>
                            <li><a href="#">Teachers’ trainings and continuous professional development</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="widget widgets-company-info">
                    <h3 class="widget-title pb-4 text-center">Geepa World Contacts</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="company-info-desc">
                                <p>African / Kenyan Office</p>
                                <address>
                                    <p>Excellent Student Limited</p>
                                    <p>Adlife Plaza, Yaya Center</p>
                                </address>
                            </div>
                            <div class="footer-social-info">
                                <p><span>Phone :</span>+254-746-896-669</p>
                            </div>
                            <div class="footer-social-info">
                                <p><span>Email :</span><a href="mailto:phanuel@geepaworld.com">phanuel@geepaworld.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="company-info-desc">
                                <p>European/UK Office</p>
                                <address>
                                    <p>Student World UK Ltd, UK</p>
                                    <p>21 Botanic Avenue, Belfast, UK. BT7 1JJ</p>
                                </address>
                            </div>
                            <div class="footer-social-info">
                                <p><span>Phone :</span>+447-401-255-565</p>
                            </div>
                            <div class="footer-social-info">
                                <p><span>Email :</span><a href="mailto:info@ukstudentworld.org">info@ukstudentworld.org</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-12">
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
            </div> --}}

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
                        <a " href="{{ route('downloads')}}" target="_blank">Downloads </a> |
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
<a class="visible-lg" id="whatsAppLink" href="https://web.whatsapp.com/send?phone=254746896669&amp;text=Hello, I need some help concerning Geepa World"  target="_blank">
    <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; WhatsApp Us
</a>

<a class="visible-xs" id="whatsAppLink" href="https://api.whatsapp.com/send?phone=254746896669&amp;text=Hello, I need some help concerning Geepa World"  target="_blank">
    <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; WhatsApp Us
</a>
