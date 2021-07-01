<?php

  session_start();
  $_SESSION['login'] = 0;

  echo $_SESSION['login'];
  header("location: InloggenUitloggen.php");
  exit;

 ?>
