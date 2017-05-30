<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>HOOP</title>
    
    <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">
    <link rel="stylesheet" type="text/css" href="CSS\LoginStyle.css">        
</head>
<body class="login">

    <div id="HoopTitle">Hoop</div>
   
    <form class="login" action="signuphandler.php" method="POST">
        <input class="login" type="text" name="username" placeholder="Username"> <!--Checking if the username is not taken-->
        <input class="login" type="email" name="email" placeholder="E-Mail"> <!--Checking if E-Mail Address is not used-->
        <input class="login" type="password" name="pwd" placeholder="Password"> <!--Double checking of password??-->
        <button id="login" type="submit">sign up</button>
    </form>  
   
</body>
</html>



