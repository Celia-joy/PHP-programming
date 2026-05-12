<html>
<head>
    <title>Student's Marks</title>
</head>
<body>
    <h1>Student's Marks</h1>
    <form method ="POST">
        <label for="subject1">Subject1:></label><br>
        <input type= "text" name="subject1"><br><br>
        <label for="subject2">Subject2:></label><br>
        <input type="text" name="subject2"><br><br>
        <label for="subject3">Subject3:></label><br>
        <input type= "text" name="subject3"><br><br>
        <label for="subject4">Subject4:></label><br>
        <input type="text" name="subject4"><br><br>
        <label for="subject5">Subject5:></label><br>
        <input type="text" name="subject5"><br><br>
        <input type="submit" value="Submit">
    </form>
<?php
if($SERVER["REQUEST_METHOD"] == "POST"){
    $subject1 = $_POST["subject1"];
    $subject2 = $_POST["subject2"];
    $subject3 = $_POST["subject3"];
    $subject4 = $_POST["subject4"];
    $subject5 = $_POST["subject5"];
    $totalmarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $average = $totalmarks / 5;
    echo "<h3>The average marks is: </h3>"
}
?>
</body>
</html>
<!--Sorting arrays -->
<?php
$nbr = array(1,2,3,4,5);
sort($nbr);
print_r($nbr);
var_dump($nbr);
asort($nbr);
print_r($nbr);
var_dump($nbr);
ksort($nbr);
print_r($nbr);
var_dump($nbr);
arsort($nbr);
print_r($nbr);
var_dump($nbr);
krsort($nbr);
print_r($nbr);
var_dump($nbr);
rsort($nbr);
print_r($nbr);
var_dump($nbr);
$colors = array("Red", "Orange", "Black", "White");
print_r($colors);
$marks = array(78, 60, 62, 68, 71, 73, 85, 66, 64, 76, 63, 75, 76, 72, 65, 74, 90, 75, 79, 77, 80, 59, 83, 54);
$sum = 0
$sort($marks);
$lowest = array_slice($marks, 0, 5); 
for($i = 0; $i < count($marks); $i++){
    $sum+=$marks[$i];
}
echo "The sum of the marks is: " . $sum;
foreach($lowest as $rank => $mark){
    echo "Rank". $rank + 1 . ":" . $mark;
}
rsort($marks);
print_r($marks);
echo "The highest mark is :" . $marks[0];
?>
<html>
    <head>
        <title>Multiplication table</title>
    </head>
    <body>
        <h1>Multipication Table</h1>
        <table>
            
            <?php
                $product = 1;
                for ($i= 1; $i <= 5; $i++){
                    echo "<tr>";
                    for ($j=1; $j <= 10; $j++){
                        $product = $i*$j;
                        echo ."<td>" $i . "x" . $j . "=" . $product . "</td>";
                    }
                    echo "</tr>";
                }
            ?>            
        </table>
    </body>
</html>
<?php
for ($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
for ($i = 4; $i >=1; $i--){
    for($j =1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>

