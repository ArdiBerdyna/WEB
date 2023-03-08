<link rel="icon" type="image/x-icon" href="../assets/images/logo.jpg"> 
<?php
session_start();
if(!isset($_SESSION["role"])){
    header("Location: ../login.php");
}
require_once 'reservation.php';
   $rez = new Reservation ();
   $date = $rez ->lexoReservation();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="displayStyle.css" />
    <title>Document</title>
</head>
<body>
<nav>
            <ul>
                <li><a href="readContact.php">Contact Dashboard</a></li>
                <li><a href="display.php">Stock of Car</a></li>
                <li><a href="../index.php">Home Page</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
<div id="a1">
            
            
            <table>
            <hr>
            <p>Reservation List :</p>
                    <tr>
                        <th>Car</th>
                        <th>Pick Up Date</th>
                        <th>Drop of date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Mark as Done</th>
                      
                    </tr>
                    <tr>
                        <?php
                            foreach($date as $key=>$value){ 
                        ?>
                       
                        <td><?php echo $value['car_name']; ?></td>
                        <td><?php echo $value['Pick_up_date']; ?></td>
                        <td><?php echo $value['Drop_off_date']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['phone']; ?></td>
                        <td id='de'><a href="deleteReservation.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
                       
                    </tr>

                    <?php
                    }
                    ?>
                  
            </table>
        </div>
</body>
</html>