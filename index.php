<!DOCTYPE html>
<html>
<?php
        include "db_connection.php";
        ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spelerslijst | NTTB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Muli|Oxygen|Raleway" rel="stylesheet"> 
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="achtergrond"></div>
        <div class="logo">
            <a href="index.php">
            <img src="images\logo_nttb_edited.png" width="100%">
            </a>
        </div>
        <div class="links">
            <!-- <ul class="block-menu">
                <li><a href="vereniging.php" class="three-d">
                    Home
                    <span aria-hidden="true" class="three-d-box">
                        <span class="front">Verenigingen</span>
                        <span class="back">Verenigingen</span>
                    </span>
                </a></li>
                <li><a href="tester.php" class="three-d">
                    Spelers
                    <span aria-hidden="true" class="three-d-box">
                        <span class="front">Spelers</span>
                        <span class="back">Spelers</span>
                    </span>
                </a></li>
                <li><a href="tester.php" class="three-d">
                        Wedstrijden
                        <span aria-hidden="true" class="three-d-box">
                            <span class="front">Wedstrijden</span>
                            <span class="back">Wedstrijden</span>
                        </span>
                    </a></li>
            </ul> -->
        <!-- oude nav -->
        <a href="verenigingen.php"><div class="links_knop">Vereniging</div></a>
        <a href="spelers.php"><div class="links_knop">Spelers</div></a>
        <a href="https://www.nttb.nl"><div class="links_knop">Wedstrijden</div></a>
        
        </div>
        <div class="titel">
            <h2>Index</h2>
        </div>
        <div class="content">
        </div>
    </div>
</body>
</html>