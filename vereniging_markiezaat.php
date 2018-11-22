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
        <a href="verenigingen.php"><div class="links_knop">Vereniging</div></a>
        <a href="spelers.php"><div class="links_knop">Spelers</div></a>
        <a href="https://www.nttb.nl"><div class="links_knop">Wedstrijden</div></a>
        
        </div>
        <div class="nav_vereniging">
            <a class="knopje" href="vereniging_kapelle.php"><div>Kapelle</div></a>
            <a class="knopje" href="vereniging_kerkwerve.php"><div>Kerkwerve</div></a>
            <a class="knopje" href="vereniging_markiezaat.php"><div>Markiezaat</div></a>
            <a class="knopje" href="vereniging_scaldina.php"><div>Scaldina</div></a>
            <a class="knopje" href="vereniging_tanaka.php"><div>Tanaka</div></a>
            <a class="knopje" href="vereniging_tco.php"><div>TCO</div></a>
        </div>
        <div class="titel">
            <h2>Dit zijn de spelers van Markiezaat</h2>
        </div>
        <div class="content">
        <table class="blueTable">
    <tr><th>Voornaam</th><th>Achternaam</th><th>Rating</th></tr>
        <?php
        include "select_markiezaat.php";
        ?>
        </table>
        </div>
    </div>
</div>
</body>
</html>