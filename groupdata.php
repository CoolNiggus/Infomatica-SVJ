<?php
session_start();

include("dbh.php");

$groupID = $_GET["group"];
$username = $_SESSION["username"];

$sql = "SELECT * FROM `groupusers` WHERE `groupID` = {$groupID}";
$result = mysqli_query($conn,$sql);

$userIDs = array();

while($row = mysqli_fetch_assoc($result)){  
    $userIDs[] = $row['userID'];
    }

echo ("<table style='width:50%'>
      <tr> <th>Hoopers that belong to this group</th> </tr>");

foreach ($userIDs as $value) { 
    $sql = "SELECT * FROM `users` WHERE `username` = {$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

$cell1 = $row['username'];
//$cell1 = "<a href='groupdata.php?group={$value}'>{$cell1}</a>";

echo("<tr> <td>{$cell1}</td> </tr>"); 

}

echo ("</table> <br>");