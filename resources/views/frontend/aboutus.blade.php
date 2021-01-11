@extends('layouts.frontend')
@section('title', 'About Us | Business Index System')
@section('content')

<body class="gray-bg">

    @include('frontend.partials.loader')

    <!--====== HEADER PART START ======-->
    @section('header_area')
    <div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <div class="page_banner_content">
                <h3 class="title">About</h3>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
    @endsection
    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about_area pt-70 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about_image bg_cover mt-50"
                        style="background-image: url(assets/images/about-image.jpg)"></div>
                </div>
                <div class="col-lg-8">
                    <div class="about_content mt-40">
                        <h3 class="title">We Can Changes Your <span>Business.</span></h3>
                        <p>BIS is the platform justo showcase the businesses based on category and location. Business
                            owners can submit their business data and the team will review it and approve the business
                            data. those approved business data is visible publically on BIS platform. End users can
                            search based on location and category.<br> <br> This Data will be helpful to the people who
                            is looking for business providers in perticular location for perticular category. BIS is
                            acts as the index or Directory of businesses. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section class="services_area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-15">
                        <h4 class="title">Business Providers Here for You</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Look for Services</a></h4>
                            <p>Look for required services based on location and category</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Buy Directly</a></h4>
                            <p>Get required service immediately by contacting through BIS</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Friendly Platform</a></h4>
                            <p>Easy and Responsive UI for Search</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Pay in Person</a></h4>
                            <p>Pay for services Directly to business owners.</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">24/7 Support</a></h4>
                            <p>BIS will give you support 24x7 for Platform related queries</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services d-flex mt-30">
                        <div class="services_icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="services_content media-body">
                            <h4 class="title"><a href="#">Verified Users</a></h4>
                            <p>All businesses are verified before coming to public</p>
                            <a class="more" href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT 2 PART START ======-->

    <section class="about_area_2 pt-70 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_content_2 mt-40">
                        <h3 class="title">Busienss Advertisement <span>Platform.</span></h3>
                        <p>Its not paid Advertisement. Join the system and publish your business data</p>

                        <div class="about_items">
                            <h4 class="items_title">Category Based List</h4>
                            <p>Business can be searched based on category</p>
                        </div>

                        <div class="about_items">
                            <h4 class="items_title">Location Based List</h4>
                            <p>Business can be searched based on location</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image_2 mt-50">
                        <div class="image_1">
                            <img src="assets/images/about-image-1.jpg" alt="About">
                        </div>
                        <div class="image_2">
                            <div class="about_counter">
                                <span class="count"><span class="counter">5,700</span>+</span>
                                <p>Verified Business</p>
                            </div>
                            <img src="assets/images/about-image-2.jpg" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT 2 PART ENDS ======-->

    <!--====== COUNETR PART START ======-->

    <section class="counter_area bg_cover" style="background-image: url(assets/images/counter-bg.jpg)">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-9">
                    <div class="counter_wrapper d-flex flex-wrap justify-content-between">
                        <div class="single_counter">
                            <div class="counter_items d-flex">
                                <div class="counter_icon">
                                    <img src="assets/images/icon/counter-1.svg" alt="counter">
                                </div>
                                <div class="counter_count media-body">
                                    <span class="count"><span class="counter">5000</span>+</span>
                                </div>
                            </div>
                            <p>Published Business Here</p>
                        </div>
                        <div class="single_counter">
                            <div class="counter_items d-flex">
                                <div class="counter_icon">
                                    <img src="assets/images/icon/counter-2.svg" alt="counter">
                                </div>
                                <div class="counter_count media-body">
                                    <span class="count"><span class="counter">300</span>+</span>
                                </div>
                            </div>
                            <p>Register User Using</p>
                        </div>
                        <div class="single_counter">
                            <div class="counter_items d-flex">
                                <div class="counter_icon">
                                    <img src="assets/images/icon/counter-3.svg" alt="counter">
                                </div>
                                <div class="counter_count media-body">
                                    <span class="count"><span class="counter">200</span>+</span>
                                </div>
                            </div>
                            <p>Verified User Using</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== COUNETR PART ENDS ======-->


    <!--====== CALL TO ACTION PART START ======-->

    <section class="call_to_action_area pt-20 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="call_to_action_content mt-45">
                        <h4 class="title">Subscribe For Update</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="call_to_action_form mt-50">
                        <form action="#">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your mail address . . .">
                            <button class="main-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->
    @endsection