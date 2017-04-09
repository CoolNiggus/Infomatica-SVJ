<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "hoop";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());   
}
