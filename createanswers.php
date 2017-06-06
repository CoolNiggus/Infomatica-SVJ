<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$testname = $_SESSION['testname'];
$numquestions = $_SESSION['numquestions'];

//array with all the question texts where the question number equals the index of the array
$questiontexts = array();
$numanswers = array();

//array with the wuestion ID's
$questionIDs = array();

//fills in the above arrays with the question texts and amount of answers per question
for ($i=1; $i <= $numquestions; $i++) {
    //puts all the created questions in an array
    $fieldname1 = "questiontext_".$i; 
    $questiontexts[$i] = $_POST[$fieldname1];

    //imports the questiones array to data base
    $query = "INSERT INTO `hoop`.`questions` (`ID`, `text`) VALUES (NULL, '{$questiontexts[$i]}')";
    $result = mysqli_query($conn);
    $questionIDs[$i] =  mysqli_insert_id($conn);

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



