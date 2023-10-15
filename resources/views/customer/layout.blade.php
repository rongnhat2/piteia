<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Piteia Shop - eCommerce</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex, follow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon --> 
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset("customer/assets/img/favicon.png") }}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset("customer/assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/owl.carousel.min.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/slick.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/chosen.min.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/font-awesome.min.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/themify-icons.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/ionicons.min.css") }}">
		<link rel="stylesheet" href="{{ asset("customer/assets/css/jquery-ui.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/meanmenu.min.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("customer/assets/css/responsive.css") }}">
        <script src="{{ asset("customer/assets/js/vendor/modernizr-3.11.2.min.js") }}"></script>
        <link rel="stylesheet" href="{{ asset('customer/assets/css/custom.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <input type="hidden" id="auth-value" value="{{ $customer_data["is_login"] }}">
        <!-- header start -->
        <header class="header-area gray-bg clearfix">
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="logo">
                                <a href="/">
                                    <img alt="" src="{{ asset("customer/assets/img/logo/logo.png") }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-6">
                            <div class="header-bottom-right">
                                <div class="main-menu">
                                    <nav>
                                        <ul> 
                                            <li><a href="/">ホーム</a></li> 
                                            <li><a href="{{ route("customer.view.category") }}"> すべてのカテゴリ</a></li> 
                                            <li><a href="{{ route("customer.view.about") }}">会社情報</a></li>
                                            <li><a href="{{ route("customer.view.rule_pay") }}">お支払いについて</a></li>
                                            <li><a href="{{ route("customer.view.rule_order") }}">注文の仕方</a></li>
                                            <li><a href="{{ route("customer.view.rule_ship") }}">お届けについて</a></li>
                                            {{-- <li><a href="{{ route("customer.view.contact") }}">お問い合わせ</a></li> --}}
                                        </ul>
                                    </nav>
                                </div> 
                                <div class="header-cart">
                                    <a href="{{ route("customer.view.cart") }}">
                                        <div class="cart-icon ">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                    </a> 
                                </div>
                                <div class="header-cart">  
                                    <a href="<?php if (!$customer_data['is_login']): ?>{{ route("customer.view.login") }}<?php else: ?>{{ route("customer.view.profile") }}<?php endif ?> ">
                                        <div class="cart-icon">
                                            <i class="ti-user"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="/">ホーム</a></li> 
                                    <li><a href="{{ route("customer.view.category") }}"> すべてのカテゴリ</a></li> 
                                    <li><a href="{{ route("customer.view.about") }}">会社情報</a></li>
                                    <li><a href="{{ route("customer.view.rule_pay") }}">お支払いについて</a></li>
                                    <li><a href="{{ route("customer.view.rule_order") }}">注文の仕方</a></li>
                                    <li><a href="{{ route("customer.view.rule_ship") }}">お届けについて</a></li>
                                    {{-- <li><a href="{{ route("customer.view.contact") }}">お問い合わせ</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<!-- header end -->
		
        @yield('body')

		<!-- Footer style Start -->
        <footer class="footer-area pt-75 gray-bg-3">
            <div class="footer-top gray-bg-3 pb-35">
                <div class="container">
                    <div class="row"> 
						<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>カテゴリ</h4>
                                </div>
                                <div class="footer-content">
                                    <ul class="category-list">

                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget mb-40">
                                <div class="footer-title mb-25">
                                    <h4>会社情報</h4>
                                </div>
                                <div class="footer-content">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.about") }}">会社情報</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_privacy") }}">プライバシーポリシー</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_pay") }}">お支払いについて</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_order") }}">注文の仕方</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_back") }}">返品・交換について</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_product") }}">商品について</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_ship") }}">お届けについて</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.rule_recruit") }}">採用情報</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route("customer.view.contact") }}">お問い合わせ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget footer-widget-red footer-black-color mb-40">
                                <div class="footer-title mb-25">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-about">
                                    <p>Your address goes here</p>
                                    <div class="footer-contact mt-20">
                                        <ul>
                                            <li>07091907607</li>
                                        </ul>
                                    </div>
									<div class="footer-contact mt-20">
                                        <ul>
                                            <li>1-chōme-37-8 Nakazato, Kita City, Tokyo 114-0015</li>
                                            <li>piteiashop@gmail.com</li>
                                        </ul>
                                    </div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.479121302729!2d139.75357839999998!3d35.73902679999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188deb3d18fdbd%3A0x7e275f0616789d96!2z44CSMTE0LTAwMTUgVG9reW8sIEtpdGEgQ2l0eSwgTmFrYXphdG8sIDEtY2jFjW1l4oiSMzfiiJI4IOOCr-ODrOOCu-ODs-OCueOCveODleOCo-OCog!5e0!3m2!1svi!2sjp!4v1697354534962!5m2!1svi!2sjp" style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pb-25 pt-25 gray-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright">
                                <p class="copy-text"> © 2023 <strong>piteiashop</strong> Made With <i class="fa fa-heart" style="color:red" aria-hidden="true"></i> 
                                <strong> Piteiashop</strong></a>.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-img f-right">
                                <a href="#">
                                    <img alt="" src="{{ asset("customer/assets/img/icon-img/payment.png") }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!-- Footer style End -->


		<!-- all js here -->
        <script src="{{ asset("customer/assets/js/vendor/jquery-3.6.0.min.js") }}"></script>
        <script src="{{ asset("customer/assets/js/vendor/jquery-migrate-3.3.2.min.js") }}"></script>
        <script src="{{ asset("customer/assets/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("customer/assets/js/imagesloaded.pkgd.min.js") }}"></script>
        <script src="{{ asset("customer/assets/js/isotope.pkgd.min.js") }}"></script>
        <script src="{{ asset("customer/assets/js/ajax-mail.js") }}"></script>
        <script src="{{ asset("customer/assets/js/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("customer/assets/js/plugins.js") }}"></script>
        <script src="{{ asset("customer/assets/js/main.js") }}"></script>
        <script src="{{ asset('customer/assets/js/api.js') }}"></script>
        <script src="{{ asset('customer/assets/js/pagination.js') }}"></script>
        <script src="{{ asset('customer/assets/js/page/layout.js') }}"></script>
        @yield('js')
    </body>
</html>
