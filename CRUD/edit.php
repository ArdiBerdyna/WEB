<?php
 session_start();
 if(!isset($_SESSION["role"])){
     header("Location: ../login.php");
 }


require_once('Menu-controller.php');
$dhenat= new Car();
$myId=$_GET['id'];
$record=$dhenat->lexoDhenatSipasIDs($myId);

 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getId()){ 
        $dhenat->setImage($_POST['image']);
        $dhenat->setemri($_POST['emri']);
        $dhenat->setlloji($_POST['lloji']);
        $dhenat->setqmimi($_POST['qmimi']);

         echo $dhenat->updateDhenat();
    echo 
    "<script>
        alert('dhenat jane PERDITSUAR me sukses');
        document.location='display.php'
    </script>";
     }
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
        <h3>Perditso te dhenat ne Formular</h3>
            <form action='' method="POST">
                <label>image</label>
               
                <input type="file" class="inp" name="image"
                    value ="<?php echo $record['image'];?> "/>
                <label>Emri</label>
                <input type="text" class="inp" name="emri"
                    value ="<?php echo $record['emri'];?> "/>
                <label>Lloji</label>
                <input type="text" class="inp" name="lloji"
                    value ="<?php echo $record['lloji'];?> "/>
                <label>Qmimi</label>
                <input type="text" class="inp" name="qmimi"
                     value ="<?php echo $record['qmimi'];?> "/>
                <button name='edit'>RUAJ</button>
            </form>
        </div>
    </body>
</htm>