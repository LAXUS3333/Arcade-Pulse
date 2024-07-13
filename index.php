<?php
session_start();
include('Functions/common.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade Pulse</title>
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mation.css">
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
    <div class="H">
        <?php
        if (isset($_SESSION['userId'])) {
           echo' <h1>We have awaited your presence!<br><br>Welcome</h1>'; 

        }
        else {
           echo' <h1>Your gateway to endless adventures<br><br>Welcome to Arcade Pulse!</h1>';
        }

        ?>

    </div>
    <h2 class="gg">Best Deals for the Week!  <i class="fa-solid fa-dragon"></i></h2>
    
    <div class="service-section">
        <div class="wow_imgage wow">
            <img src="Top Rated/p1.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>SkyRim</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                <br><span>Price: 100 &dollar;</span>
            </div>	
        </div>

        <div class="wow_imgage wow" data-wow-delay="0.2s">
            <img src="Top Rated/p7.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>Last Epoch</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                <br><span>Price: 100 &dollar;</span>
            </div>
        </div>

        <div class="wow_imgage end wow" data-wow-delay="0.3s">
            <img src="Top Rated/p4.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>CyberPunk 2077</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                <br><span>Price: 100 &dollar;</span>
            </div>
        </div>
        <div class="wow_imgage end wow" data-wow-delay="0.3s">
            <img src="Top Rated/p6.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>Risk of Rain 2</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                <br><span>Price: 100 &dollar;</span>
            </div>
        </div>
        <h2 class="ff">Big Discounts! <i class="fa-solid fa-trophy"></i></h2>
        <div class="wow_imgage end wow" data-wow-delay="0.3s">
            <img src="Top Rated/p8.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>Horizon</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Price: 100 &dollar;</span>
            </div>
        </div>
        <div class="wow_imgage end wow" data-wow-delay="0.3s">
            <img src="Top Rated/p3.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>Final Fantasy VII</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Price: 100 &dollar;</span>
            </div>
        </div>
        <div class="wow_imgage end wow" data-wow-delay="0.3s">
            <img src="Best Seller/l9.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>HellDivers 2</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Price: 100 &dollar;</span>
            </div>
        </div>
        <div class="wow_imgage end wow" data-wow-delay="0.3s">
            <img src="Top Rated/p10.jpg" width="270" height="180"></img>
            <div class="content">
                <h3>PUBG</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Price: 100 &dollar;</span>
            </div>
        </div>
        <h2 class="ff">Our Recomendations <i class="fa-solid fa-heart"></i></h2>
        <div class="xd">
            <div class="images">
                <input type="radio" name="slide" id="img1" checked>
                <input type="radio" name="slide" id="img2">
                <input type="radio" name="slide" id="img3">
                <input type="radio" name="slide" id="img4">
    
                <img src="Best Seller/l5.jpg" class="m1" alt="img1">
                <img src="Best Seller/l3.jpg"  class="m2" alt="img2">
                <img src="Top Rated/p9.jpg"  class="m3" alt="img3">
                <img src="Best Seller/l1.jpg"  class="m4" alt="img4">
            </div>
            <div class="dots">
                <label for="img1"></label>
                <label for="img2"></label>
                <label for="img3"></label>
                <label for="img4"></label>
            </div>
        </div>
        <h2 class="ff">Gift Card Sale! <i class="fa-solid fa-skull-crossbones"></i></h2>
        <div class="wow_imgage wow" data-wow-delay="0.1s">
            <img src="Gift Cards/ff.png" width="160" height="180"></img>
            <div class="content">
                <h3>Google Play Gift Cards</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Tap for more</span>
            </div>	
        </div>

        <div class="wow_imgage wow" data-wow-delay="0.1s">
            <img src="Gift Cards/play.png" width="160" height="160"></img>
            <div class="content">
                <h3>Playstation Cards</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Tap for more</span>
            </div>	
        </div>

        <div class="wow_imgage wow" data-wow-delay="0.1s">
            <img src="Gift Cards/steam.png" width="160" height="160"></img>	
            <div class="content">
                <h3>Steam Gift Cards</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p><br><span>Tap for more</span>
            </div>
        </div>
        <div class="wow_imgage wow" data-wow-delay="0.1s">
            <img src="Gift Cards/xbox.png" width="160" height="160"></img>	
            <div class="content">
                <h3>Xbox Gift Cards</h3><br>
                <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                <br>
                <span>Tap for more</span>
            </div>
        </div>
    </div>
    <h2 class="ff">You've reached the end <i class="fa-solid fa-ghost"></i></i></h2>


<?php

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
</html>