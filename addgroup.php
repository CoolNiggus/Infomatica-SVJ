<?php
session_start();

include("dbh.php");

$groupname = $_POST["name"];
$username = $_SESSION["CurrentUser"];

$query = "INSERT INTO `hoop`.`groups` (`ID`, `name`) VALUES (NULL, '$groupname')";
$result = mysqli_query($conn, $query);
