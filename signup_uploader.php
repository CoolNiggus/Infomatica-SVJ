<?php

include "dbh.php";

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

$sql = "INSERT INTO user(username, email, pwd, firstname, lastname) 
VALUES('$username','$email','$pwd','$firstname','$lastname')";

$result = mysqli_query($conn, $sql);

//header("Location: login.html");

