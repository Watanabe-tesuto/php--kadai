<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;
function taxInn($price,$tax01){
    return $price*$tax01;
}
echo  "オレンジは " .taxInn (300,$tax01). "円です。<br>";
echo  "りんごは " .taxInn (250,$tax01). "円です。<br>";

function taxIn($price,$tax02){
    return $price*$tax02;
}
echo  "カバンは " .taxIn (2000,$tax02). "円です。<br>";
echo  "コートは " .taxIn (25600,$tax02). "円です。<br>";