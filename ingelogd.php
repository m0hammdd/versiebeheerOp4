<?php

  $connection = mysqli_connect("localhost","root","", "de_concurrent");

  $email = $_POST['inlog_email'];
  $wachtwoord = $_POST['inlog_wachtwoord'];

  $query = "SELECT * FROM klantgegevens WHERE email = '$email' AND wachtwoord = '$wachtwoord'";
  $resultaat = mysqli_query($connection, $query);

  if (mysqli_num_rows($resultaat) > 0)
  {
    while($row = mysqli_fetch_array($resultaat, MYSQLI_NUM))
    {
      session_start();
      $_SESSION['login'] = 1;

      $_SESSION['ingelogd_email'] = $email;

      header("location: InloggenUitloggen.php");
      exit;
    }
  }
  else {
    header("location: InloggenUitloggen.php");
    exit;
  }

?>
