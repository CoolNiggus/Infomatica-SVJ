<?php 
session_start();
include("dbh.php");


$username = $_POST["username"];
$groupID = $_SESSION["groupID"];
echo($username);
echo($groupID);

$query = "INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
$result = mysqli_query($conn, $query);

