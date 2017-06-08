<!--Makes a list of all the users that belong to a certain group-->
<?php
session_start();

include("dbh.php");

$groupID = $_GET["group"];
$username = $_SESSION["username"];

//greates a groupID session variable
$_SESSION["groupID"] = $groupID;

//Selects in the database in table "groupusers" who belongs to the groupname clicked on-->
$sql = "SELECT * FROM `groupusers` WHERE `groupID` = {$groupID}";
$result = mysqli_query($conn,$sql);

$userIDs = array();

//Makes a list of all the users that belong to a groupname-->
while($row = mysqli_fetch_assoc($result)){  
    $userIDs[] = $row['userID'];
}

echo ("<table style='width:50%'>
      <tr> <th>Hoopers that belong to this group</th> </tr>");

foreach ($userIDs as $value) { 

echo("<tr> <td>{$value}</td> </tr>"); 

}

echo ("</table> <br>");