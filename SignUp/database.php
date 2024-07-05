<?php

$servername="localhost";
$dBUsername="root";
$dBpassword="";
$dBName="arcade";

$conn= mysqli_connect($servername,$dBUsername,$dBpassword,$dBName);

if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}