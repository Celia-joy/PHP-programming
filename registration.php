<?php 
     echo "Request Method:", $_SERVER["REQUEST_METHOD"], "<br>";
     echo "Current Script:", $_SERVER["PHP_SELF"], "<br><br>";
     
     $Firstname = $_POST["Firstname"];
     $Lastname = $_POST["Lastname"];
     $Email = $_POST["Email"]; 
     $Gender = $_POST["Gender"];
     $Languages = isset($_POST["Languages"]) ?: $_POST["Languages"];
     $Level = $_POST["Level"];
     $Password = $_POST["Password"];
     $Request = $_POST["Request"];
    
     echo "Firstname:", $Firstname, "<br><br>";
     echo "Lastname:", $Lastname, "<br><br>";
     echo "Email:", $Email, "<br><br>";
     echo "Gender:", $Gender, "<br><br>";
     echo "Spoken languages:", $Languages, "<br><br>";
     echo "Level:", $Level, "<br><br>";
     echo "Request:", $Request, "<br><br>";

     setcookie("Firstname", $Firstname);
     setcookie("Lastname", $Lastname);
     setcookie("Email", $Email);
    
     session_start();
     $_SESSION['user_email'] = $Email;
     $_SESSION['user_level'] = $Level;

     echo "Email stored in session:", $_SESSION['user_email'], "<br><br>";
     echo "Level stored in session:", $_SESSION['user_level'], "<br><br>";
     print_r($_FILES);

     $age = 17;
     function yourAge(){
        echo $GLOBALS['age'];
     }
     yourAge();
     ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Signup page</title>
        <style>
           h1{
            color:darkgreen;
            text-align:center;
           } 
           .signup-box{
            text-align:center;
            border:10px solid darkcyan;
            background-color:beige;
            border-radius:10px;
            width:450px;
            margin-left:500px;
            margin-top:100px;
            transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1),box-shadow 0.4s ease-in-out
           }
           .signup-box:hover{
            transform:translateY(-5px);
            box-shadow:0 15px 30px darkgreen;
           }
        
           body{
            background-color:beige;
           }
           
        </style>
    </head>
    <body>
        
        <main>
     <div class="signup-box">
        <h1> Want to sign up for free🤔?<br>
             Please fill this form!</h1>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label for="Firstname">Firstname:</label><br>
            <br>
            <input type="text" id="Firstname" name="Firstname">
          </div>
            <br>
          <div class="form-group">
            <label for="Lastname">Lastname:</label><br>
            <br>
            <input type="text" id="Lastname" name="Lastname">
          </div>
            <br>
          <div class="form-group">  
            <label for="Email">Email:</label><br>
            <br>
            <input type="text" id="Email" name="Email">
          </div>
            <br>
          <div class="radio-group">  
            <label>Gender:</label><br>
            <br>
            <input type="radio" name="Gender" value="Male">Male
            <input type="radio" name="Gender" value="Female"> Female<br>
          </div>
          <br>
          <div class="checkbox-group"> 
            <label>Languages</label><br>
            <br>
            <input type="checkbox" name="Languages[]" value="Kinyarwanda">Kinyarwanda
            <input type="checkbox" name="Languages[]" value="Kiswahili">Kiswahili
            <input type="checkbox" name="Languages[]" value="English">English
            <input type="checkbox" name="Languages[]" value="French">French<br>
          </div>
            <br>
          <div class="form-group">   
            <label for="Level">Level</label><br>
            <br>
            <select id="Level" name="Level">
                <option value="Senior 1">Senior 1</option>
                <option value="Senior 2">Senior 2</option>
                <option value="Senior 3">Senior 3</option>
                <option value="Senior 4">Senior 4</option>
                <option value="Senior 5">Senior 5</option>
                <option value="Senior 6">Senior 6</option>
            </select>
          </div> 
          <br>
          <div class="form-group">  
            <label for="Password">Password</label><br>
            <input type="password" id="Password" name="Password">
          </div>
          <br>
          <div class="form-group">
            <label for="Request">Request</label><br>
            <br>
            <textarea id="Request" name="Request"></textarea><br>
            <br>
            <input type="submit" value="Create account"> 
          </div>         
        </form>
      </div>
     </main>
     
    </body>
</html>