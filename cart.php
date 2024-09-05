<?php
session_start();
include('Functions/common.php');

// Remove item from cart
if (isset($_POST['remove'])) {
    $itemID = $_POST['itemID'];
    $i = getIPAddress();
    $delete_query = "DELETE FROM `cart_details` WHERE `IP`='$i' AND `ID`='$itemID'";
    $result = mysqli_query($conn, $delete_query);
    if ($result) {
        header("Location: cart.php");
        exit();
    }
}

// Update quantity and recalculate total
if (isset($_POST['update'])) {
    $itemID = $_POST['itemID'];
    $quantity = $_POST['quantity'];
    $i = getIPAddress();
    $update_query = "UPDATE `cart_details` SET `Quantity`='$quantity' WHERE `IP`='$i' AND `ID`='$itemID'";
    $result = mysqli_query($conn, $update_query);
    if ($result) {
        header("Location: cart.php");
        exit();
    }
}
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
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
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
                $select_query = "Select * from `cart_details` where IP='$i'";
                $result = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_array($result)) {
                    $ID = $row['ID'];
                    $quantity = $row['Quantity'];
                    $select2 = "select * from `cards` where ID=$ID";
                    $select = "select * from `accessories` where ID=$ID";
                    $select3 = "select * from `games` where ID=$ID";
                    $result1 = mysqli_query($conn, $select);

                    while ($row_price = mysqli_fetch_array($result1)) {
                        $P = $row_price['Price'];
                        $T = $row_price['Title'];
                        $D = $row_price['Description'];
                        $Im = $row_price['Image'];
                        $itemTotal = $P * $quantity;
                        $total += $itemTotal;
                        ?>
                        <tr>
                            <th><img src="Products/<?php echo $Im ?>" alt="Product Image" class="product-img"></th>
                            <td><?php echo $T ?></td>
                            <td><?php echo $D ?></td>
                            <td><?php echo $P ?>$</td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="itemID" value="<?php echo $ID; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                                    <button type="submit" name="remove"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="text" name="quantity" value="<?php echo $quantity; ?>" class="quantity-display">
                                    <input type="hidden" name="itemID" value="<?php echo $ID; ?>">
                                    <button type="submit" name="update">Update</button>
                                </form>
                            </td>
                            <td><?php echo $itemTotal ?>$</td>
                        </tr>
                        <?php
                    }

                    $result2 = mysqli_query($conn, $select2);
                    while ($row_pric = mysqli_fetch_array($result2)) {
                        $Pr = $row_pric['Price'];
                        $Ti = $row_pric['Title'];
                        $De = $row_pric['Description'];
                        $Img = $row_pric['Image'];
                        $itemTotal = $Pr * $quantity;
                        $total += $itemTotal;
                        ?>
                        <tr>
                            <th><img src="Cards/<?php echo $Img ?>" alt="Product Image" class="product-img"></th>
                            <td><?php echo $Ti ?></td>
                            <td><?php echo $De ?></td>
                            <td><?php echo $Pr ?>$</td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="itemID" value="<?php echo $ID; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                                    <button type="submit" name="remove"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="text" name="quantity" value="<?php echo $quantity; ?>" class="quantity-display">
                                    <input type="hidden" name="itemID" value="<?php echo $ID; ?>">
                                    <button type="submit" name="update">Update</button>
                                </form>
                            </td>
                            <td><?php echo $itemTotal ?>$</td>
                        </tr>
                        <?php
                    }

                    $result3= mysqli_query($conn, $select3);
                    while ($row_pri = mysqli_fetch_array($result3)) {
                        $Pr3 = $row_pri['Price'];
                        $Ti3 = $row_pri['Title'];
                        $De3 = $row_pri['Description'];
                        $Img3 = $row_pri['Image'];
                        $itemTotal3 = $Pr3 * $quantity;
                        $total += $itemTotal3;
                        ?>
                        <tr>
                            <th><img src="Games_database/<?php echo $Img3 ?>" alt="Product Image" class="product-img"></th>
                            <td><?php echo $Ti3 ?></td>
                            <td><?php echo $De3 ?></td>
                            <td><?php echo $Pr3 ?>$</td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="itemID" value="<?php echo $ID; ?>">
                                    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                                    <button type="submit" name="remove"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="post">
                                    <input type="text" name="quantity" value="<?php echo $quantity; ?>" class="quantity-display">
                                    <input type="hidden" name="itemID" value="<?php echo $ID; ?>">
                                    <button type="submit" name="update">Update</button>
                                </form>
                            </td>
                            <td><?php echo $itemTotal3 ?>$</td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <h3>Total: $<span id="total-price"><?php echo $total; ?></span></h3>
            <form action="index.php" method="post">
                <input type="submit" class="shop" value="Continue Shopping?">
            </form>
            <br>
            <a href="buy.php?price=<?php echo $total;?>">Buy Now!</a>
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
</html>
