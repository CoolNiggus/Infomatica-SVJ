<!--Shows the log in page-->
<?php session_start(); ?>
<html>  
<head>
    <title>Hoop</title>

    <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">      
    <link rel="stylesheet" type="text/css" href="CSS\LoginStyle.css">

</head>
<body class="login">

<!--Shows the title on the page-->
    <div id="HoopTitle">Hoop</div>
        
<!--Shows the form to log in an account-->        
    <form class="login" action="loginhandler.php" method="POST">
        <input class="login" type="text" name="username" placeholder="Username">
        <input class="login" type="password" name="pwd" placeholder="Password">
        <button id="login" name="submit" type="submit">Log In</button>
    </form>                    

<!--Shows the option to sign up-->
    <a href="signup.php"><div id="SignupButton">Register</div></a>
              
</body>
</html>
