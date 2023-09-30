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
                        <h3 class="custom_blog_title">採用情報</h3>
                        <div class="layout-table-container">
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    仕事の内容
                                </div>
                                <div class="item-data">
                                    <p> ・顧客電話対応</p> 
                                    <p> ・作業管理（運行管理補佐、操配補佐）</p> 
                                    <p> ・設備管理（備品管理など）</p> 
                                    <p> ・軽作業あり</p> 
                                </div>
                            </div>
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    必要な免許・資格
                                </div>
                                <div class="item-data">
                                    <p>不問 </p>
                                </div>
                            </div>
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    学歴
                                </div>
                                <div class="item-data">
                                    <p> 大学・大学院卒業 </p>
                                    <p> （学部・学科不問） </p>
                                </div>
                            </div> 
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    給与
                                </div>
                                <div class="item-data">
                                    <p> 大学院 月給 190,000円 </p>
                                    <p> 大学 月給 180,000円</p>
                                </div>
                            </div> 
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    賞与
                                </div>
                                <div class="item-data">
                                    <p> あり　前年度実績 年2回・計1.50月分</p>
                                </div>
                            </div> 
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    通勤手当
                                </div>
                                <div class="item-data">
                                    <p> 支給　上限あり </p>
                                </div>
                            </div> 
                            <div class="table-item-wrapper">
                                <div class="item-title">
                                    勤務時間帯
                                </div>
                                <div class="item-data">
                                    <p> 09：30-18：30　休憩時間：13：00－14：00 週休二日 </p>
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