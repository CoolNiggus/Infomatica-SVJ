<?php

include "dbh.php";

$username = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

//checks if the form is valid

$checkusername = (isset($_POST['username']) && !(empty($_POST['username'])) );
$checkemail = (isset($_POST['email']) && !(empty($_POST['email'])) );
$checkpwd = (isset($_POST['pwd']) && !(empty($_POST['pwd'])) );
$checkfirstname = (isset($_POST['firstname']) && !(empty($_POST['firstname'])) );
$checklastname = (isset($_POST['lastname']) && !(empty($_POST['lastname'])) );

if($checkusername && $checkemail && $checkpwd && $checkfirstname && $checklastname){
    $sql = "INSERT INTO Users(username, email, pwd, firstname, lastname) 
    VALUES('$username','$email','$pwd','$firstname','$lastname')";

    $result = mysqli_query($conn, $sql);

    echo "congratulations, your account has been made!"; //note: doesnt check if username already exists

} else {
    echo "some requiered fields were left open";
}

?>