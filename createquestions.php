<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];
$timer = $_POST['timer'];
$testname = $_POST['name'];
$numquestions = $_POST['questions'];

//inserts the new test
$query = "INSERT INTO `hoop`.`tests` (`ID`, `testname`, `timer`, `date`, `creatorID`) 
        VALUES (NULL, '{$testname}', '{$timer}', CURRENT_TIMESTAMP, '{$username}')";
$result = mysqli_query($conn, $query);
$_SESSION["testID"] = mysqli_insert_id($conn);//gets the new tests ID

$_SESSION["numquestions"] = $numquestions;

//displays form
echo('<form action="createtest(2).php" method="POST">');
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

//echo $_SESSION["testID"];