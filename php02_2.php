<?php
//1. $number に数字を代入し、 if文で $number が偶数だったら 「偶数です」、もし違ったら「奇数です」と表示するように実装してください。
$number = 11;
if ($number % 2 == 0){
    echo "偶数です";
} else{
    echo "奇数です";
}
echo "\n";
echo "<br>";

//2. 【応用】$animals に配列で大きい順で好きな動物を5種類代入し、for文で逆番に出力してください。
$animals = ["cat","chicken","dog","horse","pig"];
for( $i = count($animals) - 1; $i >= 0  ; $i-- ){
    echo $animals[$i];
    echo "\n";
    echo "<br>";
}
/*
//3. 【応用】 for文を使って、下記のような九九の結果を表させてください
1 * 1 は 1です
1 * 2 は 2です
~省略~
9 * 8 は 72です
9 * 9 は 81です
?>
```
*/
for ($a = 1; $a < 10; $a++){
    for($b = 1; $b < 10; $b ++){
        $ans = $a * $b;
        echo $a." * ".$b." は ".$ans."です";
        echo "\n";
        echo "<br>";
    }
}