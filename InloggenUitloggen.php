<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>De Concurrent | Inloggen/Uitloggen</title>
    <link rel="stylesheet" href="css/Master.css">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  </head>
  <body >
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
      <?php
        session_start();
        $connection = mysqli_connect("localhost","root","", "de_concurrent");
        if (!isset($_SESSION['login']))
        {
          $_SESSION['login'] = 0;
        }
        if ($_SESSION['login'] == 1)
        {
      ?>

      <?php
      $query2 = "SELECT * FROM klantgegevens WHERE email='$_SESSION[ingelogd_email]'";
      $resultaat2 = mysqli_query($connection, $query2);

      //Code...
      while($row2 = $resultaat2->fetch_assoc())
      {
        $naam = $row2["naam"];
      }
      ?>

      <!--UITLOGGEN-->
      <form class="inlog_form" action="uitloggen.php" method="post">
        u kunt nu <a href="products.php">bestelling</a> doen! <br>
        Veel koopplezier! <br> <br>
        <button type="submit" name="button">UITLOGGEN</button>

      </form>


      <?php
        }
        else
        {
      ?>

      <!-- INLOGGEN -->
      <form class="inlog_form" action="ingelogd.php" method="post">
        <input type="text" name="inlog_email" placeholder="E-mail" required><br> </br>
        <input type="password" name="inlog_wachtwoord" placeholder="Wachtwoord" required> <br> <br>
        <input type="submit" name="" value="INLOGGEN"> <br> <br> <br>
        Nog geen account? Meld u <a href="aanmelden.php">hier</a> gratis aan! <br>
        (Als u aanmeld kunt u bestellingen doen op onze website)
      </form>

    <?php
        }
        exit;
      ?>
    </article>
  </body>
</html>
