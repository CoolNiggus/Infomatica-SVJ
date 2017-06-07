<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `groupusers` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn,$sql);

$groupIDs = array();

while($row = mysqli_fetch_assoc($result)){  
    $groupIDs[] = $row['groupID'];

echo ("<table style='width:50%'>
      <tr> <th>Group Name</th><th>Creator</th> </tr>");

foreach ($groupIDs as $value) { 
    $sql = "SELECT * FROM `groups` WHERE `ID` ={$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

$cell1 = $row['name'];
    $cell1 = "<a href='taketest.php?test={$value}'>{$cell1}</a>"; //creates a link to take the test
    $cell2 = $row['creatorID'];