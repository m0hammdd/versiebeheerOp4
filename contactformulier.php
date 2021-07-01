<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>De Concurrent | Contactformulier</title>
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>
  <nav>
      <ul class="ul_menu">
      <li class="li_logo"><img class="logo" src="afb/Huis.png" alt=""></li>
        <li class="li_menu"><a href="index.html">HOME</a></li>
        <li class="li_menu"><a href="werkplaats.html">Omgeving</a></li>
        <li class="li_menu"><a href="products.php">WEBSHOP</a></li>
        <li class="li_menu"><a class="active"  href="contact.php">CONTACT</a></li>
        <li class="li_menu"><a href="InloggenUitloggen.php">INLOGGEN/UITLOGGEN</a></li>
      </ul> <br><br><br><br><br><br><br><br><br>
    </nav>
    <article>
      <form class="formulier" action="bericht.php" method="post">
        <h1>Contact Formulier</h1> <hr> <br>
        <input class="form_input" type="email" name="email" placeholder="E-mail" required> <br>
        <input type="text" name="naam" class="form_input" placeholder="Naam" required> <br> <br>
        <textarea class="text_form" name="bericht" rows="13" cols="80" placeholder="Bericht (4000 Max)" required></textarea> <br> <br>
        <button type="submit" class="form_btn" name="button">Verzenden</button>
      </form>
    </article>
  </body>
</html>
