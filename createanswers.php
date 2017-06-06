<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$testname = $_SESSION['testname'];
$numquestions = $_SESSION['numquestions'];

$questiontexts = array();
$numanswers = array();

//fills in the above arrays with the question texts and amountof answers per question
for ($i=1; $i <= $numquestions; $i++) {
    $fieldname1 = "questiontext_".$i; 
    $questiontexts[$i] = $_POST[$fieldname1];
    $fieldname2 = "numanswers_".$i;
    $numanswers[$i] = $_POST[$fieldname2];
}


print_r($questiontexts);
print_r($numanswers);


