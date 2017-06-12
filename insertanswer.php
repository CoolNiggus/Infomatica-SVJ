<?php
//this script imports the selected answer of the student

session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$testinstanceID = $_SESSION["CurrentInstanceID"];//gets the ID of the instance of the test which is being made
$currentquestionID = $_SESSION["TestQuestionsIDs"][$_SESSION["CurrentQuestionNum"]];//gets the question ID of the current question
$lastanswerID = $_POST["answer"];//gets the chosen answer ID

//checks if given answer matches the right answer
$query = "SELECT * FROM `questionanswers` WHERE `questionID` = $currentquestionID AND `answerID` = $lastanswerID";
$result = mysqli_query($conn, $query);
$iscorrect = mysqli_fetch_assoc($result)['iscorrect'];//is the value of the chosen answer (true/false)

//inserts the answer in the question instances table
$query = "INSERT INTO `hoop`.`questioninstances` (`testinstanceID`, `questionID`, `answerID`, `answeriscorrect`) 
            VALUES ('$testinstanceID', '$currentquestionID', '$lastanswerID', '$iscorrect')";
$result = mysqli_query($conn, $query);

//increments value to go to next question
$_SESSION["CurrentQuestionNum"]++;

//indicates if the user finished the test
if ($_SESSION["CurrentQuestionNum"] > count($_SESSION["TestQuestionsIDs"])) {
    header("Location: testresultsPAGE.php");//heads to testresults.php
} else {
    //head to next question
    header("Location: answerquestionPAGE.php");

}