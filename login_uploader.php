<?php

include "dbh.php";

$username = $_POST["username"];
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM user WHERE username = '$username' AND pwd = '$pwd' ";

$result = mysqli_query($conn, $sql);

if($row = mysqli_fetch_assoc($result)){
    echo "account exists";
} else {
    echo "wrong credentials!";
}

//header("Location: signup.html");
