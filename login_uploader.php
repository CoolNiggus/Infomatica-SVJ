<?php

include "dbh.php";

$username = $_POST["username"];
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM user WHERE username = '$username' AND pwd = '$pwd' ";

$result = mysqli_query($conn, $sql);

echo "/".$username."/";


if($row = mysqli_fetch_assoc($result)){

        header("Location: homepage.html");
    } else {
        echo "wrong username or password!";
    }

?>