<style>
    .header-menu .main-menu li a {
        color: white !important;
    }

    .header-menu .main-menu li a:hover {
        color: navy !important; /* opsional: warna saat hover */
    }

    .header-menu .main-menu .sub-menu li a {
        color: black !important;
    }
</style>

@include('frontend.abgblora.00_fiturmenu.02_header')


<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div id="header" class="section header-section transparent-header" style="background: #000C29">
            <div class="container">

                <!-- Container Full Width -->
<div class="header-container" style="width: 100%; background-color: #000C29;">

    <!-- LOGO SECTION -->
    <div class="header-logo" style="display: flex; align-items: center; gap: 15px; padding: 10px 30px;">
        <img src="/assets/abgblora/logo/logokabupatenblora.png" alt="Logo Blora"
             style="width: 60px; height: auto; margin-top: 5px;">
        <img src="/assets/abgblora/logo/logopupr.png" alt="Logo PUPR"
             style="width: 60px; height: auto; margin-top: 5px;">
        <div style="display: flex; flex-direction: column;">
            <h3 style="display: flex; align-items: center; gap: 5px; margin: 0;">
                <span style="color: white; font-style: italic;">ABG</span>
                <span style="color: green; font-style: italic;">BLORA</span>
            </h3>
            <h4 style="margin: 0;">
                <span style="color: white;">Dinas Pekerjaan Umum & Penataan Ruang Kabupaten Blora</span>
            </h4>
        </div>
    </div>

    <!-- MENU SECTION -->
    <div class="header-menu d-none d-lg-block" style="color: white; width: 100%; padding: 0 30px 15px;">
        <ul class="main-menu" style="display: flex; gap: 25px; flex-wrap: wrap; list-style: none; margin: 0; padding: 0;">
            <li class="active-menu">
                <a href="index.html" style="color: white; text-decoration: none;">Home</a>
                <ul class="sub-menu" style="list-style: none; padding-left: 15px; margin: 5px 0 0;">
                    <li class="active"><a href="index.html" style="color: white; text-decoration: none;">Home One</a></li>
                    <li><a href="index-2.html" style="color: white; text-decoration: none;">Home Two</a></li>
                    <li><a href="index-3.html" style="color: white; text-decoration: none;">Home Three</a></li>
                    <li><a href="index-4.html" style="color: white; text-decoration: none;">Home Four</a></li>
                    <li><a href="index-5.html" style="color: white; text-decoration: none;">Home Five</a></li>
                    <li><a href="index-6.html" style="color: white; text-decoration: none;">Home Six</a></li>
                </ul>
            </li>
            <li><a href="about.html" style="color: white; text-decoration: none;">About Us</a></li>
            <li>
                <a href="#" style="color: white; text-decoration: none;">Pages</a>
                <ul class="sub-menu" style="list-style: none; padding-left: 15px; margin: 5px 0 0;">
                    <li><a href="team.html" style="color: white; text-decoration: none;">Our Team</a></li>
                    <li><a href="service.html" style="color: white; text-decoration: none;">Service</a></li>
                    <li><a href="why-choose.html" style="color: white; text-decoration: none;">Why Choose Us</a></li>
                    <li><a href="testimonial.html" style="color: white; text-decoration: none;">Testimonial</a></li>
                    <li><a href="pricing.html" style="color: white; text-decoration: none;">Pricing</a></li>
                    <li><a href="login-register.html" style="color: white; text-decoration: none;">Login & Register</a></li>
                </ul>
            </li>
            <li>
                <a href="#" style="color: white; text-decoration: none;">Blog</a>
                <ul class="sub-menu" style="list-style: none; padding-left: 15px; margin: 5px 0 0;">
                    <li><a href="blog.html" style="color: white; text-decoration: none;">Blog Grid</a></li>
                    <li><a href="blog-standard.html" style="color: white; text-decoration: none;">Latest News</a></li>
                    <li><a href="blog-details.html" style="color: white; text-decoration: none;">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="contact.html" style="color: white; text-decoration: none;">Contact</a></li>
        </ul>
    </div>
</div>

            </div>
        </div>
        <!-- Header End -->


        {{-- JANGAN DI HAPUS  ====================================================--}}

        @include('frontend.abgblora.00_fiturmenu.01_canvasmenuhp')

        <!-- Service Start -->
        <div class="section service-section" style="margin-top:350px;">
            <div class="container">
                <div class="service-wrap">
                    <div class="row">

                        <style>
                            /* Styling umum */
                            .service-item {
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: space-between;
                                height: 100%; /* Pastikan semua card memiliki tinggi yang sama */
                                padding: 20px;
                                border-radius: 10px;
                                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                                background: #fff;
                                transition: transform 0.3s ease-in-out;
                            }

                            .service-item:hover {
                                transform: translateY(-5px); /* Efek hover agar lebih menarik */
                            }

                            .service-content {
                                flex-grow: 1; /* Mengisi ruang kosong agar semua card sama tinggi */
                                display: flex;
                                flex-direction: column;
                                justify-content: center;
                                text-align: center;
                            }

                            .service-icon img {
                                max-width: 80px; /* Ukuran ikon sama */
                                height: auto;
                            }

                            .service-item h3 {
                                font-size: 18px;
                                margin-top: 10px;
                            }

                            /* Grid Layout agar responsif */
                            .services-container {
                                display: grid;
                                grid-template-columns: repeat(4, 1fr); /* 4 kolom di layar besar */
                                gap: 20px;
                            }

                            /* Responsive Breakpoints */
                            @media (max-width: 1024px) {
                                .services-container {
                                    grid-template-columns: repeat(2, 1fr); /* 2 kolom di tablet */
                                }
                            }

                            @media (max-width: 768px) {
                                .services-container {
                                    grid-template-columns: repeat(1, 1fr); /* 1 kolom di HP */
                                }
                            }
                        </style>

                        <!-- Container untuk layanan -->
                        <div class="services-container">
                            <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Persetujuan Bangunan Gedung (PBG) </a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                            </div>

                            <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Tracking (PBG) </a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                            </div>

                            <div class="service-item text-center">
                                <a href="/404">
                                    <div class="shape-1"></div>
                                    <div class="shape-2">
                                        <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                    </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Pendataan Bangunan Gedung </a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                    </a>
                                </div>

                                <div class="service-item text-center">
                                    <a href="/404">
                                    <div class="shape-1"></div>
                                    <div class="shape-2">
                                        <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                    </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Bantuan Teknis </a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                    </a>
                                </div>

                                <div class="service-item text-center">
                                    <a href="/404">
                                    <div class="shape-1"></div>
                                    <div class="shape-2">
                                        <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                    </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                        <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                    </div>
                                    <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Sosialisasi & Pelatihan </a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                    </a>
                            </div>

                            <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                <div class="service-icon">
                                    <div class="shape-1"></div>
                                    <div class="shape-2">
                                        <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                    </div>
                                    <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="title"><a href="#">Keterangan Rencana Kota</a></h3>
                                    {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                </div>
                                    </a>
                            </div>

                            <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Penilik Bangunan Gedung</a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                                </div>

                                <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Gambar Untuk MBR</a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                                </div>

                                <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Bantuan Gambar </a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                                </div>


                                <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Hibah Bangunan Gedung</a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                                </div>

                                <div class="service-item text-center">
                                <a href="/404">
                                <div class="shape-1"></div>
                                <div class="shape-2">
                                    <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                </div>
                                    <div class="service-icon">
                                        <div class="shape-1"></div>
                                        <div class="shape-2">
                                            <img src="/assets/abgblora/images/service/s-shape-2.png" alt="">
                                        </div>
                                        <img src="/assets/abgblora/logo/bangunan.png" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><a href="#">Pelatihan Bangunan Gedung</a></h3>
                                        {{-- <p>We provide the most responsive and functional IT design for companies and businesses worldwide.</p> --}}
                                    </div>
                                </a>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Hero Start -->
        <div class="section tech-hero-section" style="background-image: url(assets/images/hero-1.jpg);">
            <div class="shape-1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <!-- Hero Content Start -->
                        <div class="hero-content">
                            <h3 class="sub-title" data-aos-delay="600" data-aos="fade-up">Technology Releted Consultancy</h3>
                            <h2 class="title" data-aos="fade-up" data-aos-delay="700">We bring great Ideas to life</h2>
                            <p data-aos="fade-up" data-aos-delay="800">We provide the most responsive and functional IT design for companies and businesses worldwide.</p>
                            <div class="hero-btn" data-aos="fade-up" data-aos-delay="900">
                                <a class="btn" href="#">Read More</a>
                            </div>
                        </div>
                        <!-- Hero Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- About Start -->
        <div class="section about-section section-padding">
            <div class="container">
                <!-- About Wrap Start -->
                <div class="about-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Thumb Wrap Start -->
                            <div class="about-thumb-wrap">
                                <div class="about-thumb-small">
                                    <img src="assets/images/about-1.jpg" alt="">
                                </div>
                                <div class="about-thumb-big">
                                    <img src="assets/images/about-2.jpg" alt="">
                                </div>
                                <div class="about-thumb-shape">
                                    <img src="assets/images/ab-shape.png" alt="">
                                </div>
                                <div class="play-btn">
                                    <a class="popup-video" href="https://www.youtube.com/watch?time_continue=3&v=_X0eYtY8T_U"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <!-- About Thumb Wrap End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Content Start -->
                            <div class="about-content">
                                <div class="section-title">
                                    <h3 class="sub-title">Who We Are</h3>
                                    <h2 class="title">We specialise in helping our customers digitise their business</h2>
                                </div>
                                <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs.</p>
                                <div class="about-author-list">
                                    <div class="about-author">
                                        <img src="assets/images/sign.png" alt="">
                                        <h4 class="name">Mita Walker</h4>
                                        <span class="designation">CEO, Techmax</span>
                                        <div class="author-img">
                                            <img src="assets/images/author-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="about-list">
                                        <ul>
                                            <li><i class="fas fa-check"></i> <a href="#">Solving complex problems</a></li>
                                            <li><i class="fas fa-check"></i> <a href="#">We guarantee trusted service.</a></li>
                                            <li><i class="fas fa-check"></i> <a href="#"> Experts in technology fields</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- About Content End -->
                        </div>
                    </div>
                </div>
                <!-- About Wrap End -->
            </div>
        </div>
        <!-- About End -->

        <!--  Skill Start -->
        {{-- <div class="section skill-section section-padding">
            <div class="container">
                <div class="skill-wrap">
                    <!--  Skill Content Wrap Start -->
                    <div class="skill-content-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <!--  Skill Content Left Start -->
                                <div class="skill-content-left">
                                    <div class="experience">
                                        <h2 class="number">25+</h2>
                                        <span>Years of experience</span>
                                    </div>
                                    <h3 class="title">We run all kinds of <span>IT services</span> that vow your success</h3>
                                </div>
                                <!--  Skill Content Left End -->
                            </div>
                            <div class="col-lg-7">
                                <!--  Skill Content Right Start -->
                                <div class="skill-content-right">
                                    <h3 class="title">Accelerate innovation with world-class tech teams We’ll match you to an entire remote technology</h3>
                                    <div class="skill-bar-wrap">
                                        <!--  Skill Item Start  -->
                                        <div class="skill-item">
                                            <div class="skill-header">
                                                <h5 class="skill-title">IT Managment</h5>
                                                <span class="skill-percentage">
                                                <span class="counter">80</span>
                                                %
                                                </span>
                                            </div>
                                            <div class="skill-bar">
                                                <div class="bar-inner">
                                                    <div class="progress-line" data-width="80"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Skill Item End  -->
                                        <!--  Skill Item Start  -->
                                        <div class="skill-item">
                                            <div class="skill-header">
                                                <h5 class="skill-title">Data Security</h5>
                                                <span class="skill-percentage">
                                                <span class="counter">90</span>
                                                %
                                                </span>
                                            </div>
                                            <div class="skill-bar">
                                                <div class="bar-inner">
                                                    <div class="progress-line" data-width="90"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Skill Item End  -->
                                        <!--  Skill Item Start  -->
                                        <div class="skill-item">
                                            <div class="skill-header">
                                                <h5 class="skill-title">Solution</h5>
                                                <span class="skill-percentage">
                                                <span class="counter">90</span>
                                                %
                                                </span>
                                            </div>
                                            <div class="skill-bar">
                                                <div class="bar-inner">
                                                    <div class="progress-line" data-width="90"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Skill Item End  -->
                                    </div>
                                </div>
                                <!--  Skill Content Right End -->
                            </div>
                        </div>
                    </div>
                    <!--  Skill Content Wrap End -->

                    <!--  Skill Image Wrap Start -->
                    <div class="skill-img-wrap">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <!--  Skill Image Item Start -->
                                <div class="skill-img-item">
                                    <div class="skill-img">
                                        <a class="image" href="#"><img src="assets/images/skill/skill-img-1.jpg" alt=""></a>
                                        <div class="skill-img-text">
                                            <h3 class="title"><a href="#">Data Security</a></h3>
                                            <a class="skill-btn" href="#">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  Skill Image Item Start -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!--  Skill Image Item Start -->
                                <div class="skill-img-item">
                                    <div class="skill-img">
                                        <a class="image" href="#"><img src="assets/images/skill/skill-img-2.jpg" alt=""></a>
                                        <div class="skill-img-text">
                                            <h3 class="title"><a href="#">IT Managment</a></h3>
                                            <a class="skill-btn" href="#">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  Skill Image Item Start -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!--  Skill Image Item Start -->
                                <div class="skill-img-item">
                                    <div class="skill-img">
                                        <a class="image" href="#"><img src="assets/images/skill/skill-img-3.jpg" alt=""></a>
                                        <div class="skill-img-text">
                                            <h3 class="title"><a href="#">Digital Marketing</a></h3>
                                            <a class="skill-btn" href="#">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  Skill Image Item Start -->
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <!--  Skill Image Item Start -->
                                <div class="skill-img-item">
                                    <div class="skill-img">
                                        <a class="image" href="#"><img src="assets/images/skill/skill-img-4.jpg" alt=""></a>
                                        <div class="skill-img-text">
                                            <h3 class="title"><a href="#">Networking</a></h3>
                                            <a class="skill-btn" href="#">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--  Skill Image Item Start -->
                            </div>
                        </div>
                    </div>
                    <!--  Skill Image Wrap End -->
                </div>
            </div>
        </div> --}}
        <!--  Skill End -->

        {{-- <!-- Counter Start -->
        <div class="section counter-section" style="background-image: url(assets/images/bg/counter-bg.jpg);">
            <div class="container">
                <div class="counter-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter/counter-1.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <span>
                                    <span class="counter">354</span>+
                                    </span>
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter/counter-2.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <span>
                                    <span class="counter">119</span>+
                                    </span>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter/counter-3.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <span>
                                    <span class="counter">99</span>%
                                    </span>
                                    <p>Web Site Analyse</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Counter Item Start -->
                            <div class="counter-item text-center">
                                <div class="counter-icon">
                                    <img src="assets/images/counter/counter-4.png" alt="">
                                </div>
                                <div class="counter-text">
                                    <span>
                                    <span class="counter">321</span>+
                                    </span>
                                    <p>Clients Supoort Done</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Counter End -->

        <!-- Case Study Start -->
        {{-- <div class="section case-study-section section-padding">
            <div class="container">
                <div class="case-study-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Who We Are</h3>
                        <h2 class="title">We are proud team of great project</h2>
                    </div>
                </div>
            </div> --}}

            <!-- Case Study Slider Wrap Start -->
            {{-- <div class="case-study-slider-wrap">
                <div class="swiper-container case-study-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study text-center" style="background-image: url(assets/images/c-study-1.jpg);">
                                <div class="case-study-content">
                                    <div class="case-study-title">
                                        <h3 class="title">Aeroland Protocol</h3>
                                        <span>Cyber Secutiy</span>
                                    </div>
                                    <div class="case-study-text">
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs.</p>
                                    </div>
                                    <div class="case-study-link">
                                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Case Study End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study text-center" style="background-image: url(assets/images/c-study-2.jpg);">
                                <div class="case-study-content">
                                    <div class="case-study-title">
                                        <h3 class="title">Analytic Solutions</h3>
                                        <span>IT Technology</span>
                                    </div>
                                    <div class="case-study-text">
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs.</p>
                                    </div>
                                    <div class="case-study-link">
                                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Case Study End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Case Study Start -->
                            <div class="single-case-study text-center" style="background-image: url(assets/images/c-study-3.jpg);">
                                <div class="case-study-content">
                                    <div class="case-study-title">
                                        <h3 class="title">Product Design</h3>
                                        <span>IT Technology</span>
                                    </div>
                                    <div class="case-study-text">
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs.</p>
                                    </div>
                                    <div class="case-study-link">
                                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Case Study End -->
                        </div>
                    </div>

                    <!-- Add Pagination -->
                    <div class="case-study-arrow swiper-button-next"></div>
                    <div class="case-study-arrow swiper-button-prev"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Case Study Slider Wrap End -->

            <!-- Case Study Button Start -->
            <div class="row jusify-content-center">
                <div class="case-study-btn text-center">
                    <a class="btn" href="#">See More Projects</a>
                </div>
            </div>
            <!-- Case Study Button End -->

        </div> --}}
        <!-- Case Study End -->

        <!-- Features Start -->
        {{-- <div class="section features-section" style="background-image: url(assets/images/bg/features-bg.jpg);">
            <!-- Features Thumb Start -->
            <div class="features-thumb d-flex align-items-end">
                <div class="shape-1">
                    <img src="assets/images/features-shape.png" alt="">
                </div>
                <div class="image">
                    <img src="assets/images/features-img.png" alt="">
                </div>
            </div>
            <!-- Features Thumb End -->
            <div class="container">
                <!-- Features Wrap Start -->
                <div class="features-wrap">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-5">
                            <!-- Features Content Wrap Start -->
                            <div class="features-content-wrap">
                                <div class="section-title">
                                    <h3 class="sub-title">Why Choose Us</h3>
                                    <h2 class="title">We provide truly prominent IT solutions for your success</h2>
                                </div>
                                <!-- Features Content Start -->
                                <div class="features-content">
                                    <ul>
                                        <!-- Features Item Start -->
                                        <li class="features-item">
                                            <div class="features-icon">
                                                <img src="assets/images/features-1.png" alt="">
                                            </div>
                                            <div class="features-text">
                                                <h3 class="title">Expert Team</h3>
                                                <p>Accelerate innovation with world-class tech teams</p>
                                            </div>
                                        </li>
                                        <!-- Features Item End -->
                                        <!-- Features Item Start -->
                                        <li class="features-item">
                                            <div class="features-icon">
                                                <img src="assets/images/features-2.png" alt="">
                                            </div>
                                            <div class="features-text">
                                                <h3 class="title">Quality Contro</h3>
                                                <p>Accelerate innovation with world-class tech teams</p>
                                            </div>
                                        </li>
                                        <!-- Features Item End -->
                                        <!-- Features Item Start -->
                                        <li class="features-item">
                                            <div class="features-icon">
                                                <img src="assets/images/features-3.png" alt="">
                                            </div>
                                            <div class="features-text">
                                                <h3 class="title">Integration</h3>
                                                <p>Accelerate innovation with world-class tech teams</p>
                                            </div>
                                        </li>
                                        <!-- Features Item End -->
                                        <!-- Features Item Start -->
                                        <li class="features-item">
                                            <div class="features-icon">
                                                <img src="assets/images/features-4.png" alt="">
                                            </div>
                                            <div class="features-text">
                                                <h3 class="title">24/7 Support</h3>
                                                <p>Accelerate innovation with world-class tech teams</p>
                                            </div>
                                        </li>
                                        <!-- Features Item End -->
                                    </ul>
                                    <div class="features-link">
                                        <p>This is only glimpse see <a href="#">All Features</a></p>
                                    </div>
                                </div>
                                <!-- Features Content End -->
                            </div>
                            <!-- Features Content Wrap End -->
                        </div>
                    </div>
                </div>
                <!-- Features Wrap End -->
            </div>
        </div> --}}
        <!-- Features End -->

        <!-- Team Start -->
        {{-- <div class="section team-section section-padding">
            <div class="container">
                <!-- Team Wrap Start -->
                <div class="team-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Highly Professional Staffs </h3>
                        <h2 class="title"> IT technology and technical fields professional staff</h2>
                    </div>
                    <!-- Team Content Wrap Start -->
                    <div class="team-content-wrap">
                        <div class="swiper-container team-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                            <a href="team.html"><img src="assets/images/team/team-1.jpg" alt=""></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="name"><a href="#">Mike Holder</a></h3>
                                            <span class="designation">Founder, Techmax</span>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                            <a href="team.html"><img src="assets/images/team/team-2.jpg" alt=""></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="name"><a href="#">Mike Holder</a></h3>
                                            <span class="designation">Founder, Techmax</span>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Team Start -->
                                    <div class="single-team">
                                        <div class="team-img">
                                            <a href="team.html"><img src="assets/images/team/team-3.jpg" alt=""></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-social">
                                                <ul class="social">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                                </ul>
                                            </div>
                                            <h3 class="name"><a href="#">Mike Holder</a></h3>
                                            <span class="designation">Founder, Techmax</span>
                                        </div>
                                    </div>
                                    <!-- Single Team End -->
                                </div>
                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Team Content Wrap End -->
                </div>
                <!-- Team Wrap End -->
            </div>
        </div> --}}
        <!-- Team End -->

        <!-- Testimonial Start -->
        {{-- <div class="section testimonial-section section-padding" style="background-image: url(assets/images/bg/testi-bg.jpg);">
            <div class="container">
                <!-- Testimonial Wrap Start -->
                <div class="testimonial-wrap">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="section-title">
                                <h3 class="sub-title">Client Testimonial</h3>
                                <h2 class="title">20k+ clients love our service & IT related solutions </h2>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <!-- Testimonial Slider Wrap Start -->
                            <div class="testimonial-slider-wrap">
                                <div class="swiper-container testimonial-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Testimonial Start -->
                                            <div class="single-testimonial">
                                                <div class="testimonial-content">
                                                    <h3 class="title">They Are Best</h3>
                                                    <p>Accelerate innovation with world-class tech teams Beyond more stoic this along goodness hey this this wow manatee </p>
                                                    <div class="testimonial-author-wrap">
                                                        <div class="testimonial-author">
                                                            <div class="author-img">
                                                                <img src="assets/images/author-1.jpg" alt="">
                                                            </div>
                                                            <div class="author-text">
                                                                <h5 class="name">Mike Holder</h5>
                                                                <span class="designation">CEO, Harlond inc</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-quote">
                                                            <img src="assets/images/quote.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Testimonial End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Testimonial Start -->
                                            <div class="single-testimonial">
                                                <div class="testimonial-content">
                                                    <h3 class="title">Right Aagency</h3>
                                                    <p>Accelerate innovation with world-class tech teams Beyond more stoic this along goodness hey this this wow manatee </p>
                                                    <div class="testimonial-author-wrap">
                                                        <div class="testimonial-author">
                                                            <div class="author-img">
                                                                <img src="assets/images/author-2.jpg" alt="">
                                                            </div>
                                                            <div class="author-text">
                                                                <h5 class="name">Mike Holder</h5>
                                                                <span class="designation">CEO, Harlond inc</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-quote">
                                                            <img src="assets/images/quote.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Testimonial End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Testimonial Start -->
                                            <div class="single-testimonial">
                                                <div class="testimonial-content">
                                                    <h3 class="title">They Are Best</h3>
                                                    <p>Accelerate innovation with world-class tech teams Beyond more stoic this along goodness hey this this wow manatee </p>
                                                    <div class="testimonial-author-wrap">
                                                        <div class="testimonial-author">
                                                            <div class="author-img">
                                                                <img src="assets/images/author-1.jpg" alt="">
                                                            </div>
                                                            <div class="author-text">
                                                                <h5 class="name">Mike Holder</h5>
                                                                <span class="designation">CEO, Harlond inc</span>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-quote">
                                                            <img src="assets/images/quote.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Testimonial End -->
                                        </div>
                                    </div>

                                    <!-- Add Pagination -->
                                    <div class="testimonial-arrow swiper-button-next"></div>
                                    <div class="testimonial-arrow swiper-button-prev"></div>
                                </div>
                            </div>
                            <!-- Testimonial Slider Wrap End -->
                        </div>
                    </div>
                </div>
                <!-- Testimonial Wrap End -->
            </div>
        </div> --}}
        <!-- Testimonial End -->

        <!-- Blog Start -->
        {{-- <div class="section blog-section section-padding-02">
            <div class="container">
                <!-- Blog Wrap Start -->
                <div class="blog-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title">News & Blog</h3>
                        <h2 class="title">Trending article & stories</h2>
                    </div>
                    <!-- Blog Content Wrap Start -->
                    <div class="blog-content-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                        <div class="top-meta">
                                            <span class="date"><span>08</span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="fas fa-user"></i> <a href="#">Andrew Paker</a></span>
                                            <span><i class="far fa-comments"></i> 0 Comments</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Who Needs Extract Value From Data?</a></h3>
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote.</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a class="blog-btn-link" href="blog-details.html">Read Full Article <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                                        <div class="top-meta">
                                            <span class="date"><span>10</span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="fas fa-user"></i> <a href="#">Andrew Paker</a></span>
                                            <span><i class="far fa-comments"></i> 0 Comments</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Easy and Most Powerful Server and Platform.</a></h3>
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote.</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a class="blog-btn-link" href="blog-details.html">Read Full Article <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Blog Start -->
                                <div class="single-blog">
                                    <div class="blog-img">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                                        <div class="top-meta">
                                            <span class="date"><span>08</span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="fas fa-user"></i> <a href="#">Andrew Paker</a></span>
                                            <span><i class="far fa-comments"></i> 0 Comments</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Back up your database, store in a safe</a></h3>
                                        <p>Accelerate innovation with world-class tech teams We’ll match you to an entire remote.</p>
                                    </div>
                                    <div class="blog-btn">
                                        <a class="blog-btn-link" href="blog-details.html">Read Full Article <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                            </div>
                        </div>
                    </div>
                    <!-- Blog Content Wrap End -->
                </div>
                <!-- Blog Wrap End -->
            </div>
        </div> --}}
        <!-- Blog End -->

        <!-- Brand Logo Start -->
        {{-- <div class="section Brand-section">
            <div class="container">
                <!-- Brand Wrapper Start -->
                <div class="brand-wrapper section-padding text-center">
                    <h3 class="brand-title">Step forward to become one of <span>49,494</span> successful clients </h3>

                    <!-- Brand Active Start -->
                    <div class="brand-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-1.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-2.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-3.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-4.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-5.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                                <!-- Single Brand Start -->
                                <div class="swiper-slide single-brand">
                                    <img src="assets/images/brand/brand-2.png" alt="Brand">
                                </div>
                                <!-- Single Brand End -->
                            </div>
                        </div>
                    </div>
                    <!-- Brand Active End -->
                </div>
                <!-- Brand Wrapper End -->
            </div>
        </div> --}}
        <!-- Brand Logo End -->

        <!-- Cta Start -->
        {{-- <div class="section cta-section">
            <div class="container">
                <div class="cta-wrap" style="background-image: url(assets/images/bg/cta-bg.jpg);">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Cta Left Start -->
                            <div class="cta-left">
                                <h2 class="title">Let's make something beautiful together</h2>
                            </div>
                            <!-- Cta Left End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Cta Right Start -->
                            <div class="cta-right">
                                <span class="number">+44 920 090 505</span>
                                <a class="btn" href="#">See More Projects</a>
                            </div>
                            <!-- Cta Right End -->
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Cta End -->





        {{-- FOOTER ABG BLORA BANGUNAN GEDUNG  --}}
        <!-- Footer Section Start -->

        @include('frontend.abgblora.00_fiturmenu.03_footer')
        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

    </div>

    @include('frontend.abgblora.00_fiturmenu.04_footer')
