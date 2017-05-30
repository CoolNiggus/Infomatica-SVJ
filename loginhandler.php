<?php
session_start();

include("dbh.php"); //needed for establishing connection with database

$username = $_POST["username"]; 
$pwd = $_POST["pwd"];

$sql = "SELECT * FROM users WHERE username = '$username' AND pwd = '$pwd' "; //makes query
$result = mysqli_query($conn, $sql); //runs query

if($row = mysqli_fetch_assoc($result)){ //checks if this row exist
    $_SESSION['CurrentUser'] = $username; //logs in
    header("Location: homepage.php"); //user is sent to hompage
}else{
    echo("Incorrect Username or Password");
}
?>