<?php
    
  require_once('CRUD/ReciveContact.php');
     if(isset($_POST['submit'])){
         $cont = new Contact();
         $cont->setemail($_POST['email']);
         $cont->settelefoni($_POST['tel']);
         $cont->setmessages($_POST['text']);
        
         $cont->insert();
     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="icon" type="image/x-icon" href="assets/images/logo.jpg"> 
    <title>Car Rental</title>
</head>
<body>

    <header>
        <nav class="nav">
            <img src="assets/images/logo.jpg" alt="logo">
            <div id="hamburger" class="mobile-menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="cars.php">CARS</a></li>
                <li><a href="index.php">SERVICE</a></li>
                <li><a href="contact.php" class="active">CONTACT</a></li>
                <?php
        session_start();
        if(isset($_SESSION["role"])){
         echo '<li><a href="CRUD/display.php">DASHBOARD</a></li>';
    }
    ?>
                
            </ul>
            
        </nav>
            <div class="content">
                <br><br>
                <h1>Contact</h3>
                <p>Home <i class="fa-solid fa-arrow-right"></i> Contact</p>
            </div>
    </header>

    <br>

    <section id="contactSection">
        <form class="contact-form" action="" method="POST">
            <input type="email" placeholder="Type Your Email" name ="email" required>
            <input type="tel" placeholder="Type Your Phone Number" name="tel">
            <br>
            <textarea placeholder="Type Your Message" required cols="80" rows="5" name="text"></textarea>
            <br>
            <button class="contact-button" name="submit">Submit</button>
        </form>
    </section>

</body>
</html>