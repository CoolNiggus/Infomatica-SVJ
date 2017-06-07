<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `groupusers` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn,$sql);

$groupIDs = array();

while($row = mysqli_fetch_assoc($result)){  
    $groupIDs[] = $row['groupID'];
    }

echo ("<table style='width:50%'>
      <tr> <th>Group Name</th> </tr>");

foreach ($groupIDs as $value) { 
    $sql = "SELECT * FROM `groups` WHERE `ID` ={$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

$cell1 = $row['name'];


echo("<tr> <td>{$cell1}</td> </tr>"); 

}

echo ("</table> <br>");