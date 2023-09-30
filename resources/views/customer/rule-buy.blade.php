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
                        <h3 class="custom_blog_title">返品・交換について</h3>
                        <div class="page-main-content about-us-content">
                            <p>ー返品・交換は可能？</p> 
                            <br>
                            <p>商品到着後3日以内、未使用(未開封)・未通電の場合に限り返品・交換をお受け致します。(お客様ご都合による返品・交換の場合は返送料、返金時振込手数料はお客様のご負担になります。) メール。。。。。。</p>
                            <p>※衛生上、お客様ご都合による返品をお受けできない商品もございます。</p>
                            <p>※アウトレット商品に関しましては、お客様ご都合での返品・交換を承れません。 初期不良や破損等の場合は別途「不良品等の取扱条件」をご確認頂き、ご連絡頂けますようお願いいたします。</p> 
                            <p>ー届いた商品が不良品だった</p>
                            <p>ご迷惑をお掛け致しまして申し訳ございません。</p>
                            <p>初期不良や破損等の場合は別途「不良品等の取扱条件」をご確認頂き、「info@。。。」までご連絡ください。 ご連絡は 商品到着後3日以内にお願い致します。</p>
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