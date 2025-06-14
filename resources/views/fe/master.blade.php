<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('front-end/images/icons/favicon.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/fonts/iconic/css/material-design-iconic-font.min.css ') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/slick/slick.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/vendor/MagnificPopup/magnific-popup.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body class="animsition" id="body">

    <!-- Header -->
    @if ($title === 'Home')
        <header class="header-v2">
            <!-- Header desktop -->
            <div class="container-menu-desktop trans-03">
                <div class="wrap-menu-desktop">
                    <nav class="limiter-menu-desktop p-l-45">

                        <!-- Logo desktop -->
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('front-end/images/icons/logo-01.png') }}" alt="IMG-LOGO">
                        </a>

                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li class="active-menu">
                                    <a href="{{ route('home') }}">Home</a>
                                    {{-- <ul class="sub-menu">
									<li><a href="./home">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul>
							</li> --}}

                                <li>
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>

                                {{-- <li class="label1" data-label1="hot">
								<a href="shoping-cart.html">Features</a>
							</li> --}}

                                <li>
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>

                                <li>
                                    <a href="{{ route('about') }}">About</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m h-full">
                            <div class="flex-c-m h-full p-r-24">
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                                    <i class="zmdi zmdi-search"></i>
                                </div>
                            </div>

                            <div class="flex-c-m h-full p-l-18 p-r-25 bor5">
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
                                    data-notify="3">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>

                            <div class="flex-c-m h-full p-lr-19">
                                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="{{ route('home') }}"><img src="{{ asset('front-end/images/icons/logo-01.png') }}"
                            alt="IMG-LOGO"></a>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                    <div class="flex-c-m h-full p-r-10">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                    </div>

                    <div class="flex-c-m h-full p-lr-10 bor5">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart"
                            data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>


            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="main-menu-m">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                        {{-- <ul class="sub-menu-m">
						<li><a href="./home">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul> --}}
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>

                    {{-- <li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li> --}}

                    <li>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Modal Search -->
            <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
                <div class="container-search-header">
                    <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                        <img src="{{ asset('front-end/images/icons/icon-close2.png') }}" alt="CLOSE">
                    </button>

                    <form class="wrap-search-header flex-w p-l-15">
                        <button class="flex-c-m trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="plh3" type="text" name="search" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>
    @else
        <header class="header-v4">
            <!-- Header desktop -->
            <div class="container-menu-desktop">
                <!-- Topbar -->
                <div class="top-bar">
                    <div class="content-topbar flex-sb-m h-full container">
                        <div class="left-top-bar">
                            Free shipping for standard order over $100
                        </div>

                        <div class="right-top-bar flex-w h-full">
                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                Help & FAQs
                            </a>

                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                My Account
                            </a>

                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                EN
                            </a>

                            <a href="#" class="flex-c-m trans-04 p-lr-25">
                                USD
                            </a>
                        </div>
                    </div>
                </div>

                <div class="wrap-menu-desktop how-shadow1">
                    <nav class="limiter-menu-desktop container">

                        <!-- Logo desktop -->
                        <a href="#" class="logo">
                            <img src="{{ asset('front-end/images/icons/logo-01.png') }}" alt="IMG-LOGO">
                        </a>

                        <!-- Menu desktop -->
                        <div class="menu-desktop">
                            <ul class="main-menu">
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                    {{-- <ul class="sub-menu">
									<li><a href="./home">Homepage 1</a></li>
									<li><a href="home-02.html">Homepage 2</a></li>
									<li><a href="home-03.html">Homepage 3</a></li>
								</ul>
							</li> --}}

                                <li @if ($title === 'Product') class="active-menu" @endif>
                                    <a href="{{ route('shop') }}">Shop</a>
                                </li>


                                {{-- <li class="label1" data-label1="hot">
								<a href="shoping-cart.html">Features</a>
							</li> --}}

                                <li @if ($title === 'Blog') class="active-menu" @endif>
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>

                                <li @if ($title === 'About') class="active-menu" @endif>
                                    <a href="{{ route('about') }}">About</a>
                                </li>

                                <li @if ($title === 'Contact') class="active-menu" @endif>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Icon header -->
                        <div class="wrap-icon-header flex-w flex-r-m">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                                <i class="zmdi zmdi-search"></i>
                            </div>

                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                                data-notify="6">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>

                            <a href="#"
                                class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                                data-notify="0">
                                <i class="zmdi zmdi-favorite-outline"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->
                <div class="logo-mobile">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/icons/logo-01.png') }}"
                            alt="IMG-LOGO"></a>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                        data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#"
                        class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                        data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>


            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li>
                        <div class="left-top-bar">
                            Free shipping for standard order over $100
                        </div>
                    </li>

                    <li>
                        <div class="right-top-bar flex-w h-full">
                            <a href="#" class="flex-c-m p-lr-10 trans-04">
                                Help & FAQs
                            </a>

                            <a href="#" class="flex-c-m p-lr-10 trans-04">
                                My Account
                            </a>

                            <a href="#" class="flex-c-m p-lr-10 trans-04">
                                EN
                            </a>

                            <a href="#" class="flex-c-m p-lr-10 trans-04">
                                USD
                            </a>
                        </div>
                    </li>
                </ul>

                <ul class="main-menu-m">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                        {{-- <ul class="sub-menu-m">
						<li><a href="./home">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul> --}}
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>

                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>

                    {{-- <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li> --}}

                    <li>
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Modal Search -->
            <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
                <div class="container-search-header">
                    <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                        <img src="{{ asset('front-end/images/icons/icon-close2.png') }}" alt="CLOSE">
                    </button>

                    <form class="wrap-search-header flex-w p-l-15">
                        <button class="flex-c-m trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                        <input class="plh3" type="text" name="search" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>
    @endif

    @if ($title === 'Home')
        @yield('sidebar')
        @yield('slider')
        @yield('banner')
        @yield('store')
        @yield('ourblog')
    @elseif ($title === 'Product')
        @yield('product')
    @elseif ($title === 'Blog')
        @yield('blog')
    @elseif ($title === 'About')
        @yield('about')
    @elseif ($title === 'Contact')
        @yield('contact')
    @elseif ($title === 'Shopping Cart')
        @yield('shoping-cart')
    @elseif ($title === 'Blog-detail')
        @yield('blog-detail')
    @elseif ($title === 'Product Detail')
        @yield('product-detail')
    @endif
    @yield('cart')

    <!-- Blog -->



    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shoes
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us
                        on (+1) 96 716 6879
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="{{ asset('front-end/images/icons/icon-pay-01.png') }}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{ asset('front-end/images/icons/icon-pay-02.png') }}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{ asset('front-end/images/icons/icon-pay-03.png') }}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{ asset('front-end/images/icons/icon-pay-04.png') }}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{ asset('front-end/images/icons/icon-pay-05.png') }}" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp;
                    distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('front-end/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/select2/select2.min.js') }}"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('front-end/js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/parallax100/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('front-end/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--=========================================for map ======================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{ asset('front-end/js/map-custom.js') }}"></script>
    <!--===============================================================================================-->


    <script src="{{ asset('front-end/js/main.js') }}"></script>
</body>

</html>
