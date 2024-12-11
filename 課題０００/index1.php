<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;

function taxInn($price){ //税抜価格
    $price1 = $price * $tax01; //税率８％
    $price2 = $price * $tax02; //税率1.1％
    return [$price1, $price2]; //税込価格
}


echo   "は"  .  $price1 . "円です。<br>";
echo   "は"  .  $price2 . "円です。<br>";

