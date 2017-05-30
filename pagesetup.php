<?php

//use this (include) at the very beginning of every pagefile that the user need to be logged
//on to to use.

session_start();

if(!(isset($_SESSION['CurrentUser']))){
    header("Location: login.php");
}

?>