@extends('layouts.frontend')
@section('title','Sign In')

@section('header_area')
<div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <div class="page_banner_content">
            <h3 class="title">Sign In</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Sign In</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="sign_in_area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                @include('partials.alert')
                <div class="sign_in_form">
                    <div class="sign_title">
                        <h5 class="title">Sign In Now</h5>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="sign_form_wrapper">
                            <div class="single_form">
                                <input type="email" placeholder="E-Mail" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus>
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="single_form">
                                <input type="password" placeholder="Password" name="password" required
                                    autocomplete="current-password">
                                <i class="fas fa-key"></i>
                            </div>
                            <div class="single_form d-sm-flex justify-content-between">
                                <div class="sign_checkbox">
                                    <input type="checkbox" id="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox"></label>
                                    <span>Keep me logged in</span>
                                </div>
                                <div class="sign_forgot">
                                    <a href="#">Forgot Password?</a>
                                </div>
                            </div>

                            <p class="text-right">Still Not Joined? <a href="{{ route('signup') }}">Register
                                    Now</a></p>
                            <div class="single_form">
                                <button class="main-btn" type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection