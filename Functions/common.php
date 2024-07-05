<?php
include('./SignUp/database.php');

function getProduct(){
    global $conn;
    $select="select * from `accessories`" ;
$result=mysqli_query($conn,$select);

while ($row=mysqli_fetch_assoc($result)) {
    $ID=$row['ID'];
    $Title=$row['Title'];
    $Description=$row['Description'];
    $Image=$row['Image'];
    $Price=$row['Price'];

    echo"<div class='card'>
        <img class='img' src='Products/$Image' alt=''>
        <h2>$Title</h2>
        <p>$Description</p>
        <p class='price'>$Price $</p>
    </div>";
}
}

function searchProduct(){
    global $conn;
    if(isset($_GET['product'])){
        $search_data=$_GET['data'];
    $search="select * from `accessories` where Title like '%$search_data%'" ;
$result=mysqli_query($conn,$search);
$num_of_rows=mysqli_num_rows($result);
if ($num_of_rows==0) {
    echo"<h2 class='t'>Nothing found with this title.</h2>";
}

while ($row=mysqli_fetch_assoc($result)) {
    $ID=$row['ID'];
    $Title=$row['Title'];
    $Description=$row['Description'];
    $Image=$row['Image'];
    $Price=$row['Price'];

    echo"<div class='card'>
        <img class='img' src='Products/$Image' alt=''>
        <h2>$Title</h2>
        <p>$Description</p>
        <p class='price'>$Price $</p>
    </div>";
}
    }

}