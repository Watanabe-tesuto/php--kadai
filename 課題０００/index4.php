<?php
$items = [
        [ 'name' => 'オレンジ', 'price' => 300, 'tax' => 1 ],
        [ 'name' => 'りんご', 'price' => 250, 'tax' => 1 ],
        [ 'name' => 'カバン', 'price' => 2000, 'tax' => 2 ],
        [ 'name' => 'コート', 'price' => 25600, 'tax' => 2 ],
];

$tax01=1.08;
$tax02=1.1;

function taxInn($zeikomi,$price,$tax){
    $zeikomi = $price*$tax;
    for( $i = 0; $i < count($items); $i++ ){
    if($items[$i]['tax']===1);//オレンジは324円です。りんごは270円です。//
    else ($items[$i]['tax']===2);//カバンは2200円です。コートは28160円です。//
   return $zeikomi;
    }
}
taxInn ($zeikomi=$price*$tax);
 