@php($title = "")
@section('meta_desc')
@endsection
@extends('layouts.default')
@section('content')



 <!-- Page Header Start -->
 <div class="page-header about-page-header bg-radius-section parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">About Us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">about us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page About Us Section Start -->
    <div class="page-about-us bg-radius-section">
        <div class="container-fluid">
            <div class="row align-items-center px-md-5 px-sm-0 px-lg-0">
                <div class="col-lg-6">
                    <!-- Page About Content Start -->
                    <div class="page-about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Dr. Purvi Deshpande</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Welcome to Dr. Purvi Deshpande's Rehabilitation Clinic, where we specialize in restoring function, alleviating pain, and enhancing quality of life through expert physiotherapy services. Dr. Purvi Deshpande, a seasoned physiotherapist based in Navi Mumbai, passionately combines advanced techniques with compassionate care to guide each patient on their unique path to recovery.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Page About Content Body Start -->
                        <div class="page-about-content-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <!-- Page About Content List Start -->
                                    <div class="page-about-content-list">
                                        <div class="page-about-content-item wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="icon-box">
                                                <img src="{{ asset('/resources/assets/images/icon-page-about-list-1.svg') }}" alt="">
                                            </div>
                                            <div class="page-about-item-content">
                                                <p>Highly skilled and experienced</p>
                                            </div>
                                        </div>

                                        <div class="page-about-content-item wow fadeInUp" data-wow-delay="0.75s">
                                            <div class="icon-box">
                                                <img src="{{ asset('/resources/assets/images/icon-page-about-list-2.svg') }}" alt="">
                                            </div>
                                            <div class="page-about-item-content">
                                                <p>Certified high trained</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page About Content List End -->
                                </div>



                                <div class="col-lg-12">
                                    <div class="page-about-body-content wow fadeInUp" data-wow-delay="1s">
                                        <p>Our state-of-the-art facility, advanced therapies, and patient-centered approach set us apart, making Physiocare the best choice for achieving your health and wellness goals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page About Content Body End -->

                        <!-- Page About Content Btn Start -->
                        <div class="page-about-content-btn wow fadeInUp" data-wow-delay="1.25s">
                            <a href="#" class="btn-default"><span>book appointment</span></a>
                        </div>
                        <!-- Page About Content Btn End -->
                    </div>
                    <!-- Page About Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Page About Images Start -->
                    <div class="page-about-image text-center">
                        <!-- Page About Image Start -->
                        <!--  <div class="page-about-img-1">
                            <figure>
                                <img src="{{ asset('/resources/assets/images/page-about-bg-image.jpg') }}" alt="">
                            </figure>
                        </div>  -->
                        <!-- Page About Image End -->

                        <!-- Page About Image Start -->
                        <div class="page-about-img-2">
                            <figure>
                                <img src="{{ asset('/resources/assets/images/page-about-image.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- Page About Image End -->
                    </div>
                    <!-- Page About Image End -->
                </div>
            </div>

            <!-- Page Testimonial Box Start -->
            <div class="about-testimonial-box">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- About Testimonial Slider Start -->
                        <div class="about-testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- About Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="about-testimonial-item">
                                            <p>Recover Faster with Expert Physiotherapy Care</p>
                                        </div>
                                    </div>
                                    <!-- About Testimonial Slide End -->

                                    <!-- About Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="about-testimonial-item">
                                            <p>Expert Care for Your Journey to Recovery</p>
                                        </div>
                                    </div>
                                    <!-- About Testimonial Slide End -->

                                    <!-- About Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="about-testimonial-item">
                                            <p>get ready Your Path to Wellness Starts Here </p>
                                        </div>
                                    </div>
                                    <!-- About Testimonial Slide End -->
                                </div>
                                <div class="about-testimonial-btn">
                                    <div class="about-testimonial-button-prev"></div>
                                    <div class="about-testimonial-button-next"></div>
                                </div>
                            </div>
                        </div>
					<!-- About Testimonial Slider End -->
                    </div>
                </div>
            </div>
            <!-- Page Testimonial Box End -->
        </div>
    </div>
    <!-- Page About Us Section End -->

    <!-- About Icon Box List Start -->
    <!-- <div class="about-icon-box-list bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="about-icon-list-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('/resources/assets/images/about-icon-list-item-1.svg') }}" alt="">
                        </div>
                        <div class="about-icon-list-content">
                            <h3>sports rehabilitation</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="about-icon-list-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('/resources/assets/images/about-icon-list-item-2.svg') }}" alt="">
                        </div>
                        <div class="about-icon-list-content">
                            <h3>backpain management</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="about-icon-list-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('/resources/assets/images/about-icon-list-item-3.svg') }}" alt="">
                        </div>
                        <div class="about-icon-list-content">
                            <h3>orthopedic rehabilitation</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="about-icon-list-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('/resources/assets/images/about-icon-list-item-4.svg') }}" alt="">
                        </div>
                        <div class="about-icon-list-content">
                            <h3>occupational therapy</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="about-icon-list-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="{{ asset('/resources/assets/images/about-icon-list-item-5.svg') }}" alt="">
                        </div>
                        <div class="about-icon-list-content">
                            <h3>home physiotherapy</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="about-icon-list-item wow fadeInUp" data-wow-delay="1.25s">
                        <div class="icon-box">
                            <img src="{{ asset('/resources/assets/images/about-icon-list-item-6.svg') }}" alt="">
                        </div>
                        <div class="about-icon-list-content">
                            <h3>pelvic rehabilitation</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About Icon Box List End -->

    <!-- Our Rehabilitation Section Start -->
     <!-- <div class="our-rehabilitation bg-radius-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">rehabilitation</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Basics Of Rehabilitation Therapy</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="therapy-rehabilitation-item wow fadeInUp">
                        <div class="therapy-rehabilitation-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('/resources/assets/images/therapy-rehabilitation-img-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>

                        <div class="therapy-rehabilitation-header">
                            <div class="therapy-rehabilitation-content">
                                <div class="therapy-rehabilitation-btn">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/arrow-long-white.svg') }}" alt=""></a>
                                </div>
                                <div class="therapy-rehabilitation-title">
                                    <h3>individual therapy</h3>
                                </div>
                            </div>

                            <div class="therapy-rehabilitation-dec">
                                <p>individual therapy offers tailored treatment and focused attention to.</p>
                            </div>
                        </div>

                        <div class="therapy-rehabilitation-body">
                            <div class="therapy-rehabilitation-list">
                                <ul>
                                    <li>Personalized Treatment Plans</li>
                                    <li>Specialized Techniques</li>
                                    <li>Focused Attention</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="therapy-rehabilitation-item wow fadeInUp" data-wow-delay="0.25s">

                        <div class="therapy-rehabilitation-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('/resources/assets/images/therapy-rehabilitation-img-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>



                        <div class="therapy-rehabilitation-header">

                            <div class="therapy-rehabilitation-content">
                                <div class="therapy-rehabilitation-btn">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/arrow-long-white.svg') }}" alt=""></a>
                                </div>
                                <div class="therapy-rehabilitation-title">
                                    <h3>family therapy</h3>
                                </div>
                            </div>



                            <div class="therapy-rehabilitation-dec">
                                <p>Family therapy focuses on improving communication, resolving conflicts.</p>
                            </div>

                        </div>



                        <div class="therapy-rehabilitation-body">

                            <div class="therapy-rehabilitation-list">
                                <ul>
                                    <li>Common Issues Addressed</li>
                                    <li>Purpose and Goals</li>
                                    <li>Family Conflict</li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="therapy-rehabilitation-item wow fadeInUp" data-wow-delay="0.5s">

                        <div class="therapy-rehabilitation-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('/resources/assets/images/therapy-rehabilitation-img-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>



                        <div class="therapy-rehabilitation-header">

                            <div class="therapy-rehabilitation-content">
                                <div class="therapy-rehabilitation-btn">
                                    <a href="#"><img src="{{ asset('/resources/assets/images/arrow-long-white.svg') }}" alt=""></a>
                                </div>
                                <div class="therapy-rehabilitation-title">
                                    <h3>manual therapy</h3>
                                </div>
                            </div>



                            <div class="therapy-rehabilitation-dec">
                                <p>Manual therapy involves a range of hands-on techniques used by therapists.</p>
                            </div>

                        </div>



                        <div class="therapy-rehabilitation-body">

                            <div class="therapy-rehabilitation-list">
                                <ul>
                                    <li>Enhanced Muscle Function</li>
                                    <li>Increased Range of Motion</li>
                                    <li>Improved Circulation</li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>  -->
    <!-- Our Rehabilitation Section End -->

    <!-- Therapy Process Section Start -->
    <div class="therapy-process bg-radius-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Therapy Process</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Btn Start -->
                    <div class="section-btn wow fadeInUp">
                        <a href="#" class="btn-default"><span>make an appointment</span></a>
                    </div>
                    <!-- Section Btn End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Therapy Process Content Start -->
                    <div class="therapy-process-content">
                        <!-- Therapy Process Item Start -->
                        <div class="therapy-process-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/icon-therapy-process-1.svg') }}" alt="">
                            </div>
                            <div class="therapy-process-item-content">
                                <h3>One-on-One Consultation</h3>
                                <p>Experience personalized attention with Dr. Purvi Deshpande, who personally conducts all initial consultations to understand your unique mental health needs and concerns.</p>
                            </div>
                        </div>
                        <!-- Therapy Process Item End -->

                        <!-- Therapy Process Item Start -->
                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/icon-therapy-process-2.svg') }}" alt="">
                            </div>
                            <div class="therapy-process-item-content">
                                <h3>Direct Doctor-Patient Relationship</h3>
                                <p>Benefit from Dr. Deshpande's undivided attention and expertise throughout your treatment journey, ensuring consistent and personalized care at every step.</p>
                            </div>
                        </div>
                        <!-- Therapy Process Item End -->

                        <!-- Therapy Process Item Start -->
                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/icon-therapy-process-3.svg') }}" alt="">
                            </div>
                            <div class="therapy-process-item-content">
                                <h3>Personalized Treatment Plans</h3>
                                <p>Dr. Deshpande creates and oversees each treatment plan personally, combining her extensive experience with the latest therapeutic approaches for optimal results.</p>
                            </div>
                        </div>
                        <!-- Therapy Process Item End -->

                        <!-- Therapy Process Item Start -->
                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                            <div class="icon-box">
                                <img src="{{ asset('/resources/assets/images/icon-therapy-process-4.svg') }}" alt="">
                            </div>
                            <div class="therapy-process-item-content">
                                <h3>Continuous Personal Care</h3>
                                <p>Experience the advantage of working directly with Dr. Deshpande throughout your treatment, ensuring continuity of care and a deep understanding of your progress.</p>
                            </div>
                        </div>
                        <!-- Therapy Process Item End -->
                    </div>
                    <!-- Therapy Process Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Therapy Process Images Start -->
                    <div class="therapy-process-images">
                        <!-- Therapy Process Image Start -->
                        <div class="therapy-process-img-1">
                            <figure class="image-anime">
                                <img src="{{ asset('/resources/assets/images/therapy-process-img-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Therapy Process Image End -->

                        <!-- Therapy Process Image Start -->
                        <div class="therapy-process-img-2">
                            <figure class="image-anime">
                                <img src="{{ asset('/resources/assets/images/therapy-process-img-2.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Therapy Process Image End -->

                        <!-- Therapy Process Image Start -->
                        <div class="therapy-process-img-3">
                            <figure class="image-anime">
                                <img src="{{ asset('/resources/assets/images/therapy-process-img-3.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- Therapy Process Image End -->
                    </div>
                    <!-- Therapy Process Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Therapy Process Section End -->

    <!-- Our Video Section Start -->
    {{-- <div class="our-video bg-radius-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Video Content Start -->
                    <div class="our-video-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">video</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our Video</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Welcome to our video series on psychotherapy, where we delve into the benefits and processes of this essential form of mental health support. In this video, we will explore how psychotherapy can help individuals navigate their emotional and psychological challenges, promoting overall well-being and personal growth.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section Btn Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default"><span>make an appointment</span></a>
                        </div>
                        <!-- Section Btn End -->
                    </div>
                    <!-- Our Video Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Video Play Button Start -->
                    <div class="video-play-button">
                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                           <img src="{{ asset('/resources/assets/images/video-play-button.svg') }}" alt="">
                        </a>
                    </div>
                    <!-- Video Play Button End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Our Video Section End -->

    <!-- Process Steps Section Start -->
    {{-- <div class="process-steps bg-radius-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">process</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Easy Steps To Get Our Physiotherapy Services</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We've made accessing our professional physiotherapy services simple and efficient. Follow these steps to begin your journey towards better physical health and wellness.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row process-steps-line align-items-start">
                <div class="col-lg-3 col-md-3">
                    <!-- Process Steps Box Start -->
                    <div class="process-step-box wow fadeInUp">
                        <!-- Process Steps Number Start -->
                        <div class="process-step-no">
                            <h2>01</h2>
                        </div>
                        <!-- Process Steps Number End -->

                        <!-- Process Steps Content Start -->
                        <div class="process-step-content">
                            <h3>Choose Your Treatment</h3>
                            <p>Browse our range of specialized physiotherapy services and select the treatment that best suits your needs.</p>
                        </div>
                        <!-- Process Steps Content End -->
                    </div>
                    <!-- Process Steps Box End -->
                </div>

                <div class="col-lg-3 col-md-3">
                    <!-- Process Steps Box Start -->
                    <div class="process-step-box wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Process Steps Number Start -->
                        <div class="process-step-no">
                            <h2>02</h2>
                        </div>
                        <!-- Process Steps Number End -->

                        <!-- Process Steps Content Start -->
                        <div class="process-step-content">
                            <h3>Schedule Session</h3>
                            <p>Book your preferred time slot with our experienced physiotherapists through our easy online booking system.</p>
                        </div>
                        <!-- Process Steps Content End -->
                    </div>
                    <!-- Process Steps Box End -->
                </div>

                <div class="col-lg-3 col-md-3">
                    <!-- Process Steps Box Start -->
                    <div class="process-step-box wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Process Steps Number Start -->
                        <div class="process-step-no">
                            <h2>03</h2>
                        </div>
                        <!-- Process Steps Number End -->

                        <!-- Process Steps Content Start -->
                        <div class="process-step-content">
                            <h3>Confirm Booking</h3>
                            <p>Complete your payment securely and receive instant confirmation for your physiotherapy session.</p>
                        </div>
                        <!-- Process Steps Content End -->
                    </div>
                    <!-- Process Steps Box End -->
                </div>

                <div class="col-lg-3 col-md-3">
                    <!-- Process Steps Box Start -->
                    <div class="process-step-box wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Process Steps Number Start -->
                        <div class="process-step-no">
                            <h2>04</h2>
                        </div>
                        <!-- Process Steps Number End -->

                        <!-- Process Steps Content Start -->
                        <div class="process-step-content">
                            <h3>Start Recovery</h3>
                            <p>Begin your personalized treatment plan with our expert physiotherapists and take the first step towards recovery.</p>
                        </div>
                        <!-- Process Steps Content End -->
                    </div>
                    <!-- Process Steps Box End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Process Steps Section End -->


    <div class="cta-box bg-radius-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Book Appointment</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Start Your Path to Pain-Free Living Today</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At Physiocare, we don't just treat symptoms we guide you toward total well-being</p>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Whether you're healing from surgery, managing pain, or rebuilding strength, our personalized care supports every step of your recovery.
                                With expert guidance and proven therapies, we help you feel better, move better, and live better.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section Btn Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#" class="btn-default"><span>make an appointment</span></a>
                        </div>
                        <!-- Section Btn End -->
                    </div>
                </div>
            </div>
        </div>
    </div>





@stop