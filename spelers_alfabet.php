<!DOCTYPE html>
<html>
    <?php
        include "db_connection.php";
        ?>
    <head>
        <title>Spelers | NTTB Database</title>

        <link rel="stylesheet" href="index.css" />
        <!-- <script src="main.js"></script> --> 

    </head>

    <body>
    <div class="container">
    <div class="logo">
        <h1>NTTB</h1>
        <h2>Afdeling Zuidwest</h2>
</div>
    <div class="sideborder_left"></div>
    <div class="sideborder_right"></div>
    <div class="links">
            <div><button class="button" onclick="window.location.href = 'index.php';">Home</button></div>
            <div class="dropdown"><button class="button">Verenigingen</button>
            <div class="dropdown-content">
                <a href="vereniging_kapelle.php">Kapelle</a>
                <a href="vereniging_kerkwerve.php">Kerkwerve</a>
                <a href="vereniging_markiezaat.php">Markiezaat</a>        
                <a href="vereniging_scaldina.php">Scaldina</a>
                <a href="vereniging_tanaka.php">Tanaka</a>
                <a href="vereniging_tco.php">TCO</a>
                </div>
            </div>
            <div><button class="button"onclick="window.location.href = 'spelers.php';">Spelerslijst</a></button></div>
            <div><button class="button">Wedstrijden</button></div>
    </div>
    <div class="content">
    <div class='button_sort'>
        <div><button class="button" onclick="window.location.href = 'spelerslijst_rating.php';">Gesorteerd<br>op rating</button></div>
        <div><button class="button" onclick="window.location.href = 'spelers.php';">Gesorteerd<br>op vereniging</button></div>
        <div><button class="button" onclick="window.location.href = 'spelers_alfabet.php';">Gesorteerd<br>op alfabet</button></div>
    </div>
    <h1>Dit zijn alle spelers van het voorjaarscompetitie 2018 4e klasse poule B:</h1>
    <table class="blueTable">
    <tr><th>Voornaam</th><th>Achternaam</th><th>Vereniging</th><th>Rating</th></tr>
<?php
        include "select_spelerslijst_alfabet.php";
        ?>
        </table>
    </div>
    </div>
    </body>
</html>