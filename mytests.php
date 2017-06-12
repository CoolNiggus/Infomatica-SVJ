<?php include("pagesetup.php"); ?>
<?php include("accesscheck.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOOP Homepage</title>
    <link rel="stylesheet" type="text/css" href="CSS\hoopbase.css">
    <link rel="stylesheet" type="text/css" href="CSS\homepagestyle.css">   

    <style>
    table, th, td {
    border: 5px solid black;
    border-collapse: collapse;
    }                        
    </style>

</head>
<body>

<div id="loggedusername">Logged in as <?php echo($_SESSION["CurrentUser"]); ?> </div> 


<div id="HoopTitle">Hoop</div>

<nav>  
    <ul>
        <li class="dropdown">
            <a class="dropdownbtn">Groepen</a>
            <div>
                <a href="grouplist.php">Groepen lijst</a>
                <a href="groupmaker.php">Groep maken</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Toetsen</a>
            <div>
                <a href="testlist.php">Toets maken</a>
                <a href="mytests.php">Overzicht van toetsen</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Account</a>
            <div>
                <a href="logout.php">Uit loggen</a>
            </div>          
        </li>
    </ul>
</nav>  

<div id="PageContent">
    
    <?php include("displaymytests.php"); ?>

    <form action="createtest(1).php" method="POST">
        <input type="text" name="name" placeholder="Test Name">
        <input type="number" name="questions" placeholder="Number of Questions" min="1">
        <input type="number" name="timer" value="30" min="1">
        <input type="submit" name="submit" value="Create Test">
    </form>

</div>      





        
</body>
</html>