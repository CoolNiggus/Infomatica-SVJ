<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

//variables of the current test, questionID list and current answerset
$_SESSION["CurrentTestID"] = $_GET['test'];
$_SESSION["CurrentQuestionNum"] = 1;
$_SESSION["TestQuestionsIDs"];
$_SESSION["CurrentAnswerSet"];
$_SESSION["LastAnswerID"];

//creates the testinstance in the database
$query = "INSERT INTO `hoop`.`testinstances` (`ID`, `testID`, `userID`) 
        VALUES (NULL, '{$_SESSION['CurrentTestID']}', '$username')";
$result = mysqli_query($conn, $query);

$_SESSION["CurrentInstanceID"] = mysqli_insert_id($conn);


$query = "SELECT * FROM `testquestions` WHERE `testID` = {$_SESSION['CurrentTestID']}";
$result = mysqli_query($conn, $query);

$questionindex = 1;
$testquestions = array();
while ($row = mysqli_fetch_assoc($result)) {
    //gest all the wuestionID's related with this test
    $testquestions[$questionindex] = $row['questionID'];
    $questionindex++;
}

//makes the questions ID's list a session variable
$_SESSION["TestQuestionsIDs"] = $testquestions;


echo("<a href='answerquestionPAGE.php'>Start Toets</a>");

