<!--Makes a list of all the groups that a user belongs to-->
<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

//Selects in the database which groups belong to a certain user-->
$sql = "SELECT * FROM `groupusers` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn,$sql);

$groupIDs = array();

//Makes a list of all the groups that a certain user belongs to-->
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
$cell1 = "<a href='groupdata.php?group={$value}'>{$cell1}</a>";

echo("<tr> <td>{$cell1}</td> </tr>"); 

}

echo ("</table> <br>");