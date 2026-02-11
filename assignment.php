<?php
echo "<h2>Solution of the assignment:<h2>";
echo "<br>";
echo "<br>";
echo "1." ;
echo "<br>";
for($i =1; $i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
?>

<?php 
echo "2.";
echo "<br>";
for($i =1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        
        echo "*";
    }
    echo "<br>";
}
?>


<?php 
echo "3.";
echo "<br>";
$number = 12;
$factorial = 1;
for($i=1;$i<=$number;$i++){
    $factorial= $factorial*$i;
    
    if ($i == $number){
        echo "$i";
    }
    else{
        echo "$i*";
    }
    }
    echo "= $factorial";
    echo "<br>";

?>

<?php 
echo "4.";
echo "<br><br>";

for ($i = 0; $i < 100; $i++) {
    echo sprintf("%02d", $i);
    if ($i % 10 != 9 && $i != 99) {
        echo ",";
    }
    if (($i + 1) % 10 == 0 || $i == 99) {
        echo "<br>";
    }
}
echo "<br>";
?>
<?php 
echo "5.";
echo "<br><br>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px 8px;
        }
    </style>
</head>
<body>

<table cellpadding="4" cellspacing="0" border="1">
<?php
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $product = $i * $j;
        echo "<td>$i*$j=$product</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>

<?php 
echo "6.";
echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>Assignment 2</title>
<style>
    table {
        border: 1px solid;
        border-collapse:collapse;
        width: 270px;
    }
    td {
        border: 1px solid;
        border-collapse:collapse;
        width: 30px;
        height: 30px;
        
    }
    .black{
        background-color:black;
    }
    .white{
        background-color:white;
    }
</style>
</head>
<body>
<table width ="270px">
<?php
for($i=1;$i<=8;$i++){
    echo "<tr>";
    for($j=1;$j<=8;$j++){ 
        $isBlack = ($i+$j) %2 === 0;
        $class= $isBlack? "black":"white";
        echo "<td class = \"$class\"></td>";
    }
    echo "</tr>";
}
echo "<br>";
?>
</table>
</body>
</html>

<?php 
echo "7.";
echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>Assignment 3</title>
<style>
    table, tr, td {
        border: 1px solid;
        border-collapse:collapse;

    }
</style>
</head>
<body>
<table>
<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        $result=$i*$j;
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "<br>"
?>
</table>
</body>
</html>


<?php
echo "8.<br><br>";

$height = 7; 

for ($row = 1; $row <= $height; $row++) {
    echo "*";
    for ($col = 2; $col <= 6; $col++) {
        if ($row == 4) {
            echo "*";
        } else {
            echo "&nbsp;";  
        }
    }
    echo "*<br>";
}

echo "<br>";
?>

<?php 
echo "9.<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 4 - Student Grade</title>
    
</head>
<body>

<div class="form-container">
    <h2>Enter Student Marks</h2>

    <form action="" method="POST">
        <label for="marks">Percentage:</label>
        <input type="number" step="0.01" id="marks" name="marks" 
               value="<?php echo isset($_POST['marks']) ? htmlspecialchars($_POST['marks']) : ''; ?>" 
               min="0" max="100" required><br><br>

        <button type="submit">Display Grade</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["marks"])) {
        $marks = floatval($_POST["marks"]);

        echo '<div class="result">';

        if ($marks < 0 || $marks > 100) {
            echo "<strong>Invalid input of marks</strong>";
        } else {
            $grade = "";

            if ($marks >= 90) {
                $grade = "A";
            } elseif ($marks >= 80) {
                $grade = "B";
            } elseif ($marks >= 70) {
                $grade = "C";
            } elseif ($marks >= 60) {
                $grade = "D";
            } elseif ($marks >= 50) {
                $grade = "E";
            } elseif ($marks >= 40) {
                $grade = "F";
            } elseif ($marks >= 30) {
                $grade = "S";
            } else {
                $grade = "U";
            }

            echo "<strong>Percentage:</strong> " . number_format($marks, 2) . "%<br>";
            echo "<strong>Grade:</strong> $grade";
        }

        echo '</div>';
    }
    ?>
</div>

</body>
</html>

<?php 
echo "10. <br><br>";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator Operations</h2>

<form action="" method="POST">
    First Number: 
    <input type="number" step="any" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '20'; ?>"><br><br>
    
    Second Number: 
    <input type="number" step="any" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '4'; ?>"><br><br>
    
    Result: 
    <input type="text" name="result" value="" readonly><br><br>
    
    <input type="hidden" name="operator" id="op" value="">
    
    <button type="submit" onclick="document.getElementById('op').value='+'">+</button>
    <button type="submit" onclick="document.getElementById('op').value='-'">-</button>
    <button type="submit" onclick="document.getElementById('op').value='*'">*</button>
    <button type="submit" onclick="document.getElementById('op').value='/'">/</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operator"])) {
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $operator = $_POST["operator"];
    $result = "";

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = "Error: Division by zero";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid";
    }

    
    echo "<script>document.querySelector('input[name=\"result\"]').value = '$result';</script>";
}
?>

</body>
</html>