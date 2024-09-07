
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Accessories Overview</title>
    <link rel="icon" href="../Images/arcad.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <style>
        table.ok {
            width: 100%;
            border-collapse: collapse;
        }
        table.ok, table.ok th, table.ok td {
            border: 1px solid black;
        }
        table.ok th, table.ok td {
            padding: 8px;
            text-align: left;
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
    <h2 class="u">List of Accessories</h2>
    <?php
// Database connection
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "arcade";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to select data
$sql = "select * from `accessories`";
$result = mysqli_query($conn, $sql);
// Check if there are results
if (mysqli_num_rows($result) > 0) {
    // Display table structure
    echo "<table class='ok'>
            <tr>
                <th>Game Name</th>
                <th>Game Description</th>
                <th>Game Image</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>";

    // Loop through and output data for each row
    while ($row = mysqli_fetch_array($result)) {
        $imageFullPath = $row['Image'];
        echo "<tr>
                <td>" . $row['Title'] . "</td>
                <td>" . $row['Description'] . "</td>"
?>                
                <th><img src="../Products/<?php echo $imageFullPath ?>" alt="Product Image" class="product-img"></th>
<?php  
              

              echo " <td>" . $row['Price'] . "</td>
                                              <td>
                                    <button type='submit'>Edit</button>
                                    <button type='submit'>Delete</button>
                                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($conn);
?>
