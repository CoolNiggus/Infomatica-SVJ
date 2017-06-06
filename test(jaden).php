<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

$sql = "INSERT INTO tests(testname) 
    VALUES('schiekunde')";

$result = mysqli_query($conn, $sql);

echo(mysqli_insert_id($conn));//displays the last autoincremented id



