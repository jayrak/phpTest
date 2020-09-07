<?php

//文字列はダブルクォーテーションで囲います
$test = "これはサンプルです。";
//数字はダブルクォーテーションなしでOK
$testNum = 123;
echo $test;
echo "<br>";
echo $testNum;
echo "<br>";

// 変数$stringを代入
$string = 'abc';
// 変数 $string を出力
echo $string;
echo "<br>";
// => abc と表示される。

// 変数$integerに20を代入
$integer = 20;
// 変数 $integer を出力
echo $integer;
echo "<br>";
// => 20 と表示される

// 変数 $integer と 10 を足した結果を 変数 $new_integer に代入する。
$new_integer = $integer + 10;
// 変数 $new_integer を出力する
echo $new_integer;
echo "<br>";

$red_fruit = 'APPLE';
$yellow_fruit = 'Banana';
echo $red_fruit;
echo "<br>";
echo $yellow_fruit;
echo "<br>";

$array = [2017, 2018, 2019, 2020];
// $array から 2017 を取り出して表示する
echo $array[0];
echo "<br>";
// => 2017 と表示される
// $array から 2019 を取り出して表示する
echo $array[2];
echo "<br>";

// $array2 に spring, summer, autumn, winterを代入する。
$array2 = ["spring", "summer", "autumn", "winter"];
// $array2 から autumn を取り出して表示する。
echo $array2[2];
echo "<br>";
//=> autumn と表示される。

$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
];
// $animals から "猫" を取り出して表示する。
echo $animals["cat"];
echo "<br>";
// => 猫 と表示される
// $animals から　"鳥" を取り出して表示する。
echo $animals["bird"];
echo "<br>";
// => 鳥 と表示される

// $result に true を代入する。
$result = true;
// もし $result が true であれば、 成功しました。 が表示される
// そうでなければ、　失敗しました が表示される
if ($result == true) {
  echo "成功しました。";
} else {
  echo "失敗しました。";
}
echo "<br>";
// => 成功しました。 が表示される

// + は数値を加算する演算子
$value = 6;
echo $value + 2;
echo "<br>";
//=> 8 が表示される

// - は数値を減算する演算子
$value = 6;
echo $value - 2;
echo "<br>";
//=> 4 が表示される

// * は数値を積算する演算子
$value = 6;
echo $value * 2;
echo "<br>";
// 12 が表示される

// / は数値を除算する演算子
$value = 6;
echo $value / 2;
echo "<br>";
//=> 3 が表示される


// . は文字列を連結する演算子
$value = "AAA";
echo $value . "BBB";
echo "<br>";
//=> "AAABBB" が表示される
// == は左項と右項が等しいか判定する
$value = 10;
$result = $value == 20;
var_dump($result);
echo "<br>";
//=> bool(false) が表示される

// < は左項が右項より小さいか判定する
$value = 10;
$result = $value < 20;
var_dump($result);
echo "<br>";
//=> bool(true) が表示される

// > は左項が右項より大きいか判定する
$value = 10;
$result = $value > 20;
var_dump($result);
echo "<br>";
//=> bool(false) が表示される

// === は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;
$result = $a == $b;    
var_dump($result);
echo "<br>";
//=> true が表示される

$result = $a === $b;
var_dump($result);
echo "<br>";
// false が表示される

// ++ は変数の値をひとつ増加させる
$value = 10;
// $value に1を足した結果が$valueに代入される
++$value;
echo $value;
echo "<br>";
//=>11 と表示される

// — は変数の値をひとつ減少させる
$value = 10;
// $value から1引いた結果が$valueに代入される
--$value;
echo $value;
echo "<br>";
//=> 9 と表示される

// += は変数の値を増加させる
$value = 10;
// $value に　５足した結果が$valueに代入される
// $value = $value + 5; と同等
$value += 5;
echo $value;
echo "<br>";
//=> 15 と表示される

// -= は変数の値を減少させる
$value = 10;
// $value に　５足した結果が$valueに代入される
// $value = $value - 5; と同等
$value -= 5;
echo $value;
echo "<br>";
//=> 5 と表示される

// .= は変数に文字列を連結する
$value = 'apple';
// $value に　' orange'を連結した結果が$valueに代入される
// $value = $value . ' orange'; と同等
$value .= ' orange';
echo $value;
echo "<br>";
//=> apple orange と表示される

// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、 :より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? '$value は 20 より小さい' : '$value は 20 と等しいかまたは大きい';
echo $result;
echo "<br>";
//=> $value は 20 より小さい と表示される

$height = 160;
// もし $height が 150 未満の数値なら、{ } のなかが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 
echo "<br>";
//=> 何も表示されない

$height = 160;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}
echo "<br>";
//=> "ご乗車になれます。" が表示される。

$height = 230;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200){
  echo "200cm 以上の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}
echo "<br>";
//=> "200cm 以上の方はご乗車できません。" が表示される。

echo ($height < 150) ? "150cm 未満の方はご乗車できません。" : "ご乗車になれます。";
echo "<br>";

$weekday = "月曜";
// $weekday が月曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示される
switch ($weekday) {
  case "月曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
echo "<br>";
//=> 可燃ごみの日です。 が表示される

for($i = 0; $i < 10; $i++){
  echo $i;
}
echo "<br>";
//=> 0123456789 が表示される。

$total = 0;
echo $total;
echo "<br>";
//=> 0 と表示される。
// $iが0から始まり、$iが１００以下の間繰り返し処理を行う。
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
echo "<br>";
//=> 5050 と表示される。

# 配列の全ての要素を出力
$fruits = array("apple", "orange", "lemon");
echo count($fruits);
echo "<br>";
//=> 3 と表示される。
for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
echo "<br>";
//=> 要素はapple
//=> 要素はorange
//=> 要素はlemon
//=> と表示される

$animals = array("dog", "cat", "panda");
// $animals から1つずつ要素を取り出して、$animal に代入される
foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}
echo "<br>";
//=> 要素はdog
//=> 要素はcat
//=> 要素はpanda
//=> と表示される

// この1行はコメントになる
# この1行もコメントになる
/*
この部分はすべて
コメントになるため
プログラムとして
動作しない
(複数行まとめてコメント）
*/

?>
