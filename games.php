<?php
session_start();
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
                    <li><a href="#">Cards</a></li>
                    <li><a href="accessories.php">Accessories</a></li>
                </li>
            </ul>
                <li><a href="Aboutus.php">About</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
                <li class="search-box">
                <form action="#" method="get">
                     <input type="text" name="search" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </li>
            <?php

            if (isset($_SESSION['userId'])) {
                echo '<form action="SignUp/logout.php" method="post">
                <button type="submit" class="log">Logout</button>
                </form>';
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
            
            <div class="wow_imgage end wow" data-wow-delay="0.3s">
                <img src="Top Rated/p4.jpg" width="270" height="180"></img>
                <div class="content">
                    <h3>CyberPunk 2077</h3><br>
                    <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                    <br><span>Price: 100 &dollar;</span>
                </div>
            </div>
        <div>
            <div class="wow_imgage end wow" data-wow-delay="0.3s">
                <img src="Top Rated/p10.jpg" width="270" height="180"></img>
                <div class="content">
                    <h3>PUBG</h3><br>
                    <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                    <br><span>Price: 100 &dollar;</span>
                </div>
            </div>
            <div class="wow_imgage end wow" data-wow-delay="0.3s">
                <img src="Top Rated/p3.jpg" width="270" height="180"></img>
                <div class="content">
                    <h3>Final Fantasy VII</h3><br>
                    <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                    <br><span>Price: 100 &dollar;</span>
                </div>
            </div>
            <div class="wow_imgage end wow" data-wow-delay="0.3s">
                <img src="Top Rated/p2.png" width="270" height="180"></img>
                <div class="content">
                    <h3>Monster Hunter</h3><br>
                    <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
                    <br><span>Price: 100 &dollar;</span>
                </div>
            </div>
    </div>
    <br>
    <div>
    <h1 id="anime" class="c">Anime</h1>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/blue.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Blue Archive</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/genshin.png" width="270" height="180"></img>
    <div class="content">
        <h3>Genshin Impact</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/persona.png" width="270" height="180"></img>
    <div class="content">
        <h3>Persona 5</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/pkmn.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Pokemon Go</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
</div>

<h1 id="op" class="c">Open World</h1>
<br>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Best Seller/l3.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Red Dead Redemption</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Best Seller/l5.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Grand Theft Auto</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Top Rated/p8.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Horizon</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Top Rated/p1.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>SkyRim</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>

<h1 id="mul" class="c">Multiplayer</h1>
<br>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Best Seller/l4.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Counter Strike</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Best Seller/l10.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>MineCreft</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Top Rated/p6.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>CyberPunk 2077</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Images/01.png" width="270" height="180"></img>
    <div class="content">
        <h3>CyberPunk 2077</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>

<h1 id="rpg" class="c">Role Playing</h1>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Images/12.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>CyberPunk 2077</h3><br>
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
    <img src="Top Rated/p2.png" width="270" height="180"></img>
    <div class="content">
        <h3>CyberPunk 2077</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Top Rated/p10.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>CyberPunk 2077</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>

<h1 id="sim" class="c">Simulation</h1>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/fm.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Football Manager</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/sims.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>The Sims 4</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/truck.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Euro Truck Simulator 2</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/war.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>War Thunder</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<h1 id="sports" class="c">Sports</h1>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Top Rated/p5.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Forza Horizon</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Top Rated/p9.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>FIFA 24</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Best Seller/l6.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Asseto Corsa</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/pes.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>eFootball 24</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<h1 id="vr" class="c">Virtual Reality</h1>
<br>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/elite dangerous.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Elite</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/tetris.png" width="270" height="180"></img>
    <div class="content">
        <h3>Tetris</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/beat saber.png" width="270" height="180"></img>
    <div class="content">
        <h3>Beat Saber</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
</div>
<div class="wow_imgage end wow" data-wow-delay="0.3s">
    <img src="Games/half.jpg" width="270" height="180"></img>
    <div class="content">
        <h3>Half Life</h3><br>
        <p>The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks.</p>
        <br><span>Price: 100 &dollar;</span>
    </div>
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