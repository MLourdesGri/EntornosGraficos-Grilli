<?php
  $hostname = "127.0.0.1";
  $nombreUsuario = "php";
  $password ="php";
  $db = "ej_ciudades";
  $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error al Conectar");
  mysqli_select_db($link,$db);
?>