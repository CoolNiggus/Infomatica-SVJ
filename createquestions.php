<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$testname = $_POST['name'];
$numquestions = $_POST['questions'];

$_SESSION["testname"] = $testname;
$_SESSION["numquestions"] = $numquestions;

//displays form
echo('<form action="createanswers.php" method="POST">');
for ($i=1; $i <= $numquestions; $i++) {
    $head = "Question: " . $i; //field pretext
    //question text var is "$_POST["questiontext_$i"]
    //answer amount var is "$_POST["numanswers_$i"]
    echo('
        '.$head.'<input type="text" name="questiontext_'.$i.'" placeholder="Question Text"> 
        <input type="number" name="numanswers_'.$i.'" placeholder="number of choices">
        <br>
    ');
}
echo('<input type="submit" name="submit" value="Next"> </form>');