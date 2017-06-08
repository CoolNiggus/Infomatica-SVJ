<?php
//this script gives everysingle member of this group a test
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];
$groupID = $_SESSION['groupID'];
$chosentestID = $_GET['test'];

//makes an array with all the memberID of this group
$memberIDs = array();
$query = "SELECT * FROM `groupusers` WHERE `groupID` = {$groupID}";
$result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_assoc($result)){  
    $memberIDs[] = $row['userID'];
}
//add test and memberID to usertests
foreach ($memberIDs as $value) {
    $query = "INSERT INTO `hoop`.`usertests` (`userID`, `testID`) VALUES ('$value', '$chosentestID')";
    $result = mysqli_query($conn, $query);
}

