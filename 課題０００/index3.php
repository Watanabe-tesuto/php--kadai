<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;

function taxIn($tax01,$tax02){
    $sampl=$tax01 * 300,250;
    $sampl2=$tax02 * 2000,25600;
    return $sampl
}

echo 1000 * $tax01;   
echo $tax01 * 300,250 . "円<br>";
