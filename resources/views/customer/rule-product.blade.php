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
                        <h3 class="custom_blog_title">商品について</h3>
                        <div class="page-main-content about-us-content">
                            <p class="bold">商品は本物・正規品ですか？</p>
                            <br>
                            <p>はい。</p> 
                            <p>当店は正規販売店です。</p>
                            <p>取り扱う商品はメーカーとの直接取引により取り扱わせて頂いています。 ※一部、メーカー指定の総代理店を介して取引している商品もあります。</p>
                            <br>
                            <p class="bold">Q商品を店舗や倉庫で実物を見る事は可能？</p>
                            <p>いいえ。</p>
                            <p>申し訳ございません。WEBショップのみでの運営です。</p>
                            <p>商品についてご不明な点は、メール(viết email vào)またはWEBショップのお問い合わせフォームからお願いいたします。</p> 
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