@php($title = 'Physiotherapy Services - Dr. Purvi Deshpande')
@section('meta_desc')
    Expert physiotherapy services by Dr. Purvi Deshpande in Navi Mumbai. Specialized treatment for musculoskeletal
    conditions, sports injuries, and rehabilitation.
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
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Physiotherapy</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home /</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/services') }}">Services /</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Physiotherapy</li>
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
                <div class="col-lg-12">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <div class="service-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('/resources/assets/images/service-img-1.jpg') }}"
                                    alt="Dr. Purvi Deshpande Physiotherapy Clinic">
                            </figure>
                        </div>

                        <!-- Service Entry Content Start -->
                        <div class="service-entry">
                            <h2 class="text-anime-style-3">Physiotherapy Doctor in Kharghar, Navi Mumbai</h2>
                            <h3>Introduction to Physiotherapy</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Physiotherapy is a healthcare profession dedicated
                                to enhancing and restoring functional ability and quality of life. Through evidence-based
                                techniques, physiotherapists assess, diagnose, and treat a wide range of conditions, aiming
                                to alleviate pain, improve mobility, and prevent further injury.​</p>

                            <h2 class="text-anime-style-3">Our Specialized Services</h2>
                            <p>At Dr. Purvi Deshpande's clinic in Kharghar, we offer a broad spectrum of physiotherapy
                                services tailored to meet individual needs:
                            </p>
                            <div class="member-info-list wow fadeInUp" data-wow-delay="0.5s">
                                <div class="physio-services-interactive">
                                    <div class="physio-service-item">
                                        <div class="service-number">01</div>
                                        <div class="service-content">
                                            <h4>Orthopedic Rehabilitation</h4>
                                            <p>Treatment for musculoskeletal injuries, post-fracture care, and joint
                                                replacements to restore function and strength.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-bone"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">02</div>
                                        <div class="service-content">
                                            <h4>Neurological Rehabilitation</h4>
                                            <p>Specialized programs for conditions like stroke, Parkinson's disease, and
                                                multiple sclerosis to improve mobility and independence.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-brain"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">03</div>
                                        <div class="service-content">
                                            <h4>Pediatric Physiotherapy</h4>
                                            <p>Gentle and effective therapies for children with developmental delays,
                                                cerebral palsy, and other pediatric conditions.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-child"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">04</div>
                                        <div class="service-content">
                                            <h4>Geriatric Physiotherapy</h4>
                                            <p>Focused care for the elderly to manage arthritis, balance disorders, and
                                                age-related mobility issues.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-user-plus"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">05</div>
                                        <div class="service-content">
                                            <h4>Sports Injury Management</h4>
                                            <p>Comprehensive treatment plans for athletes to recover from injuries and
                                                enhance performance.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-running"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">06</div>
                                        <div class="service-content">
                                            <h4>Post-Surgical Rehabilitation</h4>
                                            <p>Structured rehabilitation programs following surgeries like ACL
                                                reconstruction, rotator cuff repair, and spinal surgeries.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-procedures"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">07</div>
                                        <div class="service-content">
                                            <h4>Women's Health Physiotherapy</h4>
                                            <p>Addressing issues such as prenatal and postnatal care, pelvic floor
                                                dysfunction, and osteoporosis.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-female"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">08</div>
                                        <div class="service-content">
                                            <h4>Cardiopulmonary Physiotherapy</h4>
                                            <p>Therapies aimed at improving respiratory function and endurance in patients
                                                with cardiac and pulmonary conditions.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-heartbeat"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="physio-service-item">
                                        <div class="service-number">09</div>
                                        <div class="service-content">
                                            <h4>Home-Based Physiotherapy</h4>
                                            <p>Convenient in-home sessions for patients who are unable to visit the clinic,
                                                ensuring continuity of care.​</p>
                                            <div class="service-icon">
                                                <i class="fas fa-home"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="text-anime-style-3">Why Choose Us?</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">At our clinic, we combine modern therapeutic
                                techniques with personalized care plans. Dr. Purvi Deshpande brings extensive experience in
                                treating various conditions, ensuring each patient receives the highest quality of care. Our
                                state-of-the-art facility in Navi Mumbai is equipped with advanced therapeutic equipment to
                                facilitate optimal recovery.</p>

                        </div>

                        <!-- Therapy Process Section Start -->
                        <div class="therapy-process bg-radius-section">
                            <div class="container">
                                <div class="row section-row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our Treatment Process</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="therapy-process-content">
                                            <div class="therapy-process-item wow fadeInUp">
                                                <div class="therapy-process-item-content">
                                                    <h3>Initial Assessment</h3>
                                                    <p>Comprehensive evaluation of your condition and medical history to
                                                        develop a targeted treatment plan.</p>
                                                </div>
                                            </div>

                                            <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                                                <div class="therapy-process-item-content">
                                                    <h3>Customized Treatment</h3>
                                                    <p>Personalized therapy sessions using various techniques including
                                                        manual therapy, exercises, and modern equipment.</p>
                                                </div>
                                            </div>

                                            <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                                                <div class="therapy-process-item-content">
                                                    <h3>Progress Monitoring</h3>
                                                    <p>Regular assessment of your improvement and adjustment of treatment
                                                        plans for optimal results.</p>
                                                </div>
                                            </div>

                                            <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                                                <div class="therapy-process-item-content">
                                                    <h3>Home Exercise Program</h3>
                                                    <p>Detailed guidance for exercises and activities to continue your
                                                        recovery at home.</p>
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            What conditions do you treat at your clinic?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>We treat a wide range of conditions including sports injuries, back and neck
                                                pain, arthritis, post-surgical rehabilitation, neurological conditions, and
                                                more. Each treatment plan is customized to the patient's specific needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                            How long does each treatment session last?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Initial consultations typically last 45-60 minutes, while follow-up sessions
                                                are usually 30-45 minutes. The duration may vary based on your condition and
                                                treatment needs.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            Do I need a doctor's referral to visit your clinic?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>While a doctor's referral can be helpful, it's not mandatory. You can
                                                directly schedule an appointment with us for an initial assessment of your
                                                condition.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                            What should I bring to my first appointment?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Please bring any relevant medical reports, X-rays or scan reports,
                                                comfortable clothing, and a list of current medications. This helps us
                                                provide the most appropriate treatment plan.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            Do you provide home visit services?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                        data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Yes, we offer home visit services for patients who are unable to visit our
                                                clinic. Please contact our office for more information about home visit
                                                availability and charges.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
