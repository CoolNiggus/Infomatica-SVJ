<?php
session_start();

include("dbh.php");

$groupname = $_POST["name"];
$username = $_SESSION["CurrentUser"];


//Creates group and adds it to database
$query = "INSERT INTO `hoop`.`groups` (`ID`, `name`) VALUES (NULL, '$groupname')";
$result = mysqli_query($conn, $query);
$groupID= mysqli_insert_id($conn);





echo("<form action='addpeople.php' method='POST'><input type='text' name='username' placeholder='Username'><input type='submit' value ='Subit'></form>");



//adds currentuser to the group
$query="INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
$result = mysqli_query($conn, $query);
