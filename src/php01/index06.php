<!-- 関数 -->

<?php
function outputHello()
{
  echo "Hello world <br/>";
}

outputHello(); // ①



function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total."<br/>";

function score($score1, $score2, $score3)
{
  $point = $score1 + $score2 + $score3;
  
  if ($point > 210) {
    echo $point . "点なので合格です";
  } else {
    echo $point . "点なので不合格です";
  }
}
echo (score(29,79,103));  





