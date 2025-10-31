
@include('frontend.00_fiturmenu.01_header')

<body class="theme-gray">

    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="transparent-header">
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area tg-header__area-two">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="#"><img src="/assets/gambar/logo1.png" alt="Logo"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active tg-mega-menu-has-children"><a href="#">Home</a>
                                            {{-- <div class="tg-mega-menu-wrap">
                                                <div class="row row-cols-1 row-cols-lg-6 row-cols-xl-6">
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index.html"><img src="assets/img/menu-images/home_01.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index.html">Business Consulting</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item active">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-2.html"><img src="assets/img/menu-images/home_02.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-2.html">Marketing Agency</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-3.html"><img src="assets/img/menu-images/home_03.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-3.html">SEO Agency</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-4.html"><img src="assets/img/menu-images/home_04.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-4.html">Creative Agency</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-5.html"><img src="assets/img/menu-images/home_05.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-5.html">Digital Agency</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-6.html"><img src="assets/img/menu-images/home_06.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-6.html">Insurance</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-7.html"><img src="assets/img/menu-images/home_07.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-7.html">It Business</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-8.html"><img src="assets/img/menu-images/home_08.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-8.html">Online Banking</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-9.html"><img src="assets/img/menu-images/home_09.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-9.html">Web Design Agency</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-10.html"><img src="assets/img/menu-images/home_10.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-10.html">Business Strategy</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-11.html"><img src="assets/img/menu-images/home_11.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-11.html">Loan Specialist</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mega-menu-item">
                                                            <div class="mega-menu-thumb">
                                                                <a href="index-12.html"><img src="assets/img/menu-images/home_12.jpg" alt="img"></a>
                                                            </div>
                                                            <div class="mega-menu-content">
                                                                <h4 class="title"><a href="index-12.html">Finance Advisor</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </li>
                                        {{-- <li class="menu-item-has-children"><a href="#">Transaksi</a> --}}
                                        <li><a href="#">Transaksi</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="pricing.html">Pricing Page</a></li>
                                                <li><a href="blog.html">Blog post</a></li>
                                                <li><a href="blog-details.html">Blog post Details</a></li>
                                                <li><a href="career.html">Career Page</a></li>
                                                <li><a href="career-details.html">Career Details</a></li>
                                                <li><a href="masuk.html">masuk Page</a></li>
                                                <li><a href="register.html">Register Page</a></li>
                                                <li><a href="reset.html">Reset Page</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="menu-item-has-children"><a href="#">Dashboard</a> --}}
                                        <li><a href="#">Dashboard</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="services.html">Our Services</a></li>
                                                <li><a href="services-details.html">Services Details One</a></li>
                                                <li><a href="services-details-2.html">Services Details Two</a></li>
                                                <li><a href="services-details-3.html">Services Details Three</a></li>
                                                <li><a href="services-details-4.html">Services Details Four</a></li>
                                                <li><a href="services-details-5.html">Services Details Five</a></li>
                                            </ul> --}}
                                        </li>
                                        {{-- <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.html">Portfolio Page</a></li>
                                                <li><a href="project-details.html">Portfolio Details One</a></li>
                                                <li><a href="project-details-2.html">Portfolio Details Two</a></li>
                                                <li><a href="project-details-3.html">Portfolio Details Three</a></li>
                                                <li><a href="project-details-4.html">Portfolio Details Four</a></li>
                                                <li><a href="project-details-5.html">Portfolio Details Five</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="#">Kontak Kami</a></li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action tgmenu__action-two">
                                    <ul class="list-wrap">
                                        <li class="header-btn header-btn-two">
                                            <a href="/masuk" class="tg-btn">Masuk/Daftar ?</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu"></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                    <a href="index.html"><img src="assets/gambar/logo1.png" alt="Logo"></a>
                </div>
                {{-- <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div> --}}
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                {{-- <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div> --}}
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">


        <!-- banner-area -->
        <section class="banner__area-two fix">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10 order-0 order-lg-2">
                        <div class="banner__img-two">
                            {{-- <div class="main-img">
                                <img src="/assets/gambar/bon.png" alt="img">
                            </div> --}}
                            {{-- <div class="business-growth-box" data-aos="fade-left" data-aos-delay="400">
                                <div class="icon">
                                    <i class="flaticon-investment"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Transaksi</h4>
                                    <h3 class="count">1.025</h3>
                                </div>
                            </div> --}}
                            <div class="shape-wrap">
                                <img src="assets/img/banner/h2_hero_img01.svg" alt="shape" class="rightToLeft">
                                <img src="assets/img/banner/h2_hero_img02.svg" alt="shape" class="rotateme">
                                <img src="assets/img/banner/h2_hero_img03.svg" alt="shape" class="alltuchtopdown">
                                {{-- <img src="assets/img/banner/h2_hero_img04.svg" alt="shape" data-aos="fade-right" data-aos-delay="400"> --}}
                                <img src="assets/img/banner/h2_hero_img05.svg" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__content-two">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="0">Tenaang, Rekapinaja</h2>
                            <p data-aos="fade-up" data-aos-delay="300">Keuangan Rapi, Pikiran Happy <br> ...Karena Setiap Rupiah Punya Cerita</p>
                            {{-- <form action="#" class="banner__form" data-aos="fade-up" data-aos-delay="500">
                                <input type="email" placeholder="your e-mail address">
                                <button type="submit" class="tg-btn">Get Started <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></button>
                            </form> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- services-area -->
<section class="pricing__area section-py-130">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section__title text-center mb-30">
          <h2 class="title">Pilih Paket Rekapinaja</h2>
          <p>Catat dan kelola keuanganmu sesuai kebutuhan — mulai dari gratis hingga fitur lengkap profesional.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center gutter-y-30">
      <!-- Paket Gratis -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing__box">
          <div class="pricing__top">
            <h5 class="title">Paket Gratis</h5>
            <p>Cocok untuk pengguna baru dengan akses terbatas untuk mencoba fitur dasar Rekapinaja.</p>
          </div>
          <div class="pricing__price">
            <h2 class="price">Rp0<span>/selamanya</span></h2>
          </div>
          <div class="pricing__button">
            <a href="#!" class="tg-btn">Gunakan Sekarang <img src="assets/img/icons/right_arrow.svg" alt=""></a>
          </div>
          <div class="pricing__list">
            <h5 class="pricing__list-title">Fitur:</h5>
            <ul class="list-wrap">
              <li>✔️ Pemasukan & Pengeluaran</li>
              <li>✔️ Transaksi Harian</li>
              <li>✔️ Laporan Bulanan Sederhana</li>
              <li>❌ Dashboard Keuangan</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Paket Bulanan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing__box active">
          <div class="pricing__top">
            <h5 class="title">Paket Pro Bulanan</h5>
            <p>Untuk kamu yang ingin akses penuh fitur Rekapinaja dengan biaya terjangkau.</p>
          </div>
          <div class="pricing__price">
            <h2 class="price">Rp55.000<span>/bulan</span></h2>
          </div>
          <div class="pricing__button">
            <a href="#!" class="tg-btn">Mulai Sekarang <img src="assets/img/icons/right_arrow.svg" alt=""></a>
          </div>
          <div class="pricing__list">
            <h5 class="pricing__list-title">Fitur:</h5>
            <ul class="list-wrap">
              <li>✔️ Semua fitur</li>
              <li>✔️ Transaksi Tak Terbatas</li>
              <li>✔️ Ekspor Laporan </li>
              <li>✔️ Backup Data Otomatis</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Paket Tahunan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing__box">
          <div class="pricing__top">
            <h5 class="title">Paket Pro Tahunan</h5>
            <p>Hemat lebih banyak dengan paket tahunan — semua fitur Pro tanpa batas waktu.</p>
          </div>
          <div class="pricing__price">
            <h2 class="price">Rp450.000<span>/tahun</span></h2>
          </div>
          <div class="pricing__button">
            <a href="#!" class="tg-btn">Langganan Sekarang <img src="assets/img/icons/right_arrow.svg" alt=""></a>
          </div>
          <div class="pricing__list">
            <h5 class="pricing__list-title">Fitur:</h5>
            <ul class="list-wrap">
              <li>✔️ Semua Fitur</li>
              <li>✔️ Prioritas Dukungan Teknis</li>
              <li>✔️ Statistik & Grafik Keuangan</li>
              <li>✔️ Akses Premium</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

        <!-- cta-area -->
        <section class="cta__area-two">
            <div class="container">
                <div class="cta__inner-wrap-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cta__content-three">
                                <h2 class="title">Yuk, Cek Bareng Keuanganmu!</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cta__content-right">
                                <div class="cta__contact">
                                    <div class="icon">
                                        <i class="flaticon-telephone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Hubungi Kami</span>
                                        <a href="tel:0123456789">085320984699</a>
                                    </div>
                                </div>
                            <a href="https://wa.me/6285320984699?text=Halo,%20saya%20ingin%20tahu%20lebih%20tentang%20Rekapinaja" target="_blank" class="tg-btn tg-border-btn">
                                    Kontak Kami
                                    <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable">
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="cta__shape-three">
                        <img src="assets/img/images/h2_cta_shape.svg" alt="shape">
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->

<br>

    </main>
    <!-- main-area-end -->

    @include('frontend.00_fiturmenu.02_footer')

