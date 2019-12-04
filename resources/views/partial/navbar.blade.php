<header id="header" class="site-header header-style-3">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col col-sm-9">
                    <div class="contact-info">
                        <ul>
                            <li><i class="ti-email"></i> mashareqoverseas@gmail.com</li>
                            <li><i class="ti-mobile"></i> 9851018169</li>
                            <li><i class="ti-location-pin"></i> Sinamangal-9 , Kathmandu , Nepal</li>
                        </ul>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <div class="social">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>

    <nav class="navigation navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li class="menu-item">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="testimonials-s2.html">Testimonials style 2</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-s2.html">Team style 2</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="services-s2.html">Services style 2</a></li>
                            <li><a href="service-single.html">Financial Planning</a></li>
                            <li><a href="market-research.html">Market Research</a></li>
                            <li><a href="investment-planing.html">Investment Planing</a></li>
                            <li><a href="strategy-planing.html">Strategy & Planing</a></li>
                            <li><a href="financial-service.html">Financial Service</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="">Procedures</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('documentation')}}">Documentation</a></li>
                            <li><a href="{{route('procedure')}}">Recruitment Process</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('contactus')}}">Contact</a></li>
                    <li><a href="contact.html">Visa Enquiry</a></li>
                </ul>                    
            </div><!-- end of nav-collapse -->

            <div class="cart-contact">
                <div class="contact-btn">
                    <a href="#" class="theme-btn">Free consultation</a>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>