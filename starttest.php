<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

//variables of the current test, questionID list and current answerset
$_SESSION["CurrentTestID"] = $_GET['test'];
$_SESSION["CurrentQuestionNum"];
$_SESSION["TestQuestionsIDs"];
$_SESSION["CurrentAnswerSet"];


$query = "SELECT * FROM `testquestions` WHERE `testID` = {$_SESSION['CurrentTestID']} ";
$result = mysqli_query($conn, $query);

$questionindex = 1;
$testquestions = array();
while ($row = mysqli_fetch_assoc($result)) {
    
    $testquestions[$questionindex] = $row['questionID'];
    $questionindex++;
}

print_r($testquestions);

//displays the chosen test ID
//echo($_GET['test']);