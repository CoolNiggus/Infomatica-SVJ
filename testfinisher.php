<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$questionanswers = $_SESSION["questnumanswers"];

$qnum = 1;
//creates arrays with 
foreach ($questionanswers as $ID => $number) {
    //gets the answer related with its question
    for ($j=1; $j <= $number ; $j++) { 
            $answer = $_POST["q".$qnum."a".$j];
            
            $correct = 0;

            //checks if answer is correct
            if(("q".$qnum."a".$j) == ($_POST["q".$qnum])){
                    $correct = 1;
            } else {
                    $correct = 0;
            }

            //inserts question and gets the ID
            $query = "INSERT INTO `hoop`.`answers` (`ID`, `text`) 
                    VALUES (NULL, '$answer')";
            $result = mysqli_query($conn, $query);
            $answerID = mysqli_insert_id($conn);

            //creates a link between quesntion and answer in the table
            $query = "INSERT INTO `hoop`.`questionanswers` (`questionID`, `answerID`, `iscorrect`) 
                    VALUES ('$ID', '$answerID', '$correct')";
            $result = mysqli_query($conn, $query);
        }

    $qnum++;
}

//put answers in db
//link answers with questions