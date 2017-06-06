<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$testname = $_SESSION['testname'];
$numquestions = $_SESSION['numquestions'];

//array with all the question texts where the question number equals the index of the array
$questiontexts = array();
$numanswers = array();

//fills in the above arrays with the question texts and amount of answers per question
for ($i=1; $i <= $numquestions; $i++) {
    $fieldname1 = "questiontext_".$i; 
    $questiontexts[$i] = $_POST[$fieldname1];
    $fieldname2 = "numanswers_".$i;
    $numanswers[$i] = $_POST[$fieldname2];
}

//displays the questions and area to fill in the answers
echo('<form action="" method="POST">');
for ($i=1; $i <= $numquestions; $i++) { 
    echo($questiontexts[$i]."<br>");
    for ($j=1; $j <= $numanswers[$i]; $j++) { 
        //creates an input text field with input name = q<questionnumber>a<answernumber>
        echo('<input type="text" name="q'.$i.'a'.$j.'" placeholder="Answer Text"><br>');
    }
    echo("<br>");
}
echo('<input type="submit" name="submit" value="Next"> </form>');



