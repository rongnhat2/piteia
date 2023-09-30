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
                        <h3 class="custom_blog_title">お届けについて</h3>
                        <div class="page-main-content about-us-content">
                            <p>ー注文してから　何日ぐらいで届きますか？</p> 
                            <p>3日お届け可能です。</p>
                            <p>-ご注文の商品や、お届け先地域により、お届けまでの日数や時間帯が異なります。 お届け先地域が本州の場合は、原則発送の翌日にお届け可能です。</p>
                            <p>-ご注文頂きました商品を発送後、ヤマト運輸のお荷物追跡番号を当店より通知致しますので、お荷物の状況の詳細はヤマト運輸WEBサイトにてご確認可能です。</p> 
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