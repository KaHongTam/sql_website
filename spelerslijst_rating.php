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
            <div class="card"><a href="verenigingen.php">
                <div class="front">Verenigingen</div>
                <div class="back">Verenigingen</div></a>
            </div>
            <div class="card"><a href="spelers.php">
                <div class="front">Spelers</div>
                <div class="back">Spelers</div></a>
            </div>
            <div class="card"><a href="https://www.nttb.nl">
                <div class="front">NTTB</div>
                <div class="back">NTTB</div></a>
            </div>
        </div>     
        <div class="nav_vereniging">
            <a class="knopje" href="spelerslijst_rating.php"><div>gesorteerd op rating</div></a>
            <a class="knopje" href="spelers.php"><div>gesorteerd op vereniging</div></a>
            <a class="knopje" href="spelers_alfabet.php"><div>gesorteerd op alfabet</div></a>
        </div>
        <div class="titel">
            <h2>Dit zijn de spelers gesorteerd op rating</h2>
        </div>
        <div class="content">
        <table class="blueTable">
    <tr><th>Voornaam</th><th>Achternaam</th><th>Vereniging</th><th>Rating</th></tr>
        <?php
        include "select_spelerslijst_rating.php";
        ?>
        </div>
    </div>
</body>
</html>