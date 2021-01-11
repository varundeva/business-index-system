<section class="published_area pt-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title pb-15">
                    <h3 class="title">Recently Published</h3>
                </div>
            </div>
        </div>
        <div class="published_wrapper">
            <div class="row">
                @foreach ($businesses as $business)
                <div class="col-lg-3 col-sm-6">
                    <div class="single_ads_card mt-30">
                        <div class="ads_card_image">
                            <a href="{{ route('detail',$business['id']) }}"><img
                                    src="{{ URL::asset('storage/businessImages/'.$business['image']) }}" alt="ads"
                                    width="210px" height="157.5"></a>
                        </div>
                        <div class="ads_card_content text-center">
                            <div class="meta d-flex justify-content-between">
                                <p>{{ $business['category'] }}</p>
                                <a class="like" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <h4 class="title"><a
                                    href="{{ route('detail',$business['id']) }}">{{ $business['name'] }}</a>
                            </h4>
                            <p><i class="far fa-map"></i>{{ $business['location'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="published_btn">
                <a href="{{ route('allBusiness') }}" class="main-btn">View All</a>
            </div>
        </div>
    </div>
</section>