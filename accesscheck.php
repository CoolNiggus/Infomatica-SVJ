<?php
//denies acces to student to a the page which includes this script
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$query = "SELECT * FROM `users` WHERE `username` LIKE '$username'";
$res = mysqli_query($conn, $query);
$rowinf = mysqli_fetch_assoc($res);

if($rowinf["accesslevel"] == 1){
    header("Location: accessdenied.php");
}

