<!-- - Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a través del servidor -->
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Enviador de spam</h1>

  <form method="post" action="index.php">
    <label>Email que lo recibe:</label>
    <input type="email" name="email">
    <button>Enviar</button>

  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST["email"];
    $subject = "Buenos dias";
    $body = '<h1>Hola</h1>' .
      '<p>Esto es un mail con un cuerpo hecho con HTML</p>' .
      '<ul>
      <li>Espero que tengas un buen dia</li>
      </ul>';

    $success=mail($to, $subject, $body);
    if($success){
      echo '<span>Se envio algo</span>';
    }
    else{
      echo 'al menos lo intentamos';
    }

  }
  ?>

</body>

</html>