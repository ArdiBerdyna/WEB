<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: cars.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style_Form.css" >
    <link rel="icon" type="image/x-icon" href="assets/images/logo.jpg"> 

    <title>Login Form</title>
</head>
<body>
    <div class="contatiner">
        <?php
        if(isset($_POST['login'])){
            $email = $_POST["email"];
            $password = $_POST["password"];

             require_once "dbconnect/DB_Connection.php";
             
             $sql = "select * from users where email = :email";
             $stm =  $pdo->prepare($sql);
             $stm->bindParam(':email', $email);
             $stm->execute();
             $user = $stm->fetch(PDO::FETCH_ASSOC);
             
            
            
            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "Ardi Berdyna";
                    header("Location: cars.php");
                    if($user["role"]==="admin"){
                        $_SESSION["role"] = $user["full_name"];
                        header("Location: CRUD/display.php");
                    }
                    
                }else{
                    echo " <div style='background-color: #ffe6e6;  width: 95%; margin-bottom: 6px; padding:10px; border-radius: 5px;
                    border: 1px solid #ffcccc;' > Password does not match </div>";
                }
                
            }else{
                echo " <div style='background-color: #ffe6e6;  width: 95%; margin-bottom: 6px; padding:10px; border-radius: 5px;
                    border: 1px solid #ffcccc;' > Email does not match </div>";
                print_r($user);
            }
        }

        ?>
        <form action="login.php" onsubmit="validateForm()" method="post" name="form">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" id="email">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" id="password">
            </div>
            <div class="submit-gr">
                <input type="submit" classs = "btn" value="Login" name = "login" >
            </div>
        </form>
        <div><p>Not registered yet <a href="registration.php">Register here</a></p></div>
    </div>
    <script>
        function validateForm() {
   
   var email = document.forms["form"]["email"].value;
   var fjalkalimi = document.forms["form"]["password"].value;
   
  
   
    if (email == "") {
        alert( "Please enter a valid email address!");
      return false;
    }
  
    if (fjalkalimi == "") {
        alert( "Please enter a valid password!");
      return false;
    }
   }
    </script>
</body>
</html>