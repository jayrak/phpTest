<?php

//1
$PriceBeforeTax = 444;
function tax($PriceBeforeTax){
    $PriceBeforeTax *= 1.1;
    return floor($PriceBeforeTax);
}
echo tax($PriceBeforeTax);
echo "\n";
echo "<br>";

//2
$age = 21;
$name = "jay";
function NRKN($age,$name){
    if ($age>=20){
        return $name;
    } else{
        return "未成年";
    }
}
echo NRKN($age,$name);
echo "\n";
echo "<br>";

//3
$arr = [1,3,5,7,9];
function medium($arr){
    if (count($arr)%2 == 0){
        $result = ($arr[(count($arr)/2)-1] + $arr[(count($arr)/2)]) / 2;
        return $result;
    } else{
        $result = $arr[floor(count($arr)/2)];
        return $result;
    }
}
echo medium($arr);
echo "\n";
echo "<br>";

//4
$price = 42;
$amount = 3000;
function NewPrice($price,$amount){
    if ($price*$amount >= 10000){
        $price *= 0.8;
        return floor($price);
    } else{
        return $price;
    }
}
echo NewPrice($price,$amount);
echo "\n";
echo "<br>";

//5
$arr = [9,7,5,3,2,1];
function min_array($arr) {
    // とりあえず配列の最初の要素を1番小さい値とする
    $min_number = $arr[0];
    foreach($arr as $a) {
        if ($a < $min_number){
            $min_number = $a;
        }
    }
    return $min_number;
}
echo min_array($arr);