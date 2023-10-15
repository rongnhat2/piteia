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
                                    <p> PTA合同会社 </p> 
                                </div>
                            </div>
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    代　表　者
                                </div>
                                <div class="item-data">
                                    <p>業務執行社員 ファム ティエン アイン </p>
                                </div>
                            </div>
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    資　本　金
                                </div>
                                <div class="item-data">
                                    <p> 金500万円 </p>
                                </div>
                            </div> 
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    事 業 内 容
                                </div>
                                <div class="item-data">
                                    <p> 1.化粧品、香水、 各種日用品雑貨の卸、販売、及び輸出入  </p>
                                    <p> 2.衣服品 装飾品 ジュエリー アクセサリーなどの卸、販売及び輸出入  </p>
                                    <p> 3.携帯電話の販売及び輸出入 </p>
                                    <p> 4. 古物 商  </p>
                                    <p> 5.インターネットによる通信販売事業  </p>
                                    <p> 6.前各号に付帯する一切の事業 </p>
                                </div>
                            </div>  
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    本社所在地
                                </div>
                                <div class="item-data">
                                    <p> 〒114-0015</p>
                                    <p> 東京都北区中里一丁目37-8 クレセンスソフ ィア101 </p>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="about-wrapper">
                        <h3 class="custom_blog_title">本社アクセスマップ</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.479121302729!2d139.75357839999998!3d35.73902679999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188deb3d18fdbd%3A0x7e275f0616789d96!2z44CSMTE0LTAwMTUgVG9reW8sIEtpdGEgQ2l0eSwgTmFrYXphdG8sIDEtY2jFjW1l4oiSMzfiiJI4IOOCr-ODrOOCu-ODs-OCueOCveODleOCo-OCog!5e0!3m2!1svi!2sjp!4v1697354534962!5m2!1svi!2sjp" style="width: 100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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