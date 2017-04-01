<?php

include "dbh.php";

$username = $_POST["username"];
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM user WHERE username = '$username' AND pwd = '$pwd' ";

$result = mysqli_query($conn, $sql);

if($row = mysqli_fetch_assoc($result)){

    session_start;
    $_SESSION['username'] = $username;

    header("Location: homepage.html");
} else {
    echo "wrong username or password!";
}

