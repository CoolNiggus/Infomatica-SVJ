<?php
session_start();

include("dbh.php");

$groupname = $_POST["name"];
$username = $_SESSION["CurrentUser"];


//Creates group and adds it to database
$query = "INSERT INTO `hoop`.`groups` (`ID`, `name`) VALUES (NULL, '$groupname')";
$result = mysqli_query($conn, $query);
$groupID = mysqli_insert_id($conn);
$_SESSION["groupID"] = $groupID;

//adds currentuser to the group
$query="INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
$result = mysqli_query($conn, $query);
header("Location: displaygrouplist.php");




