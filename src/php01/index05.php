<!-- 繰り返し -->
<?php
for ($i = 0; $i < 4; $i++) {
    echo $i;
}
echo'<br />';
for ($i = 0; $i <= 5; $i++){
    echo $i*2 . '<br />';
}

$i = 0;

while($i < 3) {
    echo 'i = '. $i . '<br />';
    $i+=1;
}

$count = 1;
while($count < 21) {
    echo $count . '<br />';
    $count+=1;
}

$count = 0;
while ($count <= 100){
    if ($count == 20){
        break;
    } 
    if ($count%3 == 0) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}

$num = 0;

do {
    echo 'num = ' . $num . '<br />';
    $num++;
}while($num < 3);


for ($a = 1; $a <= 50; $a++) {
    if ($a%3 == 0){
        echo 'Fizz';
    }
    elseif ($a%5 == 0){
        echo 'Buzz';
    }
    elseif ($a%15 == 0){
    }
    else {
        echo $a;
    }
  
}
