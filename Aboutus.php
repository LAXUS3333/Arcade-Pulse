<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="icon" href="Images/arcad.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
         <ul>
         <li><a href="index.php">Home</a></li>
            <li><a href="#">Shop &#x25BE</a>
            <ul class="d">
                <li><a href="games.php">Games</a></li>
                <li><a href="Cards.php">Cards</a></li>
                <li><a href="accessories.php">Accessories</a></li>
            </ul>
            </li>
            <li><a href="Aboutus.php">About</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
                <li class="search-box">
                <form action="Search.php" method="get">
                     <input type="text" name="data" aria-label="Search" placeholder="Search...">
                    <!-- <button type="submit">Search</button> -->
                     <input type="submit" value="Search" class="Search" name="product">
                </form>
            </li>
            <?php

            if (isset($_SESSION['userId'])) {
                echo '<form action="SignUp/logout.php" method="post">
                <button type="submit" class="log">Logout</button>
                </form>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>';
            }

            else {
               echo' <li><a href="Login.php"><i class="fa-solid fa-user"></i></a></li>';
            }
            ?>
        </ul>
</nav>
<div class="L">
        <img class="img" src="Images/arcad.png" alt="">
    </div>
<section class="sec-1 show-animate">
<div class="container">
  <div class="left ">
  <h1>Arcade Pulse is the ultimate destination for playing, discussing, and creating games.</h1>
  </div>
  <div class="right">
  <img class="video" src="Videos/stock.gif" alt="">

  </div>
</div>
</section>

<section class="sec-2">
    <h1 class="animate">Access Games Instantly</h1>
    <p class="animate">With nearly 30,000 games from AAA to indie and 
        everything in-between. Enjoy exclusive deals, automatic game updates, 
        and other great perks.</p>
        <a href="games.php">Browse the store <i class="fa-solid fa-dice-d20"></i></a>
</section>

<section class="sec-3">
    <div class="div3">
        <h1 class="animate">Experience Arcade Pulse Hardware</h1>
        <p class="animate">We created the Arcade Pulse Deck and the Valve Index headset to make gaming on the PC even
            better.</p>
            <a href="accessories.php">Experience Arcade Pulse Hardware <i class="fa-solid fa-headset"></i></a>
    </div>
         <div class="animate">
             <img src="Videos/psp.png" alt="">
         </div>
</section>
<section class="sec-4">
    <h1 class="animate">Our Features</h1>
    <p class="ugh animate">We are constantly working to bring new updates and features to Arcade Pulse, such as:</p>
    <div class="cards animate">
        <div class="card">
        <i class="fa-solid fa-clock"></i>
        <h2>Early Access to Games</h2>
            <p>With nearly 30,000 games from AAA to indie and 
                everything in-between. Enjoy exclusive deals, automatic game updates, 
                and other great perks.</p>
            </div>
            <div class="card">
        <i class="fa-solid fa-gift"></i>
        <h2>Gift Cards Redemption</h2>
            <p>With nearly 30,000 games from AAA to indie and 
                everything in-between. Enjoy exclusive deals, automatic game updates, 
                and other great perks.</p>
            </div>
            <div class="card">
        <i class="fa-solid fa-network-wired"></i>
        <h2>Pulse Workshop</h2>
            <p>With nearly 30,000 games from AAA to indie and 
                everything in-between. Enjoy exclusive deals, automatic game updates, 
                and other great perks.</p>
            </div>
            <div class="card">
        <i class="fa-solid fa-gamepad"></i>
        <h2>Pulse Controller Support</h2>
            <p>With nearly 30,000 games from AAA to indie and 
                everything in-between. Enjoy exclusive deals, automatic game updates, 
                and other great perks.</p>
            </div>
            <div class="card">
        <i class="fa-solid fa-a"></i>
        <h2>Multilinguial</h2>
            <p>With nearly 30,000 games from AAA to indie and 
                everything in-between. Enjoy exclusive deals, automatic game updates, 
                and other great perks.</p>
            </div>
            <div class="card">
        <i class="fa-solid fa-wallet"></i>
        <h2>Purchases Made Easy</h2>
            <p>With nearly 30,000 games from AAA to indie and 
                everything in-between. Enjoy exclusive deals, automatic game updates, 
                and other great perks.</p>
            </div>
    </div>
</section>


    <div class="sesh">
        <h1 class="animate">And so much more...</h1>
        <p class="animate">Earn achievements, read reviews, explore custom recommendations, and more.</p>
            <a class="animate" href="index.php">Go to Site <i class="fa-solid fa-play"></i></a>
    </div>


<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h2>Follow Us</h2>
             <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
             <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
             <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
             <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
        </div>
        <div class="footer-section links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>
        <div class="footer-section contact-form">
        <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Chittagong University of Engineering and Technology</span>
                            </div>
                        </div>
                    </div>
                <br>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+880 1737860266</span>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 Arcade Pulse. All rights reserved.
    </div>
</footer>
<script src="us.js"></script>
</body>
</html>