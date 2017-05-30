<?php
session_start();

include("dbh.php");

$sql = "SELECT * FROM `usertests` WHERE `userID` LIKE 'AmagicPotato'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
print_r($row);


