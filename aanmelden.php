<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>De Concurrent | Aanmelden</title>
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
        <li class="li_menu"><a href="contact.php">CONTACT</a></li>
        <li class="li_menu"><a class="active" href="InloggenUitloggen.php">INLOGGEN/UITLOGGEN</a></li>
      </ul>
    </nav> <br><br><br><br>
    <article>
      <form class="inlog_form" action="aangemeld.php" method="post">
        <input type="text" name="naam" placeholder="Naam" required> <br>
        <input type="email" name="email" placeholder="E-mail" value=""> <br>
        <input type="text" name="adres" placeholder="Adres" required> <br>
        <input type="text" name="postcode" placeholder="Postcode" required> <br>
        <input type="text" name="plaats" placeholder="Plaats" required> <br>
        +31<input type="number" class="form_tel" name="telefoon" placeholder="Telefoon" size="10" required> <br>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord" required> <br> <br>
        <input type="submit" name="" value="AANMELDEN"> <br> <br> <br>
      </form>

    </article>
  </body>
</html>
