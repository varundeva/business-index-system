@extends('layouts.frontend')
@section('title','Business Detail')

@section('header_area')
<div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <div class="page_banner_content">
            <h3 class="title">{{ $business['name'] }}</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">{{ $business['category'] }}</a></li>
                <li>{{ $business['name'] }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="product_details_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product_details mt-50">
                    <div class="product_image">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="details-1" role="tabpanel"
                                aria-labelledby="details-1-tab">
                                <img src="{{ URL::asset('storage/businessImages/'.$business['image']) }}"
                                    alt="product details">
                                <ul class="sticker">
                                    <li>Featured</li>
                                    <li>New</li>
                                </ul>
                            </div>
                            {{-- <div class="tab-pane fade" id="details-2" role="tabpanel" aria-labelledby="details-2-tab">
                                <img src="assets/images/product_details-2.jpg" alt="product details">
                            </div>
                            <div class="tab-pane fade" id="details-3" role="tabpanel" aria-labelledby="details-3-tab">
                                <img src="assets/images/product_details-3.jpg" alt="product details">
                            </div>
                            <div class="tab-pane fade" id="details-4" role="tabpanel" aria-labelledby="details-4-tab">
                                <img src="assets/images/product_details-4.jpg" alt="product details">
                            </div> --}}
                        </div>
                        {{-- <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="details-1-tab" data-toggle="tab" href="#details-1" role="tab"
                                    aria-controls="details-1" aria-selected="true">
                                    <img src="assets/images/product_details-1.jpg" alt="product details">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="details-2-tab" data-toggle="tab" href="#details-2" role="tab"
                                    aria-controls="details-2" aria-selected="false">
                                    <img src="assets/images/product_details-2.jpg" alt="product details">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="details-3-tab" data-toggle="tab" href="#details-3" role="tab"
                                    aria-controls="details-3" aria-selected="false">
                                    <img src="assets/images/product_details-3.jpg" alt="product details">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="details-4-tab" data-toggle="tab" href="#details-4" role="tab"
                                    aria-controls="details-4" aria-selected="false">
                                    <img src="assets/images/product_details-4.jpg" alt="product details">
                                </a>
                            </li>
                        </ul> --}}
                    </div>
                    {{-- <div class="product_details_meta d-sm-flex justify-content-between align-items-end">
                        <div class="product_date">
                            <ul class="meta">
                                <li><i class="fa fa-eye"></i><a href="#">1573 VIEWS</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="product_details_features">
                        <div class="product_details_title">
                            <h5 class="title">Details :</h5>
                        </div>
                        <div class="details_features_wrapper d-flex flex-wrap">
                            <div class="single_features d-flex">
                                <h6 class="features_title">Categeory :</h6>
                                <p>{{ $business['category'] }}</p>
                            </div>
                            <div class="single_features d-flex">
                                <h6 class="features_title">Location :</h6>
                                <p>{{ $business['location'] }}</p>
                            </div>
                            {{-- <div class="single_features d-flex">
                                <h6 class="features_title">Pincode :</h6>
                                <p>{{ $business[] }}</p>
                        </div>
                        <div class="single_features d-flex">
                            <h6 class="features_title">Features :</h6>
                            <p class="media-body">Camera, Touch Screen, 3G, 4G, Bluetooth, Dual Sim, Dual Lens
                                Camera, Expandable Memory, Fingerprint Sensor</p>
                        </div> --}}
                    </div>
                </div>
                <div class="product_details_description">
                    <div class="product_details_title">
                        <h5 class="title">Description :</h5>
                    </div>
                    <p>{{$business['description']}}</p>
                </div>
            </div>
            {{-- <div class="product_rating mt-30">
                <div class="product_rating_top_bar">
                    <div class="product_details_title">
                        <h5 class="title">1 Review :</h5>
                    </div>
                    <div class="product_rating_star">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="single_rating_author mt-30">
                    <div class="rating_author d-flex align-items-center">
                        <div class="author_image">
                            <img src="assets/images/author-1.jpg" alt="author">
                        </div>
                        <div class="author_content media-body">
                            <h5 class="author_name">Angel Grantham</h5>
                            <span class="date">25 January, 2023</span>
                            <ul class="rating_star">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rating_description">
                        <p>That, sleep. Reposed that considerable, found a failing. In a means, turned would
                            according of semantics, far were remember support from waved. had to of fully then can
                            name blocks being her not in afforded. devotion logged to and remember and the of in the
                            language would </p>
                    </div>
                </div>
            </div>
            <div class="product_rating_form mt-30">
                <div class="product_details_title">
                    <h5 class="title">Leave Your Review :</h5>
                </div>
                <div class="product_rating_form_wrapper d-flex flex-wrap">
                    <div class="product_details_rating_wrapper">
                        <div class="product_details_rating mt-20">
                            <p><i class="fa fa-star-o"></i> Your Rating</p>
                            <ul class="rating_radio">
                                <li>
                                    <input type="radio" checked="" name="radio" id="radio1">
                                    <label for="radio1"></label>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio2">
                                    <label for="radio2"></label>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio3">
                                    <label for="radio3"></label>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio4">
                                    <label for="radio4"></label>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                </li>
                                <li>
                                    <input type="radio" name="radio" id="radio5">
                                    <label for="radio5"></label>
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_details_form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" placeholder="Enter your name . . .">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" placeholder="Enter your mail address . . .">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea placeholder="Type your review . . ."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
            <div class="related_product mt-45">
                <div class="section_title">
                    <h3 class="title">Related Busienss</h3>
                </div>
                <div class="row">
                    @foreach ($relatedBusinesses as $related)
                    <div class="col-md-4">
                        <div class="single_ads_card mt-30">
                            <div class="ads_card_image">
                                <a href="{{ route('detail',$related['id']) }}"><img
                                        src="{{ URL::asset('storage/businessImages/'.$related['image']) }}" alt="ads"
                                        width="210px" height="157.5"></a>
                            </div>
                            <div class="ads_card_content">
                                <div class="meta d-flex justify-content-between">
                                    <p>{{ $related['category'] }}</p>
                                    <a class="like" href="#"><i class="fal fa-heart"></i></a>
                                </div>
                                <h4 class="title"><a
                                        href="{{ route('detail',$related['id']) }}">{{ $related['name'] }}</a></h4>
                                <p><i class="far fa-map-marker-alt"></i>{{ $related['location'] }}</p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="related_product_btn">
                    <a class="main-btn" href="{{ route('allBusiness') }}">View all Business</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="product_details_sidebar pt-20">
                <div class="product_sidebar_owner mt-30">
                    <div class="product_details_title">
                        <h5 class="title">Business Address</h5>
                    </div>
                    <div class="product_owner_wrapper mt-20">
                        <div class="owner_author d-flex align-items-center">
                            <div class="author_image">
                                {{-- <img src="assets/images/author-2.jpg" alt="author"> --}}
                            </div>
                            <div class="author_content media-body">
                                <h5 class="author_name">{{ $business['name'] }}</h5>
                                <p>Last Updated - {{ date('d-m-Y', strtotime(  $business['updated_at'])) }}</p>
                            </div>
                        </div>
                        <div class="owner_address d-flex">
                            <div class="address_icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="address_content media-body">
                                <p>{{ $business['address'] }}</p>
                                {{-- <a href="#">View Store</a> --}}
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="mailto:{{ $business['email'] }}">{{ $business['email'] }}</a>
                        </div>
                        <div class="owner_call">
                            <a class="main-btn" href="tel:{{ $business['phone'] }}"><i
                                    class="fas fa-phone"></i>{{ $business['phone'] }}</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="product_sidebar_contact mt-30">
                    <div class="product_details_title">
                        <h5 class="title">Contact Seller :</h5>
                    </div>
                    <div class="sidebar_contact_form">
                        <form action="#">
                            <div class="single_form">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="single_form">
                                <input type="email" placeholder="Mail address">
                            </div>
                            <div class="single_form">
                                <textarea placeholder="Type message"></textarea>
                            </div>
                            <div class="single_form">
                                <button class="main-btn"><i class="fas fa-paper-plane"></i>Send to Seller</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="product_sidebar_action mt-30">
                    <div class="product_details_title">
                        <h5 class="title">Action :</h5>
                    </div>
                    <div class="sidebar_action_items d-flex justify-content-between align-items-center">
                        <div class="single_action">
                            <a href="#">
                                <i class="fas fa-share-alt"></i>
                                <span>Share</span>
                            </a>
                        </div>
                        <div class="single_action">
                            <a href="#">
                                <i class="fas fa-bookmark"></i>
                                <span>Save</span>
                            </a>
                        </div>
                        <div class="single_action">
                            <a href="#">
                                <i class="fas fa-heart"></i>
                                <span>Like</span>
                            </a>
                        </div>
                        <div class="single_action">
                            <a href="#">
                                <i class="fas fa-flag"></i>
                                <span>Bookmark</span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="product_sidebar_map mt-30">
                    <div class="product_details_title">
                        <h5 class="title">Location Map :</h5>
                    </div>
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div> --}}
                {{-- <div class="product_sidebar_tips mt-30">
                    <div class="product_details_title">
                        <h5 class="title">Location Map :</h5>
                    </div>
                    <div class="sidebar_tips">
                        <ul class="tips_list">
                            <li><span></span> Began because on to lay about manage been.</li>
                            <li><span></span> Is all increasing up in it he as would was epic and perception.</li>
                            <li><span></span> Console great gradually pattern.</li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
</section>
@endsection