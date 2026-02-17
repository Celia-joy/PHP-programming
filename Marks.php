<!DOCTYPE html>
<html>
    <head>
        <title>Indexed Array</title>
    </head>
    <body>
        <h1>Indexed Array Demo</h1>
        <?php
        $marks = array(60, 78, 87, 67, 80);
        echo "Marks are: $marks[0], $marks[1], $marks[2],  $marks[3]". "<br><br>";
        foreach($marks as $mark){
            echo "Marks: " . $mark ."<br>";
        }
        foreach($marks as $index => $mark ){
            echo "Marks: " .$mark . "<br>";
        }
        echo count($marks)."<br>"; 

        var_dump($marks)."<br>";
        print_r($marks)."<br>";
        $users = ["John", "Kabanda", "Tim"];
        $i = 0;
        var_dump($users);
       /* while($i < count($users)){
            echo $users[$i]."<br>";
            $i++;
        }
        /*for ($i; $i < count($users); $i++){
            echo $users[$i]. "<br>";
        }
            
            do {
            echo $users[$i]."<br>";
            $i++;
        }
        while ($i < count($users));*/
        $age= array("Peter"=>"35", "Ben"=>"47", "Joe"=>"43");
            echo $age["Peter"];
        $stud = array(
            array("Uwera", 14.9),
            array("Kabanda", 14.86),
            array("Ndagijimana", 14.87)
        );
        for ($row = 0; $row < 3; $row++){
            echo $row;
        }
        
        ksort($age);

        ?>
    </body>
</html>