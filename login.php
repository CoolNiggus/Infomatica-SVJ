<?php session_start(); ?>
<html>  
<head>
    <title>Hoop</title>

    <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">      
    <link rel="stylesheet" type="text/css" href="CSS\LoginStyle.css">

    <style>
    p{
        color: red;
    }
    </style>
</head>
<body class="login">

    <div id="HoopTitle">Hoop</div>
        
    <form class="login" action="" method="POST">
        <input class="login" type="text" name="username" placeholder="Username">
        <input class="login" type="password" name="pwd" placeholder="Password">
        <button id="login" name="submit" type="submit">Log In</button>
        <p><?php include("login_uploader.php") ?></p>
    </form>                    
        
    <a href="signup.php"><div id="SignupButton">Register</div></a>
              
</body>
</html>
