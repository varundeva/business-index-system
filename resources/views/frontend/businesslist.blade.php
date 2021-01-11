@extends('layouts.frontend')
@section('title','Business List')


@section('header_area')
<div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <div class="page_banner_content">
            <h3 class="title">Business Search</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Search</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="product_page pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="product_sidebar pt-20">
                    <div class="sidebar_categories mt-30">
                        <div class="sidebar_title">
                            <h5 class="title">Categories</h5>
                        </div>
                        <div class="sidebar_categories_content">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="sidebar_categories_list">
                                            @foreach ($categories as $category)
                                            <li><a href="#"><i class="fas fa-caret-right"></i>
                                                    {{ $category['name'] }}</a></li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="product_topbar d-md-flex align-items-center justify-content-between pb-30">
                    <div class="product_select pt-40 d-flex flex-wrap">
                        {{-- <select>
                            <option value="0">Story by Acceding</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="4">Potato</option>
                        </select>
                        <select>
                            <option value="0">Location</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="4">Potato</option>
                        </select>
                        <select>
                            <option value="0">12 Items</option>
                            <option value="1">Some option</option>
                            <option value="2">Another option</option>
                            <option value="4">Potato</option>
                        </select> --}}
                    </div>
                    <div class="product_tab_menu mt-50">
                        <ul class="nav justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="grid-tab" data-toggle="tab" href="#grid" role="tab"
                                    aria-controls="grid" aria-selected="true">
                                    <i class="fas fa-th"></i>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list"
                                    aria-selected="false">
                                    <i class="fas fa-th-list"></i>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="product_grid">
                            <div class="row">
                                @foreach ($businesses as $business )
                                <div class="col-lg-6 col-sm-6">
                                    <div class="single_ads_card mt-30">
                                        <div class="ads_card_image">
                                            <a href="{{ route('detail',$business['id']) }}"><img
                                                    src="{{ URL::asset('storage/businessImages/'.$business['image']) }}"
                                                    alt="ads" width="310px" height="257.5"></a>
                                        </div>
                                        <div class="ads_card_content text-center">
                                            <div class="meta d-flex justify-content-between">
                                                {{ $business['category'] }}
                                                <a class="like" href="#"><i class="fas fa-heart"></i></a>
                                            </div>
                                            <h4 class="title"><a
                                                    href="{{ route('detail',$business['id']) }}">{{ $business['name' ]}}</a>
                                            </h4>
                                            <p><i class="far fa-map"></i>{{ $business['location'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="product_list">
                            @foreach ( $businesses as $business )
                            <div class="single_ads_card ads_list d-sm-flex mt-30">
                                <div class="ads_card_image">
                                    <a href="{{ route('detail',$business['id']) }}"><img
                        src="{{ URL::asset('storage/businessImages/'.$business['image']) }}" alt="ads"
                        width="210px"></a>
                </div>
                <div class="ads_card_content media-body">
                    <div class="meta d-flex justify-content-between">
                        {{ $business['category'] }}
                        <a class="like" href="#"><i class="fal fa-heart"></i></a>
                    </div>
                    <h4 class="title"><a href="{{ route('detail',$business['id']) }}">{{ $business['name' ]}}</a>
                    </h4>
                    <p><i class="far fa-map-marker-alt"></i>{{ $business['location'] }}</p>


                </div>
            </div>
            @endforeach



        </div>
    </div> --}}
    </div>
    <div class="pagination_wrapper mt-50">
        {{ $businesses->links('vendor.pagination.bootstrap-4') }}
    </div>
    </div>
    </div>
    </div>
</section>
@endsection