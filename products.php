<?php

?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>De Concurrent | Webshop</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  </head>
  <body>
  <body>
    <nav>
      <ul class="ul_menu">
      <li class="li_logo"><img class="logo" src="afb/Huis.png" alt=""></li>
        <li class="li_menu"><a href="index.html">HOME</a></li>
        <li class="li_menu"><a href="werkplaats.html">Omgeving</a></li>
        <li class="li_menu"><a class="active" href="products.php">WEBSHOP</a></li>
        <li class="li_menu"><a href="contact.php">CONTACT</a></li>
        <li class="li_menu"><a href="InloggenUitloggen.php">INLOGGEN/UITLOGGEN</a></li>
      </ul>
    </nav> <br><br><br><br>
    <header>
      <?php
      session_start();
      $connection = mysqli_connect("localhost","root","", "de_concurrent");
      if (!isset($_SESSION['login']))
      {
        $_SESSION['login'] = 0;
      }
      ?>
        <div class="onzeProducten">
            <h4>The best of the best</h4>
        </div>
        <?php
        if ($_SESSION['login'] == 0)
        {
          echo "<br /><div class='products_uitlog'> U dient in te loggen voordat u bestellingen kunt doen </div>";
        }
        //Als er is besteld
        if (isset($_SESSION['besteld']))
        {
          if ($_SESSION['besteld'] == 0)
          {
            echo "<br /><div class='products_uitlog'>U bestelling is succesvol ontvangen, u krijgt een bevestiging van ons <br />
            Indien dit niet mogelijk is, graag contact opnemen met ons via telefoon of mail.</div>";
            $_SESSION['besteld'] = 1;
          }
        }
        ?>
        <br><br>
        <div class="grid">
            <div class="inside">
                <div>
                <img id="diva" src= afb/interieur1.jpg alt="">
                <img id="diva" src= afb/interieur2.jpg alt="">
                <img id="diva" src= afb/interieur3.jpg alt="">
                <img id="diva" src= afb/interieur4.jpg alt="">
                <img id="diva" src= afb/interieur5.jpg alt="">

                </div>
                <h1>Appartement Chalet Lausanne </h1>
                <p>Uitzicht over bergen</br>
                Afstand tot stadscentrum 1,1 km</br>
                Afstand tot openbaar vervoer 50 m</br>
                Afstand tot golfbaan 3 km</br>
                Afstand tot skipiste / berglift 1,6 km </br>
                ! Voor maximaal 5 persoenen ! </p>
                <div>
                    <h3>Prijs:</h3>
                    <p>voor &euro;1691,00</p>
                    <form id="product" action="besteld.php" method="POST">
                        <?php if($_SESSION['login'] == 1) { echo '<button class="btn" type="submit" name="bestelbtn" value="Diva Plus Transportfiets">Bestel!</button>'; } ?>
                    </form>
                </div>
            </div>
        </div>
</header>
  </body>
</html>
