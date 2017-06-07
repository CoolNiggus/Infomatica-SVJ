<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

//variables of the current test, questionID list and current answerset
$_SESSION["CurrentTestID"];
$_SESSION["CurrentQuestionNum"];
$_SESSION["TestQuestionsIDs"];
$_SESSION["CurrentAnswerSet"];

//displays the chosen test ID
echo($_GET['test']);