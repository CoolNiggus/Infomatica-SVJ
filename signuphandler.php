<!--Makes a new account after an user signed up.-->
<?php

include "dbh.php";

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

//Puts the data of the sign up form in the database table users.
$sql = "INSERT INTO users(username, email, pwd) 
    VALUES('$username','$email','$pwd')";

$result = mysqli_query($conn, $sql);

header("Location: login.php"); //Sents user to log in page.

?>