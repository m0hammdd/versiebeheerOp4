<?php
  session_start();
  $connection = mysqli_connect("localhost","root","", "de_concurrent");

  $aanmeld_email = $_POST['email'];

  $query1 = "SELECT * FROM klantgegevens WHERE email = '$aanmeld_email';";
  $resultaat1 = mysqli_query($connection, $query1);

  if (mysqli_num_rows($resultaat1) > 0)
  {
    while($row1 = mysqli_fetch_array($resultaat1, MYSQLI_NUM))
    {
      header("location: InloggenUitloggen.php");
    }
  }
  else
  {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $telefoon = $_POST['telefoon'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "INSERT INTO klantgegevens(naam, email, adres, postcode, plaats, telefoon, wachtwoord)
    VALUES('$naam', '$email', '$adres', '$postcode', '$plaats', '+31$telefoon', '$wachtwoord')";

    $resultaat = mysqli_query($connection, $query);

    $_SESSION['login'] = 1;
    $_SESSION['ingelogd_email'] = $aanmeld_email;

    $_SESSION['aangemeld'] = 0;

    header("location: InloggenUitloggen.php");
    exit;
  }
?>
