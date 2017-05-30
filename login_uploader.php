<?php

include("dbh.php"); //handles connection

$username = $_POST["username"];
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM users WHERE username = '$username' AND pwd = '$pwd' ";

$result = mysqli_query($conn, $sql);

if(isset($_POST["submit"])){
    if(empty($username) || empty($pwd)){
        echo "please fill in the fields";
    }else{
        if($row = mysqli_fetch_assoc($result)){
            $_SESSION['CurrentUser'] = $username;

            header("Location: homepage.php");
        } else {
            echo "wrong username or password!";
        }
    }
}


?>