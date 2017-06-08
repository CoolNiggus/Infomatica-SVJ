<?php
//this script displays the test results

session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "SELECT * FROM `questioninstances` WHERE `testinstanceID` = {$_SESSION['CurrentInstanceID']} ";
$result = mysqli_query($conn, $sql);

$questions = array();

//gets all of the users answers
while($row = mysqli_fetch_assoc($result)){  
    $questions[] = $row['answeriscorrect'];
}

$totalcorrect = 0;//number of correct answers
$totalquestions = count($questions);

foreach ($questions as $value) {
    if($value == 1){
        $totalcorrect++;
    }
}

$grade = $totalcorrect/$totalquestions * 10;
echo("Correct: ".$totalcorrect."<br>");
echo("Total: ".$totalquestions."<br>");
echo("Grade: ".$grade);