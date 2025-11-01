@include('frontend.00_fiturmenu.01_header')
@include('frontend.00_fiturmenu.07_style')
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

    <!-- header-area -->
    <header>
        <div class="tg-header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tg-header__top-info">
                            <ul class="list-wrap">
<li style="overflow:hidden; white-space:nowrap; box-sizing:border-box;">
    {{-- <i class="flaticon-placeholder"></i> --}}
    <span style="
        display:inline-block;
        padding-left:100%;
        animation: runText 15s linear infinite;
    ">
        Hai {{ auth()->user()->name }}! Yuk, catat dan kelola keuanganmu bareng Rekapinaja biar makin tenang!
    </span>
    <style>
        @keyframes runText {
            0%   { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }
    </style>
</li>

                                {{-- <li><i class="flaticon-envelope"></i><a href="mailto:info@gmail.com">info@gmail.com</a></li> --}}
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="col-lg-5">
                        <div class="tg-header__top-right">
                            <ul class="list-wrap">
                                <li><i class="flaticon-telephone"></i><a href="tel:0123456789">+123 4884 4889</a></li>
                                <li>
                                    <div class="tg-header__top-social">
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/" target="_blank"><img src="assets/img/icons/facebook.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://x.com/home" target="_blank"><img src="assets/img/icons/twitter.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><img src="assets/img/icons/instagram.svg" alt="" class="injectable"></a></li>
                                            <li><a href="https://www.pinterest.com/" target="_blank"><img src="assets/img/icons/pinterest.svg" alt="" class="injectable"></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        @include('frontend.00_fiturmenu.04_menunavigasi')
        <div class="offCanvas__overly"></div>
        <!-- offCanvas-menu-end -->



<!-- main-area -->
<main class="main-area fix" style="min-height: calc(100vh - 200px); display: flex; flex-direction: column; justify-content: flex-start;">



<!-- checkout-area -->
        <div class="checkout__area section-py-130">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-12">
                        <div class="coupon__code-wrap">
                            <div class="coupon__code-info">
                                <span><i class="far fa-bookmark"></i> Have a coupon?</span>
                                <a href="#" id="coupon-element">Click here to enter your code</a>
                            </div>
                            <form action="#" class="coupon__code-form">
                                <p>If you have a coupon code, please apply it below.</p>
                                <input type="text" placeholder="Coupon code">
                                <button type="submit" class="tg-btn">Apply coupon</button>
                            </form>
                        </div>
                    </div> --}}

                    <div class="col-lg-7">
    <form action="{{ route('transaksi.store') }}" method="POST" class="customer__form-wrap">
        @csrf
        <span class="title">Pilih Jenis Transaksi</span>

        <!-- Hidden fields dari database -->
        <input type="hidden" name="akunpengguna_id" value="{{ $akunpengguna_id }}">
        <input type="hidden" name="transaksi_id" value="{{ $subtransaksi_id }}"> <!-- disesuaikan dari controller -->
        <input type="hidden" name="tanggal_transaksi" value="{{ date('Y-m-d') }}">

        <div class="form-grp select-grp">
            <label for="jenistransaksi_id">Jenis Transaksi *</label>
            <select id="jenistransaksi_id" name="jenistransaksi_id" class="form-control" required>
                @foreach ($jenistransaksi as $jenis)
                    <option value="{{ $jenis->id }}">{{ $jenis->jenistransaksi }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="tg-btn">Simpan Transaksi</button>
    </form>
</div>


                    {{-- <div class="col-lg-5">
                        <div class="order__info-wrap">
                            <h2 class="title">YOUR ORDER</h2>
                            <ul class="list-wrap">
                                <li class="title">Product <span>Subtotal</span></li>
                                <li>Antiaging and Longevity × 1 <span>$19.99</span></li>
                                <li>Subtotal <span>$19.99</span></li>
                                <li>Total <span>$19.99</span></li>
                            </ul>
                            <p>Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</p>
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy.</a></p>
                            <button class="tg-btn">Place order</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- checkout-area-end -->

</main>
    <!-- main-area-end -->

    <!-- footer-area-end -->

@include('frontend.00_fiturmenu.03_footer')
