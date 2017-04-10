<?php

echo 'creating database...';

$host = "localhost"; //need to be an admin on the database service
$dbusername = "root";
$dbpassword = "root";

//connects to host's databas eservice
$link = mysqli_connect($host, $dbusername, $dbpassword);

//removes any old version of the database and makes a new one
$sql =  'DROP DATABASE hoop';
$result = mysqli_query($link, $sql);

$sql = 'CREATE DATABASE hoop';
$result = mysqli_query($link, $sql);

//updates connect to the new database
$link = mysqli_connect($host, $dbusername, $dbpassword, 'hoop');

//creates the 'users' table
CREATE TABLE User (
	username varchar(32) not null PRIMARY key,
    email varchar(128),
    pwd varchar(128),
    firstname varchar(128),
    lastname varchar(128)
)






?>