<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;

//priceは税抜き価格となり、tax = 1 は軽減税率（8%）tax = 2 は通常税率（10%）の消費税//
for( $i = 0; $i < count($items); $i++ ){
    if($items[$i]['tax']===1)//オレンジは324円です。りんごは270円です。//
	echo $items[$i]['name'] . "は"  .$items[$i]['price']*$tax01 . "円です。" . "<br>";
    else //カバンは2200円です。コートは28160円です。//
    echo $items[$i]['name'] . "は"  .$items[$i]['price']*$tax02 . "円です。" . "<br>";
}

/*priceは税抜き価格となり
tax = 1 は軽減税率（8%）
tax = 2 は通常税率（10%）
の消費税となり
出力結果は下記のようになります。

オレンジは324円です。
りんごは270円です。
カバンは2200円です。
コートは28160円です。

利用するのは
・繰り返し処理
・条件分岐
・関数（税込価格の計算）

function taxInn($tax01,$tax02){ 
    $tax01=1.08;
    $tax02=1.1; */




function calculateTax($price, $tax) {
    if ($tax == 1) {
        return $price * 1.08; // 8% tax
    } elseif ($tax == 2) {
        return $price * 1.10; // 10% tax
    } else {
        return $price; // if no valid tax provided
    }
}

foreach ($items as $item) {
    $finalPrice = calculateTax($item['price'], $item['tax']);
    echo $item['name'] . "は" . round($finalPrice) . "円です。 <br>";
}

function taxiin($price, $tax, $tax01, $tax02) {
    if ($tax == 1) {
        return $price * $tax01; // 8% tax
    } elseif ($tax == 2) {
        return $price * $tax02; // 10% tax
    }
}

foreach ($items as $item) {
    $finalPrice = taxiin($item['price'], $item['tax'], $tax01, $tax02);
    echo $item['name'] . "は" . round($finalPrice) . "円です。<br>";
}


function calc($price,$tax) {
    if ($tax == 1) {
    return $price * 1.08;
    }
    elseif ($tax == 2) {
    return $price * 1.1;
    }
}
foreach ($items as $item) {
    $finalPrice = calc($item['price'], $item['tax']);
    echo $item['name'] . "は" . round($finalPrice) . "円です。<br>";
}
