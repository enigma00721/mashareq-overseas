@extends('layouts.front')

    @section('content')



        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <ol class="breadcrumb">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>Contact</li>
                                </ol>
                                <h2>Contact</h2>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->


        <!-- start contact-pg-section -->
        <section class="contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-6 col-sm-8">
                        <div class="section-title-s4">
                            <span>Let’s Work Together</span>
                            <h2>Get In Touch</h2>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frameshowed a lady fitted out with a fur hat and fur</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-7 col-md-7">
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
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
                            <div class="fullwidth">
                                <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
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

                    <div class="col col-lg-4 col-lg-offset-1 col-md-5">
                        <div class="contact-info">
                            <div>
                                <div class="icon">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div class="details">
                                    <h5>Call us</h5>
                                    <p>+65482456147485, 012574854</p>
                                </div>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="details">
                                    <h5>Mail us</h5>
                                    <p>demo@mail.com</p>
                                </div>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="ti-headphone-alt"></i>
                                </div>
                                <div class="details">
                                    <h5>Fax</h5>
                                    <p>+5+654651654</p>
                                </div>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="details">
                                    <h5>Find us</h5>
                                    <p>45, street melabo direm aduto.</p>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-section -->


        <!--  start contact-map -->
        <section class="contact-map-section section-padding pt0">
            <h2 class="hidden">Contact map</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact-map -->

    </div>
    <!-- end of page-wrapper -->


    @endsection