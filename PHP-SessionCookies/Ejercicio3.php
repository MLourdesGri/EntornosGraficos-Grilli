<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  setcookie('name', $name, time() + 3600 * 24 * 365);
  echo '<h1>Registrado perfectamente</h1>';
  echo '<p>Ahora eres ' . $name . '</p>';
  echo '<a href=".">volver</a>';
  return;
}

function getTitulo()
{
  if (!isset($_COOKIE['name'])) {
    return "No te has registrado aun";
  } else {
    return "Hola " . $_COOKIE['name'];
  }
}
?>


<html>

<head>
  <title>Remember Name</title>
</head>

<body>
  <h1><? echo getTitulo()?></h1>
  <form method="POST">
    <input name='name' required>
    <button>Registrarme</button>
  </form>
</body>

</html>