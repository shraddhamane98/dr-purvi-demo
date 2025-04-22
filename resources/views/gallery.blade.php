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
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Gallery</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
<!-- Gallery Section Start -->
<div class="how-it-work gallery-section bg-radius-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title text-center">
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

    </div>
</div>
<!-- Gallery Section End -->
<!-- Page Contact Us End -->




@stop