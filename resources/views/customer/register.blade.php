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
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container" id="signup">
                                <div class="login-register-form">
                                    <h3>新規会員登録</h3>
                                    <div class="register js-validate">
                                        <div class="error-log"></div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">お名前 <span class="required-data">必須</span></label>
                                                    <input title="必須" type="text" class="input-text data-name-first" placeholder="">
                                                </p>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">お名前(カナ) <span class="required-data">必須</span></label>
                                                    <input title="必須" type="text" class="input-text data-kana-first" placeholder="">
                                                </p>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">company  </label>
                                                    <input title="会社名" type="text" class="input-text data-company" placeholder="">
                                                </p>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">zipcode <span class="required-data">必須</span></label>
                                                    <span class="d-flex align-items-center">
                                                        <span class="m-r-10">〒</span> <input title="会社名" type="text" class="input-text data-number data-zipcode" placeholder="">
                                                        <a href="https://www.post.japanpost.jp/zipcode/" target="_blank" class="zip-code-wrapper">郵便番号検索</a>
                                                    </span> 
                                                </p>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">住所 <span class="required-data">必須</span></label>
                                                    <select  class="form-select-wrapper data-address-city"> 
                                                        <option value="" selected="selected">都道府県を選択</option>
                                                        <option value="北海道">北海道</option>
                                                        <option value="青森県">青森県</option>
                                                        <option value="岩手県">岩手県</option>
                                                        <option value="宮城県">宮城県</option>
                                                        <option value="秋田県">秋田県</option>
                                                        <option value="山形県">山形県</option>
                                                        <option value="福島県">福島県</option>
                                                        <option value="茨城県">茨城県</option>
                                                        <option value="栃木県">栃木県</option>
                                                        <option value="群馬県">群馬県</option>
                                                        <option value="埼玉県">埼玉県</option>
                                                        <option value="千葉県">千葉県</option>
                                                        <option value="東京都">東京都</option>
                                                        <option value="神奈川県">神奈川県</option>
                                                        <option value="新潟県">新潟県</option>
                                                        <option value="富山県">富山県</option>
                                                        <option value="石川県">石川県</option>
                                                        <option value="福井県">福井県</option>
                                                        <option value="山梨県">山梨県</option>
                                                        <option value="長野県">長野県</option>
                                                        <option value="岐阜県">岐阜県</option>
                                                        <option value="静岡県">静岡県</option>
                                                        <option value="愛知県">愛知県</option>
                                                        <option value="三重県">三重県</option>
                                                        <option value="滋賀県">滋賀県</option>
                                                        <option value="京都府">京都府</option>
                                                        <option value="大阪府">大阪府</option>
                                                        <option value="兵庫県">兵庫県</option>
                                                        <option value="奈良県">奈良県</option>
                                                        <option value="和歌山県">和歌山県</option>
                                                        <option value="鳥取県">鳥取県</option>
                                                        <option value="島根県">島根県</option>
                                                        <option value="岡山県">岡山県</option>
                                                        <option value="広島県">広島県</option>
                                                        <option value="山口県">山口県</option>
                                                        <option value="徳島県">徳島県</option>
                                                        <option value="香川県">香川県</option>
                                                        <option value="愛媛県">愛媛県</option>
                                                        <option value="高知県">高知県</option>
                                                        <option value="福岡県">福岡県</option>
                                                        <option value="佐賀県">佐賀県</option>
                                                        <option value="長崎県">長崎県</option>
                                                        <option value="熊本県">熊本県</option>
                                                        <option value="大分県">大分県</option>
                                                        <option value="宮崎県">宮崎県</option>
                                                        <option value="鹿児島県">鹿児島県</option>
                                                        <option value="沖縄県">沖縄県</option>
                                                    </select>
                                                </p>
                                            </div>  
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">市区町村(例：大阪市北区西梅田) <span class="required-data">必須</span></label>
                                                    <input title="会社名" type="text" class="input-text data-address-munic" placeholder=""> 
                                                </p>
                                            </div>   
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">番地＋アパート・マンション名 <span class="required-data">必須</span></label>
                                                    <input title="会社名" type="text" class="input-text data-address-detail" placeholder=""> 
                                                </p>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">電話番号 <span class="required-data">必須</span></label>
                                                    <input title="例：11122223333" type="text" class="input-text data-number data-phone" placeholder="例：11122223333"> 
                                                </p>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">メールアドレス <span class="required-data">必須</span></label>
                                                    <input title="" type="text" class="input-text data-email" placeholder=""> 
                                                </p>
                                            </div>  
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">メールアドレス <span class="required-data">必須</span></label>
                                                    <input title="" type="text" class="input-text data-email-confirm" placeholder="確認のためもう一度入力してください"> 
                                                </p>
                                            </div>  
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">パスワード <span class="required-data">必須</span></label>
                                                    <input title="" type="password" class="input-text data-password" placeholder="半角英数記号8〜32文字"> 
                                                </p>
                                            </div>  
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <label class="text">パスワード <span class="required-data">必須</span></label>
                                                    <input title="" type="password" class="input-text data-password-confirm" placeholder="確認のためもう一度入力してください"> 
                                                </p>
                                            </div>  
                                        </div> 
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <p class="form-row form-row-wide">
                                                    <span class="inline">
                                                        <input type="checkbox" id="cb2" class="data-rule">
                                                        <label for="cb2" class="label-text">に同意してお進みください  <span><a href="{{ route("customer.view.rule_agreement") }}">利用規約</a></span></label>
                                                    </span> 
                                                </p>
                                            </div>  
                                        </div>  
                                        <div class="form-row" style="display: flex; justify-content: space-between;">
                                            <div class="button-box">
                                                <button type="submit" class=" button-submit form-submit"><span>新規会員登録</span></button>
                                            </div> 
                                            <a href="{{ route("customer.view.login") }}" type="button" class="btn-auth-action register-button" atr="Login">ログイン</a>  
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
<script type="text/javascript" src="{{ asset('customer/assets/js/page/register.js') }}"></script>
@endsection()