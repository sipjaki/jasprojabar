
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Silahkan Login !</title>
    <meta name="description" content="Rekapin Aja">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/tg-flaticon.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/tg-cursor.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

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

    <!-- main-area -->
    <main class="main-area fix">


        <!-- login-area -->
        <section class="login__area">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-md-6">
                        <div class="login__left-side" data-background="assets/gambar/halamanlogin.jpg">
                            <a href="#"><img src="assets/gambar/logo1.png" alt="logo"></a>
                                <div class="login__left-content">
                                    <p>“Rekapinaja membantu saya mencatat keuangan harian dengan mudah dan rapi. Sekarang semua pengeluaran bisa saya kontrol tanpa ribet.”</p>
                                    <h4 class="title">Rekapinaja - Pencatatan Keuangan</h4>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login__form-wrap">
                            <h2 class="title">Masuk/Daftar </h2>
                            {{-- <div class="login__form-social">
                                <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                            </div> --}}
                            {{-- <span class="divider">or</span> --}}
    <form action="{{ route('loginmasuk') }}" method="POST" class="login__form">
    @csrf

    <div class="form__grp">
        <input type="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}" required>
        @error('email')
            <small style="color:red;">{{ $message }}</small>
        @enderror
    </div>

    <div class="form__grp">
        <input type="password" name="password" placeholder="Masukkan Password" required>
        @error('password')
            <small style="color:red;">{{ $message }}</small>
        @enderror
    </div>

    @error('loginError')
        <div style="color:red; margin-bottom:10px;">{{ $message }}</div>
    @enderror

    <div class="account__check">
        <div class="account__check-forgot">
            <a href="#">Lupa Password?</a>
        </div>
    </div>

    <button type="submit" class="tg-btn tg-btn-three">
        Log in
        <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable">
    </button>
</form>



                            <div class="account__switch">
                                <p>Belum Punya Akun ?<a href="/daftar">Silahkan Daftar </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-area-end -->


    </main>
    <!-- main-area-end -->





    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/tg-cursor.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/svg-inject.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>

</html>
