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

    
   
    <form class="login" action="" method="POST">
        <input class="login" type="text" name="username" placeholder="Username"> <!--Checking if the username is not taken-->
        <input class="login" type="text" name="email" placeholder="E-Mail"> <!--Checking if E-Mail Address is not used-->
        <input class="login" type="text" name="firstname" placeholder="First Name">
        <input class="login" type="text" name="lastname" placeholder="Last Name">
        <input class="login" type="password" name="pwd" placeholder="Password"> <!--Double checking of password??-->
        <input class="login" type="text" placeholder="School"> <!--Add a list of options-->
        <input class="login" type="date" placeholder="When were you born dude?"> <!--perhaps 3 inline boxes; |dd|mm|yy| ???-->       
        <button id="login" type="submit">Submit</button>
    </form>  

    <p><?php include "signup_uploader.php" ?></p>
   
</body>
</html>


