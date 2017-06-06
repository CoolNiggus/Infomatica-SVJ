<?php 
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];
$groupname = $_POST["name"];

$query = "INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ($groupname, '$username')";
$result = mysqli_query($conn, $query);