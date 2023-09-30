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
                        <h3 class="custom_blog_title">Piteia SHOPは 本サイトを運営するにあたり以下の項目を遵守する事をここに宣言します。</h3>
                        <div class="page-main-content about-us-content">
                            <p class="bold">1. 個人情報保護</p>
                            <br>
                            <p>Piteiaの定めるところの個人情報の定義とは現存する一個人に含まれる住所・氏名・年齢及び肖像等の特定個人を識別可能な情報を指しています。 これらの情報をPiteiaが扱う場合、いかなる取扱いケースに於いても第三者への漏えいが無きよう、 細心の注意と最高水準のセキュリティーを以って取扱いをいたします。</p>
                            <br>
                            <p class="bold">2. 個人情報収集</p>
                            <p>Piteiaは弊社にて商品をご購入いただいた顧客、もしくは弊社商品にお問い合わせをいただいた方に対して メールフォームなどを介し以下の個人情報の収集をする事がございます</p>
                            <p>【フリガナを含むお名前・住所・年齢・生年月日・固定電話番号・携帯電話番号・各種メールアドレス・ログインパスワード・配送先情報・購入履歴情報・これらの情報の組み合わせによって個人が識別可能な情報】</p>
                            <p>これらの情報を収集する際にはその利用目的を明示し、日本国法律遵守の上で公正な取扱いを行います。</p> 
                            <br>
                            <p class="bold">3. 個人情報利用</p>
                            <p>Piteiaは取得した個人情報を以下の目的に於いて利用いたします。</p>
                            <p>【注文内容の確認と照会・商品発送時の確認と照会・メールマガジン発送時※】</p>
                            <p>※但しお客様による登録解除及びメルマガ受信拒否の折はそれらの確認時をおいてのみとする。</p> 
                            <br>
                            <p class="bold">4. 個人情報の開示及び提供</p>
                            <p>Piteiaは顧客及びお問い合わせいただいたお客様の個人情報を含む取得した各種情報を本人の承諾無くいかなる情報も開示及び提供を行うことはございません。但し、以下の場合は例外として情報の開示及び提供が行われることがございます。</p>
                            <p>•    日本国法令に基づく正式な委託を受けた機関及び団体が日本国法令に基づいて捜査や事務処理を行う上で協力要請及び下命が成された場合。</p>
                            <p>•    人命及び財産の保護のために当該本人の同意を得る事が不可能な場合。</p> 
                            <br>
                            <p class="bold">5. 個人情報の訂正及び削除</p>
                            <p>Piteiaは取得した個人情報を本人の同意なく訂正を加える事は一切ございませんが、 本人の意思によってこれら情報の訂正及び削除が希望される場合、Piteiaはすみやかにこれに応じるものとします。</p>
                            <p>但し、弊社ショッピング会員として一定期間ログインがなされなかったものに対しては弊社判断の上削除が行われます。</p> 
                            <br>
                            <p class="bold">6. Cookieの使用</p>
                            <p>Piteiaはお客様へのサービス品質維持の目的でCookie （クッキー）システムを使用しています。</p>
                            <p>Cookieとは弊社サーバーからお客様のブラウザに送信されお客様が使用しているPCのハードディスクに蓄積される情報です。</p>
                            <p>これにより特定個人の情報が収集されることはございません。</p>
                            <p>お客様がCookie機能の受け入れを希望されない場合はブラウザの設定で変更することが可能です。</p> 
                            <br>
                            <p class="bold">7. SSLの使用について</p>
                            <p>お客様が個人情報を入力される際にその入力と送信を安全に行うために個人情報のフィッシングを防ぐシステム、 SSL（Secure Sockets Layer）技術が使用されています。 SSLとは情報を暗号化するシステムであり、盗聴やデータの改ざんを防止し安全にデータの送受信を行う機能です。</p> 
                            <br>
                            <p class="bold">8. プライバシーポリシーの変更</p>
                            <p>Piteiaでは本プライバシーポリシーの変更が事前予告なく変更が行われる事がございます。 但し、これによりお客様への個人情報保護の観念が変更される事は決してございません。</p> 
                            <br>
                            <p class="bold">9. プライバシーポリシーの遵守宣言</p>
                            <p>Piteiaは上記1~9項のプライバシーポリシーに対し真摯に遵守し、 日本国法令のもとで適正な企業として運営されている事をここに宣言いたします。</p> 
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