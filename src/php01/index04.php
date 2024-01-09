<!--    条件分岐 -->
<?php
$a = 7;
if($a === 5){
    echo"\$aは5です";
}
else{
    echo"\$aは5以外です";
}

dddd;

$people = "Saburo";

switch($people){
case "Taro";
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}

dddd;

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;