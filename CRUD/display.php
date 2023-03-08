<link rel="icon" type="image/x-icon" href="../assets/images/logo.jpg"> 
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
   
    
        <title>Shfaq dhenat</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="readContact.php">Contact Dashboard</a></li>
                <li><a href="readReservatio.php">Reservation Dashboard</a></li>
                <li><a href="../index.php">Home Page</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
        <div id="a1">
            <header>
                <h3>Please press the button to add a car</h3>
                <a href="insert.php"><Button id='r' name= "button">Add Car in Stock</Button></a>
                <p><?php echo "Wellcome " . $_SESSION['role']; ?></p>
            </header>
            
            <table>
            <hr>
            <p>List of data:</p>
                    <tr>
                       
                        <th>Image</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
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




