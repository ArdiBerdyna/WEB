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
        <link rel="stylesheet" href ="mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>image</label>
                <input type="file" class="inp" name="image" placeholder="shto foto..."/>
                <label>Emri</label>
                <input type="text" class="inp" name="emri" placeholder="shto emrin..."/>
                <label>Lloji</label>
                <input type="text" class="inp" name="lloji" placeholder="shto llojin..."/>
                <label>Qmimi</label>
                <input type="text" class="inp" name="qmimi" placeholder="shto qmimin..."/>
                <button name='save'>RUAJ</button>
            </form>
        </div>
    </body>
</htm>