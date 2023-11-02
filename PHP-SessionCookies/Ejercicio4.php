<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['noticia'])) {
  $noticia = $_POST['noticia'];
  setcookie('noticia', $noticia, time() + 3600 * 24 * 365);
} else {
  if (isset($_GET['borrar_cookie'])) {
    $noticia = 'todas';
    setcookie('noticia', $noticia, time() + 3600 * 24 * 365);
  } else {
    if (isset($_COOKIE['noticia'])) {
      $noticia = $_COOKIE['noticia'];
    } else {
      $noticia = 'todas';
    }
  }
}

function listNoticias($eleccion)
{
  switch ($eleccion) {
    case 'deportes':
      listDeportes();
      break;
    case 'politica':
      listPolitica();
      break;
    case 'economia':
      listEconomia();
      break;
    default:
      listDeportes();
      listPolitica();
      listEconomia();
  }
}


function listEconomia()
{
  echo '<li>El dolar llega a 700 pesos</li>';
  echo '<li>Sube el precio de la soja</li>';
  echo '<li>Anuncian subsidio a los combustibles</li>';
}
function listPolitica()
{
  echo '<li>Milei gana elecciones en Ushuaia</li>';
  echo '<li>Sergio Massa se una el Frente de Izquierda</li>';
}
function listDeportes()
{
  echo '<li>Manchester city gana la champion</li>';
  echo '<li>Despedida de Maxi Rodriguez</li>';
  echo '<li>Hoy es el cumple de Messi</li>';
}
?>


<html>

<head>
  <title>Remember Name</title>
</head>

<body>
  <h1>Notcias</h1>
  <form method="POST">
    <input type="radio" id="politica" name="noticia" value="politica">
    <label for="politica">Politica</label>
    <input type="radio" id="css" name="noticia" value="economia">
    <label for="economia">Economia</label>
    <input type="radio" id="javascript" name="noticia" value="deportes">
    <label for="deportes">Deportes</label>
    <button>Cambiar seccion</button>
  </form>
  <a href='.?borrar_cookie=true'>Quiero ver todas las secciones</a>


  <h2>
    Seccion
    <?echo $noticia ?>
  </h2>
  <ul>
    <? listNoticias($noticia)?>
  </ul>
</body>

</html>