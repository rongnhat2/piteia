@extends('customer.layout')
@section('title', "会社情報")


@section('css')

@endsection()


@section('body')

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-image-3 ptb-150">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h3>CHECKOUT</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="active">CHECKOUT</li>
                    </ul>
                </div>  
            </div>
        </div>
       <div class="tab-content">
            <div id="lg1" class="tab-pane active">
                <div class="login-form-container container cart-form-data">
                    <div class="shipping-address-form  checkout-form">
                        <div  class="login js-validate" >
                           <div class="shipping-address js-validate"> 
                                <h3 class="title-form">
                                    Shipping Address
                                </h3>
                                <div class="error-log"></div>
                                <input title="id" type="hidden" class="input-text data-id" value="{{ $customer_data["is_login"] == 1 ? $customer_data["id"] : "" }}">
                                <p class="form-row form-row-first">
                                    <label class="text">お名前</label>
                                    <input title="Name" type="text" class="input-text data-name" value="{{ $customer_data["is_login"] == 1 ? $customer_data["name"] : "" }}">
                                </p> 
                                <p class="form-row form-row-last">
                                    <label class="text">Zipcode</label>
                                    <input title="Zipcode" type="text" class="input-text data-zipcode" value="{{ $customer_data["is_login"] == 1 ? $customer_data["zipcode"] : "" }}">
                                </p>
                                <p class="form-row form-row-first">
                                    <label class="text">メールアドレス</label>
                                    <input title="Email" type="text" class="input-text data-email" value="{{ $customer_data["is_login"] == 1 ? $customer_data["email"] : "" }}">
                                </p>
                                <p class="form-row form-row-last">
                                    <label class="text">電話番号</label>
                                    <input title="Telephone" type="text" class="input-text data-phone data-number" value="{{ $customer_data["is_login"] == 1 ? $customer_data["phone"] : "" }}">
                                </p>
                                <p class="form-row form-row-first">
                                    <label class="text">住所</label>
                                    <input title="Address" type="text" class="input-text data-address" value="{{ $customer_data["is_login"] == 1 ? $customer_data["address"] : "" }}">
                                </p> 
                                <div> 
                                    <label class="text">説明</label>
                                    <textarea title="Description" type="text" class="input-text data-description"> </textarea> 
                                </div>
                            </div>
                            <div class="form-row" style="display: flex; justify-content: center;">
                                <a href="#" class="button button-payment" 
                                    style="display: flex; padding: 8px 24px; border: 1px solid #519f10; color: #519f10; margin: 20px;">
                                    Order
                                </a>
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
<script type="text/javascript" src="{{ asset('customer/assets/js/page/checkout.js') }}"></script>
@endsection()