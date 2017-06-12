<!--Page where it is able to add a new member to a group-->
<?php include("pagesetup.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOOP Homepage</title>
    <link rel="stylesheet" type="text/css" href="CSS\hoopbase.css">
    <link rel="stylesheet" type="text/css" href="CSS\homepagestyle.css">   

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

<!--Shows the input and option to add a new member to a group-->
<div id="PageContent">

    <form action='addpeople.php' method='POST'>
        <input type='text' name='hooper' placeholder='hooper username'>
        <button type = "submit" name = "submit">Add</button>
    </form>

</div>      


</body>
</html