<!--Shows a list of all the groups that an user belongs to-->
<?php
 include("pagesetup.php"); ?>

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

<!--Shows the list of the groups of an user in the page content-->
<div id="PageContent">

    <?php include("displaygrouplist.php") ?>

</div>      


</body>
</html>