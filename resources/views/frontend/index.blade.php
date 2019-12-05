@extends('layouts.front')

    @section('content')

        <!-- start of hero slider -->
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
                                    <h2>Consulting Agency</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>
                                     We are one of the Leading Manpower Recruitment Agency
                                    </p>
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
                                    <p>
                                    We are one of the Leading Manpower Recruitment Agency
                                    </p>                                    
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
                                    <p>
                                     We are one of the Leading Manpower Recruitment Agency
                                    </p>
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
        <section class="p5 about-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-5">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>Consulting agency with 15 years of experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                            Mashareq Internation Overseas Pvt. Ltd. rose from industry exposure of many years and with even more inclination to quality
                             it has constantly been rising. Nothing but the quality and only quality has been our guiding principle ever since.
                              Quality as expected it has given us a good growth and also made us the company of first choice among the clients.
                            </p>
                            <a href="{{route('aboutus')}}" class="theme-btn-s2">Read More</a>
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
        <section class="service-section-s2 p5">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="section-title-s2">
                            <span>What we do</span>
                            <h2>Our Services</h2>
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
                                <h3><a href="#">Overseas Recruitment</a></h3>
                                <p>
                                Mashareq Overseas is a leading HR professional management organization in Nepal,
                                 which has been providing overseas recruitment services to our clients in Malaysia, 
                                 Saudi Arabia, Kuwait, Dubai, U.A.E, Oman, Qatar and Middle East countries.
                                </p>
                                <a href="#" class="theme-btn-s4">Read More
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-suitcase"></i>
                                </div>
                                <h3><a href="#">Training and Orientation</a></h3>
                                <p>
                                    Before going abroad for working purpose, it is compulsion to be acknowledged about the country. 
                                    For this purpose, we have to take orientation class. 
                                    In orientation class, we can get more information about the culture, traditions, 
                                    ways of sustaining, rules and regulations and so on.
                                </p>
                                <a href="#" class="theme-btn-s4">Read More
                                    <i class="ti-arrow-right"></i>
                                </a>
                            </div>
                            <div class="grid">
                                <div class="overlay"></div>
                                <div class="icon">
                                    <i class="fi flaticon-brain"></i>
                                </div>
                                <h3><a href="#">Travel Management</a></h3>
                                <p>
                                    Once Contract signing with the employee is done, travel arrangement becomes the final procedure. 
                                    For convenience to the employee and the employer, Mashareq makescomplete travel arrangements.
                                     Tickets, VISA and various travel assistance for mobilization and demobilization of
                                     personnel from home country to the remote region is handled by us.
                                </p>
                                <a href="#" class="theme-btn-s4">Read More
                                    <i class="ti-arrow-right"></i>
                                </a>
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
                            <h2>15 years experience in overseas recruitment</h2>
                            <p>
                            Mashareq Overseas is the leading Manpower Company in Nepal that provides manpower 
                            recruitment services to various reputed company across Middle East, Europe, North & 
                            South Eastern Asia and abroad.
                            </p>
                            <div class="phone-btn">
                                <a href="{{route('contactus')}}" class="theme-btn-s2">Get In Touch</a>
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
                            <span>Job Demands</span>
                            <h2>Recent Openings</h2>
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
                                <div class="details text-center">
                                    <h3><a href="#">Store Keeper</a></h3>
                                    <ul class="cat">
                                        <li>Company: AlDhabhi Pvt Ltd</li>
                                        <li>Required No: 20</li>
                                        <li>Country: Qatar</li>
                                    </ul>
                                    <a href="" class="theme-btn-s4">Read More</a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-2.jpg') }}" alt>
                                </div>
                                 <div class="details text-center">
                                    <h3><a href="#">Security Guard</a></h3>
                                    <ul class="cat">
                                        <li>Company: Transguard UAE Group LLC </li>
                                        <li>Required No: 30</li>
                                        <li>Country: Qatar</li>
                                    </ul>
                                    <a href="" class="theme-btn-s4">Read More</a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-3.jpg') }}" alt>
                                </div>
                                 <div class="details text-center">
                                    <h3><a href="#">Fruit Picker</a></h3>
                                    <ul class="cat">
                                        <li>Company: Al Tammi Global</li>
                                        <li>Required No: 40</li>
                                        <li>Country: Qatar</li>
                                    </ul>
                                    <a href="" class="theme-btn-s4">Read More</a>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="{{ asset('images/front/portfolio/img-1.jpg') }}" alt>
                                </div>
                                 <div class="details text-center">
                                    <h3><a href="#">Store Keeper</a></h3>
                                    <ul class="cat">
                                        <li>Company: AlDhabhi</li>
                                        <li>Required No: 20</li>
                                        <li>Country: Qatar</li>
                                    </ul>
                                    <a href="" class="theme-btn-s4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end portfolio-section -->


        <!-- start fun-fact-section about company info-->
        <section class="fun-fact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Doing the right thing, at the right time.</h2>
                        <div class="fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="500">100</span>+</h3>
                                    <p>Workers Deployed</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="15">10</span>+</h3>
                                    <p>Years of Experience</p>
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
         <section class="team-section section-padding">
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

                <div class="content-area">
                    <div class="team-grids team-slider-s2">
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{asset('images/front/team/img-1.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Dulan dow</h4>
                                    <span>CEO fo the company</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{asset('images/front/team/img-2.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Mulan dow</h4>
                                    <span>CEO fo the company</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{asset('images/front/team/img-3.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Mulan dow</h4>
                                    <span>CEO fo the company</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{asset('images/front/team/img-4.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Mulan dow</h4>
                                    <span>CEO fo the company</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{asset('images/front/team/img-5.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Mulan dow</h4>
                                    <span>CEO fo the company</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="inner">
                                <div class="img-holder">
                                    <img src="{{asset('images/front/team/img-1.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <h4>Mulan dow</h4>
                                    <span>CEO fo the company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- end team-section -->


        <!-- start testimonial-section -->
        {{-- <section class="testimonial-section">
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
        </section> --}}
        <!-- end testimonial-section -->


        <!-- start partners-section -->
        <section class="partners-section">
            <h2 class="hidden text-center">Partners</h2>
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
        {{-- <section class="blog-section section-padding">
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
        </section> --}}
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

     