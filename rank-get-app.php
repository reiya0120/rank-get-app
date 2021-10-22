<?php
require_once '/path/to/sdk-dir/autoload.php';

$client = new RakutenRws_Client();
// アプリID (デベロッパーID) をセットします
$client->setApplicationId('YOUR_APPLICATION_ID');

// 楽天市場商品検索API では operation として 'IchibaItemSearch' を指定してください。
// ここでは例として keyword に、うどんを指定しています。
$response = $client->execute('IchibaItemSearch', array(
  'keyword' => 'うどん'
));

// レスポンスが正常かどうかを isOk() で確認することができます
if ($response->isOk()) {
    // 配列アクセスで情報を取得することができます。
    echo $response['count']."件見つかりました。\n";

    // foreach で商品情報を順次取得することができます。
    foreach ($response as $item) {
        echo $item['itemName']."\n";
    }
} else {
    // getMessage() でレスポンスメッセージを取得することができます
    echo 'Error:'.$response->getMessage();
}
