<link rel="icon" type="image/x-icon" href="../assets/images/logo.jpg"> 
<?php
 session_start();
 if(!isset($_SESSION["role"])){
     header("Location: ../login.php");
 }

 require_once('Menu-controller.php');
    if(isset($_POST['save'])){
        $regj = new Car();
        $regj->setImage($_POST['image']);
        $regj->setemri($_POST['emri']);
        $regj->setlloji($_POST['lloji']);
        $regj->setqmimi($_POST['qmimi']);
        
        $regj->insertoDhenat();
       
    }

?>

<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="edit.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Add car in stock</h3>
            <form action='' method="POST">
                <label>Image</label>
                <input type="file" class="inp" name="image" placeholder="shto foto..."/>
                <label>Name</label>
                <input type="text" class="inp" name="emri" placeholder="shto emrin..."/>
                <label>Type</label>
                <input type="text" class="inp" name="lloji" placeholder="shto llojin..."/>
                <label>Price</label>
                <input type="text" class="inp" name="qmimi" placeholder="shto qmimin..."/>
                <button name='save'>Save</button>
            </form>
        </div>
    </body>
</htm>