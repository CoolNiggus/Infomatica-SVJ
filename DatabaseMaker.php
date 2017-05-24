<?php

echo 'creating database... <br>';

$host = "localhost"; //need to be an admin on the database service
$dbusername = "root";
$dbpassword = "root";

//connects to host's databas eservice
$link = mysqli_connect($host, $dbusername, $dbpassword);

//removes any old version of the database and makes a new one
$sql =  'DROP DATABASE hoop';
$result = mysqli_query($link, $sql);
echo "removed any previuos instance of hoop data base. <br>";


$sql = 'CREATE DATABASE hoop';
$result = mysqli_query($link, $sql);
echo "created new database hoop. <br>";


//updates connect to the new database
$link = mysqli_connect($host, $dbusername, $dbpassword, 'hoop');

//creates user table in hoop
$sql = 'CREATE TABLE user (
	username varchar(32) not null PRIMARY key,
    email varchar(128),
    pwd varchar(128),
    firstname varchar(128),
    lastname varchar(128)
)';

$result = mysqli_query($link, $sql);
echo "created table: user";

//create test table
$sql = 'CREATE TABLE test (
    testID INT AUTO_INCREMENT,
    username varchar(32),
    primary key (testID),
    FOREIGN KEY (username) REFERENCES user(username)
)';

$result = mysqli_query($link, $sql);
echo "created table: test";

//create question table
$sql = 'CREATE TABLE question (
	username varchar(32),
    testID INT AUTO_INCREMENT,
    questionID INT AUTO_INCREMENT,
    primary key (username, testID, questionID)
)';

$result = mysqli_query($link, $sql);
echo "created table: question";

//create answer table
$sql = 'CREATE TABLE answer (
	username varchar(32),
    testID INT AUTO_INCREMENT,
    questionID INT AUTO_INCREMENT,
    answerID INT AUTO_INCREMENT,
    primary key (username, testID, questionID, answerID)
)';

$result = mysqli_query($link, $sql);
echo "created table: answer";




?>