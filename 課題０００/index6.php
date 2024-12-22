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
・消費税の計算に条件分岐を加え10％と8％の計算を分岐する
の順でそれぞれ別ファイルで作成してください。*/

foreach ($items as $item) {
    echo $item['name'] ."は" . taxInn($item['price'], $item['tax']) ."円です。" ."<br>"; //商品を出力
    
}

function taxInn($price,$tax){//税抜価格
    if ($tax == 2) {
    $price1=$price*1.1; //税込10%価格の計算
    return $price1;
    }
    elseif ($tax == 1) {
    $price2=$price*1.08; //税込8%価格の計算
    return $price2;
    }
    else {
        return $price;
    }
}





