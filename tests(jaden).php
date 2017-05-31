<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `usertests` WHERE `userID` LIKE '{$username}'";
$result = mysqli_query($conn, $sql);

$testIDs = array();


while($row = mysqli_fetch_assoc($result)){  //gets all of the users testID's
    $testIDs[] = $row['testID'];
}

foreach ($testIDs as $value) { //displays all the tests
    $sql = "SELECT * FROM `tests` WHERE `ID` = {$value}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    //echo($row['testname'] . "<br>");

    //creates a table with the info
    echo
     '<table style="width:50%">
        <tr>
            <th>testname</th>
            <th>time</th>
            <th>creator</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        </table>'; 

}







