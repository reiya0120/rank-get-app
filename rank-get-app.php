<?php
require __DIR__ . '/vendor/autoload.php';

$hits = '20';//商品データの取得数
$serchUrl = '/komatuyamenbox/xae-n33r/';
$count = '1';

$client = new RakutenRws_Client();
// アプリID (デベロッパーID) をセットします
$client->setApplicationId('1012490835504662103');

// 楽天市場商品検索API では operation として 'IchibaItemSearch' を指定してください。
// ここでは例として keyword に、うどんを指定しています。
$response = $client->execute('IchibaItemSearch', array(
  'hits' => $hits,
  'keyword' => 'うどん'
));

// レスポンスが正常かどうかを isOk() で確認することができます
if ($response->isOk()) {
    // 配列アクセスで情報を取得することができます。
    echo $response['count']."件見つかりました。\n";
    // foreach で商品情報を順次取得することができます。
    foreach ($response as $item) {
        if (strpos($item['itemUrl'],$serchUrl)) {
          echo $item['itemName']."・・・".$count."\n";
        }
        $count++;
    }
} else {
    // getMessage() でレスポンスメッセージを取得することができます
    echo 'Error:'.$response->getMessage();
}
