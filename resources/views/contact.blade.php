@php($title = "")
@section('meta_desc')
@endsection
@extends('layouts.default')
@section('content')

  <!-- Page Header Start -->
  <div class="page-header contact-page-header bg-radius-section parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact Us</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Contact Us Start -->
<div class="page-contact-us bg-radius-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Contact Information Start -->
                <div class="contact-information">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Contact Us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Get In Touch</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">For inquiries, appointments, or more information about our physiotherapy services, feel free to contact us.</p>
                    </div>
                    <!-- Section Title End -->


                    <div class="contact-information-box pt-3">
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/telephone.png') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3><a href="tel:+91 8591247643"  class="support-color">+91 8591247643</a></h3>
                            </div>
                        </div>

                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/mail.png') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3><a href="mailto:purvideshpande@gmail.com"  class="support-color">purvideshpande@gmail.com</a></h3>
                            </div>
                        </div>

                        <div class="contact-info-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/location.png') }}" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Dr. Purvi's physiotherapy and rehabilitation clinic</h3>
                                <p>Plot no 52 & 56, Shop, 24, <br>Haware Splendor Rd, CHS, <br> Sector 20, Kharghar, Navi Mumbai, <br> Maharashtra 410210</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Information End -->
            </div>

            <div class="col-lg-6">
                <!-- Contact Form Start -->
                <div class="contact-us-form">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Contact Us Anytime</h2>

                    </div>
                    <!-- Section Title End -->

                    <form id="" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="email" name ="email" class="form-control" id="email" placeholder="Email" required>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone No" required>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-form-btn">
                                    <button type="submit" class="btn-default"><span>submit now</span></button>
                                    <!-- <div id="msgSubmit" class="h3 hidden"></div> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

<!-- Google Map Start -->
<div class="google-map bg-radius-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3068950784177!2d73.07183897596494!3d19.050239752779373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3c87f8ac05b%3A0x5aca6b729cf3cbd8!2sDr.%20Purvi&#39;s%20physiotherapy%20and%20rehabilitation%20clinic!5e0!3m2!1sen!2sin!4v1744260754668!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <!-- Google Map Iframe End -->
            </div>
        </div>
    </div>
</div>
<!-- Google Map End -->



@stop