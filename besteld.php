<?php
  session_start();
  $connection = mysqli_connect("localhost","root","", "de_concurrent");

  $query2 = "SELECT * FROM klantgegevens WHERE email='$_SESSION[ingelogd_email]'";
  $resultaat2 = mysqli_query($connection, $query2);

  //Code...
  while($row2 = $resultaat2->fetch_assoc())
  {
    $naam = $row2["naam"];
  }

  $query1 = "SELECT * FROM klantgegevens WHERE email='$_SESSION[ingelogd_email]'";
  $resultaat1 = mysqli_query($connection, $query1);

  //Code...
  while($row1 = $resultaat1->fetch_assoc())
  {
    $email = $row1["email"];
  }

  $productNaam = $_POST["bestelbtn"];



  $query = "INSERT INTO bestelling(productNaam, klantNaam, klantEmail)
  VALUES('$productNaam', '$naam', '$email')";

  $resultaat = mysqli_query($connection, $query);
  header("location: products.php");

  $_SESSION['besteld'] = 0;
  exit;

?>
