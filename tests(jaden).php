<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `usertests` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn, $sql);

$testIDs = array();


while($row = mysqli_fetch_assoc($result)){  //gets all of the users testID's
    $testIDs[] = $row['testID'];
}

foreach ($testIDs as $value) {
    $sql = "SELECT * FROM `tests` WHERE `ID` = {$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['testname'];
    echo("<br>");
}







