<?php
session_start();

include("dbh.php");

$sql = "SELECT * FROM `usertests` WHERE `userID` LIKE 'AmagicPotato'";
$result = mysqli_query($conn, $sql);

$array = array();


while($row = mysqli_fetch_row($result)){
    $array = $row;
    print_r($array);
    echo("<br>");
}





