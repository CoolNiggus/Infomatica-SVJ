<!--Adds new members to a group-->
<?php 

session_start();
include("dbh.php");


$username = $_POST["hooper"];
$groupID = $_SESSION["groupID"];


//adds person to group         
$query = "INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
$result = mysqli_query($conn, $query);

header("Location: groupdata.php?group={$groupID}");

//echo("<form action='addhooper.php' method='POST'><input type='text' name='username' placeholder='username'><button type='submit' name='submit'>Add new person</button></form>");
//echo($groupID);