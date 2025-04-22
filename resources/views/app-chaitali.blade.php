@php($title = "")
@section('meta_desc')
@endsection
@extends('layouts.default')
@section('content')

<div class="breadcumb-wrapper">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Appointment</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>Appointment</li>
            </ul>
        </div>
    </div>
</div>

<style>
    .patient-stories {
        padding: 80px 10px;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .stories-grid {
        display: block;
        justify-content: center;
        margin: auto;
    }


    .story-card {
        position: relative;
        cursor: pointer;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease-in-out;

    }

    .story-card:hover {
        transform: scale(1.04);
    }

    .story-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .story-card:hover .overlay {
        opacity: 1;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .medi .story-card {
        position: relative;
        cursor: pointer;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        transition: transform 0.3s ease-in-out;
        margin: 20px 0;
    }

    .medi .story-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .play-button {
        font-size: 30px;
        background: #ff000f;
        color: #fff;
        width: 75px;
        height: 50px;
        border-radius: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .story-title {
        font-size: 16px;
        font-weight: bold;
    }

    .story-large {
        grid-row: span 2;
        height: 100%;
    }

    .story-small {
        grid-row: span 1;
    }

    .story-center {
        grid-column: span 1;
        grid-row: span 2;
        height: 100%;
    }

    @media (max-width: 1024px) {
        .stories-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .stories-grid {
            grid-template-columns: 1fr;
        }

        .story-small,
        .story-large,
        .story-center {
            grid-row: span 1;
            height: auto;
        }
    }
</style>

<!--  -->

<section class="patient-stories">
    <h2 class="title">Hear From Our Consultants</h2>
    <div class="stories-grid">
        <div class="row mx-auto">
            <div class="col-lg-1 d-flex align-items-center"> </div>

            <div class="col-lg-2 d-flex align-items-center">
                <!-- Column 2 (Two Small Images) -->
                <div class="story-card story-small"
                    onclick="openVideo('https://www.youtube.com/watch?v=g77r8-FJ4d8&ab_channel=BombayHospitalJaipur')">
                    <img src="{{ asset('resources/assets/img/doctor-img/dr.ankit-kayal-youtube.jpg')}}"
                        alt="Thumbnail" />
                    <div class="overlay">
                        <div class="play-button">&#9658;</div>
                        <div class="story-title">Dr. Neeraj Kumar Sharma</div>
                    </div>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="medi">
                    <div class="story-card story-center"
                        onclick="openVideo('https://www.youtube.com/watch?v=videoID3')">
                        <img src="{{ asset('resources/assets/img/doctor-img/dr.ankit-kayal-youtube.jpg')}}"
                            alt="Thumbnail" />
                        <div class="overlay">
                            <div class="play-button">&#9658;</div>
                            <div class="story-title">Dr. Vikas Purohit </div>
                        </div>
                    </div>

                    <div class="story-card story-center"
                        onclick="openVideo('https://www.youtube.com/watch?v=videoID6')">
                        <img src="{{ asset('resources/assets/img/doctor-img/dr.ankit-kayal-youtube.jpg')}}"
                            alt="Thumbnail" />
                        <div class="overlay">
                            <div class="play-button">&#9658;</div>
                            <div class="story-title">Dr. Ankit Kayal</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <!-- Column 3 (One Large Center Image) -->
                <div class="story-card story-large" onclick="openVideo('https://www.youtube.com/watch?v=videoID4')">
                    <img src="{{ asset('resources/assets/img/doctor-img/2-youtube2.jpg')}}" alt="Thumbnail" />
                    <div class="overlay">
                        <div class="play-button">&#9658;</div>
                        <div class="story-title">Dr. Sebastian Marker </div>
                        <div class="story-title">Dr. Shivam Sethi</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="medi">
                    <!-- Column 4 (Two Small Images) -->
                    <div class="story-card story-center"
                        onclick="openVideo('https://www.youtube.com/embed/iphhd-I2a2Y')">
                        <img src="{{ asset('resources/assets/img/doctor-img/dr.ankit-kayal-youtube.jpg')}}"
                            alt="Thumbnail" />
                        <div class="overlay">
                            <div class="play-button">&#9658;</div>
                            <div class="story-title">Dr. Ankit Kayal</div>
                        </div>
                    </div>

                    <!-- Column 4 (Two Small Images) -->
                    <div class="story-card story-center"
                        onclick="openVideo('https://www.youtube.com/watch?v=videoID5')">
                        <img src="{{ asset('resources/assets/img/doctor-img/dr.ankit-kayal-youtube.jpg')}}"
                            alt="Thumbnail" />
                        <div class="overlay">
                            <div class="play-button">&#9658;</div>
                            <div class="story-title">Dr. Vikas Purohit </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 d-flex align-items-center">
                <!-- Column 2 (Two Small Images) -->
                <div class="story-card story-small" onclick="openVideo('https://www.youtube.com/watch?v=videoID2')">
                    <img src="{{ asset('resources/assets/img/doctor-img/dr.ankit-kayal-youtube.jpg')}}"
                        alt="Thumbnail" />
                    <div class="overlay">
                        <div class="play-button">&#9658;</div>
                        <div class="story-title">Dr. Neeraj Kumar Sharma</div>
                        <!-- <div class="story-name">Baby Bhavika</div> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-1 d-flex align-items-center"> </div>


        </div>






        <!-- Column 1 (One Large Image) -->
        <!-- <div class="story-card story-large" onclick="openVideo('https://www.youtube.com/watch?v=videoID1')">
            <img src="https://img.youtube.com/vi/videoID1/0.jpg" alt="Thumbnail">
            <div class="overlay">
                <div class="play-button">&#9658;</div>
                <div class="story-title">Mauritian Patient Treated For Esophageal Cancer</div>
                <div class="story-name">Mr Fazl Hosany</div>
            </div>
        </div> -->



    </div>

    <div class="view-all">
        <a href="#" class="view-all-btn">View All Patient Stories →</a>
    </div>
</section>



<script>
    function openVideo(url) {
        window.open(url, '_blank');
    }

</script>


@stop