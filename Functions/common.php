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

function getCard(){
    global $conn;
    $s="select * from `cards`" ;
$r=mysqli_query($conn,$s);

while ($row=mysqli_fetch_assoc($r)) {
    $I=$row['ID'];
    $Titl=$row['Title'];
    $Descriptio=$row['Description'];
    $Imag=$row['Image'];
    $Pric=$row['Price'];

    echo"<div class='card'>
        <img class='img' src='Cards/$Imag' alt=''>
        <h2>$Titl</h2>
        <p>$Descriptio</p>
        <p class='price'>$Pric $</p>
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
$searc="select * from `cards` where Title like '%$search_data%'";
$re=mysqli_query($conn,$searc);
$num_of_ro=mysqli_num_rows($re);
if ($num_of_ro==0 && $num_of_rows==0) {
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

while ($ro=mysqli_fetch_assoc($re)) {
    $I=$ro['ID'];
    $Titl=$ro['Title'];
    $Descriptio=$ro['Description'];
    $Imag=$ro['Image'];
    $Pric=$ro['Price'];

    echo"<div class='card'>
        <img class='img' src='Cards/$Imag' alt=''>
        <h2>$Titl</h2>
        <p>$Descriptio</p>
        <p class='price'>$Pric $</p>
    </div>";
}

}