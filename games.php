<?php
session_start();
include('SignUp/database.php');
include('Functions/common.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="games.css">
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
                </li>
            </ul>
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

     <br>
     <br>

     <h1 class="a">Our Catagories!</h1>
     <p class="v">All the best games you're looking for is at your fingertips.</p>

     <div id="container">
		<div id="slider-container">
			<span onclick="slideRight()" class="btn"></span>
			<div id="slider">
				<div class="slide" onClick="document.getElementById('action').scrollIntoView()"><span><img src="Catagories/action.png"></span>
                    <h2>Action</h2>
                </div>
				<div class="slide" onClick="document.getElementById('anime').scrollIntoView()"><span><img src="Catagories/anime.png"></span>
                    <h2>Anime</h2>
                </div>
				<div class="slide" onClick="document.getElementById('op').scrollIntoView()"><span><img src="Catagories/exploration_open_world.png"></span>
                    <h2>Open World</h2>
                </div>
				<div class="slide" onClick="document.getElementById('mul').scrollIntoView()"><span><img src="Catagories/multiplayer_coop.png"></span>
                    <h2>Multiplayer</h2>
                </div>
				<div class="slide" onClick="document.getElementById('rpg').scrollIntoView()"><span><img src="Catagories/rpg.png"></span>
                    <h2>RPG</h2>
                </div>
				<div class="slide" onClick="document.getElementById('sim').scrollIntoView()"><span><img src="Catagories/simulation.png"></span>
                    <h2>Simulation</h2>
                </div>
				<div class="slide" onClick="document.getElementById('vr').scrollIntoView()"><span><img src="Catagories/vr.png"></span>
                    <h2>Virtual Reality</h2>
                </div>
				<div class="slide" onClick="document.getElementById('sports').scrollIntoView()"><span><img src="Catagories/sports.png"></span>
                    <h2>Sports</h2>
                </div>
			</div>
			<span onclick="slideLeft()" class="btn"></span>
		</div>
	</div>

    <br>
    <br>
    <div  class="service-section">
        <div id="action">
            <h1  class="c">Action</h1>
            
            <div class="cards">

         
<?php 
getGames(3,0);
?>
</div>
    <h1 id="anime" class="c">Anime</h1>
    <div class="cards">

         
<?php 
getGames(3,3);
?>
</div>

<h1 id="op" class="c">Open World</h1>
<div class="cards">

         
<?php 
getGames(3,6);
?>
</div>

<h1 id="mul" class="c">Multiplayer</h1>
<div class="cards">

         
<?php 
getGames(3,9);
?>
</div>

<h1 id="rpg" class="c">Role Playing</h1>
<div class="cards">

         
<?php 
getGames(3,12);
?>
</div>

<h1 id="sim" class="c">Simulation</h1>
<div class="cards">

         
<?php 
getGames(3,15);
?>
</div>

<h1 id="sports" class="c">Sports</h1>
<div class="cards">

         
<?php 
getGames(3,18);
?>
</div>
<h1 id="vr" class="c">Virtual Reality</h1>
<div class="cards">

         
<?php 
getGames(5,21);
?>
</div>
</div>
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
                <li><a href="Aboutus.php">About</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
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
</body>
<script src="games.js"></script>
</html>