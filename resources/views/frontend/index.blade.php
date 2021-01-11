@extends('layouts.frontend')


@can('Create Permission')
@endcan

@section('title', 'Business Index System')

@section('herosection')
@include('frontend.partials.herosection')
@endsection

@section('content')

<body class="gray-bg">

    <!--PRELOADER-->
    @include('frontend.partials.loader')
    <!--PRELOADER ENDS -->

    <!--CATEGORY START-->

    @include('frontend.partials.category')
    <!-- CATEGORY ENDS -->

    <!--ADS START-->
    {{-- @include('frontend.partials.classified') --}}
    <!--ADS ENDS-->

    <!--CHOOSE US PART START-->

    <section class="choose_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose_content pt-35">
                        <div class="section_title pb-20">
                            <h3 class="title">Why You Choose Us?</h3>
                        </div>
                        <p>BIS system is powerful platform to spread business service based on location and category.
                            end user can easily findout required business owners/providers quickly.
                        </p>

                        <ul class="list">
                            <li><i class="fa fa-check"></i> Powerful feature one.</li>
                            <li><i class="fa fa-check"></i> Much needed and important feature two.</li>
                            <li><i class="fa fa-check"></i> Essential features to rock.</li>
                        </ul>
                        <a href="#" class="main-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose_image">
            <div class="image">
                <img src="assets/images/choose.png" alt="choose">
            </div>
        </div>
    </section>

    <!--====== CHOOSE PART ENDS ======-->

    <!--====== LOCATIONS PART START ======-->

    <section class="locations_area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title pb-15">
                        <h3 class="title">Explore The Locations</h3>
                    </div>
                </div>
            </div>
            <div class="locations_wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single_locations mt-30">
                            <div class="locations_image">
                                <img src="assets/images/locations-1.jpg" alt="Locations">
                            </div>
                            <div class="locations_content">
                                <h5 class="title"><a href="product.html"><i class="far fa-map"></i>Bangalore</a></h5>
                                <p>25 business posted in this location</p>
                                {{-- <a class="view" href="#">View All Business Here <i class="fa fa-angle-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single_locations mt-30">
                            <div class="locations_image">
                                <img src="assets/images/locations-2.jpg" alt="Locations">
                            </div>
                            <div class="locations_content">
                                <h5 class="title"><a href="product.html"><i class="far fa-map"></i>Mysore</a></h5>
                                <p>7 business posted in this location</p>
                                {{-- <a class="view" href="#">View All Business Here <i class="fa fa-angle-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single_locations mt-30">
                            <div class="locations_image">
                                <img src="assets/images/locations-3.jpg" alt="Locations">
                            </div>
                            <div class="locations_content">
                                <h5 class="title"><a href="product.html"><i class="far fa-map"></i>Mangalore</a></h5>
                                <p>3 business posted in this location</p>
                                {{-- <a class="view" href="#">View All Business Here <i class="fa fa-angle-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="locations_btn text-center">
                    <a class="main-btn" href="#">View all Locations</a>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- LOCATIONS PART ENDS -->

    <!-- COUNETR START -->

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

    <!-- COUNETR ENDS -->

    <!--PUBLISHED START -->

    @include('frontend.partials.latest')

    <!-- PUBLISHED ENDS -->

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

    <!-- CALL TO ACTION ENDS -->
    @endsection