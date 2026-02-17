<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $SUBJECT1= intval($_POST["Subject1"]);
    $SUBJECT2= intval($_POST["Subject2"]);
    $SUBJECT3= intval($_POST["Subject3"]);
    $SUBJECT4= intval($_POST["Subject4"]);
    $SUBJECT5= intval($_POST["Subject5"]);
    $TOTAL= $SUBJECT1+$SUBJECT2+$SUBJECT3+$SUBJECT4+$SUBJECT5;
    $AVERAGE=$TOTAL/5;
    echo "The average marks:", $AVERAGE;
}
for($i=1;$i<= 5;$i++){
    for ($j=1; $j < $i; ++$j ){
        echo "*";
    }
    echo "<br>";
}
for($i=1;$i<=5;$i++){
    for($j=1;$j<$i;++$j){
        echo "*";
    }
    echo "<br>";
}
$x = 7;
$y = $x++;
echo "The value of W:", $x--, "and the value of y=", ($y++)+(++$x);
define('MESSAGE', 'PHP EXAMINATION');
echo message;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Average</title>
    </head>
    <body>
    <form action="average.php" method="post">
        <label for name="Subject1">Marks of subject1</label><br>
        <input type="text" id="Subject1" name="Subject1"><br>
        <label for name="Subject2">Marks of subject2</label><br>
        <input type="text" id="Subject2" name="Subject2"><br>
        <label for name="Subject3">Marks of subject3</label><br>
        <input type="text" id="Subject3" name="Subject3"><br>
        <label for name="Subject4">Marks of subject4</label><br>
        <input type="text" id="Subject4" name="Subject4"><br>
        <label for name="Subject5">Marks of subject5</label><br>
        <input type="text" id="Subject5" name="Subject5"><br>
        <input type="submit" value="Calculate average">

    </form>
    </body>
</html>