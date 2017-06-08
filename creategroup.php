<!--Creates new group-->
<?php
session_start();

include("dbh.php");

$groupname = $_POST["name"];
$username = $_SESSION["CurrentUser"];

//Creates group and adds it to database
$query = "INSERT INTO `hoop`.`groups` (`ID`, `name`, `adminID`) VALUES (NULL, '$groupname', '$username')";
$result = mysqli_query($conn, $query);
$groupID = mysqli_insert_id($conn);

//adds currentuser to the group
$query="INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
$result = mysqli_query($conn, $query);
header("Location: grouplist.php");



