<!DOCTYPE html>
<html>
<?php
        include "db_connection.php";
        ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tester.css" />
    <link href="https://fonts.googleapis.com/css?family=Muli|Oxygen|Raleway" rel="stylesheet"> 
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="achtergrond"></div>
        <div class="logo">
            <img src="images\logo_nttb_edited.png" width="100%">
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
        <a href="https://www.nttb.nl"><div class="links_knop">Vereniging</div></a>
        <a href="https://www.nttb.nl"><div class="links_knop">Spelers</div></a>
        <a href="https://www.nttb.nl"><div class="links_knop">Wedstrijden</div></a>
        
        </div>
        <div class="titel">
            <h2>Dit zijn de spelers gesorteerd op vereniging</h2>
        </div>
        <div class="content">
        <table class="blueTable">
    <tr><th>Voornaam</th><th>Achternaam</th><th>Vereniging</th><th>Rating</th></tr>
        <?php
        include "select_spelerslijst.php";
        ?>
        </div>
    </div>
</body>
</html>


           <!-- <video class="videolink" autoplay loop muted width="110%" height="100%">
                <source src="videos\video_link1_edited.mp4" type="video/mp4" />
            </video> -->

  <!-- <div class="links">
	   <video autoplay loop muted>
		     <source src="videos\video_link1_edited.mp4" type="video/mp4">
		     Your browser does not support the video tag.
	   </video>
     <div class="overlay-desc">
        <h1>Vereniging</h1>
     </div>
	</div> -->