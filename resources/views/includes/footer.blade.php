    <!-- Footer Start -->
    <footer class="main-footer bg-radius-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <div class="row">
                            <div class="col-lg-4">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <!-- <img src="images/footer-logo.svg" alt=""> -->
                                    <h3>Dr. Purvi Deshpande</h3>
                                </div>
                                <!-- Footer Logo End -->
                            </div>

                            <div class="col-lg-8">
                                <!-- About Footer Content Start -->
                                <div class="about-footer-content">
                                    <h3>SAMVEDNA </h3>
                                    <p>Dr. Purvi Deshpande offers expert physiotherapy and rehabilitation services,
                                        focusing on healing with care and personalized treatment plans for optimal
                                        recovery and well-being.</p>
                                </div>
                                <!-- About Footer Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- About Footer End -->

                    <!-- About Footer List Start -->
                    <div class="about-footer-list">
                        <!-- Footer Quick Links Start -->
                        <div class="footer-links quick-links">
                            <h3>quick links</h3>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">Treatments</a></li>
                                <li><a href="{{ route('contact')}}">contact us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Quick Links End -->

                        <!-- Footer Quick Links Start -->
                        <div class="footer-links service-links">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Physiotherapy</a></li>
                                <li><a href="#">Rehabilitation</a></li>
                                <li><a href="#">Electrotherapy</a></li>
                            </ul>
                        </div>
                        <!-- Footer Quick Links End -->

                        <!-- Footer Quick Links Start -->
                        <div class="footer-links social-links">
                            <h3>social media</h3>
                            <ul>
                                <li><a href="https://www.instagram.com/physiopurvi/"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/purvi-deshpande-b9864022/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.facebook.com/p/Dr-Purvi-Deshpande-PT-100083814180010/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Quick Links End -->



                        <!-- Footer Copyright Section Start -->
                        <div class="footer-links terms-condition-links">
                            <div class="footer-copyright-text">
                                <p>Copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> <a href="{{ route('home')}}">Dr. Purvi Deshpande</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <!-- Footer Copyright Section End -->
                    </div>
                    <!-- About Footer List End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Jquery Library File -->
    <script src="{{ asset('/resources/assets/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('/resources/assets/js/bootstrap.min.js')}}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('/resources/assets/js/validator.min.js')}}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('/resources/assets/js/jquery.slicknav.js')}}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('/resources/assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('/resources/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('/resources/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('/resources/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('/resources/assets/js/SmoothScroll.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('/resources/assets/js/parallaxie.js')}}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('/resources/assets/js/gsap.min.js')}}"></script>
    <script src="{{ asset('/resources/assets/js/magiccursor.js')}}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('/resources/assets/js/SplitText.js')}}"></script>
    <script src="{{ asset('/resources/assets/js/ScrollTrigger.min.js')}}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('/resources/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('/resources/assets/js/wow.js')}}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('/resources/assets/js/function.js')}}"></script>
    {{-- <script src="../../demo.awaikenthemes.com/assets/js/theme-panel.js')}}"></script> --}}

     <!-- Swiper JS -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}

    <!-- Fancybox js file -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Custom options
            loop: true,
            buttons: [
                "zoom",
                "slideShow",
                "fullScreen",
                "thumbs",
                "close"
            ],
            animationEffect: "fade",
            transitionEffect: "fade",
        });
    </script>