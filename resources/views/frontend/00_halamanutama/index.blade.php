
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

        <!-- header-area -->
    <header class="transparent-header">
        <div id="header-fixed-height"></div>

    <!-- Scroll-top-end-->
@include('frontend.00_fiturmenu.04_menunavigasi')

        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

    </header>

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
            <a href="/login" class="tg-btn">Gunakan Sekarang <img src="assets/img/icons/right_arrow.svg" alt=""></a>
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
            <a href="/masuk" class="tg-btn">Mulai Sekarang <img src="assets/img/icons/right_arrow.svg" alt=""></a>
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
            <a href="/masuk" class="tg-btn">Langganan Sekarang <img src="assets/img/icons/right_arrow.svg" alt=""></a>
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

    @include('frontend.00_fiturmenu.06_cookies')
    @include('frontend.00_fiturmenu.02_footer')

