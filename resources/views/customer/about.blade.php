@extends('customer.layout')
@section('title', "会社情報")


@section('css')

@endsection()


@section('body')
<div class="main-content main-content-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">ホーム</a>
                        </li>
                        <li class="trail-item trail-end active">
                            会社情報
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
        <div class="row m-t-50">
            <div class="content-area content-about col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="about-wrapper">
                        <h3 class="custom_blog_title">会社情報</h3>
                        <div class="layout-table-container">
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    社　　　名
                                </div>
                                <div class="item-data">
                                    <p> 株式会社6789 </p> 
                                </div>
                            </div>
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    代　表　者
                                </div>
                                <div class="item-data">
                                    <p>代表取締役　レ　テイエン　ダット </p>
                                </div>
                            </div>
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    資　本　金
                                </div>
                                <div class="item-data">
                                    <p> 500万円 </p>
                                </div>
                            </div> 
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    事 業 内 容
                                </div>
                                <div class="item-data">
                                    <p> 1.電子機器、 化粧品、 医薬品、美容商品、 アパレル製品、プライベートブランド商品等の企画、製造、 販売及び輸出入 </p>
                                    <p> 2.中古品、 古物の買取及び販売 </p>
                                    <p> 3.物品の仕分け、梱包、 発送及び配送業務 </p>
                                    <p> 4.インターネットを利用した広告及び宣伝  </p>
                                    <p> 5.美容サロンの企画及び運営  </p>
                                    <p> 6.前各号に附帯する一切の業務 </p>
                                </div>
                            </div>  
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    本社所在地
                                </div>
                                <div class="item-data">
                                    <p> 〒173-0031</p>
                                    <p> 東京都板橋区大谷口北町３２番１コンチネンタルハイツ医学部前Ｂ１階００３号室 </p>
                                    <p> 電話　: 03-4296-1018 </p>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="about-wrapper">
                        <h3 class="custom_blog_title">本社アクセスマップ</h3>
                        <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.0359963145197!2d139.6894424!3d35.749919999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ed92ef9ad3b7%3A0x2b0707ef324434ea!2z5qCq5byP5Lya56S-Njc4OQ!5e0!3m2!1svi!2s!4v1656977254514!5m2!1svi!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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