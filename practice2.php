<?php
#1
$name="Iori";
$namo="ko";
switch ($name) {
    case "Iori":
        echo "私はあなたの名前です";
        break;
   default:
        echo "あなたの名前ではありません";
        break;
}

#2

$total=0;

for ($p=1; $p<=1000; $p++) {
    $total+=$p;
}
echo $total;

#3
$fruits=array("apple","orange","lemon","banana","pineapple");
echo count($fruits);

for ($i=0; $i<count($fruits); $i++) {
    echo "" .$fruits [$i];
    echo "\n";
}

#4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
 
}
