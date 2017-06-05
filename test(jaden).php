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
      <tr> <th>testname</th> <th>time (minutes)</th> <th>creator</th> </tr>");

foreach ($testIDs as $value) { //displays all the tests
    $sql = "SELECT * FROM `tests` WHERE `ID` = {$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $testname = $row['testname'];
    $testime = $row['timer'];
    $creator = $row['creatorID'];

    echo("<tr> <td>{$testname}</td> <td>{$testime}</td> <td>{$creator}</td> </tr>"); 

}

echo ("</table> <br>");
//finished






