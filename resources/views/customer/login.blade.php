@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')

     
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 me-auto ms-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a  href="/login" >
                            <h4> ログイン </h4>
                        </a>
                        <a href="/register" >
                            <h4> 新規会員登録 </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form" id="login">
                                    <h3>ログイン</h3>
                                    <div  class="login js-validate" >
                                        <p class="form-row form-row-wide">
                                            <label class="text">メルアドレス</label>
                                            <input title="username" type="text" class="input-text data-email">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label class="text">パ ス ワ ー ド</label>
                                            <input title="password" type="password" class="input-text data-password">
                                        </p> 
                                        <div class="form-row" style="display: flex; justify-content: space-between;">
                                            <div class="button-box">
                                                <button type="submit" class=" button-submit form-submit"><span>ログイン</span></button>
                                            </div> 
                                            <a href="{{ route("customer.view.register") }}" type="button" class="btn-auth-action register-button" atr="Login">会員登録</a>  
                                        </div> 
                                    </div>
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
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()