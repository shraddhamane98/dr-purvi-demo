 <!-- Topbar Section Start -->
 <div class="topbar">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-9 col-md-12">
                 <!-- Topbar Contact Information Start -->
                 <div class="topbar-contact-info">
                     <ul>
                         <li><a href="#"><i class='fas fa-phone'></i>+91 8591247643 </a></li>
                         <li><a href="#"><i class='fas fa-envelope-open'></i> purvideshpande@gmail.com </a></li>

                     </ul>
                 </div>
                 <!-- Topbar Contact Information End -->
             </div>

             <div class="col-lg-3 col-md-0">
                 <!-- Topbar Social Links Start -->
                 <div class="topbar-social-links">
                     <ul>
                         <li><a href="https://www.instagram.com/physiopurvi/"><i class="fa-brands fa-instagram"></i></a>
                         </li>
                         <li><a href="https://www.linkedin.com/in/purvi-deshpande-b9864022/"><i
                                     class="fa-brands fa-linkedin-in"></i></a></li>
                         <li><a href="https://www.facebook.com/p/Dr-Purvi-Deshpande-PT-100083814180010/"><i
                                     class="fa-brands fa-facebook-f"></i></a></li>
                     </ul>
                 </div>
                 <!-- Topbar Social Links End -->
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar Section End -->

 <!-- Header Start -->
 <header class="main-header">
     <div class="header-sticky">
         <nav class="navbar navbar-expand-lg">
             <div class="container">
                 <!-- Logo Start -->
                 <a class="navbar-brand" href="{{ route('home') }}">
                     <img src="{{ asset('/resources/assets/images/purvi-deshpande-logo.png') }}" class=""
                         alt="Logo">
                     {{-- <h3 class="ps-2">Dr. Purvi Deshpande</h3> --}}
                 </a>
                 <!-- Logo End -->

                 <!-- Main Menu Start -->
                 <div class="collapse navbar-collapse main-menu">
                     <div class="nav-menu-wrapper">
                         <ul class="navbar-nav mr-auto" id="menu">
                             <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>

                             <li class="nav-item submenu"><a class="nav-link" href="#">Services</a>
                                 <ul class="bg-row">
                                     <li class="nav-item"><a class="nav-link" href="{{ route('physiotherapy') }}"><i
                                                 class="fas fa-heartbeat"></i> Physiotherapy </a></li>
                                     <li class="nav-item"><a class="nav-link" href="{{ route('rehabilitation') }}"><i
                                                 class="fas fa-wheelchair"></i> Rehabilitation </a></li>
                                     <li class="nav-item"><a class="nav-link" href="{{ route('electrotherapy') }}"><i
                                                 class="fas fa-bolt"></i>
                                             Electrotherapy </a></li>
                                     <li class="nav-item"><a class="nav-link" href=""><i
                                                 class="fas fa-running"></i>
                                             Exercise therapy </a></li>
                                     <li class="nav-item"><a class="nav-link" href=""><i
                                                 class="fas fa-pills"></i>
                                             Pain Relief </a></li>
                                     <li class="nav-item"><a class="nav-link" href=""><i
                                                 class="fas fa-dumbbell"></i>
                                             Strength Training </a></li>
                                     <li class="nav-item"><a class="nav-link" href=""><i
                                                 class="fas fa-procedures"></i> Post Operative Conditions &
                                             Rehabilitation </a></li>
                                 </ul>
                             </li>

                             <li class="nav-item submenu treatments-menu"><a class="nav-link"
                                     href="#">Treatments</a>
                                 <ul class="bg-row treatments-submenu">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <ul class="sub-menu">
                                                 <li class="nav-item"><a class="nav-link"
                                                         href="{{ route('arthritis') }}"><i class="fas fa-running"></i>
                                                         Arthritis</a></li>
                                                 <li class="nav-item"><a class="nav-link"
                                                         href="{{ route('fracture') }}"><i
                                                             class="fas fa-hand-holding-medical"></i> Fracture</a>
                                                 </li>
                                                 <li class="nav-item"><a class="nav-link"
                                                         href="{{ route('back-pain') }}"><i
                                                             class="fas fa-basketball-ball"></i> Back Pain</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('neck-pain') }}"><i  class="fas fa-spa"></i> Neck Pain</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('frozen-shoulder') }}"><i class="fas fa-bone"></i> Frozen Shoulder</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('postural-correction') }}"><i
                                                             class="fas fa-pills"></i> Postural Correction</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('sports-injuries') }}"><i
                                                             class="fas fa-baby"></i> Sports Injuries</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('joint-pain-strengthening') }}"><i
                                                             class="fas fa-wheelchair"></i> Joint Pain
                                                         Strengthening</a></li>
                                             </ul>
                                         </div>
                                         <div class="col-lg-6">
                                             <ul class="sub-menu">

                                                 <li class="nav-item"><a class="nav-link" href="{{ route('post-surgical-treatment') }}"><i
                                                             class="fas fa-brain"></i> Post-Surgical Treatment</a>
                                                 </li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('neuro-rehab') }}"><i
                                                             class="fas fa-procedures"></i> Neuro Rehab</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('paralysis') }}"><i
                                                             class="fas fa-procedures"></i> Paralysis</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('facial-palsy') }}"><i
                                                             class="fas fa-procedures"></i> Facial Palsy</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('pediatric-disabilities') }}"><i
                                                             class="fas fa-procedures"></i> Pediatric Disabilities</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('slip-disc') }}"><i
                                                             class="fas fa-procedures"></i> Slip Disc</a></li>
                                                 <li class="nav-item"><a class="nav-link" href="{{ route('women-health') }}"><i
                                                             class="fas fa-procedures"></i> Women's Health</a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </ul>
                             </li>

                             <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>

                             {{-- <li class="nav-item"><a class="nav-link" href="">Testimonial</a></li> --}}

                             <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                             </li>
                         </ul>
                     </div>
                     <!-- Let's Start Button Start -->
                     {{-- <div class="header-btn d-inline-flex">
                        <a href="tel:+91 8591247643" class="btn-default"><span>+91 8591247643</span></a>
                    </div> --}}
                     <!-- Let's Start Button End -->
                 </div>
                 <!-- Main Menu End -->
                 <div class="navbar-toggle"></div>
             </div>
         </nav>
         <div class="responsive-menu"></div>
     </div>
 </header>
 <!-- Header End -->
