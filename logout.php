<!--Makes an user log out of an account.-->
<?php 
session_start();
unset($_SESSION["CurrentUser"]); //Logs user out of the account.
header("Location: login.php"); //Sents user back to login page.




?>