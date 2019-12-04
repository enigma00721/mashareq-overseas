@extends('layouts.front')

    @section('content')
        <!-- start of hero -->
        <section class="hero-slider hero-style-3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{asset('images/front/slider/slide-5.jpg')}}">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-subtitle">
                                    <h4>Perfect Desing for business</h4>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Most professional</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Lower arm towards the viewer. Gregor then turned to look out the window at the dull weather that covered </p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn-s2">Explore More</a> 
                                    <a href="#" class="theme-btn-s3">Get Started</a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset('images/front/slider/slide-4.jpg') }}">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-subtitle">
                                    <h4>Perfect Desing for business</h4>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Consulting Agency</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Lower arm towards the viewer. Gregor then turned to look out the window at the dull weather that covered </p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn-s2">Explore More</a> 
                                    <a href="#" class="theme-btn-s3">Get Started</a> 
                                </div>
                            </div> 
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset('images/front/slider/slide-6.jpg') }}">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-subtitle">
                                    <h4>Perfect Desing for business</h4>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Consulting Agency</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Lower arm towards the viewer. Gregor then turned to look out the window at the dull weather that covered </p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn-s2">Explore More</a> 
                                    <a href="#" class="theme-btn-s3">Get Started</a> 
                                </div>
                            </div> 
                        </div> <!-- end slide-inner --> 
                    </div><!-- end swiper-slide --> 
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start about-section -->
        <section class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-5">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>Consulting agency with 15 years of experience</h2>
                        </div>
                        <div class="about-text">
                            <p>Collection of textile samples lay spread out on the table Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy</p>
                            <a href="#" class="theme-btn-s2">More About us</a>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                        <div class="about-pic-area">
                            <div class="video-area">
                                <img src="{{ asset('images/front/about.jpg') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->


        <!-- start service-section-s2 -->
        <section class="service-section-s2 section-padding pt0">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s2">
                            <span>What we do</span>
                            <h2>See Our Best Services</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frameshowed a lady fitted out with a fur hat and fur</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids clearfix">
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-stats"></i>
                                </div>
                                <h3><a href="#">Online Business <br>Consulting</a></h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull.</p>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-suitcase"></i>
                                </div>
                                <h3><a href="#">Travel and Aviation <br>Consulting</a></h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull.</p>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-brain"></i>
                                </div>
                                <h3><a href="#">Consumer Products <br>Consulting</a></h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull.</p>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-cream"></i>
                                </div>
                                <h3><a href="#">Skin Care <br>Business</a></h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull.</p>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-presentation"></i>
                                </div>
                                <h3><a href="#">Financial Services <br>Consulting</a></h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull.</p>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-delivery-truck"></i>
                                </div>
                                <h3><a href="#">Transport &Logistics <br>Consulting</a></h3>
                                <p>Whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end service-section-s2 -->


        <!-- start cta-section parallax -->
        <section class="cta-section-s2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="cta-content">
                            <h2>We have 25 years experience in consultancy</h2>
                            <p>Whole of her lower arm towards the viewer gregor then turned to loo</p>
                            <div class="phone-btn">
                                <span>++856+84123475</span>
                                <span class="mid-text">or</span>  
                                <a href="#" class="theme-btn-s2">Contact with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cta-section -->


        <!-- start portfolio-section -->
        <section class="portfolio-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s2">
                            <span>Recently solved</span>
                            <h2>Our case study</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frameshowed a lady fitted out with a fur hat and fur</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="portfolio-grids portfolio-slider">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-1.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Business Consulting Project</a></h3>
                                    <p class="cat">Business, Marketing</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-2.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Financial Analysis</a></h3>
                                    <p class="cat">Business, Marketing</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-3.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Investment Planing</a></h3>
                                    <p class="cat">Business, Marketing</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-1.jpg') }}" alt>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Business Consulting Project</a></h3>
                                    <p class="cat">Business, Marketing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end portfolio-section -->


        <!-- start fun-fact-section -->
        <section class="fun-fact-section section-padding pt0">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Doing the right thing, at the right time.</h2>
                        <div class="fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="25">500</span>+</h3>
                                    <p>Cases completed</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="250">20</span>+</h3>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="15">00</span>+</h3>
                                    <p>Awards winning</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="100">00</span>%</h3>
                                    <p>Satisfied customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end fun-fact-section -->


        <!-- start team-section -->
        <section class="team-section section-padding pt0">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s2">
                            <span>Team members</span>
                            <h2>Our expert advisor</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frameshowed a lady fitted out with a fur hat and fur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-area">
                <div class="team-grids team-slider">
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="{{ asset('images/front/team/img-1.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <h4>Dulan dow</h4>
                                <span>CEO fo the company</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="{{ asset('images/front/team/img-2.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <h4>Mulan dow</h4>
                                <span>CEO fo the company</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="{{ asset('images/front/team/img-3.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <h4>Mulan dow</h4>
                                <span>CEO fo the company</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="{{ asset('images/front/team/img-4.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <h4>Mulan dow</h4>
                                <span>CEO fo the company</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="{{ asset('images/front/team/img-5.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <h4>Mulan dow</h4>
                                <span>CEO fo the company</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="inner">
                            <div class="img-holder">
                                <img src="{{ asset('images/front/team/img-1.jpg') }}" alt>
                            </div>
                            <div class="details">
                                <div class="social">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <h4>Mulan dow</h4>
                                <span>CEO fo the company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end team-section -->


        <!-- start testimonial-section -->
        <section class="testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-5">
                        <div class="img-holder">
                            <img src="{{ asset('images/front/testimonials/img-1.png') }}" alt>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                        <div class="details">
                            <p>Travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the </p>
                            <h4>Michel Jhon</h4>
                            <span>Founder of Dahs Foundation</span>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end testimonial-section -->


        <!-- start partners-section -->
        <section class="partners-section">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            <div class="grid">
                                <img src="{{ asset('images/front/partners/img-1.png') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('images/front/partners/img-2.png') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('images/front/partners/img-3.png') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('images/front/partners/img-4.png') }}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{ asset('images/front/partners/img-5.png') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->


        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s2">
                            <span>Recent inside</span>
                            <h2>Tips & news</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frameshowed a lady fitted out with a fur hat and fur</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids clearfix">
                            <div class="grid">
                                <div class="img-cat">
                                    <div class="img-holder">
                                        <img src="{{ asset('images/front/blog/img-1.jpg') }}" alt>
                                    </div>
                                    <div class="cat">
                                        <a href="#">Business</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Feedspot media database has over 100k Influential</a></h3>
                                    <div class="meta">
                                        <div class="author">
                                            <a href="#"> <img src="{{ asset('images/front/blog/author/img-1.jpg') }}" alt> Mich Jhon </a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="ti-comment-alt"></i> 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-cat">
                                    <div class="img-holder">
                                        <img src="{{ asset('images/front/blog/img-2.jpg') }}" alt>
                                    </div>
                                    <div class="cat">
                                        <a href="#">Consulting</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Nationally recognized management consulting firm</a></h3>
                                    <div class="meta">
                                        <div class="author">
                                            <a href="#"> <img src="{{ asset('images/front/blog/author/img-2.jpg') }}" alt> Mich Jhon </a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="ti-comment-alt"></i> 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-cat">
                                    <div class="img-holder">
                                        <img src="{{ asset('images/front/blog/img-3.jpg') }}" alt>
                                    </div>
                                    <div class="cat">
                                        <a href="#">Corporate</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3><a href="#">Employees love coming to work and customers love to do</a></h3>
                                    <div class="meta">
                                        <div class="author">
                                            <a href="#"> <img src="{{ asset('images/front/blog/author/img-1.jpg') }}" alt> Mich Jhon </a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="ti-comment-alt"></i> 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->


        <!-- start contact-section -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="contact-text">
                            <h2>Request a call back.</h2>
                            <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer</p>
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <form method="post" class="contact-validation-active" id="contact-form">
                            <div>
                                <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div>
                            <div>
                                <select name="subject" class="form-control">
                                    <option disabled="disabled" selected>Contact subject</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn-s4">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-section -->


    @endsection

     