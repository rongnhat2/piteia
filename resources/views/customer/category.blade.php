@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h3> すべてのカテゴリ</h3>
                    <ul>
                        <li><a href="/">ホーム</a></li>
                        <li class="active"> すべてのカテゴリ</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Shop Page Area Start -->
        <div class="shop-page-area ptb-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <ul class="view-mode">
                                    <li class="active"><a href="#product-grid" data-view="product-grid"><i class="fa fa-th"></i></a></li>
                                    <li><a href="#product-list" data-view="product-list"><i class="fa fa-list-ul"></i></a></li>
                                </ul> 
                            </div>
                            <div class="product-sorting-wrapper">

                                <div class="product-show shorting-style">
                                    <label>Sort by:</label>
                                    <select class="sort-by">
                                        <option value="0">-----------</option> 
                                        <option value="1">新着順</option> 
                                        <option value="2">Name: A to Z</option> 
                                        <option value="3">Name: Z to A</option> 
                                        <option value="4">価格が低い順</option> 
                                        <option value="5">価格が高い順/option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper">
                            <div class="product-grid product-view pb-20">
                                <div class="row">
                                     
                                </div>
                            </div>
                            <div class="pagination-total-pages">
                                <div class="pagination-style">
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-wrapper gray-bg-7 shop-sidebar-mrg">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Shop By Categories</h4>
                                <div class="shop-catigory">
                                    <ul id="faq " class="category-list-tag"> 
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-price-filter mt-40 shop-sidebar-border pt-35">
                                <h4 class="shop-sidebar-title">Price Filter</h4>
                                <div class="price_filter mt-25">
                                    <span>Range:  円0 - 円 50.000 </span>
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price" class="js-range-slider" value="0;50000"  placeholder="Add Your Price" />
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page Area End -->
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/category.js') }}"></script>
@endsection()