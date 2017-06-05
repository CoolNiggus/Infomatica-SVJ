<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `usertests` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn, $sql);

$testIDs = array();

//gets all of the users testID's
while($row = mysqli_fetch_assoc($result)){  
    $testIDs[] = $row['testID'];
}

//start of making the html table
echo ("<table style='width:50%'>
      <tr> <th>Test Name</th> <th>Time</th> <th>Creator</th> </tr>");

//puts every test in a table
foreach ($testIDs as $value) { 
    $sql = "SELECT * FROM `tests` WHERE `ID` = {$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $testname = $row['testname'];
    $testime = $row['timer'];
    $creator = $row['creatorID'];

    echo("<tr> <td>{$testname}</td> <td>{$testime}min</td> <td>{$creator}</td> <td>{$value}</td> </tr>"); 

}

echo ("</table> <br>");
//finished