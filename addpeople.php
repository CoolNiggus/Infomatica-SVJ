<!--Adds new members to a group-->
<?php 

session_start();
include("dbh.php");


$username = $_POST["username"];
$groupID = $_SESSION["groupID"];
echo($username);
echo($groupID);

            
//$query = "INSERT INTO `hoop`.`groupusers` (`groupID`, `userID`) VALUES ('$groupID', '$username')";
//$result = mysqli_query($conn, $query);

//echo("<form action='addhooper.php' method='POST'><input type='text' name='username' placeholder='username'><button type='submit' name='submit'>Add new person</button></form>");
//echo($groupID);