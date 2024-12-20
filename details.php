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
    <title>Accessories</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="accessory.css">
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
<?php
details();
cart();
?>

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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Aboutus.php">About</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
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
    </html>