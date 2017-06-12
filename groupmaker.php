<!--Shows the page where it is able to creat a new group-->
<?php include("pagesetup.php"); ?>
<?php include("accesscheck.php"); ?>

<html>
    <head>
        <title>HOOP</title>
         
        <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">
        <link rel="stylesheet" type="text/css" href="CSS\homepagestyle.css">
        <link rel="stylesheet" type="text/css" href="CSS\grouppagestyle.css">

    </head>
   
<body>

<!--Shows the username that is logged in on the page-->
<div id="loggedusername">Logged in as <?php echo($_SESSION["CurrentUser"]); ?> </div> 

<!--Shows the title on the page-->
<div id="HoopTitle">Hoop</div>

<!--Shows the options you can click on in every single page.-->
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

<!--Shows the form to create a new group-->
<div id="PageContent">

    <div id="groupform">
        <form action="creategroup.php" method="POST">
            <input type="text" name="name" placeholder="Group name">
            <button type="submit" name="submit">Groep maken</button>
        </form>   
    </div>

</div>  

</body>
</html>