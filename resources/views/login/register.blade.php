@include('frontend.00_fiturmenu.01_header')
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
                            <a href="index.html"><img src="assets/gambar/logo1.png" alt="logo"></a>
                            <div class="login__left-content">
                                <p>“This software simplifies the website building process, making it a breeze to manage our online presence.”</p>
                                <h4 class="title">David Handerson</h4>
                                <span>Founder & CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login__form-wrap">
                            <h2 class="title">Mulai Catat Keuanganmu !</h2>
                            {{-- <div class="login__form-social">
                                <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                            </div> --}}
                            {{-- <span class="divider">or</span> --}}
                           <form action="{{ route('register.store') }}" method="POST" class="login__form">
    @csrf
    <div class="form__grp">
        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
        @error('username')
            <small style="color:red;">{{ $message }}</small>
        @enderror
    </div>

    <div class="form__grp">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <small style="color:red;">{{ $message }}</small>
        @enderror
    </div>

    <div class="form__grp">
        <input type="password" name="password" placeholder="Password" required>
        @error('password')
            <small style="color:red;">{{ $message }}</small>
        @enderror
    </div>

    <div class="account__check">
        <div class="account__check-remember">
            <input type="checkbox" class="form-check-input" id="terms-check" required>
            <label for="terms-check" class="form-check-label">
                Saya menyetujui <a href="#">syarat & ketentuan</a>
            </label>
        </div>
    </div>

    <button type="submit" class="tg-btn tg-btn-three">
        Buat Akun Saya
        <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable">
    </button>
</form>

                            <div class="account__switch">
                                <p>Sudah Punya Akun ? <a href="/masuk">Silahkan Masuk</a></p>
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
