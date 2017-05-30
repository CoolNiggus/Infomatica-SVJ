<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `usertests` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn, $sql);

$array = array();


while($row = mysqli_fetch_row($result)){
    $array = $row;
    print_r($array);
    echo("<br>");
}





