<?php
$nam = htmlspecialchars($_POST['nam'], ENT_QUOTES);
$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);


echo "私の名前は、" . $nam . "<br>";
print "ご希望の商品は、" . $goods . "<br>";
print "注文数は、" . $number;

