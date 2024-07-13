<?php
session_start();
include ('Functions/common.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cards.css">
    <link rel="icon" href="Images/arcad.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

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
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>';
            } else {
                echo ' <li><a href="Login.php"><i class="fa-solid fa-user"></i></a></li>';
            }
            ?>

        </ul>
    </nav>
    <h1>Cart</h1>
    <!-- <form action="" method="post"> -->
    <div class="container">
        <div class="row">
            <?php
            items();
            ?>
            <table>
                <?php

                global $conn;
                $i = getIPAddress();
                $total = 0;
                $tota = 0;
                $select_query = "Select * from `cart_details` where IP='$i'";
                $result = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_array($result)) {

                    $ID = $row['ID'];
                    $I = $row['ID'];
                    $select2 = "select * from `cards` where ID=$I";
                    $select = "select * from `accessories` where ID=$ID";
                    $result1 = mysqli_query($conn, $select);
                    while ($row_price = mysqli_fetch_array($result1)) {
                        $P = $row_price['Price'];
                        $T = $row_price['Title'];
                        $D = $row_price['Description'];
                        $Im = $row_price['Image'];
                        $Price = array($row_price['Price']);
                        $values = array_sum($Price);
                        $total += $values;
                        ?>
                        <tr>
                            <th><img src="Products/<?php echo $Im ?>" alt="Product Image" class="product-img"></th>
                            <td><?php echo $T ?></td>
                            <td><?php echo $D ?></td>
                            <td><?php echo $P ?>$</td>
                            <td>
                            <div class="input-container">                        
                                    <i class="fa-solid fa-trash-can"></i>
                                    <input type="submit" value="" class="Search" name="remove" value="<?php remove();?>">
                            </div>
                            </td>
                            <td>
                                <button class="btn" onclick="decreaseQuantity(this)">-</button>
                                <span class="quantity-display">1</span>
                                <button class="btn" onclick="increaseQuantity(this)">+</button>
                            </td>
                        </tr>


                        <?php
                    }
                    $result2 = mysqli_query($conn, $select2);
                    while ($row_pric = mysqli_fetch_array($result2)) {
                        $Pr = $row_pric['Price'];
                        $Ti = $row_pric['Title'];
                        $De = $row_pric['Description'];
                        $Img = $row_pric['Image'];
                        $Pric = array($row_pric['Price']);
                        $value = array_sum($Pric);
                        $tota += $value;
                        ?>
                        <tr>
                            <th><img src="Cards/<?php echo $Img ?>" alt="Product Image" class="product-img"></th>
                            <td><?php echo $Ti ?></td>
                            <td><?php echo $De ?></td>
                            <td><?php echo $Pr ?>$</td>
                            <td>
                                <form action="" method="post">
                                    <div class="input-container">                        
                                        <i class="fa-solid fa-trash-can"></i>
                                        <input type="submit" value="" class="Search" name="remove" value="">
                                    </div>
                                </form>
                            </td>
                            <td>
                                <button class="btn" onclick="decreaseQuantity(this)">-</button>
                                <span class="quantity-display">1</span>
                                <button class="btn" onclick="increaseQuantity(this)">+</button>
                            </td>
                        </tr>
                        <?php

                    }
                }
                ?>
            </table>
            <form action="" method="post">
                <input type="submit" value="Update Cart" class="Search">
            </form>
            <h4><?php price(); ?></h4>
            <form action="index.php" method="post">
                <input type="submit" class="shop" value="Continue Shopping?">
            </form>
            <br>
            <form action="buy.php" method="post">
                <input type="submit" class="shop" value="Buy Now!">
            </form>
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
    <script>
        function increaseQuantity(button) {
            let display = button.previousElementSibling;
            display.textContent = parseInt(display.textContent) + 1;
        }

        function decreaseQuantity(button) {
            let display = button.nextElementSibling;
            let currentQuantity = parseInt(display.textContent);
            if (currentQuantity > 1) {
                display.textContent = currentQuantity - 1;
            }
        }
    </script>
</body>

</html>