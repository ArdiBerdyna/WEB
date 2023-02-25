<?php
    session_start();
    if(!isset($_SESSION["role"])){
        header("Location: ../login.php");
    }

    require_once('Menu-controller.php');

    $dhenat = new Car();
    $allDate = $dhenat->lexoDhenat();
?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="displayStyle.css" />
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.jpg"> 
        <title>Shfaq dhenat</title>
    </head>
    <body>
        <div id="a1">
            <header>
                <h3>Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
                <a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
            </header>
            <a href="../logout.php">log out</a>
            <table>
            <hr>
            <p>Lista e te dhenave:</p>
                    <tr>
                        <th>image</th>
                        <th>emri</th>
                        <th>lloji</th>
                        <th>qmimi</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <?php
                            foreach($allDate as $key=>$value){ 
                        ?>
                        <td><?php echo $value['image']; ?></td>
                        <td><?php echo $value['emri']; ?></td>
                        <td><?php echo $value['lloji']; ?></td>
                        <td><?php echo $value['qmimi']; ?></td>
                        <td id='de'><a href="delete.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
                        <a href="edit.php?id=<?php echo $value['id']?>"><button id='e'>EDIT</button></td></a>
                    </tr>

                    <?php
                    }
                    ?>
                  
            </table>
        </div>
    </body>
</html>




