<div class="header_content bg_cover" style="background-image: url(assets/images/hero.jpg); z-index: 100;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="content_wrapper">
                    <h3 class="title">Want to Add Your Business?</h3>
                    <p>Please, Join BIS and Publish your Business with Details. Users who want to lookup required
                        business providers need to be Join BIS. You are Free to Access </p>
                    <ul class="header_btn">
                        <li><a class="main-btn" href="#" rel="nofollow">Join Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_search">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="search_wrapper d-flex flex-wrap">
                    <div class="search_column d-flex flex-wrap">
                        <div class="search_select mt-15">
                            <select name="location">
                                <option value="">Select a Location</option>
                                @foreach ($locations as $location)
                                <option value="{{ $location['name'] }}">{{ $location['pincode'] }} -
                                    {{ $location['name'] }}
                                </option>
                                @endforeach
                            </select>
                            <i class="far fa-map"></i>
                        </div>
                        <div class="search_select mt-15">
                            <select name="category">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category['name'] }}">{{ $category['name'] }}</option>
                                @endforeach
                            </select>
                            <i class="fas fa-tag"></i>
                        </div>
                    </div>
                    <div class="search_column d-flex flex-wrap">
                        <div class="search_form mt-15">
                            <input type="text" required name="keyword" placeholder="Type Your Keyword">
                        </div>
                        <div class="search_btn mt-15">
                            <button class="main-btn">Search</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="header_keyword d-sm-flex">
                <span class="title">Trending Keywords:</span>
                <ul class="tags media-body">
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Barber Shop</a></li>
                    <li><a href="#">Grocery</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Footware</a></li>
                    <li><a href="#">Bar</a></li>
                    <li><a href="#">Transport</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>