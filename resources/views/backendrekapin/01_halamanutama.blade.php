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

    </header>
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">


        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="assets/img/bg/breadcrumb__bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Cart</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- cart-area -->
        <div class="cart__area section-py-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <table class="table cart__table">
                            <thead>
                                <tr>
                                    <th class="product__thumb">&nbsp;</th>
                                    <th class="product__name">Product</th>
                                    <th class="product__price">Price</th>
                                    <th class="product__quantity">Quantity</th>
                                    <th class="product__subtotal">Subtotal</th>
                                    <th class="product__remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product__thumb">
                                        <a href="shop-details.html"><img src="assets/img/shop/shop_img01.png" alt=""></a>
                                    </td>
                                    <td class="product__name">
                                        <a href="shop-details.html">Brand New Women Red</a>
                                    </td>
                                    <td class="product__price">$13.00</td>
                                    <td class="product__quantity">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="product__subtotal">$13.00</td>
                                    <td class="product__remove">
                                        <a href="#">×</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumb">
                                        <a href="shop-details.html"><img src="assets/img/shop/shop_img02.png" alt=""></a>
                                    </td>
                                    <td class="product__name">
                                        <a href="shop-details.html">100% Casual Full Sleeve</a>
                                    </td>
                                    <td class="product__price">$19.00</td>
                                    <td class="product__quantity">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="product__subtotal">$19.00</td>
                                    <td class="product__remove">
                                        <a href="#">×</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="cart__actions">
                                        <form action="#" class="cart__actions-form">
                                            <input type="text" placeholder="Coupon code">
                                            <button type="submit" class="tg-btn">Apply coupon</button>
                                        </form>
                                        <div class="update__cart-btn text-end f-right">
                                            <button type="submit" class="tg-btn">Update cart</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart__collaterals-wrap">
                            <h2 class="title">Cart totals</h2>
                            <ul class="list-wrap">
                                <li>Subtotal <span>$32.00</span></li>
                                <li>Total <span class="amount">$32.00</span></li>
                            </ul>
                            <a href="check-out.html" class="tg-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area-two fix">
        <div class="container">
            {{-- <div class="footer__top-two">

            </div> --}}
            <div class="footer__bottom-two">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright__content-two">
                            <p>Rekapinaja | Catatan Keuangan UMKM <br> Deploy and Build By CV. Angkasa Raya Teknik © 2025</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer__social footer__social-two">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__shape-wrap-two">
            <img src="assets/img/images/h2_footer_shape01.svg" alt="shape">
            <img src="assets/img/images/h2_footer_shape02.svg" alt="shape">
            <img src="assets/img/images/h2_footer_shape03.svg" alt="shape">
        </div>
    </footer>
    <!-- footer-area-end -->

@include('frontend.00_fiturmenu.03_footer')
