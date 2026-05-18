<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');

$host = 'localhost';
$password="butare223!";
$db_name="student_db";
$username="root";

$conn = new mysqli($host, $username, $password, $db_name);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

switch(method){
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $name=$conn->real_escape_string($data['name']);
        $email=$conn->real_escape_string($data['email']);
        $conn->query("INSERT INTO students (name, email) VALUES ('$name','$email')");
        break;
    case DELETE:
        $id=$_GET['id'];
        $conn->query("DELETE FROM students WHERE id = $id");
        break;
    case GET:
        $result = $conn->query("SELECT*FROM students");
        $students = [];
        while($row = $result->fetch_assoc()){
            $students[] = $row;
        }
        echo json_encode($students);
        break;
}[;]
?>