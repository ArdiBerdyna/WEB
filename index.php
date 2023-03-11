
        <?php
        require_once 'includes/header.php';
        require_once 'CRUD/Menu-controller.php';
        ?>
        <?php
        session_start();
        if(isset($_SESSION["user"])){
          echo  '<li ><a class="nav-link" href="logout.php">LOG OUT</a></li>';
        } else { echo ' <li ><a class="nav-link" href="login.php">LOG IN</a></li>';}
       
        
        
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
                        <p>Rent a Car offers quality Pristina, Kosovo car hire services from thousands of customers across the world with one simple ambition</p>
                        <a href="cars.php" ><button class="yellow first-button button">RENT A CAR NOW</button></a>
                    </div>
        </header>
       
       

    <br><br><br><br><br><br><br>
    <div class="content1">
                <h1>Choose your Desired Car Model</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>


     <section id="cars">
        <div class="container">

            

            <br><br><br><br>

            <div class="content2">
                <div class="description">
                    <span class="car-name">Audi A5 
                        <span class="per-day">/day</span>
                        <span class="price">$50</span>
                    </span>
                    <p>Rent a Car has three fuel options for you to choose from when you pick up your car that are guaranteed to meet your every need. </p>
                    
                    <ul>
                        <li>Capacity: 04 Person</li>
                        <li>Doors: 04</li>
                        <li>Air Condition: Dual Zone</li>
                        <li>Transmission: Automatic</li>
                    </ul>
                    <br><br>
                    <a href="cars.php" ><button class="black button">
                        BOOK THIS CAR NOW
                    </button> </a>
                </div>
                <div class="car">
                    <img src="assets/images/car.jpg.jpg" alt="Car">
                </div>
                
            </div>
            <br><br>
        </div>
    </section> 
    
    <br><br><br><br>

    <section id="numbers">
        <div class="container">
            <div class="projects">
                <h1>2536</h1>
                <p>Projects Completed</p>
            </div>
            <div class="happy-clients">
                <h1>6784</h1>
                <p>Really Happy Clients</p>
            </div>
            <div class="tasks">
                <h1>1059</h1>
                <p>Total Tasks Completed</p>
            </div>
            <div class="coffe">
                <h1>2239</h1>
                <p>Cups of Coffe Taken</p>
            </div>
            <div class="pro">
                <h1>435</h1>
                <p>In House Professionals</p>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section id="features">
        <div class="container">
            <div class="content1">
                <h1>Some Features that Made us Unique </h1>
            <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="content2">
                <div class="features-card-1 features-card">
                    <h6>Cody Hines</h6>
                    <p>Here you can find the best your dream car and you can feel a nice trip with our car</p>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-regular fa-star  "></i>
                    <i class="fa-regular fa-star "></i>
                </div>
                <div class="features-card-2 features-card">
                    <h6>Chad Herrera</h6>
                    <p>Here you can find the best your dream car and you can feel a nice trip with our car</p>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-regular fa-star "></i>
                    <i class="fa-regular fa-star "></i>
                </div>
                <div class="features-card-1 features-card ">
                    <h6>Andre Gonzalez</h6>
                    <p>Here you can find the best your dream car and you can feel a nice trip with our car</p>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-regular fa-star "></i>
                    <i class="fa-regular fa-star "></i>
                    <i class="fa-regular fa-star "></i>
                </div>
                <div class="features-card-1 features-card">
                    <h6>Jon Banks</h6>
                    <p>Here you can find the best your dream car and you can feel a nice trip with our car</p>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                </div>
                <div class="features-card-1 features-card">
                    <h6>Landon Houston</h6>
                    <p>Here you can find the best your dream car and you can feel a nice trip with our car</p>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                </div>
                <div class="features-card-1 features-card">
                    <h6>Nelle Wade</h6>
                    <p>Here you can find the best your dream car and you can feel a nice trip with our car</p>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-solid fa-star yellow-star"></i>
                    <i class="fa-regular fa-star "></i>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section id="support">
        <div class="container">
            <h1>Experience Great Support</h1>
            <p>Weekend is time for travelling! Alone, with friends or with your family – you decide! Rent a car is providing your car for a comfortable and mind free trip!.</p>
                <br>
            <button class="yellow button"><a href="aboutus.php">REACH OUR SUPPORT TEAM</a> </button>
        </div>
    </section>

    <br><br><br><br>

    <section id="blog">
    <div class="container">
        <div class="content2">
        <?php
        $cars = new Car;
        $all = $cars->lexoDhenat();
        for($i=0; $i<count($all) ;$i++){
            echo ' 
            
                
                    <div class="post">
                        <img src="'.$all[$i]['image'].'" width="300px" height = "200px">
                      
                        <h6>Best class of cars</h6>
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
                    if($i==3){break;}
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