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