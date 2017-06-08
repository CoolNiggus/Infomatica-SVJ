<!--Shows the members of a group-->
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
                <a href="#logout">Leerlingen</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Toetsen</a>
            <div>
                <a href="#homework">Toets maken</a>
                <a href="mytests.php">Overzicht van toetsen</a>
                <a href="#inbox">Antwoorden</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Huiswerk</a>
            <div>
                <a href="#name">Huiswerk aangeven</a>
                <a href="#account">Agenda</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Mail</a>
            <div>
                <a href="#name">Inbox</a>
                <a href="#account">Nieuw mail</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Account</a>
            <div>
                <a href="#name">Account bekijken</a>
                <a href="logout.php">Uit loggen</a>
            </div>          
        </li>
    </ul>
</nav>  

<!--Shows the members of a group in the page content-->
<div id="PageContent">

    <?php include("displaygroupdata.php") ?>
    <form action = "addhooper.php" method="POST">
        <button type = "submit" name = "submit">Add new Hooper</button>
    </form>
    <form action = "displaymytests(group).php" method="POST">
        <button type = "submit" name = "submit">give this group a test</button>
    </form>

</div>      


</body>
</html