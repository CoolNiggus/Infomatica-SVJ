
<?php include("pagesetup.php"); ?>

<html>
    <head>
        <title>Hoop</title>
        
        <link rel="stylesheet" type="text/css" href="CSS\HoopBase.css">
        <link rel="stylesheet" type="text/css" href="CSS\homepagestyle.css">
        
        <style>
            #Us{
                top: 0%;
                left:1%;
                position: absolute;
                color:white;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
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
                <a href="#account">Groep maken</a>
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
                <a href="#logout">Uit loggen</a>
            </div>          
        </li>
    </ul>
</nav>

    </body>
</html>
