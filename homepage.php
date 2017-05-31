<?php include("pagesetup.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOOP Homepage</title>
    <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">
    <link rel="stylesheet" type="text/css" href="CSS\homepagestyle.css">   

    <style>
            

            #PageContent{
                padding:60px;
                background-color: pink;
            }
        </style>

</head>
<body>

<div id="Us">Logged in as <?php echo($_SESSION["CurrentUser"]); ?> </div> 


<div id="HoopTitle">Hoop</div>

<nav>  
    <ul>
        <li class="dropdown">
            <a class="dropdownbtn">Groepen</a>
            <div>
                <a href="#name">Groepen lijst</a>
                <a href="groupmaker.html">Groep maken</a>
                <a href="#logout">Leerlingen</a>
            </div>          
        </li><li class="dropdown">
            <a class="dropdownbtn">Toetsen</a>
            <div>
                <a href="#homework">Toets maken</a>
                <a href="#friends">Overzicht van toetsen</a>
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

<div id="PageContent">box</div>      





        
</body>
</html>