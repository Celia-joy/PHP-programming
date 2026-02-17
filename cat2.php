<?php
for($i =1;$i<=5;$i++){
    for($j = 1; $j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br><br>";
for($i =1;$i<=5;$i++){
    for($j = 1; $j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
for($i =5;$i>=1;$i--){
    for($j = 1; $j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
echo "<br><br>";
$number = 12;
$factorial = 1;
for($i = 1; $i<=$number; $i++){
    $factorial*=$i;
    if($i == $number){
         echo "$i";
    }
    else{
        echo "$i*";
    }
}
    echo "= $factorial";
    echo "<br>";
echo "<br><br>";
for($i =0; $i<100;$i++){
    echo sprintf("%02d", $i);
    if($i%10 != 9 && $i != 99){
        echo ",";
    }
    if(($i+1) % 10 == 0 || $i == 99){
        echo "<br>";
    }
}
echo "<br><br>";
?>