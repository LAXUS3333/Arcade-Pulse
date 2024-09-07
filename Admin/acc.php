<?php
include('../SignUp/database.php');
if (isset($_POST['accessories'])){

    $title=$_POST['title'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    $price=$_POST['price'];
    $status='True';

    if ($title=="" or $description=="" or $image=="" or $price=="") {
        echo"<script>alert('Fill all')</script>";
        exit();
    }
    else{
        move_uploaded_file($temp,"../Products/$image");

        $insert="Insert into `accessories` (Title,Description,Image,Price,Date,Status)
        values('$title','$description','$image','$price',NOW(),'$status')";
        $result=mysqli_query($conn,$insert);
        if ($result) {
            echo"<script>alert('Success')</script>";
        }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="acc.css">
    <title>Accessories</title>
    <link rel="icon" href="../Images/arcad.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        .input-container {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .input-container input, .input-container textarea {
            width: calc(100% - 24px);
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            text-align:center;
            width: 500px;
        }
        .input-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #89FF00;
            color: white;
            cursor: pointer;
            font-family: "Josefin Sans";
        }
        .button:hover {
            background-color: #218838;
        }
        #imageUpload{
            font-family: "Josefin Sans";
        }
    </style>
</head>
<body>
<nav>
        <ul>
        <li><a href="games.php">Games</a></li>
            <li><a href="games_overview.php"> Games Overview</a></li>
            <li><a href="acc.php">Accessories</a></li>
            <li><a href="accessories_overview.php"> Accessories Overview</a></li>
            <li><a href="cards.php">Cards</a></li>
            <li><a href="cards_overview.php"> Cards Overview</a></li>
            <li><a href="user.php">Users</a></li>
            <li class="search-box">
                <a href="../SignUp/logout.php">Logout</a>
            </li>

        </ul>
    </nav>

    <h1>Insert Accessories</h1>

    <div class="input-container">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Accessory Title:</label>
        <input type="text" name="title" id="title" placeholder="Product Title">
        <label for="description">Accessory Description:</label>
        <textarea name="description" id="description" placeholder="Product Description"></textarea>
        <label for="imageUpload">Accessory Image:</label>
        <input type="file" name="image" id="imageUpload" accept="image/*">
        <label for="title">Accessory Price:</label>
        <input type="text" name="price" id="title" placeholder="Product Price">
        <br>
        <input type="submit" name="accessories" id="enter" value="Enter">
    </form>
    </div>
</body>
</html>
