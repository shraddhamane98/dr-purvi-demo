@php($title = "Electrotherapy")
@section('meta_desc')
@endsection
@extends('layouts.default')
@section('content')


<!-- Page Header Start -->
<div class="page-header service-single-page-header bg-radius-section parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Electrotherapy</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item"><a href="index-2.html">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Electrotherapy</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Service Single Start -->
<div class="page-service-single bg-radius-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                @include('includes.asidebar')
                <!-- Service Sidebar End -->
            </div>

            <div class="col-lg-8">
                <!-- Service Single Content Start -->
                <div class="service-single-content">
                    <div class="service-single-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('/resources/assets/images/service-img-1.jpg') }}" alt="Electrotherapy Treatment">
                        </figure>
                    </div>

                    <!-- Service Entry Content Start -->
                    <div class="service-entry">
                        <h2 class="text-anime-style-3">Electrotherapy Treatment</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Electrotherapy is a modern therapeutic approach that uses electrical energy to treat various musculoskeletal conditions. At our clinic in Navi Mumbai, Dr. Purvi Deshpande provides expert electrotherapy treatments to help patients recover from pain and improve their physical function.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Our electrotherapy services include a range of advanced techniques such as TENS (Transcutaneous Electrical Nerve Stimulation), IFT (Interferential Therapy), Ultrasound Therapy, and more. These treatments are designed to reduce pain, promote healing, and improve muscle function.</p>
                        <h2 class="text-anime-style-3">Comprehensive Treatment Approach</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Dr. Purvi Deshpande combines electrotherapy with other physiotherapy techniques to provide a holistic treatment approach. Each treatment plan is customized to address the specific needs and conditions of our patients, ensuring optimal recovery and long-term results.</p>
                        <div class="member-info-list wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Expert in Electrotherapy and Pain Management</li>
                                <li>Specialized Training in Advanced Electrotherapy Techniques</li>
                                <li>State-of-the-art Equipment for Precise Treatment</li>
                                <li>Personalized Care and Attention to Each Patient</li>
                            </ul>
                        </div>

                        <!-- Service Entry Image Start -->
                        <div class="service-entry-image">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <!-- Service Entry Image Start -->
                                    <div class="service-entry-img-1 wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('/resources/assets/images/service-entry-img-1.jpg') }}"
                                                alt="Electrotherapy Treatment">
                                        </figure>
                                    </div>
                                    <!-- Service Entry Image End -->
                                </div>

                                <div class="col-md-6 col-6">
                                    <!-- Service Entry Image Start -->
                                    <div class="service-entry-img-2 wow fadeInUp" data-wow-delay="0.5s">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('/resources/assets/images/service-entry-img-2.jpg') }}"
                                                alt="Electrotherapy Equipment">
                                        </figure>
                                    </div>
                                    <!-- Service Entry Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Service Entry Image End -->
                    </div>
                    <!-- Service Entry Content End -->

                    <!-- Therapy Process Section Start -->
                    <div class="therapy-process bg-radius-section">
                        <div class="container">
                            <div class="row section-row align-items-center">
                                <div class="col-lg-12">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our Electrotherapy Services</h2>
                                    </div>
                                    <!-- Section Title End -->
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <!-- Therapy Process Content Start -->
                                    <div class="therapy-process-content">
                                        <!-- Therapy Process Item Start -->
                                        <div class="therapy-process-item wow fadeInUp">
                                            <div class="therapy-process-item-content">
                                                <h3>TENS Therapy</h3>
                                                <p>Transcutaneous Electrical Nerve Stimulation for pain relief and muscle rehabilitation.</p>
                                            </div>
                                        </div>
                                        <!-- Therapy Process Item End -->

                                        <!-- Therapy Process Item Start -->
                                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                                            <div class="therapy-process-item-content">
                                                <h3>IFT Treatment</h3>
                                                <p>Interferential Therapy for deep tissue stimulation and pain management.</p>
                                            </div>
                                        </div>
                                        <!-- Therapy Process Item End -->

                                        <!-- Therapy Process Item Start -->
                                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="therapy-process-item-content">
                                                <h3>Ultrasound Therapy</h3>
                                                <p>Deep tissue heating and healing through sound waves.</p>
                                            </div>
                                        </div>
                                        <!-- Therapy Process Item End -->

                                        <!-- Therapy Process Item Start -->
                                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                                            <div class="therapy-process-item-content">
                                                <h3>Muscle Stimulation</h3>
                                                <p>Electrical muscle stimulation for strengthening and rehabilitation.</p>
                                            </div>
                                        </div>
                                        <!-- Therapy Process Item End -->
                                    </div>
                                    <!-- Therapy Process Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Therapy Process Section End -->

                    <!-- Our Faqs Section Start -->
                    <div class="about-faq-section our-faqs-section">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Frequently Asked Questions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Electrotherapy is a safe and effective treatment method for various conditions. Here are some common questions about our electrotherapy services.</p>
                        </div>
                        <!-- Section Title End -->
                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What conditions can be treated with electrotherapy?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Electrotherapy is effective for treating various conditions including chronic pain, muscle injuries, arthritis, sports injuries, and post-surgical rehabilitation. It helps in pain management, muscle strengthening, and improving circulation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Is electrotherapy treatment painful?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Electrotherapy is generally not painful. Most patients experience a mild tingling sensation during treatment. The intensity can be adjusted according to your comfort level, and our expert physiotherapist ensures a comfortable experience throughout the session.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        How many sessions of electrotherapy are typically needed?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>The number of sessions required varies depending on the condition being treated and individual response to therapy. Dr. Purvi Deshpande will assess your condition and recommend a personalized treatment plan with the appropriate number of sessions.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Are there any side effects of electrotherapy?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Electrotherapy is a safe treatment with minimal side effects. Some patients may experience mild skin irritation or redness at the electrode sites, which typically resolves quickly. Our expert team ensures proper application and monitoring throughout the treatment.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Can electrotherapy be combined with other treatments?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, electrotherapy is often combined with other physiotherapy treatments such as manual therapy, exercises, and other modalities to provide comprehensive care. Dr. Purvi Deshpande will create a customized treatment plan that may include multiple approaches for optimal results.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Our Faqs Section End -->
                </div>
                <!-- Service Single Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Service Single End -->

@stop