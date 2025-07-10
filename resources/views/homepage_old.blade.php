<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('crafto/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('crafto/assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('crafto/assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('crafto/assets/images/apple-touch-icon-114x114.png') }}">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('crafto/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('crafto/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('crafto/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('crafto/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('crafto/demos/business/business.css') }}" />
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
            <div class="container-fluid align-items-center d-flex justify-content-between">

                {{-- 🔹 Logo + Judul di kiri --}}
                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                    <a class="navbar-brand me-2" href="{{ route('index') }}">
                        <img src="{{ asset('crafto/images/logo/logo-mbd.png') }}" alt="Logo"
                            style="max-height: 40px;">
                    </a>
                    <span class="fw-bold text-nowrap" style="font-size: clamp(1.5rem, 1.3vw, 1.2rem); color: #534e4e;">
                        e-SPPM
                    </span>
                </div>

                {{-- 🔹 Menu NAV (tengah) --}}
                <div class="collapse navbar-collapse justify-content-center flex-grow-1" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Panduan</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                </div>

                {{-- 🔹 Toggler + Login Button (kanan) --}}
                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <a href="{{ route('login') }}"
                        class="btn btn-very-small btn-transparent-white-light btn-rounded d-none d-lg-inline-block">LOGIN</a>
                </div>

            </div>
        </nav>


        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start section SLIDER -->
    <section class="section-dark p-0 bg-dark-gray">
        <div class="swiper lg-no-parallax magic-cursor  full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                        style="background-image:url('{{ asset('crafto/images/image-slider/slider-3.jpg') }}');">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Dengan
                                            e-SPPM!</span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Cepat,
                                        Tertib, dan Transparan dalam Pengelolaan <span class="fw-600">SPP & SPM.</span>
                                    </h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get
                                        started now<span class="bg-white text-base-color"><i
                                                class="fas fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                            <div class="position-absolute bottom-minus-45px"
                                data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span
                                    class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">01</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                {{-- <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                        data-swiper-parallax="500" style="background-image:url('{{ asset('crafto/images/image-slider/slider-2.jpg') }}');">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Dengan
                                            e-SPPM!</span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                        Digitalisasi Dokumen, <span class="fw-600"> Efisiensi Anggaran.</span></h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get
                                        started now<span class="bg-white text-base-color"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                <div class="position-absolute bottom-minus-45px"
                                    data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span
                                        class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">02</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                        data-swiper-parallax="500" style="background-image:url('{{ asset('crafto/images/image-slider/slider-2.jpg') }}');">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Dengan
                                            e-SPPM!</span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Satu
                                        Sistem, Semua Proses Pembayaran <span class="fw-600">Terkelola.</span></h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get
                                        started now<span class="bg-white text-base-color"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                <div class="position-absolute bottom-minus-45px"
                                    data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span
                                        class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">03</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end section -->



    <!-- start footer -->
    <footer class="pt-5 pb-5 sm-pt-40px sm-pb-45px footer-dark bg-extra-medium-slate-blue">
        <div class="container">
            <div class="row justify-content-center">
                <!-- start footer column -->
                <div
                    class="col-lg-3 col-sm-6 last-paragraph-no-margin order-5 order-sm-4 order-lg-1 text-center text-sm-start">
                    <a href="demo-business.html" class="footer-logo mb-15px d-block d-lg-inline-block"><img
                            src="images/demo-business-logo-white.png"
                            data-at2x="images/demo-business-logo-white@2x.png" alt=""></a>
                    <p class="w-90 sm-w-100 d-inline-block mb-15px">Lorem ipsum is consectetur adipiscing eiusmod
                        tempor.</p>
                    <p>&COPY; 2024 <a href="index.html" target="_blank"
                            class="text-white text-decoration-line-bottom">Crafto.</a></p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-5 col-lg-2 col-sm-4 md-mb-50px sm-mb-30px order-1 order-lg-2">
                    <span class="alt-font d-block text-white mb-5px">Company</span>
                    <ul>
                        <li><a href="demo-business-about.html">About us</a></li>
                        <li><a href="demo-business-services.html">Our services</a></li>
                        <li><a href="demo-business-clients.html">Our clients</a></li>
                        <li><a href="demo-business-contact.html">Contact</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-7 col-lg-2 col-sm-4 md-mb-50px sm-mb-30px order-2 order-lg-3">
                    <span class="alt-font d-block text-white mb-5px">Services</span>
                    <ul>
                        <li><a href="demo-business-services.html">Branding</a></li>
                        <li><a href="demo-business-services.html">eCommerce</a></li>
                        <li><a href="demo-business-services.html">Content</a></li>
                        <li><a href="demo-business-services.html">Marketing</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-5 col-lg-2 col-sm-4 md-mb-50px sm-mb-30px order-3 order-lg-4">
                    <span class="alt-font d-block text-white mb-5px">Social connect</span>
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="http://www.dribbble.com" target="_blank">Dribbble</a></li>
                        <li><a href="http://www.twitter.com" target="_blank">Twitter</a></li>
                        <li><a href="http://www.instagram.com" target="_blank">Instagram</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-7 col-lg-3 col-sm-6 xs-mb-30px last-paragraph-no-margin order-4 order-sm-5 order-lg-5">
                    <span class="alt-font d-block text-white mb-5px">Get in touch</span>
                    <p class="w-80 lg-w-100 md-w-70 sm-w-100 mb-10px">401 Broadway, 24th Floor New York, NY 10013</p>
                    <div><i class="feather icon-feather-phone-call icon-very-small text-white me-10px"></i><a
                            href="tel:12345678910" class="text-white">+1 234 567 8910</a></div>
                    <div><i class="feather icon-feather-mail icon-very-small text-white me-10px"></i><a
                            href="mailto:info@domain.com"
                            class="text-white text-decoration-line-bottom">info@domain.com</a></div>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start sticky column -->
    <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100"
        data-shadow-animation="true">
        <span class="fs-15 fw-500"><i class="feather icon-feather-mail icon-small me-10px align-middle"></i>Effective
            business solutions? — <a href="demo-business-contact.html" class="text-decoration-line-bottom fw-600">Get
                started now</a></span>
    </div>
    <!-- end sticky column -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('crafto/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('crafto/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('crafto/js/main.js') }}"></script>
</body>

</html>
