@extends('layouts.frontend')
@section('title', 'Contact Us | Business Index System')
@section('header_area')
<div class="page_banner bg_cover" style="background-image: url(assets/images/page-banner.jpg)">
    <div class="container">
        <div class="page_banner_content">
            <h3 class="title">Contact Us</h3>
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="contact_page">
    <div class="container">
        <div class="contact_map">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497699.9973874144!2d77.35074421903857!3d12.95384772557775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1608303560532!5m2!1sen!2sin"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="contact_form mt-30">
                    <div class="contact_title">
                        <h5 class="title">Send Message Us </h5>
                    </div>
                    <form id="contact-form" action="assets/contact.php" method="post">
                        <div class="contact_form_wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" name="name" placeholder="Name">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="email" name="email" placeholder="Email">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <i class="far fa-i-cursor"></i>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <i class="fas fa-edit"></i>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">Sand Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact_info">
                    <div class="contact_title mt-30">
                        <h5 class="title">Get In Touch</h5>
                    </div>
                    <p>Lorem Ipsum Is simply dummy text of the printing and typesetting Industry. Lorem Ipsum has been
                        the Industry's</p>

                    <div class="single_info d-flex">
                        <div class="info_icon">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>Level 13, 2 Ellzabeth St, Lorem Ipsum Is simply dummy text</p>
                        </div>
                    </div>
                    <div class="single_info d-flex">
                        <div class="info_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>+88 0123456789</p>
                            <p>+88 0123456789</p>
                        </div>
                    </div>
                    <div class="single_info d-flex">
                        <div class="info_icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="info_content media-body">
                            <p>info@classified.com</p>
                            <p>info.classified@gmail..com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection