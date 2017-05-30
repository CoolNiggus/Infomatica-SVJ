<?php

include "dbh.php";

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

$sql = "INSERT INTO users(username, email, pwd) 
    VALUES('$username','$email','$pwd')";

$result = mysqli_query($conn, $sql);

header("Location: login.php");

?>