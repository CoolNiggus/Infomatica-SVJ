<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$testID = $_SESSION["testID"];
$testname = $_SESSION['testname'];
$numquestions = $_SESSION['numquestions'];

//array with all the question texts where the question number equals the index of the array
$questiontexts = array();
$numanswers = array();

//array with the amount of answers for the question
$questnumanswers = array();

//fills in the above arrays with the question texts and amount of answers per question
for ($i=1; $i <= $numquestions; $i++) {
    //puts all the created questions in an array
    $fieldname1 = "questiontext_".$i; 
    $questiontexts[$i] = $_POST[$fieldname1];

    //imports the questiones array to data base and links the question with the test
    $query = "INSERT INTO `hoop`.`questions` (`ID`, `text`) VALUES (NULL, '{$questiontexts[$i]}')";
    $result = mysqli_query($conn, $query);
    $questionID =  mysqli_insert_id($conn);
    
    //inserts the link question-test
    $query = "INSERT INTO `hoop`.`testquestions` (`testID`, `questionID`) 
            VALUES ('$testID', '$questionID')";
    $result = mysqli_query($conn, $query);

    $fieldname2 = "numanswers_".$i;
    $numanswers[$i] = $_POST[$fieldname2];

    $questnumanswers[$questionID] = $_POST[$fieldname2];
}

//stores questionID's as a session variable
$_SESSION["questnumanswers"] = $questnumanswers;


//displays the questions and area to fill in the answers
echo('<form action="createtest(3).php" method="POST">');
for ($i=1; $i <= $numquestions; $i++) { 
    echo($questiontexts[$i]."<br>");
    for ($j=1; $j <= $numanswers[$i]; $j++) { 
        //creates an input text field with input name = q<questionnumber>a<answernumber>
        echo('<input type="radio" name="q'.$i.'" value="q'.$i.'a'.$j.'"><input type="text" name="q'.$i.'a'.$j.'" placeholder="Answer Text"><br>');
    }
    echo("<br>");
}
echo('<input type="submit" name="submit" value="Next"> </form>');



