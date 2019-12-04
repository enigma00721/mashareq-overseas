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
                                    <li>Procedure</li>
                                </ol>
                                <h2>Documentation Required For Gulf</h2>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->

        <section class="about-section section-padding">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-10 text-center about-text col-lg-offset-1">
                        <p class="">
                        Recruiting agencies are authorized by Government of Nepal, 
                        Ministry of Labour to recruit workers for foreign employment on behalf of overseas employers.
                         These foreign employment companies make direct contact and negotiate with the recruiting agencies for manpower.
                          The licensed recruiting agent in Nepal applies to the Director General of Labour Department
                           for the recruitment permission with the following documents:
                           </p>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col col-lg-12">
                        <div class="faq-section">
                            <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                                <div class="panel panel-default  active-bg-color">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="false" class="collapsed">
                                        Demand Letter
                                        </a>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in" aria-expanded="true">
                                        <div class="panel-body">
                                            <p>
                                            A copy of demand letter from the employer containing all details of vacancy eg. type of workers required, nature and number of workers, salary, qualification and experience and other terms and condition of service and benefits which the employer would offer.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false">Consular Letter</a>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                            A copy of visa advice/consular letter/work permit/N.O.C. etc duly authenticated.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false">Business Agreement</a>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                                Screening the suitable candidates through Bio-Data to initials processing for applies, will be collected form applicant, and interview and trade test will be conduct by the employer (if required) or it directly conducted by agency representation under the given selection criterion by employer. Entry the derails of applicant on computer data system. Normalcy we furnish following step and time taken to let eh candidate. Day 01: Advertising in authorized daily newspaper Day 10: Pre-screening of all suitable candidates Day 10: Final interview of candidates by the client and trade test we applicable.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-7" aria-expanded="false">Power of Attorney</a>
                                    </div>
                                    <div id="collapse-7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                            A copy of power of attorney duly authenticated by the Ministry of foreign affairs or the Ministry of labor from the country of employer in labor of the recruitment agency to act on his behalf.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="false">Employment Agreement</a>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                            A specimen copy of employment contract of service agreement mentioning wages offered and schedule of benefits including accommodation, food, medical facilities leave, etc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" aria-expanded="false">Guarantee of the worker</a>
                                    </div>
                                    <div id="collapse-5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                                The employer will apply those require selected applicant document to the concerned government authority of their respective country. Only the visa processes of candidates who are medically fit, completed by documents chemist and available for travel are processed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" aria-expanded="false">Extra Note</a>
                                    </div>
                                    <div id="collapse-6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>
                                            This Demand Letter / Power of Attorney must be duly endorsed by the Ministry of Foreign Affairs and Chamber of Commerce and finally attested by the Nepalese Embassy existing in the country of employment & Letter of Authority / Inter Party Agreement / Employment Agreement / Guarantee Letter must be attested by the Nepalese Embass
                                            </p>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


    </div>
    <!-- end of page-wrapper -->


    @endsection