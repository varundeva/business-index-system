@extends('layouts.frontend')
@section('title','Sign Up')

@section('header_area')
<div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <div class="page_banner_content">
            <h3 class="title">Sign Up</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Sign In</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="sign_in_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                @include('partials.alert')
                <div class="sign_in_form">
                    <div class="sign_title">
                        <h5 class="title">Sign Up Now</h5>
                    </div>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="sign_form_wrapper">
                            <div class="single_form">
                                <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}"
                                    required autocomplete="name" autofocus>
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="single_form">
                                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="single_form">
                                <input type="password" placeholder="Password" name="password" required
                                    autocomplete="current-password">
                                <i class="fas fa-key"></i>
                            </div>
                            <div class="single_form">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                    required autocomplete="new-password">
                                <i class="fas fa-key"></i>
                            </div>

                            <p class="text-right pt-3">Already Have Account? <a href="{{ route('signin') }}">Sign In
                                    Now</a></p>
                            <div class="single_form">
                                <button class="main-btn" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection