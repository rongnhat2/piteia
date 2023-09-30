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
                            <p class="bold">○代金引換</p>
                            <br>
                            <p>商品お届け時に代金をお支払いください(手数料お客様負担)</p> 
                            <p>※代金引換にてご注文の場合は、1度につき手数料等も含めた総額30万円まです。30万円を超えたご注文はお手数ですが、複数回に分けてご注文ください。</p>
                            <br>
                            <p class="bold">○銀行振込(手数料お客様負担)</p>
                            <p>株式会社6789 の代表口座
                            <br>
                            <p>1：PayPay銀行 </p>
                            <p>銀行コード　:0033</p>
                            <p>支店名 :ビジネス営業部</p>
                            <p>店番号  : 005</p>
                            <p>普通口座　：6335338</p>
                            <p>カ）ロクナナハチキュウ</p>
                            <br>
                            <p>2：楽天銀行　</p>
                            <p>銀行コード　0036</p>
                            <p>第三営業支店(ダイサンエイギヨウ)</p>
                            <p>支店番号 253</p>
                            <p>普通口座　7304190</p>
                            <p>カ）ロクナナハチキュウ</p>
                            <br>
                            <p>3：ＧＭＯあおぞらネット銀行</p>
                            <p>銀行コード　0310</p>
                            <p>法人営業部(ほうじんえいぎょうぶ)</p>
                            <p>支店コード　101</p>
                            <p>普通口座　1429680</p>
                            <p>カ）ロクナナハチキュウ</p>
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