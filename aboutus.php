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

        </header>
        <br><br><br><br>
        <section id="services">
        <div class="container">
            <h1>What Services we offer to our clients</h1>
            <p class="random-txt">Who are in extremely love with eco friendly system.</p>
            <div class="cards">
                <div class="card">
                    <span class="card-logo">
                        <i class="fa-regular fa-user"></i>
                    </span>
                    <h5>Expert Technicians</h5>
                    <p>We have the Expert Technicians to check our car</p>
                </div>                
                <div class="card">
                    <span class="card-logo">
                        <i class="fa-solid fa-id-card"></i>
                    </span>
                    <h5>Professional Service</h5>
                    <p>We have also a service that they have experienced since 1980</p>
                </div>
                <div class="card">
                    <span class="card-logo">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <h5>Great Support</h5>
                    <p>You can also call us for help whenever you want</p>
                </div>
                <div class="card">
                    <span class="card-logo">
                        <i class="fa-solid fa-rocket"></i>
                    </span>
                    <h5>Technical Skills</h5>
                    <p>We offer service 24/7</p>
                </div>
                <div class="card">
                    <span class="card-logo">
                        <i class="fa-regular fa-gem"></i>
                    </span>
                    <h5>Highly Recomended</h5>
                    <p>We have lots of customers that are very pleased</p>
                </div>
                <div class="card">
                    <span class="card-logo">
                        <i class="fa-regular fa-comment"></i>
                    </span>
                    <h5>Positive Reviews</h5>
                    <p>You can see here all the reviews</p>
                </div>
            </div>
        </div>
    </section>
    <br> <br> <br> <br>
            
         <div class="content">           
             <div class="text-content">
     <?php
        $cars = new Car;
        $all = $cars->lexoDhenat();
        for($i=0; $i<count($all) ;$i++){
           $img1= $all[$i]['image'];
           $img2= $all[++$i]['image'];
           $img3= $all[++$i]['image'];
           $img4= $all[++$i]['image'];
          
          
           echo '<div class="slider">
        
            <div class="slides">
                <div class="slide active">
                    
                    <img src="' . $img1.'" alt="image-1">
                </div> 
                
                <div class="slide">  
                    <img src="' . $img2.'" alt="image-2"> 
                </div>
                <div class="slide">
                    <img src="' . $img3.'" alt="image-3">
                </div>
                <div class="slide">
                    <img src="' . $img4.'" alt="image-4">
                </div>
            </div>


            <!-- Controls -->
            <div class="controls">
                <button id="button-1" class="button">Image 1</button>
                <button id="button-2" class="button">Image 2</button>
                <button id="button-3" class="button">Image 3</button>
                <button id="button-4" class="button">Image 4</button>
            </div>
      </div>';
        break;


        }

        ?>
        <br> <br> <br> <br>
         
            
        <?php
        require_once 'includes/footer.php';
        ?>

        
<script>
        let currentActive = 1;

        const incrementActive = () => {
            if (currentActive < 4) {
                currentActive++;
            } else {
                currentActive = 1;
            }
        }

        const showActiveSlide = () => {
            const slides = document.querySelectorAll('.slide');

            slides.forEach((slide, idx) => {
                if (idx + 1 === currentActive) {
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                }
            });
        }

        const setAutoSlide = () => {
            return setInterval(() => {
                incrementActive();
                showActiveSlide();
            },4000)
        }

        let interval = setAutoSlide();
         const buttons = document.querySelectorAll('.button');

        buttons.forEach((button, idx) => {
            button.addEventListener('click', () => {
                clearInterval(interval);
                // clearInterval

                currentActive = idx + 1 ;
                showActiveSlide();
               // startInterval
                interval = setAutoSlide()
            });
        });
        
    
    </script>
</body>
</html>
