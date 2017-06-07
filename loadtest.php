<?php
session_start();

include("dbh.php");

$username = $_SESSION["CurrentUser"];

//displays the chosen test ID
echo($_GET['test']);