<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>De Concurrent | Contact</title>
    <link rel="stylesheet" href="css/Master.css">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav>
      <ul class="ul_menu">
      <li class="li_logo"><img class="logo" src="afb/Huis.png" alt=""></li>
        <li class="li_menu"><a href="index.html">HOME</a></li>
        <li class="li_menu"><a href="werkplaats.html">Omgeving</a></li>
        <li class="li_menu"><a href="products.php">WEBSHOP</a></li>
        <li class="li_menu"><a class="active" href="contact.php">CONTACT</a></li>
        <li class="li_menu"><a href="InloggenUitloggen.php">INLOGGEN/UITLOGGEN</a></li>
      </ul>
    </nav>
    <?php
    session_start();
    if (isset($_SESSION['contact']))
    {
      if ($_SESSION['contact'] == 0)
      {
        echo "<br /><br /><br /><br /><div class='products_uitlog'>U bericht is succesvol verzonden, bedankt!</div>";
        $_SESSION['contact'] = 1;
      }
    }

     ?>
    <br><br><br><br><br><br><br><br>
      <div class="contact">
          <h1>Heb je een vraag? Zit je met een probleem en kom je er niet uit? Dan zijn wij er om <br>
          je te helpen! U kunt contact met ons opnemen via :<br>
          - Tel:0808-2001833<br>
          - Mobiel: 06-93447567</br>
          </h1>
          <br><br></h1><br><br><br><br><br><br><br><br><br><br><br><br>
          <h2>
          U kunt ons ook bezoeken, we zijn aanwezig bij de volgende locatie :<br>
          Seinpoststraat 8<br>
          7766 BG Nunteren<br>
          </h2>
      </div><br><br><br><br><br><br><br><br><br>
      <div class="Fotocontact">
        <img  src="afb/map.png" alt="">
      </div>
      <h6> Of u kunt contact met ons nemen via het het online contactformulier <a href="contactformulier.php">hier</a> <br>
        (We proberen zo snel mogelijk op u te reageren) <h6>
    </article>
  </body>
</html>
