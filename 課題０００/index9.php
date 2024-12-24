<?php
// 税率を定数として定義
define('TAX_RATE_1', 0.08); // 8%
define('TAX_RATE_2', 0.10); // 10%

// 商品リストを定義
$items = [
    ['name' => 'オレンジ', 'price' => 300, 'tax' => 1],
    ['name' => 'りんご', 'price' => 250, 'tax' => 1],
    ['name' => 'カバン', 'price' => 2000, 'tax' => 2],
    ['name' => 'コート', 'price' => 25600, 'tax' => 2],
];

// 税込み価格を計算する関数
function PriceTax($price, $taxType) {
    $priceWithTax = $price; // デフォルト値を設定

    if ($taxType === 1) {
        $priceWithTax = $price * (1 + TAX_RATE_1);
    } 
    elseif ($taxType === 2) {
        $priceWithTax = $price * (1 + TAX_RATE_2);
    }
    return $priceWithTax; // 最後に1回だけreturn
}

// 各商品の税込価格を出力
foreach ($items as $item) {
    
$priceWithTax = PriceTax($item['price'], $item['tax']);
    echo $item['name'] . " は " . number_format($priceWithTax) . " 円です。" . PHP_EOL;
}