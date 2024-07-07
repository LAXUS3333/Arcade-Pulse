<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>User</title>
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
            <li><a href="#">Games</a></li>
            <li><a href="acc.php">Accessories</a></li>
            <li><a href="cards.php">Cards</a></li>
            <li><a href="user.php">Users</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Payments</a></li>
            <li class="search-box">
                <form action="#" method="get">
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
    <h2 class="u">List of Users</h2>
    <table class="ok">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $servername = "localhost";
                $dBUsername = "root";
                $dBPassword = "";
                $dBName = "arcade";

                $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['idUsers']}</td>
                                <td>{$row['uidUsers']}</td>
                                <td>{$row['emailUsers']}</td>
                                <td>{$row['pwdUsers']}</td>
                                <td>
                                    <button type='submit'>Edit</button>
                                    <button type='submit'>Delete</button>
                                </td>
                              </tr>";
                    }
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
