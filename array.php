<?php
// Arrays 
//Output by indexing
$students_data = array("Kabanda", "John", "RCA", 20, 80.5);
echo "Student's firstname: ", $students_data[0]."<br>";
echo "Student's lastname: ", $students_data[1]."<br>";
echo "Student's age:", $students_data[2]."<br>";
echo "Student's age: ", $students_data[3]."<br>";
echo "Student's marks: ", $students_data[4]."<br><br>";

//Calculating sum or average of numbers in an array
$sum = 0;
$students_marks = array(50, 60, 70, 80, 90);
$sum_marks = $students_marks[0] + $students_marks[1] + $students_marks[2] +  $students_marks[3] + $students_marks[4] ;
$average_marks = $sum_marks/5;
echo count($students_marks)."<br>";
echo "The average marks is: ". $average_marks. "<br>";

for($i = 0; $i < 5; $i++){
    $sum += $students_marks[$i];
}
$average = $sum/5;
echo "The average is: ", $average. "<br><br>";

//Show the type, value and index of variable
var_dump($students_marks). "<br><br>";

//Show index and value of variable 
print_r($students_marks)."<br><br>";

$age = array("Peter"=> 35, "Ben"=> 37, "Joe"=> 43);
foreach($age as $x => $x_value){
    echo "Key=" . $x . ", Value=".$x_value;
    echo "<br>";
}
echo "Ben is  ". $age["Peter"]. " years old.". "<br><br>";

$products = array(
    array("id", "name", "Price")
)
?>
