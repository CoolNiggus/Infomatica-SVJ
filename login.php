<!DOCTYPE>
<html>  
<head>
    <title>Hoop</title>

    <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">      
    <link rel="stylesheet" type="text/css" href="CSS\LoginStyle.css">

         
</head>
<body class="login">

    <div id="HoopTitle">Hoop</div>
        
    <form class="login" action="" method="POST">
        <input class="login" type="text" name="username" placeholder="Username">
        <input class="login" type="password" name="pwd" placeholder="Password">
        <button id="login" type="submit">Log In</button>
    </form>  

    <?php include("login_uploader.php") ?>                  
        
    <a href="signup.html"><div id="SignupButton">Register</div></a>
              
</body>
</html>
