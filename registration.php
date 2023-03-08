<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style_Form.css" >

    <title>Registration</title>
</head>
<body>
    <div class="contatiner">
        <?php
         if(isset($_POST["submit"])){
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            $errors = array();
            if(empty($fullname) or empty($email) or empty($password) or empty($passwordRepeat)){
                array_push($errors, "All fields are required ");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid");
            }
            if(strlen($password)< 8){
                array_push($errors, "Password must be at least 8 characters ");
            }
            if($password !==$passwordRepeat){
                array_push($errors, "Password does not match ");
            }

            require_once "dbconnect/DB_Connection.php";
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $rowcount = $stmt->rowCount();
           
            if($rowcount>0){
                array_push($errors, "Email already exists");
            }

            if(count($errors)>0){
                foreach($errors as $error){
                    echo " <div style='background-color: #ffe6e6;  width: 95%; margin-bottom: 6px; padding:10px; border-radius: 5px;
                    border: 1px solid #ffcccc;' > $error </div>";
                }
            }else{
                
              
                $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                if($stmt){
                    $stmt->execute([$fullname, $email, $passwordHash]);
                    echo " <div style='background-color: green;  width: 95%; margin-bottom: 6px; padding:10px; border-radius: 5px;
                    border: 1px solid #ffcccc;'> You are registered successfull </div>";
                    session_start();
                    $_SESSION["login"] = "Ardi Berdyna";
                    header("Location: login.php");

                } else{
                    die("Something went wrong");
                }
            }

         }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text"   id="name" name="fullname" placeholder ="Full name">
            </div>
            <div class="form-group">
                <input type="email"  id="email" name = "email" placeholder ="Email: ">
            </div>
            <div class="form-group">
                <input type="password" id="password" name = "password" placeholder ="Password: ">
            </div>
            <div class="form-group">
                <input type="password" id="confirmpassword" name = "repeat_password" placeholder ="Repeat Password: ">
            </div>
            <div class="submit-gr">
                <input type="submit" classs = "btn" value = "Register" name = "submit">
            </div>
        </form>
        <div><p>Already registered <a href="login.php">Login here</a></p></div>

    </div>
    <script>
        
        const name = document.getElementById("name");
                const sname = document.getElementById("email");
                const password = document.getElementById("password");
                const confirmpassword = document.getElementById("confirmpassword");
        
        
                function isEmpty(str) {
                     return !str.trim().length;
                }
        
                function validateForm(){
                    if( isEmpty(name.value) ||isEmpty(sname.value) ||
                        isEmpty(email.value) ||isEmpty(password.value) ||
                        isEmpty(confirmpassword.value)){
                        alert("All fields should have values!")
                    }
                    else if(password.value !== confirmpassword.value){
                        alert("Passwords should match!")
                    } 
                    else if((password.value).length < 8 ){
                        alert("Password should be longer than 8 characters!")
                    }
                    else if(!(email.value).match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
                        alert("Email is not valid!")
                    }
                
                }
    </script>
</body>
</html>