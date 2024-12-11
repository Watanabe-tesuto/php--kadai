<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

/*・配列の商品を出力
・上記に加え価格を出力
・価格に消費税を加算する関数を作成（この時点では10％もしくは8％どちらかでいいです）
・消費税の計算に条件分岐を加え10％と8％の計算を分岐する*/

$tax01=1.08;
$tax02=1.1;

function taxInn($price,$tax01){  //引数を1.08とにする。    
    $price1 = $price * $tax01; //税率８％
    echo   "は"  .  $price1 . "円です。<br>";
    }
// 関数を呼び出す
taxInn(300,1.08);
taxInn(250,1.08);

function taxIn($price,$tax02){  //引数をと1.1にする。    
    $price2 = $price * $tax02; //税率1.1％
    echo   "は"  .  $price2 . "円です。<br>";
    }
// 関数を呼び出す
taxIn(2000,1.1);
taxIn(25600,1.1); 