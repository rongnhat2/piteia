@extends('customer.layout')
@section('title', "会社情報")


@section('css')

@endsection()


@section('body')
	
        <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-image-3 ptb-150">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h3>ショッピングカート </h3>
                <ul>
                    <li><a href="/">ホーム</a></li>
                    <li class="active">ショッピングカート </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
     <!-- shopping-cart-area start -->
    <div class="cart-main-area ptb-100">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div >
                        <div class="table-content table-responsive shoppingcart-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td class="actions">
                                            <div class="coupon">

                                            </div>
                                            <div class="order-total">
                                                <span class="title">
                                                    Total Price:
                                                </span>
                                                <span class="total-price">
                                                    
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="/category">お買い物を続ける</a>
                                    </div>
                                    <div class="cart-clear"> 
                                        <a href="<?php if ($customer_data['is_login']): ?>  /checkout <?php else: ?> /checkout-login <?php endif ?> " class="btn-cart-to-checkout">今すぐ購入</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/cart.js') }}"></script>
@endsection()