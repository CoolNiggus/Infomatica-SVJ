<?php

//connects to host's databas eservice
$link = mysqli_connect($host, $dbusername, $dbpassword);

//removes any old version of the database and makes a new one
$sql =  'DROP DATABASE Hoop';
$result =  $result = mysqli_query($link, $sql);
$sql = 'CREATE DATABASE Hoop'



?>