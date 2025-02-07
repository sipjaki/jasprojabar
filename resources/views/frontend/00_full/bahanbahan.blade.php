@include('frontend.00_masjakibloraweb.header')

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
  <!-- ! Start Header -->
  <header class="d-flex align-items-center fixed-top justify-content-around bg-transparent">
    <!-- ! Start Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        {{-- <a class="navbar-brand" href="index.html">
          <img src="/assets/icon/pupr.png" alt="Technoit" class="img-fluid" style="margin-right:5px; width:55%;">
          <img src="/assets/icon/logokabupatenblora.png" alt="Technoit" class="img-fluid" style="width:55%; margin-right:7px;">
        </a> --}}

        <a class="navbar-brand" href="index.html">
            <img src="/assets/icon/pupr.png" 
                 alt="Technoit" 
                 class="img-fluid" 
                 style="margin-right: 5px; width: 55%; max-width: 100%; height: auto; 
                        @media (max-width: 768px) { width: 20%; } 
                        @media (max-width: 480px) { width: 10%; }">
        
            <img src="/assets/icon/logokabupatenblora.png" 
                 alt="Technoit" 
                 class="img-fluid" 
                 style="margin-right: 7px; width: 55%; max-width: 100%; height: auto; 
                        @media (max-width: 768px) { width: 20%; } 
                        @media (max-width: 480px) { width: 10%; }">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span>
            <i class="fa-solid fa-sliders"></i>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item" style="font-size: 14px;">
              <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
            </li>

            <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Kelembagaan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Struktur DPUPR Kab Blora</a></li>    
                    <li><a class="dropdown-item" href="about.html">Renstra Program Jasa Konstruksi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Tupoksi Jasa Konstruksi</a></li>    
                </ul>
              </li>

              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Berita
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Jasa Konstruksi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Dokumen Sertifikasi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Agenda Sertifikasi</a></li>    
                </ul>
              </li>
            
              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Data Jakon
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">BUJK Kontraktor</a></li>    
                    <li><a class="dropdown-item" href="about.html">BUJK Konsultan</a></li>    
                    <li><a class="dropdown-item" href="about.html">Tenaga Kerja</a></li>    
                </ul>
              </li>
            
              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Pembinaan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Pelatihan</a></li>    
                    <li><a class="dropdown-item" href="about.html">Bimbingan Teknis</a></li>    
                    <li><a class="dropdown-item" href="about.html">SKK Tenaga Ahli</a></li>    
                    <li><a class="dropdown-item" href="about.html">Workshop</a></li>    
                    <li><a class="dropdown-item" href="about.html">Daftar Tenaga Ahli</a></li>    
                </ul>
              </li>
            
              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Pengawasan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Pengawasan BUJK</a></li>    
                    <li><a class="dropdown-item" href="about.html">Kecelakaan Kerja</a></li>    
                    <li><a class="dropdown-item" href="about.html">Tertib Jasa Konstruksi</a></li>    
                    {{-- <li><a class="dropdown-item" href="about.html">Workshop</a></li>    
                    <li><a class="dropdown-item" href="about.html">Daftar Tenaga Ahli</a></li>     --}}
                </ul>
              </li>
            
              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Rantai Pasok
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Material Bangunan Gedung</a></li>    
                    <li><a class="dropdown-item" href="about.html">Peralatan Konstruksi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Toko Bangunan Kab Blora</a></li>    
                    <li><a class="dropdown-item" href="about.html">Distribusi Kab Blora</a></li>    
                    <li><a class="dropdown-item" href="about.html">Harga Satuan Dasar</a></li>    
                    <li><a class="dropdown-item" href="about.html">HSP Konstruksi Umum</a></li>    
                    <li><a class="dropdown-item" href="about.html">SHST Konstruksi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Daftar Material</a></li>    
                </ul>
              </li>
            
              {{-- <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  AHSP
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Harga Satuan Dasar</a></li>    
                    <li><a class="dropdown-item" href="about.html">HSP Konstruksi Umum</a></li>    
                    <li><a class="dropdown-item" href="about.html">SHST Konstruksi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Daftar Material</a></li>    
                </ul>
              </li> --}}
             
              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Peraturan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Undang - Undang</a></li>    
                    <li><a class="dropdown-item" href="about.html">Peraturan Pemerintah</a></li>    
                    <li><a class="dropdown-item" href="about.html">Peraturan Presiden </a></li>    
                    <li><a class="dropdown-item" href="about.html">Peraturan Menteri</a></li>    
                    <li><a class="dropdown-item" href="about.html">Keputusan Menteri</a></li>    
                    <li><a class="dropdown-item" href="about.html">Surat Edaran Menteri</a></li>    
                    <li><a class="dropdown-item" href="about.html">Referensi</a></li>    
                    <li><a class="dropdown-item" href="about.html">Peraturan Daerah</a></li>    
                    <li><a class="dropdown-item" href="about.html">Peraturan Gubernur</a></li>    
                    <li><a class="dropdown-item" href="about.html">Peraturan Walikota/Bupati</a></li>    
                    <li><a class="dropdown-item" href="about.html">Surat Keputusan</a></li>    
                </ul>
              </li>

              <li class="nav-item dropdown" style="font-size:14px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Masuk
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.html">Login</a></li>    
                    <li><a class="dropdown-item" href="about.html">Register</a></li>        
                </ul>
              </li>

              {{-- <li class="nav-item" style="font-size: 14px;">
                <a class="nav-link" aria-current="page" href="index.html">Login</a>
              </li> --}}
  
            
          {{-- <button type="button" class="btn btn-primary rounded-pill get-quotes"><a href="contact.html">
              Login</a></button> --}}
          
        </div>
      </div>
    </nav>
    <!-- ! End Navbar -->
  </header>
  <!-- ! End Header -->
  <!-- ! Start Landing -->
  <main>
    <div class="landing">
      <div class="overlay"></div>
      <div id="particles-js">
        <canvas width="1170" height="2532" style="width: 100%; height: 100%;"></canvas>
      </div>
      <div class="container letters">
        <div class="row gy-5">
          <div
            class="col-lg-7 offset-lg-5 dark-bg order-lg-1 d-flex flex-column justify-content-start text-left caption">
            <h2 data-aos="fade-up" class="">Selamat Datang ! di 
                <br>
              <span style="color: green;">Sistem Informasi Pembina Jasa Konstruksi <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</span>
              <span class="circle" data-aos="fade-right" data-aos-delay="800">.</span>
            </h2>
            <p data-aos="fade-up" data-aos-delay="200" class="">Sistem ini dirancang untuk mendukung pengelolaan dan pembinaan jasa konstruksi di Kabupaten Blora, Provinsi Jawa Tengah</p>

            <div class="d-flex justify-content-start buttons">
              {{-- <button style="--ripples: 12;" class="btn-custom" data-aos="fade-up" data-aos-delay="800"
                onclick="scrollToSection('#contact-us')">Daftar</button> --}}
              <button style="--ripples: 12;" class="btn-custom" data-aos="fade-up" data-aos-delay="200"
                onclick="scrollToSection('#services')">Contact Us</button>
                <button id="darkmode-button" class="btn rounded-circle">
                    <i class="fa-solid fa-moon"></i>
                  </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Landing -->
    <!-- ! Start Services -->
    <div class="services py-5" id="services">
      <div class="container">
        <div data-aos="fade-up" data-aos-delay="100">
          <img src="/assets/masjakiblora/images/service-design.svg" alt="">
          <h4>Application Design</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <img src="/assets/masjakiblora/images/service-hosting.svg" alt="">
          <h4>Web Hosting</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="500">
          <img src="/assets/masjakiblora/images/service-social.svg" alt="">
          <h4>Social Media</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
          <img src="/assets/masjakiblora/images/service-seo.svg" alt="">
          <h4>SEO Optimization</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <img src="/assets/masjakiblora/images/service-cloud.svg" alt="">
          <h4>Cloud Server</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="500">
          <img src="/assets/masjakiblora/images/service-secure.svg" alt="">
          <h4>Data Security</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <!-- ! End Services -->
    <!-- ! Start About Us -->
    <div class="about-us" id="about-us">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">Why Choose Us</div>
        <p class="para">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12 left">
            <div class="row">
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="100">
                <div class="text">
                  <h4>Experience</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <img src="/assets/masjakiblora/images/icon-1.svg" alt="">
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="400">
                <div class="text">
                  <h4>Products</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <img src="/assets/masjakiblora/images/icon-2.svg" alt="">
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="500">
                <div class="text">
                  <h4>Approach</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <img src="/assets/masjakiblora/images/icon-3.svg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 center">
            <div class="row">
              <div class="col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                <img src="/assets/masjakiblora/images/features.jpg" alt="" class="middle">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 right">
            <div class="row">
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="100">
                <img src="/assets/masjakiblora/images/icon-4.svg" alt="">
                <div class="text">
                  <h4>Pricing</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="400">
                <img src="/assets/masjakiblora/images/icon-5.svg" alt="">
                <div class="text">
                  <h4>Delivery</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="500">
                <img src="/assets/masjakiblora/images/icon-6.svg" alt="">
                <div class="text">
                  <h4>Support</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End About Us -->
    <!-- ! Start Protfolio -->
    <div class="protofolio" id="protofolio">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">Our Protfolio</div>
        <p class="para">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="container" data-aos="fade-up" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="buttons">
          <button type="button" data-cat="all" class="btn btn-primary rounded-5 rounded-end active">All</button>
          <button type="button" data-cat="app-des" class="btn btn-primary rounded-0">Design</button>
          <button type="button" data-cat="app-dev" class="btn btn-primary rounded-0">Development</button>
          <button type="button" data-cat="brand" class="btn btn-primary rounded-0">Branding</button>
          <button type="button" data-cat="it-sol" class="btn btn-primary rounded-5 rounded-start">It</button>
        </div>
        <div class="photos">
          <div class="container">
            <div class="photo all app-des" data-aos="fade-up" data-aos-delay="100">
              <img src="/assets/masjakiblora/images/product-1.jpg" alt="">
            </div>
            <div class="photo all app-dev" data-aos="fade-up" data-aos-delay="200">
              <img src="/assets/masjakiblora/images/product-2.jpg" alt="">
            </div>
            <div class="photo all brand" data-aos="fade-up" data-aos-delay="400">
              <img src="/assets/masjakiblora/images/product-3.jpg" alt="">
            </div>
            <div class="photo all it-sol" data-aos="fade-up" data-aos-delay="100">
              <img src="/assets/masjakiblora/images/product-4.jpg" alt="">
            </div>
            <div class="photo all app-des" data-aos="fade-up" data-aos-delay="200">
              <img src="/assets/masjakiblora/images/product-5.jpg" alt="">
            </div>
            <div class="photo all brand" data-aos="fade-up" data-aos-delay="500">
              <img src="/assets/masjakiblora/images/product-6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Protfolio -->

    <!-- ! Start Testimonials -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="header" data-aos="fade-up" data-aos-delay="100">
          <div class="title">Himbauan Dinas Terkait</div>
          {{-- <button type="submit" class="btn btn-success rounded-pill"><span style="color:white; font-size:16px;">Himbauan Dinas Terkait</span></button> --}}

<p style="color: black;">Dinas PUPR Blora mengimbau pelaku usaha jasa konstruksi untuk memanfaatkan Sistem Informasi Pembina Jasa Konstruksi sebagai sumber utama informasi regulasi, pembinaan, dan pemantauan proyek. Sistem ini mendukung transparansi dan efisiensi dalam pengelolaan data jasa konstruksi sesuai peraturan yang berlaku.</p>
        </div>
        <div class="swiper slides-3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
          data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper" aria-live="off"
            style="transform: translate3d(-3904px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group"
              aria-label="4 / 4" style="width: 936px; margin-right: 40px;" data-swiper-slide-index="3">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Fizzi Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <!-- Testimonial Item 1 -->
            <div class="swiper-slide swiper-slide-duplicate-next" role="group" aria-label="1 / 4"
              style="width: 936px; margin-right: 40px;" data-swiper-slide-index="0">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jhone Doe</h3>
                      <h4>CFO</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled far fa-star"></i>
                        <i class="filled far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <!-- Testimonial Item 2 -->
            <div class="swiper-slide" role="group" aria-label="2 / 4" style="width: 936px; margin-right: 40px;"
              data-swiper-slide-index="1">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Afa Rose</h3>
                      <h4>Web Designer</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <!-- Testimonial Item 3 -->
            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 4"
              style="width: 936px; margin-right: 40px;" data-swiper-slide-index="2">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Keena Lara</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled far fa-star"></i>
                        <i class="filled far fa-star"></i>
                        <i class="filled far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ! End Testimonials -->
    <!-- ! Start Status -->
    <div class="status">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 box">
            <img src="/assets/masjakiblora/images/happy-clients.svg" alt="">
            <span class="number" data-prog="232">0
            </span>
            <h4>Happy Clients</h4>
            <p>consequuntur quae diredo</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 box">
            <img src="/assets/masjakiblora/images/complete-projects.svg" alt="">
            <span class="number" data-prog="521">0
            </span>
            <h4>Completed Projects</h4>
            <p>adipisci atque quia aut</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 box">
            <img src="/assets/masjakiblora/images/hours-support.svg" alt="">
            <span class="number" data-prog="453">0
            </span>
            <h4>Hours Of Support</h4>
            <p>aut commodi quaerat</p>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Status -->
    
    <!-- ! Start Team -->
    <div class="team" id="team">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">Dinas Pekerjaan Umum & Penataan Ruang Pemerintah Kab Blora</div>
        {{-- <p class="para">Lorem ipsum dolor sit amet</p> --}}
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-1.jpg" alt="">
            <h5>Jhone Bi</h5>
            <p>Application Manager</p>
            <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-2.jpg" alt="">
            <h5>Sani Awesome</h5>
            <p>Social Media</p>
            <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-3.jpg" alt="">
            <h5>Andrio Willi</h5>
            <p>Content Writer</p>
            <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-4.jpg" alt="">
            <h5>Afa Jonson</h5>
            <p>Business Manager</p>
            <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Team -->
    <!-- ! Start FAQ's -->
    <div class="faqs" id="faqs">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">FAQ's Jasa Konstruksi</div>
        <p class="para">Pertanyaan Seputar Jasa Konstruksi Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="accordion accordion-flush" id="faqlist">
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    What is web domain and hosting?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                    ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                    incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                    Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- TODO Faq item-->
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Which server is best for websites linux or windows?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                    ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                    incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                    Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- TODO Faq item-->
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Google cloud or Amazon server which one is best and fast?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                    ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                    incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                    Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- TODO Faq item-->
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Why Organic SEO is important for all businesses?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                    ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                    incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                    Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                    consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- TODO Faq item-->
            </div>
          </div>
        </div>
        </section>
      </div>
    </div>
    <!-- ! End FAQ's -->
    <!-- ! Start Discuss -->
    <div class="discuss">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h3>Let's Discuss your Projects</h3>
        <p>We pride ourselves with our ability to perform and deliver results. Use the form below to discuss your
          project needs
          with our team, we will get back asap</p>
        <button type="submit" class="btn btn-primary rounded-pill">Contact Us</button>
      </div>
    </div>
    <!-- ! End Discuss -->
    <!-- ! Start Blogs -->
    <div class="blogs" id="blogs">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">Blogs</div>
        <p class="para">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <p>Domain & Hosting</p>
                <p class="card-text">How to host website on any hosting provider?
                </p>
                <p>William Bla</p>
                <p>Feb 1, 2022</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" data-aos="fade-up" data-aos-delay="400">
              <div class="box">
                <img src="/assets/masjakiblora/images/blog-2.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <p>Advertisement</p>
                <p class="card-text">How to create add on google adwords?
                </p>
                <p>Jobi Ret</p>
                <p>Oct 5, 2022</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" data-aos="fade-up" data-aos-delay="600">
              <div class="box">
                <img src="/assets/masjakiblora/images/blog-3.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <p>Marketing</p>
                <p class="card-text">What is digital marketing and why is important?
                </p>
                <p>Main Dow</p>
                <p>Dec 22, 2022</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Blogs -->
  </main>
  <!-- ! Start Footer -->
  <footer id="footer" class="footer-section">
    <div class="container">
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.html" class="logo d-flex align-items-center">
                  <img src="/assets/masjakiblora/images/logo.png" alt="logo">
                </a>
              </div>
              <div class="footer-text">
                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec
                  tetur adipisicing
                  elit,Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span><a href="https://github.com/GziXnine" target="_blank"><i
                    class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                    class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
            <div class="service-widget footer-widget">
              <div class="footer-widget-heading">
                <h3>Services</h3>
              </div>
              <ul class="list">
                <li><a href="services.html">Web Design</a></li>
                <li><a href="services.html">App Developemnt</a></li>
                <li><a href="services.html">Cloud Services</a></li>
                <li><a href="services.html">Domain adn Hosting</a></li>
                <li><a href="services.html">Seo Optimization</a></li>
                <li><a href="services.html">Social Media</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
            <div class="service-widget footer-widget">
              <div class="footer-widget-heading">
                <h3>Information</h3>
              </div>
              <ul class="list">
                <li><a href="about.html">About</a></li>
                <li><a href="packages.html">Pricing</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="protofolio.html">Portfolio</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="blogs.html">Blogs</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="privacy-policy.html">Terms &amp; Conditions</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="contact-widget footer-widget">
              <div class="footer-widget-heading">
                <h3>Contacts</h3>
              </div>
              <div class="footer-text">
                <p><i class="fa-solid fa-location-dot"></i> 101 West Town , PBO 12345, United States</p>
                <p><i class="fa-solid fa-phone"></i></i> +1 1234 56 789</p>
                <p><i class="fa-solid fa-envelope"></i> contact@example.com</p>
              </div>
            </div>
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Newsletter</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Don't miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="#" id="email-form">
                  <input type="text" placeholder="Email Address" id="email-input">
                  <button id="submit-button">
                    <i class="fa-brands fa-telegram"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-left text-lg-left">
            <div class="copyright-text">
              <p>&copy; 2024 <a href="https://github.com/GziXnine" target="_blank"><span>Allam</span></a> All Right
                Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ! End Footer -->
  <!-- ! Start Scroll Button -->
  <!-- TODO:-  -->
  <a id="top" style="right: 20px;" href="#">
    <i class="top fas fa-chevron-up"></i>
  </a>
  <!-- ! End Scroll Button -->
  <!---------------------------------------------------------------------------->
  <script src="/assets/masjakiblora/js/bootstrap.bundle.min.js"></script>
  <!-- ! This Render Icon As SVG... -->
  <script src="/assets/masjakiblora/js/all.min.js"></script>
  <!-- ! JavaScript File -->
  <script src="/assets/masjakiblora/js/main.js"></script>
  <script src="/assets/masjakiblora/js/landing.js"></script>
  <script src="/assets/masjakiblora/js/aos.js"></script>
</body>

</html>