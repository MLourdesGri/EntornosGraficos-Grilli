<?php

if (!isset($_COOKIE['count'])) {
  $visitas = 1;
} else {
  $visitas = $_COOKIE['count'] + 1;
}
setcookie('count', $visitas, time() + 3600 * 24 * 365);


function getTitulo()
{
  if (!isset($_COOKIE['count'])) {
    return "BIENVENIDO";
  } else {
    return "Visitaste esta pagina: " . $_COOKIE['count'] . " veces";
  }
}
?>


<html>

<head>
  <title>Contador</title>
</head>

<body>
  <h1><? echo getTitulo()?></h1>
</body>

</html>