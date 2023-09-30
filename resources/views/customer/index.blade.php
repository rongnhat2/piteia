@extends('customer.layout')
@section('title', "会社情報")


@section('css')

@endsection()


@section('body')
		<!-- Slider Start -->
        <div class="slider-area" style="background-color: #f2f2f4;">
            <div class="slider-active owl-dot-style owl-carousel product-trending-list">

            </div>
        </div>
		<!-- Slider End -->
		<!-- Product Area Start -->
        <div class="product-area bg-image-1 pt-100 pb-95">
            <div class="container">
                <div class="featured-product-active hot-flower owl-carousel product-nav product-new-list">

                </div>
            </div>
        </div>
		<!-- Product Area End -->
		<!-- Banner Start -->
        <div class="banner-area pt-100 pb-70">
            <div class="container">
                <div class="banner-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-banner img-zoom mb-30">
                                <a href="/category?status=hot">
                                    <img src="{{ asset("customer/assets/img/banner-home-2.jpg") }}" alt="">
                                </a>
                                <div class="banner-content">
                                    <h6><a href="/category?status=hot">Shop now</a> </h6>
                                    <h4>Best Collection</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-banner img-zoom mb-30">
                                <a href="/category?category=0">
                                    <img src="{{ asset("customer/assets/img/banner-home-3.jpg") }}" alt="">
                                </a>
                                <div class="banner-content">
                                    <h6><a href="/category?category=0">Shop now</a> </h6>
                                    <h4>All Product</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Banner End -->
		<!-- New Products Start -->
        <div class="product-area gray-bg pt-90 pb-65">
            <div class="container">
                <div class="product-top-bar section-border mb-55">
                    <div class="section-title-wrap text-center">
                        <h3 class="section-title">New Products</h3>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div class="tab-pane active">
                        <div class="featured-product-active owl-carousel product-nav product-feature-list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- New Products End -->

@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()