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

echo("<form action='addpeople.php' method='POST'><input type='text' name='username' placeholder='username'><button type='submit' name='submit'>Add new person</button></form>");
echo($groupID);



