@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')

    <div class="main-content main-content-login">
        <div class="container " style="padding: 50px;">
            <div class="row">
                <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <h3 class="custom_blog_title">
                            Authentication
                        </h3>
                        <div class="customer_login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-md-offset-3">
                                    <p>より便利に！よりお得に！ご利用いただくために</p>
                                    <p>会員登録をお勧めしています！</p>
                                    <p>会員登録　3つのメリット</p>
                                    <p>※会員登録しなくても商品を注文することができます。</p>
                                    <a  href="{{ route("customer.view.checkout") }}" class="btn-auth-action button-submit form-submit m-r-20">非会員で購入</a>  
                                    <a href="{{ route("customer.view.register") }}" type="button" class="btn-auth-action register-button" atr="Login">会員登録する</a>   
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
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()