<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];
$currentquestionNum = $_SESSION["CurrentQuestionNum"];

//gets the question ID of the current question
$currentquestionID = $_SESSION["TestQuestionsIDs"][$currentquestionNum];

//current answers list
$answerIDs = array();
$query = "SELECT * FROM `questionanswers` WHERE `questionID` = {$currentquestionID}";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $answerIDs[] = $row["answerID"];
}

//gets the text of the current question
$query = "SELECT * FROM `questions` WHERE `ID` = {$currentquestionID}";
$result = mysqli_query($conn, $query);
$currentquestiontext = mysqli_fetch_assoc($result)["text"];

echo($currentquestiontext."<br><br>");