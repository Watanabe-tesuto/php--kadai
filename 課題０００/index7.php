<?php
$items = [
    [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
    [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
    [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
    [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];
// 税率の定数を定義
define('REDUCED_TAX_RATE', 0.08); // 軽減税率 (8%)
define('STANDARD_TAX_RATE', 0.10); // 通常税率 (10%)

// 税込価格を計算する関数

function calculateTotalPrice($price, $taxType) {
    if ($taxType === 1) {
    $taxRate = 'REDUCED_TAX_RATE';
    } 
    elseif ($taxType === 2) {
    $taxRate = 'STANDARD_TAX_RATE';
    }
    else {
    }    
 
return $price; // 税率不明の場合は税抜価格をそのまま返す
    }
return $price * (1 + $taxRate);

// 各商品の税込価格を表示
foreach ($items as $item) {
    $totalPrice = calculateTotalPrice($item['price'], $item['tax']);
    echo "商品名: {$item['name']} | 税抜価格: {$item['price']}円 | 税込価格: " . round($totalPrice) . "円\n";
}
