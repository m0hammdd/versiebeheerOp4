<?php

    session_start();

    $connection = mysqli_connect("localhost","root","", "de_concurrent");

    $email = $_POST['email'];
    $naam = $_POST['naam'];
    $bericht = $_POST['bericht'];

    $query = "INSERT INTO contact(contactEmail, contactNaam, contactBericht) VALUES('$email', '$naam', '$bericht')";
    $resultaat = mysqli_query($connection, $query);

    header("location: contact.php");

    $_SESSION['contact'] = 0;
    exit;
?>
