<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function multiplier($number){
    $result = 0;
    $number *= 2;
    return $number;
}
echo multiplier(50);
echo "\n<br>";

/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。*/
function f($a, $b){
    $result = 0;
    $plus = $a + $b;
    return $plus;
}
echo f(5,8);
echo "\n<br>";

/*3.$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function multipliers($arr){
    $total = 1;
    foreach($arr as $arreach){
        $total *= $arreach;
    }
    return $total;
}
echo multipliers(array(1,3,5,7,9));
echo "\n<br>";

/*4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
途中の部分を完成させてください。*/
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number<$a){
            $max_number=$a;
        }
    }
    return $max_number;
}
echo max_array(array(1,3,5,7,9));
echo "\n<br>";

//5.次のビルトイン関数の用途、使い方を自分で調べて実際に使ってみてください。
//strip_tags
$text="<h1>はるか昔、世界は無に染められていた。</h1>";
echo $text;
echo strip_tags($text);
echo "\n<br>";

//array_push
$arrold = array('1','2','3');
array_push($arrold,'4','5','6');
print_r ($arrold);
echo "\n<br>";

//array_merge
$arrold = array('1','2','3');
$arrfix = array('4','5','6');
$result = array_merge($arrold,$arrfix);
print_r($result);
echo "\n<br>";

//time, mktime
echo '現在のUnixタイムスタンプ：'.time();
echo "\n<br>";

//mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
echo '指定のUnixタイムスタンプ：'.mktime(16, 4, 50, 9, 7, 2020);
echo "\n<br>";

//date
$week = [
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
  ];
$date = date('w');
echo $week[$date] . '曜日';
?>
