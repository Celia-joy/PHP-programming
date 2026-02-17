<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <p>This is the <?php echo"awesome";?> paragraph</p>
        <?php echo"This is also a paragraph<br><br>"; ?>

        <?php 
        $fullName = "Celia Joy<br><br>";
        echo $fullName;
        $math = 95;
        $physics = 90;
        $English = 98;
        $javascript = 95;
        $Fop = 97;
        $sum =  $math+$physics+$English+$javascript+$Fop;
        $average = $sum/5;
        echo "The average of the 5 subjects is = $average<br><br>"; 
        $username =   "Guest";
        echo "Welcome",   $username, "<br>";

        $x = 5;
        $y = $x++;
        echo "The value of x =", $x,  "and the value of y = " , $y, "<br>";
        echo "The value of Z =", ++$x, "and the value of y =", $y++, "<br>";
        echo "The value of W =", $x--, "and the value of y =", ($y++)+(++$x), "<br>"; 

$a = 5;
$b = $a++ + $a++ + ++$a;
echo "b = $b, a = $a", "<br>";

$x = 4;
$y = --$x + $x-- + ++$x;
echo $y, "<br>";
echo $x, "<br>";

$i = 3;
$result = $i++ * ++$i + $i--;
echo $result, "<br>";
echo $i, "<br>";

$a = 2;
$a = $a++ + $a++ + ++$a;
echo $a, "<br>";

$x = 10;
echo $x-- - --$x + $x-- - --$x;
echo "<br>Final x = $x<br>";

$num = 1;
echo ++$num + $num++ + ++$num;
echo "<br>Final num = $num<br>";

$i = 0;
while (++$i < 5) {
    echo $i . " <br>";
}

$j = 6;
do {
    echo $j-- . "<br> ";
} while ($j > 2);

$a = 7;
$b = $a-- + --$a + $a++ + ++$a;
echo "b = $b, final a = $a, <br>";

$k = 5;
$k = $k++ * --$k * $k--;
echo $k, "<br>";

$x= 9;
$y= 11;
function addition(){
    $GLOBALS ["z"] = $GLOBALS ["x"] + $GLOBALS["y"];
    }
    addition();
    echo "The addition of x and y is:", $z;

    

?>
  </body>
</html>