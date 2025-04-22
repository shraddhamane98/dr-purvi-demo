@php($title = "Dr. Purvi Deshpande | Expert Physiotherapist & Rehab")
@section('meta_desc')
Discover personalized physical therapy by Dr. Purvi Deshpande. Enjoy expert rehabilitation, injury recovery, and compassionate care for lasting mobility.

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
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Rehabilitation</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home /</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services /</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rehabilitation</li>
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
            <div class="col-lg-8">
                <!-- Service Single Content Start -->
                <div class="service-single-content">
                    <div class="service-single-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('/resources/assets/images/service-img-1.jpg') }}" alt="Dr. Purvi Deshpande Physiotherapy Clinic">
                        </figure>
                    </div>

                    <!-- Service Entry Content Start -->
                    <div class="service-entry">
                        <h2 class="text-anime-style-3">Introduction to Our Rehabilitation Service</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Dr. Purvi Deshpande recognizes that every patient’s path to recovery is distinct. Therefore, the rehabilitation services are grounded in a patient-focused model that emphasizes accurate diagnosis, individualized treatment planning, and continuous evaluation. Whether recovering from surgery, overcoming injury, or managing chronic conditions, patients can expect expert guidance and support throughout their recovery.</p>

                        <h2 class="text-anime-style-3">Benifits</h2>
                        <div class="member-info-list wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Personalized Assessment</li>
                                <li>Innovative Techniques</li>
                                <li>Compassionate Care</li>
                                <li>Compassionate Care</li>
                            </ul>
                        </div>

                    </div>

                    <!-- Therapy Process Section Start -->
                    <div class="therapy-process bg-radius-section">
                        <div class="container">
                            <div class="row section-row align-items-center mb-4">
                                <div class="col-lg-12">
                                    <div class="">
                                        <h2 class="text-anime-style-3" >Our Treatment Process</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="therapy-process-content">
                                        <div class="therapy-process-item wow fadeInUp">
                                            <div class="therapy-process-item-content">
                                                <h3>Initial Assessment</h3>
                                                <p>Comprehensive evaluation of your condition and medical history to develop a targeted treatment plan.</p>
                                            </div>
                                        </div>

                                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                                            <div class="therapy-process-item-content">
                                                <h3>Customized Treatment</h3>
                                                <p>Personalized therapy sessions using various techniques including manual therapy, exercises, and modern equipment.</p>
                                            </div>
                                        </div>

                                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="therapy-process-item-content">
                                                <h3>Progress Monitoring</h3>
                                                <p>Regular assessment of your improvement and adjustment of treatment plans for optimal results.</p>
                                            </div>
                                        </div>

                                        <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                                            <div class="therapy-process-item-content">
                                                <h3>Home Exercise Program</h3>
                                                <p>Detailed guidance for exercises and activities to continue your recovery at home.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Our Faqs Section Start -->
                    <div class="about-faq-section our-faqs-section">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-accordion" id="accordion">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What conditions do you treat at your clinic?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>We treat a wide range of conditions including sports injuries, back and neck pain, arthritis, post-surgical rehabilitation, neurological conditions, and more. Each treatment plan is customized to the patient's specific needs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How long does each treatment session last?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Initial consultations typically last 45-60 minutes, while follow-up sessions are usually 30-45 minutes. The duration may vary based on your condition and treatment needs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Do I need a doctor's referral to visit your clinic?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>While a doctor's referral can be helpful, it's not mandatory. You can directly schedule an appointment with us for an initial assessment of your condition.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        What should I bring to my first appointment?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Please bring any relevant medical reports, X-rays or scan reports, comfortable clothing, and a list of current medications. This helps us provide the most appropriate treatment plan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Do you provide home visit services?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>Yes, we offer home visit services for patients who are unable to visit our clinic. Please contact our office for more information about home visit availability and charges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Service Sidebar Start -->
                @include('includes.asidebar')
                <!-- Service Sidebar End -->
            </div>

        </div>
    </div>
</div>

@stop