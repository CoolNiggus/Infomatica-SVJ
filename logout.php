<?php 
session_start();
unset($_SESSION["CurrentUser"]);
header("Location: login.php");




?>