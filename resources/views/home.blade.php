@php($title = 'Physiotherapy & Rehabilitation Center')
@section('meta_desc')Physiotherapy & Rehabilitation Center @endsection

@extends('layouts.default')
@section('content')



<!-- Hero Section Start -->
<div class="hero-slider d-none d-md-block d-lg-block">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-image">
                    <img src="{{ asset('/resources/assets/images/hero-bg-1.png') }}" alt="Slide 1">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-image">
                    <img src="{{ asset('/resources/assets/images/hero-bg-1.png') }}" alt="Slide 2">
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>


<!-- for mobile view -->
<div class="hero-slider d-block d-md-none d-lg-none">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-image">
                    <img src="{{ asset('/resources/assets/images/hero-mobile-1.png') }}" alt="Slide 1">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-image">
                    <img src="{{ asset('/resources/assets/images/hero-mobile-1.png') }}" alt="Slide 2">
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- Hero Section End -->

<!-- Our Benefits Secton Start -->
<div class="our-benefits bg-radius-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <!-- Benefits Item Start -->
                <div class="benefits-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/therapist.png') }}" alt="">
                    </div>
                    <div class="benefits-content">
                        <h3> Orthopedic Care</h3>
                        <p></p>
                    </div>
                </div>
                <!-- Benefits Item End -->
            </div>

            <div class="col-lg-4 col-md-4">
                <!-- Benefits Item Start -->
                <div class="benefits-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/therapist.png') }}" alt="">
                    </div>
                    <div class="benefits-content">
                        <h3>Post-Surgical Rehabilitation</h3>
                    </div>
                </div>
                <!-- Benefits Item End -->
            </div>

            <div class="col-lg-4 col-md-4">
                <!-- Benefits Item Start -->
                <div class="benefits-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/therapist.png') }}" alt="">
                    </div>
                    <div class="benefits-content">
                        <h3>Women's Health</h3>
                    </div>
                </div>
                <!-- Benefits Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Benefits Secton End -->

<!-- FAQ Section Start -->
<!-- <div class="how-it-work bg-radius-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">

                <div class="how-work-images">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <div class="how-work-image-box-1">
                                <div class="how-work-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq2.jpg') }}"
                                            alt="Physiotherapy Consultation">
                                    </figure>
                                </div>
                                <div class="how-work-img-3">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq1.jpg') }}"
                                            alt="Treatment Session">
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="col-8">
                            <div class="how-work-image-box-2">
                                <div class="how-work-img-2">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq3.jpg') }}" alt="Patient Care">
                                    </figure>
                                </div>
                                <div class="how-work-img-4">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq4.jpg') }}"
                                            alt="Therapy Equipment">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-lg-2 order-1">
                <div class="how-work-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Dr. Purvi Deshpande</h2>
                    </div>

                    <div class="page-about-content">
                        <div class="section-title">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Welcome to Dr. Purvi Deshpande's Rehabilitation Clinic, where we specialize in restoring function, alleviating pain, and enhancing quality of life through expert physiotherapy services. Dr. Purvi Deshpande, a seasoned physiotherapist based in Navi Mumbai, passionately combines advanced techniques with compassionate care to guide each patient on their unique path to recovery.</p>
                        </div>

                        <div class="page-about-content-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="page-about-content-list">
                                        <div class="page-about-content-item wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="icon-box">
                                                <img src="{{ asset('/resources/assets/images/icon-page-about-list-1.svg') }}"
                                                    alt="">
                                            </div>
                                            <div class="page-about-item-content">
                                                <p>Highly skilled and experienced</p>
                                            </div>
                                        </div>

                                        <div class="page-about-content-item wow fadeInUp" data-wow-delay="0.75s">
                                            <div class="icon-box">
                                                <img src="{{ asset('/resources/assets/images/icon-page-about-list-2.svg') }}"
                                                    alt="">
                                            </div>
                                            <div class="page-about-item-content">
                                                <p>Certified high trained</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="page-about-body-content wow fadeInUp" data-wow-delay="1s">
                                        <p>Our state-of-the-art facility, advanced therapies, and patient-centered
                                            approach set us apart, making Physiocare the best choice for achieving your
                                            health and wellness goals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-about-content-btn wow fadeInUp" data-wow-delay="1.25s">
                            <a href="#" class="btn-default"><span>book appointment</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- FAQ Section End -->


<!-- About Us Section Start -->
<div class="about-us bg-radius-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Dr. Purvi Deshpande</h2>
                        <p class="" data-wow-delay="">Dr. Purvi Deshpande is a leading physiotherapist in Navi Mumbai,
                            dedicated to providing personalized, holistic care that goes beyond addressing symptoms to
                            restore full health and mobility. Her innovative approach blends modern treatment techniques
                            with a deep commitment to patient well-being.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <!-- About Content List Start -->
                                <div class="about-content-list">
                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="icon-box">
                                            <img src="{{ asset('/resources/assets/images/icon-about-list-1.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <p>expert Therapy</p>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->

                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="icon-box">
                                            <img src="{{ asset('/resources/assets/images/icon-about-list-2.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <p>advanced techniques</p>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->

                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="icon-box">
                                            <img src="{{ asset('/resources/assets/images/icon-about-list-3.svg') }}"
                                                alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <p>Physical Therapy</p>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->
                                </div>
                                <!-- About Content List End -->
                            </div>


                        </div>
                    </div>
                    <!-- About Content Body End -->

                    <!-- About Content Footer Start -->
                    <div class="about-content-footer wow fadeInUp" data-wow-delay="0.55s">
                        <a href="#" class="btn-default"><span>book appointment</span></a>
                    </div>
                    <!-- About Content Footer End -->
                </div>
            </div>

            <div class="col-lg-6">
                <!-- About Us Images Start -->
                <div class="about-us-images">
                    <div class="about-image img-box-1">
                        <figure class="image-anime">
                            <img src="{{ asset('/resources/assets/images/about-us-img-1.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="about-image img-box-2">
                        <figure class="image-anime">
                            <img src="{{ asset('/resources/assets/images/about-us-1.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="about-image img-box-3">
                        <figure class="image-anime">
                            <img src="{{ asset('/resources/assets/images/about-us-2.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="about-image img-box-4">
                        <figure class="image-anime">
                            <img src="{{ asset('/resources/assets/images/about-us-3.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="about-circle-logo">
                        <img src="{{ asset('/resources/assets/images/lotus.png') }}" alt="">
                    </div>
                </div>
                <!-- About Us Images End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->

<!-- Our Services Section Start -->
<div class="our-services bg-radius-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">services</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Our Services</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">Dr. Purvi Deshpande offers a range of specialized
                        physiotherapy services focused on personalized, evidence-based treatments.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp">
                    <a href="tel:+91 8591247643" class="btn-default"><span>make an appointment</span></a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <!-- Service Item Image Start -->
                    <div class="service-item-image">
                        <figure>
                            <img src="{{ asset('/resources/assets/images/physiotherapy.jpg') }}" class="w-100" alt="">
                        </figure>
                    </div>
                    <!-- Service Item Image End -->

                    <!-- Service Item Icon Start -->
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/icon-service-1.svg') }}" alt="">
                    </div>
                    <!-- Service Item Icon ENd -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>Physiotherapy</h3>
                            <p>Personalized sessions to restore movement and alleviate pain.</p>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn">
                            <a href="#"><img src="{{ asset('/resources/assets/images/arrow-readmore-btn.svg') }}"
                                    alt=""></a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Body End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.15s">
                    <!-- Service Item Image Start -->
                    <div class="service-item-image">
                        <figure>
                            <img src="{{ asset('/resources/assets/images/rehabilitation.jpg') }}" class="w-100" alt="">
                        </figure>
                    </div>
                    <!-- Service Item Image End -->

                    <!-- Service Item Icon Start -->
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/icon-service-2.svg') }}" alt="">
                    </div>
                    <!-- Service Item Icon ENd -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>Rehabilitation</h3>
                            <p>Comprehensive recovery programs tailored to your needs.</p>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn">
                            <a href="#"><img src="{{ asset('/resources/assets/images/arrow-readmore-btn.svg') }}"
                                    alt=""></a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Body End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Service Item Image Start -->
                    <div class="service-item-image">
                        <figure>
                            <img src="{{ asset('/resources/assets/images/electrotherapy.jpg') }}" class="w-100" alt="">
                        </figure>
                    </div>
                    <!-- Service Item Image End -->

                    <!-- Service Item Icon Start -->
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/icon-service-3.svg') }}" alt="">
                    </div>
                    <!-- Service Item Icon ENd -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>Electrotherapy</h3>
                            <p>Advanced electrical stimulation to accelerate healing.</p>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn">
                            <a href="#"><img src="{{ asset('/resources/assets/images/arrow-readmore-btn.svg') }}"
                                    alt=""></a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Body End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.35s">
                    <!-- Service Item Image Start -->
                    <div class="service-item-image">
                        <figure>
                            <img src="{{ asset('/resources/assets/images/exercise-therapy.jpg') }}" class="w-100"
                                alt="">
                        </figure>
                    </div>
                    <!-- Service Item Image End -->

                    <!-- Service Item Icon Start -->
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/icon-service-4.svg') }}" alt="">
                    </div>
                    <!-- Service Item Icon ENd -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>Exercise Therapy</h3>
                            <p>Customized exercises to improve strength and flexibility.</p>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn">
                            <a href="#"><img src="{{ asset('/resources/assets/images/arrow-readmore-btn.svg') }}"
                                    alt=""></a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Body End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.41s">
                    <!-- Service Item Image Start -->
                    <div class="service-item-image">
                        <figure>
                            <img src="{{ asset('/resources/assets/images/pain-relief.jpg') }}" class="w-100" alt="">
                        </figure>
                    </div>
                    <!-- Service Item Image End -->

                    <!-- Service Item Icon Start -->
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/icon-service-5.svg') }}" alt="">
                    </div>
                    <!-- Service Item Icon ENd -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>Pain Relief</h3>
                            <p>Targeted treatments for both acute and chronic pain.</p>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn">
                            <a href="#"><img src="{{ asset('/resources/assets/images/arrow-readmore-btn.svg') }}"
                                    alt=""></a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Body End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.55s">
                    <!-- Service Item Image Start -->
                    <div class="service-item-image">
                        <figure>
                            <img src="{{ asset('/resources/assets/images/strength-training.jpg') }}" class="w-100"
                                alt="">
                        </figure>
                    </div>
                    <!-- Service Item Image End -->

                    <!-- Service Item Icon Start -->
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/icon-service-6.svg') }}" alt="">
                    </div>
                    <!-- Service Item Icon ENd -->

                    <!-- Service Body Start -->
                    <div class="service-body">
                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3>Strength Training</h3>
                            <p>Focused regimens to enhance muscle balance and stability.</p>
                        </div>
                        <!-- Service Content End -->

                        <!-- Service Btn Start -->
                        <div class="service-btn">
                            <a href="#"><img src="{{ asset('/resources/assets/images/arrow-readmore-btn.svg') }}"
                                    alt=""></a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Body End -->
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-12">
                <!-- More Service Btn Start -->
                <div class="more-service-btn wow fadeInUp" data-wow-delay="0.65s">
                    <a href="#">Find Out More About our Services</a>
                </div>
                <!-- More Service Btn End -->
            </div>
        </div>
    </div>
</div>
<div class="bg-section bg-radius-section"></div>
<!-- Our Services Section End -->


<!-- Care Rehabilitation Section Start -->
<div class="care-rehabilitation bg-radius-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7 col-md-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Treatments </h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Excellence In Care</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5 d-sm-none d-none d-lg-block">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp">
                    <a href="tel:+91 8591247643" class="btn-default"><span>View More</span></a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
                <!-- Rehab Benefits Item Start -->
                <div class="rehab-benefits-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/massage-therapist.png') }}" alt="">
                    </div>
                    <div class="rehab-benefits-content">
                        <h3>Arthritis</h3>
                    </div>
                </div>
                <!-- Rehab Benefits Item End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Rehab Benefits Item Start -->
                <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/massage-therapist.png') }}" alt="">
                    </div>
                    <div class="rehab-benefits-content">
                        <h3>Fracture</h3>
                    </div>
                </div>
                <!-- Rehab Benefits Item End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Rehab Benefits Item Start -->
                <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/massage-therapist.png') }}" alt="">
                    </div>
                    <div class="rehab-benefits-content">
                        <h3>Back Pain</h3>
                    </div>
                </div>
                <!-- Rehab Benefits Item End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Rehab Benefits Item Start -->
                <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.45s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/massage-therapist.png') }}" alt="">
                    </div>
                    <div class="rehab-benefits-content">
                        <h3>Neck Pain</h3>
                    </div>
                </div>
                <!-- Rehab Benefits Item End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Rehab Benefits Item Start -->
                <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/massage-therapist.png') }}" alt="">
                    </div>
                    <div class="rehab-benefits-content">
                        <h3>Frozen Shoulder</h3>
                    </div>
                </div>
                <!-- Rehab Benefits Item End -->
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <!-- Rehab Benefits Item Start -->
                <div class="rehab-benefits-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{ asset('/resources/assets/images/massage-therapist.png') }}" alt="">
                    </div>
                    <div class="rehab-benefits-content">
                        <h3>Postural Correction</h3>
                    </div>
                </div>
                <!-- Rehab Benefits Item End -->
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-sm-block d-lg-none text-center">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp mx-auto text-center">
                    <a href="tel:+91 8591247643" class="btn-default"><span>View More</span></a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>
    </div>
</div>
<!-- Care Rehabilitation Section End -->

<!-- Quality Treatment Section Start -->
<div class="our-quality bg-radius-section">
    <div class="quality-treatment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <!-- Quality Treatment Content Start -->
                    <div class="quality-treatment-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why Choose Us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">We Take Pride in Delivering
                                Exceptional Care</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.15s">Injuries and pain can strike without
                                warning. Our expert physiotherapy services offer fast, effective treatment to help
                                you recover quickly and get back to your life.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Quality Treatment Body Start -->
                        <div class="quality-treatment-body wow fadeInUp" data-wow-delay="0.2s">
                            <ul>
                                <li>Personalized treatment plans</li>
                                <li>Evidence-based approaches</li>
                                <li>Compassionate care for faster healing</li>
                            </ul>
                        </div>
                        <!-- Quality Treatment Body End -->

                        <!-- Quality Treatment Footer Start -->
                        <div class="quality-treatment-footer wow fadeInUp" data-wow-delay="0.45s">
                            <a href="tel:+91 8591247643" class="btn-default"><span>make an appointment</span></a>
                        </div>
                        <!-- Quality Treatment Footer End -->
                    </div>
                    <!-- Quality Treatment Content End -->
                </div>

                <div class="col-lg-6 col-md-0"></div>
            </div>
        </div>
    </div>
</div>
<!-- Quality Treatment Section End -->

<!-- FAQ Section Start -->
<div class="how-it-work bg-radius-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <!-- FAQ Images Start -->
                <div class="how-work-images">
                    <div class="row no-gutters">
                        <div class="col-4">
                            <!-- FAQ Image Box Start -->
                            <div class="how-work-image-box-1">
                                <div class="how-work-img-1">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq2.jpg') }}"
                                            alt="Physiotherapy Consultation">
                                    </figure>
                                </div>
                                <div class="how-work-img-3">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq1.jpg') }}"
                                            alt="Treatment Session">
                                    </figure>
                                </div>
                            </div>
                            <!-- FAQ Image Box End -->
                        </div>

                        <div class="col-8">
                            <!-- FAQ Image Box Start -->
                            <div class="how-work-image-box-2">
                                <div class="how-work-img-2">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq3.jpg') }}" alt="Patient Care">
                                    </figure>
                                </div>
                                <div class="how-work-img-4">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset('/resources/assets/images/faq4.jpg') }}"
                                            alt="Therapy Equipment">
                                    </figure>
                                </div>
                            </div>
                            <!-- FAQ Image Box End -->
                        </div>
                    </div>
                </div>
                <!-- FAQ Images End -->
            </div>

            <div class="col-lg-6 order-lg-2 order-1">
                <!-- FAQ Content Start -->
                <div class="how-work-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Your Questions Answered</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- FAQ Accordion Start -->
                    <div class="how-work-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <span class="icon-box">
                                    <img src="{{ asset('/resources/assets/images/icon-how-it-work-1.svg') }}" alt="">
                                </span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What conditions do you treat?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We treat a wide range of conditions including back pain, neck pain, sports
                                        injuries, post-surgical rehabilitation, arthritis, and neurological
                                        conditions. Our team of experienced physiotherapists provides personalized
                                        treatment plans for each patient.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading2">
                                <span class="icon-box">
                                    <img src="{{ asset('/resources/assets/images/icon-how-it-work-2.svg') }}" alt="">
                                </span>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How long does a typical session last?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Initial consultations typically last 45-60 minutes, while follow-up sessions
                                        are usually 30-45 minutes. The duration may vary depending on your specific
                                        condition and treatment plan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading3">
                                <span class="icon-box">
                                    <img src="{{ asset('/resources/assets/images/icon-how-it-work-2.svg') }}" alt="">
                                </span>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Do I need a doctor's referral?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>While a doctor's referral is not always necessary, it can be helpful for
                                        insurance purposes. We recommend checking with your insurance provider
                                        regarding their specific requirements for physiotherapy coverage.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading4">
                                <span class="icon-box">
                                    <img src="{{ asset('/resources/assets/images/icon-how-it-work-4.svg') }}" alt="">
                                </span>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    What should I bring to my first appointment?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Please bring your ID, insurance information, any relevant medical reports or
                                        imaging results, and wear comfortable clothing that allows for movement. If
                                        you have a doctor's referral, please bring that as well.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
                <!-- FAQ Content End -->
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section End -->



<!-- Our Testimonials Section Start -->
<div class="our-testimonial bg-radius-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="testimonial-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">client testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our Clients Reviews</h2>
                        <p class="wow fadeInUp">At Physiocare, we pride ourselves on
                            providing exceptional physiotherapy services that deliver real results. But don't just
                            take our word for it.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="col-lg-7">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="google-review-img">
                                        <img src="{{ asset('/resources/assets/images/google-logo.png') }}"
                                            alt="Google Logo" class="google-logo">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>I took physiotherapy treatment at Dr. Purvi's clinic for my frozen
                                                shoulder and was completely cured within a month. Her impressive
                                                skill and highly professional approach made all the difference in my
                                                recovery. I highly recommend Dr. Purvi's clinic for anyone seeking
                                                effective physiotherapy treatment.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-content">
                                            <h3>Dilip Bandyopadhyay</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="google-review-img">
                                        <img src="{{ asset('/resources/assets/images/google-logo.png') }}"
                                            alt="Google Logo" class="google-logo">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>I got treated from Dr. Shruti at Dr. Purvi's Physiotherapy Centre.
                                                She is very nice and humble and helped me to get rid of my pain and
                                                improve my muscle strength.
                                                She explains and teaches the exercises very well.
                                                My overall experience with Clinic and therapy was good.
                                                Thanks to Dr. Purvi and Dr. Shruti.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-content">
                                            <h3>Vijay Bhalerao</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="google-review-img">
                                        <img src="{{ asset('/resources/assets/images/google-logo.png') }}"
                                            alt="Google Logo" class="google-logo">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>I am going for post my ACL reconstruction surgery rehab to Dr Purvi.
                                                I have made significant progress with my knee strengthening and
                                                flexibility exercises with her support. I find Dr Purvi empathetic
                                                and always focusing on reducing and managing pain</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="author-content">
                                            <h3>Kailash Mahadevan</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                        </div>
                        <div class="testimonial-btn">
                            <div class="testimonial-button-prev"></div>
                            <div class="testimonial-button-next"></div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- More Service Btn Start -->
                <div class="more-service-btn wow fadeInUp pt-3" data-wow-delay="0.65s">
                    <a href="#">View More Testimonials</a>
                </div>
                <!-- More Service Btn End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonials Section End -->


<!-- Our Pricing Section Start -->
{{-- <div class="our-pricing bg-radius-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="our-pricing-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">packages</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our Physiotherapy Packages</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Choose from our comprehensive physiotherapy
                            packages designed to meet your specific needs. Each package includes personalized
                            treatment plans, expert care, and ongoing support to help you achieve optimal recovery
                            and wellness.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#" class="btn-default"><span>book consultation</span></a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing-item highlighted-box wow fadeInUp" data-wow-delay="0.25s">
                            <!-- Pricing Header Start -->
                            <div class="pricing-header">
                                <!-- Pricing Title Start -->
                                <div class="pricing-title">
                                    <h3>Basic Recovery</h3>
                                </div>
                                <!-- Pricing Title End -->

                                <!-- Pricing Tag Start -->
                                <div class="pricing-tag">
                                    <h2>₹1500/<sub>session</sub></h2>
                                </div>
                                <!-- Pricing Tag End -->
                            </div>
                            <!-- Pricing Header End -->

                            <!-- Pricing Body Start -->
                            <div class="pricing-body">
                                <!-- Pricing Content Start -->
                                <div class="pricing-content">
                                    <p>Ideal for minor injuries and general wellness maintenance. Perfect for those
                                        seeking preventive care and basic rehabilitation.</p>
                                </div>
                                <!-- Pricing Content End -->

                                <!-- Pricing List Start -->
                                <div class="pricing-list">
                                    <ul>
                                        <li>Initial Assessment & Diagnosis</li>
                                        <li>Manual Therapy Sessions</li>
                                        <li>Basic Exercise Program</li>
                                        <li>Progress Tracking</li>
                                        <li>Home Exercise Guidance</li>
                                    </ul>
                                </div>
                                <!-- Pricing List End -->
                            </div>
                            <!-- Pricing Body End -->

                            <!-- Pricing Btn Start -->
                            <div class="pricing-btn">
                                <a href="#">select package</a>
                            </div>
                            <!-- Pricing Btn End -->
                        </div>
                        <!-- Pricing Item End -->
                    </div>

                    <div class="col-md-6">
                        <!-- Pricing Item Start -->
                        <div class="pricing-item wow fadeInUp" data-wow-delay="0.5s">
                            <!-- Pricing Header Start -->
                            <div class="pricing-header">
                                <!-- Pricing Title Start -->
                                <div class="pricing-title">
                                    <h3>Advanced Rehabilitation</h3>
                                </div>
                                <!-- Pricing Title End -->

                                <!-- Pricing Tag Start -->
                                <div class="pricing-tag">
                                    <h2>₹2500/<sub>session</sub></h2>
                                </div>
                                <!-- Pricing Tag End -->
                            </div>
                            <!-- Pricing Header End -->

                            <!-- Pricing Body Start -->
                            <div class="pricing-body">
                                <!-- Pricing Content Start -->
                                <div class="pricing-content">
                                    <p>Comprehensive treatment for sports injuries, post-surgical recovery, and
                                        chronic conditions requiring intensive therapy.</p>
                                </div>
                                <!-- Pricing Content End -->

                                <!-- Pricing List Start -->
                                <div class="pricing-list">
                                    <ul>
                                        <li>Detailed Assessment & Planning</li>
                                        <li>Advanced Manual Therapy</li>
                                        <li>Sports-Specific Rehabilitation</li>
                                        <li>Electrotherapy Sessions</li>
                                        <li>Personalized Exercise Program</li>
                                    </ul>
                                </div>
                                <!-- Pricing List End -->
                            </div>
                            <!-- Pricing Body End -->

                            <!-- Pricing Btn Start -->
                            <div class="pricing-btn">
                                <a href="#">select package</a>
                            </div>
                            <!-- Pricing Btn End -->
                        </div>
                        <!-- Pricing Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Our Pricing Section End -->

<!-- Gallery Section Start -->
<div class="how-it-work gallery-section bg-radius-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">gallery</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Our Treatment Gallery</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.10s">Explore our comprehensive physiotherapy
                        treatments and rehabilitation services through our gallery.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row gallery-grid">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp">
                    <div class="gallery-image">
                        <a href="{{ asset('/resources/assets/images/gall-2.jpg') }}" data-fancybox="gallery">
                            <img src="{{ asset('/resources/assets/images/gall-2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="gallery-image">
                        <a href="{{ asset('/resources/assets/images/gall-3.jpg') }}" data-fancybox="gallery">
                            <img src="{{ asset('/resources/assets/images/gall-3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.15s">
                    <div class="gallery-image">
                        <a href="{{ asset('/resources/assets/images/gall-4.jpg') }}" data-fancybox="gallery">
                            <img src="{{ asset('/resources/assets/images/gall-4.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12 text-center">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp mx-auto text-center">
                    <a href="tel:+91 8591247643" class="btn-default"><span>View More</span></a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section End -->


<!-- Book Appointment Section End -->
<div class="cta-box bg-radius-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-box-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Book Appointment</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Start Your Path to Pain-Free Living Today
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At Physiocare, we don't just treat symptoms we
                            guide you toward total well-being</p>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Whether you're healing from surgery, managing
                            pain, or rebuilding strength, our personalized care supports every step of your recovery.
                            With expert guidance and proven therapies, we help you feel better, move better, and live
                            better.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                        <a href="tel:+91 8591247643" class="btn-default"><span>make an appointment</span></a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Book Appointment End -->


@stop