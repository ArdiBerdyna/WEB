
<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: login.php");
} 
    require_once 'includes/header.php';
    require_once './CRUD/Menu-controller.php';
  require_once 'CRUD/reservation.php';
     if(isset($_POST['submit'])){
         $res = new Reservation();
         $res->setcar_name($_POST['cars']);
         $res->setpick_up($_POST['pickup']);
         $res->setdrop_off($_POST['drop']);
         $res->setname($_POST['name']);
         $res->setemail($_POST['email']);
         $res->setphone($_POST['phone']);

        
         $res->insertReservation();
     }

?>
             <li ><a class="nav-link" href="logout.php">LOG OUT</a></li>
             <?php
        //session_start();
        if(isset($_SESSION["role"])){
         echo '<li><a href="CRUD/display.php">DASHBOARD</a></li>';
    }
    ?>
         </ul>
    </nav>
       
 <div class="content">           
    <div class="text-content">
        
        <p>THE ROYAL ESSENCE OF JOURNEY</p>
        <h1>RELAXED JOURNEY EVER</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       
    </div>

<div class="form-content">
        <form method="POST" action="">
            <h4>Book Your Car Today!</h4>
            <select name="cars" placeholder="Select Your Car" required>
                <option value="select">Select Your Car</option>
                <?php
                $cars = new Car;
                $all = $cars->lexoDhenat();
                for($i=0; $i<count($all) ;$i++){
                    echo '<option value="'.$all[$i]['emri'].' '.$all[$i]['lloji'].' '.$all[$i]['qmimi'].'">'.$all[$i]['emri'].' ' .$all[$i]['lloji'].'</option>';
                }
                ?>
            
               
            </select>
            <label for="pickup">Pick Up Date</label>
            <input type="date" name="pickup" required>
            <label for="drop">Drop Off Date</label>
            <input type="date" name="drop" required>
            <input type="text" placeholder="Your Name" name = "name" required>
            <input type="email" placeholder="Email address" name = "email" required>
            <input type="tel" placeholder="Phone number" maxlength="12" name= "phone" required>
            <br>
            <button class="yellow button" name="submit">CONFIRM CAR BOOKING</button>
        </form>
        
    </div>
</div>
</header> 
<br><br><br><br>

   
<section id="blog">
    <div class="container">
        <div class="content2">
        <?php
        
        
       
        for($i=0; $i<count($all) ;$i++){
            echo ' 
            
                
                    <div class="post">
                        <img src="'.$all[$i]['image'].'" width="340px" height = "250px">
                      
                        <h6>Addiction When Gamblign Becomes A Problem</h6>
                        <p>'.$all[$i]['emri'].' '.$all[$i]['lloji'].' '.$all[$i]['qmimi'].'</p>
                        <div class="interactions">
                            <p>
                                <i class="fa-regular fa-heart"></i>
                                15 Likes
                            </p>
                            <p><i class="fa-regular fa-comment"></i>
                                02 Comments
                            </p>
                        </div>
                    </div>';
        }
            
        ?>
                </div>
            </div>
        </section>
        <br><br><br><br>
   
     <?php
         require_once 'includes/footer.php';
       
        ?>

    </body>
</html>
 