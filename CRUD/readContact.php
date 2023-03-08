<link rel="icon" type="image/x-icon" href="../assets/images/logo.jpg"> 
<?php
    session_start();
    if(!isset($_SESSION["role"])){
        header("Location: ../login.php");
    }
    require_once 'ReciveContact.php';
    $cont = new Contact();
    $date = $cont->lexo();
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
                <li><a href="display.php">Stock of car</a></li>
                <li><a href="readReservatio.php">Reservation Dashboard</a></li>
                <li><a href="../index.php">Home Page</a></li>
                <li><a href="../logout.php">Log Out</a></li>
            </ul>
        </nav>
<div id="a1">
            
        
            <table>
            <hr>
            <p>Lista e te dhenave:</p>
                    <tr>
                        <th>email</th>
                        <th>numri</th>
                        <th>contact</th>
                        <th>Delete</th>
                      
                    </tr>
                    <tr>
                        <?php
                            foreach($date as $key=>$value){ 
                        ?>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['telefoni']; ?></td>
                        <td><?php echo $value['messages']; ?></td>
                        <td id='de'><a href="deleteContact.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a></td>
                    </tr>

                    <?php
                    }
                    ?>
                  
            </table>
        </div>
</body>
</html>