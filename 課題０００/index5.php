<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;

function Taxiin($tax01, $tax02) {
    if ($tax01 = 1.08) {
        return $price * $tax01; // 8% tax
    } elseif ($tax02 = 1.1) {
        return $price * $tax02; // 10% tax
    }
}

foreach ($items as $item) {
    $finalPrice = Taxiin($price,$tax01, $tax02);
    echo $item['name'] . 'は' . round($finalPrice) . '円です。' . PHP_EOL;
}