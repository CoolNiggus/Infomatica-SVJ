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


//creates users table in hoop
$sql = 'CREATE TABLE `hoop`.`users` ( 
        `ID` INT NOT NULL AUTO_INCREMENT ,
        `username` VARCHAR(32) NOT NULL , `password` VARCHAR(128) NOT NULL ,
        `email` VARCHAR(128) NOT NULL , `firstname` VARCHAR(128) NOT NULL , 
        `lastname` VARCHAR(128) NOT NULL , 
        PRIMARY KEY (`ID`)) ENGINE = InnoDB;';

$result = mysqli_query($link, $sql);
echo "created table: users. <br>";


//create tests table
$sql = 'CREATE TABLE `hoop`.`tests` ( 
        `ID` INT NOT NULL AUTO_INCREMENT , 
        `testname` VARCHAR(128) NOT NULL , 
        `timer` INT(3) NOT NULL , 
        `date` DATETIME NOT NULL , 
        PRIMARY KEY (`ID`)) ENGINE = InnoDB;';

$result = mysqli_query($link, $sql);
echo "created table: tests. <br>";


//create questions table
$sql = 'CREATE TABLE `hoop`.`questions` ( 
        `ID` INT NOT NULL AUTO_INCREMENT , 
        `text` TEXT NOT NULL , 
        PRIMARY KEY (`ID`)) ENGINE = InnoDB;';

$result = mysqli_query($link, $sql);
echo "created table: questions. <br>";


//create answers table
$sql = 'CREATE TABLE `hoop`.`answers` ( 
        `ID` INT NOT NULL AUTO_INCREMENT , 
        `text` TEXT NOT NULL , 
        PRIMARY KEY (`ID`)) ENGINE = InnoDB;';

$result = mysqli_query($link, $sql);
echo "created table: answers. <br>";




?>