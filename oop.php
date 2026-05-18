<?php
class Student{
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function greet(){
        echo "Hi, my name is " . $this->name . " and my age is " . $this->age . "<br>";
    }
}
/*$student1= new Student();
$student1->name = "Celia";
$student1->age = 15;
$student1->greet();


$student2 = new Student();
$student2->name = "Joy";
$student2->age = 15;
$student2->greet();*/

$s1 = new Student("Ihirwe", 15);
$s1->greet();

$s2 = new Student("Pamella", 15);
$s2->greet();

class BankAccount{
    public $owner;
    private $balance;

    public function __construct($owner, $balance){
        $this->owner= $owner;
        $this->balance= $balance;
    }

    public function deposit($amount){
        $this->balance += $amount;
    }
    public function getBalance(){
        return $this->balance;
    }
}
$account = new BankAccount("Moise", 1000);
$account->deposit(500);
echo $account->getBalance();
?>