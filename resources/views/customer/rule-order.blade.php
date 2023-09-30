@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')
<div class="main-content main-content-about">
    <div class="container"> 
        <div class="row m-t-50">
            <div class="content-area content-about col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="about-wrapper">
                        <h3 class="custom_blog_title">お支払いについて</h3>
                        <div class="page-main-content about-us-content">
                            <p class="bold">Step1 商品を探す</p> 
                            <p>商品名、キーワードから検索する</p>
                            <p>トップページ上部の検索BOXに、探している商品名、キーワードなどを入力して検索します。</p>
                            <p>お探しの商品のジャンルを選択し、商品を検索することができます。</p>
                            <br>
                            <p class="bold">Step2 商品を決める</p> 
                            <p> 検索結果から購入する商品をクリック</p>
                            <p>お目当ての商品を見つけたらクリックしてください</p>
                            <br>
                            <p class="bold">Step3 ご購入手続き</p> 
                            <p> -商品を確認して、｢ご購入手続き｣ボタンをクリックします。</p>
                            <p>-会員の方は、ユーザIDとパスワードを入力してください。 ユーザIDとパスワードを確認して、｢ログイン｣をクリックしてください。</p>
                            <p>-はじめての方・楽天会員登録されていない方</p>
                            <p>1.お客様情報の入力</p>
                            <p>氏名、郵便番号、住所などの注文者情報を入力してください。</p>
                            <p>2. お届け先の指定</p>
                            <p>お届け先が注文者情報と同じ場合は、｢注文者と同じ｣をチェックします。 別のお届け先を希望される場合は、｢別のお届け先を指定｣をチェックしてください。</p>
                            <p>3. お支払い方法を選択</p>
                            <br>
                            <p class="bold">Step4 注文内容の確認</p> 
                            <p>注文内容をご確認の上｢注文を確定する｣ボタンをクリックしてください。</p>
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