<header class="header_area">

    <div class="header_navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="fasse"
                    aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li>
                            <a class="active" href="/"><i class="fas fa-home"></i>
                                <span class="line"></span></a>
                        </li>
                        <li>
                            <a href="/about">About Us<span class="line"></span></a>
                        </li>
                        {{-- <li>
                            <a href="#">Pages <i class="fa fa-angle-down"></i> <span class="line"></span></a>

                            <ul class="sub-menu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="product.html">Listing</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="error-404.html">404</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Blog <i class="fa fa-angle-down"></i> <span class="line"></span></a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="/contact">Contact Us<span class="line"></span></a></li>
                    </ul>
                </div>

                <div class="navbar_btn">
                    @if (Auth::check())
                    <ul>
                        <li>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="fasse"><i class="fas fa-user"></i>
                                    {{ Auth::user()->name }}'s Account</a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <ul>
                                        <li><a href="{{ route('dash') }}"><i class="fas fa-cogs"></i> Dashboard</a></li>
                                        <li><a href="{{ route('user.profile') }}"><i class="fas fa-cog"></i> Profile
                                                Settings</a></li>
                                        <li> <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                <p>
                                                    <i class="fas fa-power-off"></i>
                                                    Logout
                                                </p>
                                            </a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li><a class="sign-up" href="{{ route('signin') }}">Login/Register</a></li>
                    </ul>
                    @endif

                </div>
            </nav>
        </div>
    </div>
    @yield('herosection')
    @yield('header_area')
</header>