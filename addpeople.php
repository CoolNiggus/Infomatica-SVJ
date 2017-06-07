<?php 
session_start();

include("dbh.php");

//$username = $_SESSION["CurrentUser"];
$username =$_POST["username"];
$groupID= mysqli_insert_id($conn);

$query = "INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
$result = mysqli_query($conn, $query);

