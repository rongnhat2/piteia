

<h2>このメールはお客様の注文に関する大切なメールです。</h2>
<h2>お取引が完了するまで保存してください。</h2>
<h3>----------------------------------------------------------------------</h3>
<h3>本メールアドレスは送信専用となります。お問い合わせをいただいても返信できませんので、あらかじめご了承ください。</h3>
<h3>----------------------------------------------------------------------</h3>
<h3>レティエン ダット 様</h3>
<br>
<h4>お世話になっております。</h4>
<h4>Piteia SHOPです。</h4>
<h4>この度は数あるネットショップの中から当店を選んでいただき、</h4>
<h4>また、ご注文いただきありがとうございます！</h4>
<h4>スタッフ一同大変嬉しく思っております。</h4>
<h3>----------------------------------------------------------------------</h3>
<h4>下記ご注文内容にお間違えがないかご確認下さい。</h4>
<h3>----------------------------------------------------------------------</h3>
<br>
<h2>-ご請求金額</h2>
<p><b>ご注文日時：</b> <span>{{ $data["date_created"] }}</span></p>
<p><b>お支払い合計：</b> <span>￥ {{ $data["total"] }}</span></p>
<p><b>ご注文番号：</b> <span>{{ $data["order_id"] }}</span></p>
<p><b>お支払い方法：</b> <span>銀行振り込み</span></p>
<p><b>お問い合わせ：</b> <span>{{ $data["description"] }}</span></p>
<br>
<h4>※入金確認後の発送となります</h4>
<br>
<h4>PayPay銀行 </h4>
<h3>支店名 :ビジネス営業部</h3> 
<h3>店番号  : 005</h3> 
<h3>普通口座　：6335338</h3> 
<h3>カ）ロクナナハチキュウ</h3> 

<br>
<h4>普通口座　</h4>
<h4>※お振込みお名義は、ご注文お名義と同一にてお願い致します</h4>
<h4>※振込手数料はお客様のご負担でお願いします</h4>
<h4>※お支払期限はご注文より3営業日以内とさせていただきます。期限を超えたご注文はキャンセル扱いとなります</h4>

<h3>----------------------------------------------------------------------</h3>
<h3>ご注文商品明細</h3>
<?php foreach ($data["metadata"]->cart as $key => $value): ?>
	<p style="margin: 0"><b>|| 商品コード 	：</b> <span>{{ $value->id }}</span></p>
	<p style="margin: 0"><b>|| 製品を見る 	：</b> <span>{{ $value->meta->data[0]->size }} ml</span></p>
	<p style="margin: 0"><b>|| 数量 		：</b> <span>{{ $value->qty }}</span></p>
	<p style="margin: 0"><b>|| 単価 		：</b> <span>￥{{ $value->meta->data[0]->prices }}</span></p>
	<p style="margin: 0"><b>|| 割引 		：</b> <span>{{ $value->meta->data[0]->discount }}%</span></p> 
	<p style="margin: 0"><b>|| 合計金額 	：</b> <span>￥{{ ($value->meta->data[0]->prices - ( $value->meta->data[0]->prices / 100 * $value->meta->data[0]->discount ) ) * $value->qty }}</span></p> 
	<h3>---------------------</h3>
<?php endforeach ?>  
 
<h3>----------------------------------------------------------------------</h3>
<br>
<?php if ($data["customer_login"]): ?>
<h3>ご注文者情報</h3>  
<p><b>お名前 ：</b> <span>{{ $data["customer_data"]["name"] }} 様</span></p>
<p><b>お名前(カナ) ：</b> <span>{{ $data["customer_data"]["name_kana"] }} 様</span></p>
<p><b>会社名 ：</b> <span>{{ $data["customer_data"]["company"] }}</span></p>
<p><b>郵便番号 ：</b> <span>〒{{ $data["customer_data"]["zipcode"] }}</span></p>
<p><b>住所 ：</b> <span>〒{{ $data["customer_data"]["address"] }}</span></p>
<p><b>電話番号 ：</b> <span>{{ $data["customer_data"]["phone"] }}</span></p>
<p><b>メールアドレス ：</b> <span>{{ $data["customer_data"]["email"] }}</span></p>
<p><b>配送情報 ：</b> <span>{{ $data["order_data_description"] }}</span></p>
<br>
<h3>----------------------------------------------------------------------</h3>
<br>
<h3>◎お届け先</h3>  
<p><b>お名前 ：</b> <span>{{ $data["order_data_name"] }} 様</span></p>  
<p><b>郵便番号 ：</b> <span>〒{{ $data["order_data_zipcode"] }}</span></p>
<p><b>電話番号 ：</b> <span>{{ $data["order_data_phone"] }}</span></p>
<p><b>メールアドレス ：</b> <span>{{ $data["order_data_email"] }}</span></p>
<p><b>住所 ：</b> <span>〒{{ $data["order_data_address"] }}</span></p>
<p><b>配送情報 ：</b> <span>{{ $data["order_data_description"] }}</span></p>
<?php else: ?>
<br>
<h3>----------------------------------------------------------------------</h3>
<h3>◎お届け先</h3>  
<p><b>お名前 ：</b> <span>{{ $data["order_data_name"] }} 様</span></p>  
<p><b>郵便番号 ：</b> <span>〒{{ $data["order_data_zipcode"] }}</span></p>
<p><b>電話番号 ：</b> <span>{{ $data["order_data_phone"] }}</span></p>
<p><b>メールアドレス ：</b> <span>{{ $data["order_data_email"] }}</span></p>
<p><b>住所 ：</b> <span>〒{{ $data["order_data_address"] }}</span></p>
<p><b>配送情報 ：</b> <span>{{ $data["order_data_description"] }}</span></p>
<h3>----------------------------------------------------------------------</h3>
<?php endif ?> 

<br>
<h4>-お届けについて</h4>
<h3>注文してから　何日ぐらいで届きますか？</h3>
<p>3日お届け可能です。</p>
<p>ご注文の商品や、お届け先地域により、お届けまでの日数や時間帯が異なります。 お届け先地域が本州の場合は、原則発送の翌日にお届け可能です。</p>
<p>ご注文頂きました商品を発送後、ヤマト運輸のお荷物追跡番号を当店より通知致しますので、お荷物の状況の詳細はヤマト運輸WEBサイトにてご確認可能です.</p>
<h3>----------------------------------------------------------------------</h3>
<p>※ご注文後のお客様のご都合による商品の変更・キャンセルは</p>
<p> お受けできませんのでご了承下さい。</p>
<p>(サイズ、カラー、スペック等変更がないようご注文前にご確認をお願い致します)</p>
<br>
<br>
<h5>Piteia SHOP</h5>
<h5>サイト: https://http://piteiashop.com/</h5>
<h5>電話:03-4296-1018</h5>
<h5>〒173-0031</h5>
<h5>東京都板橋区大谷口北町32-1-003</h5>
 
 