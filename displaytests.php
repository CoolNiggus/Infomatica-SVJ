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
    
    //sets variables
    $cell1 = $row['testname'];
    $cell1 = "<a href='starttestPAGE.php?test={$value}'>{$cell1}</a>"; //creates a link to take the test
    $cell2 = $row['timer'];
    $cell3 = $row['creatorID'];



    echo("<tr> <td>{$cell1}</td> <td>{$cell2}min</td> <td>{$cell3}</td> </tr>"); 

}

echo ("</table> <br>");
//finished