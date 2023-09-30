@extends('customer.layout')
@section('title', "会社情報")


@section('css')

@endsection()


@section('body')
    <input type="hidden" class="product-id" value="{{ $id }}">

<!-- Product Deatils Area Start -->
<div class="product-details pt-100 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-img"> 
                    <div class="mt-20 product-dec-slider2 owl-carousel">

                    </div> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-content">
                    <h4 class="item-data-name"> </h4>

                    <div class="price" style="margin-top: 30px;">
                        <del class="data-discount"></del>
                        <h5 class="data-prices"></h5>
                    </div> 
                    <div class="product-details-description">
                        <ul>

                        </ul>
                    </div>
                    <div class="in-stock" style="margin: 20px 0;">
                        <p>状況: <span>在庫あり</span></p>
                    </div>
                    <div class="product-details-description"></div>
                    <div class="list-size" style="margin: 10px 0;">

                    </div>
                    <div class="quality-add-to-cart details-infor"> 
                        <div class="shop-list-cart-wishlist quantity-add-to-cart ">
                            <div class="single_add_to_cart_button button action-add-to-card" atr="Add to card"
                                style="outline: none; background-color: #519f10; padding: 8px 16px; float: left; "
                            >
                            カートに入れる
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Deatils Area End -->
<div class="description-review-area pb-70">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav text-center">
                <a class="active" data-bs-toggle="tab" href="#des-details1">説明 </a> 
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper" id="product-detail">

                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-100">
    <div class="container">
        <div class="product-top-bar section-border mb-35">
            <div class="section-title-wrap">
                <h3 class="section-title section-bg-white">Related Products</h3>
            </div>
        </div>
        <div class="featured-product-active hot-flower owl-carousel product-nav product-related-list">
             
        </div>
    </div>
</div>
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/product.js') }}"></script>
@endsection()