<!-- Confeccionar una página de Contacto que presente un formulario para que los visitantes puedan enviar consultas al webmaster. -->

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Consultas</h1>

  <form method="post" action="index.php">
    <label>Email:</label>
    <input name="email" type="email" required></input><br>
    <label>Consulta:</label>
    <textarea name="text" required></textarea><br>
    <button>Enviar</button>

  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'webmaster@gmail.com';
    $subject = "Consulta de " . $_POST['email'];
    $body = $_POST['text'];

    $success= mail($to, $subject, $body);
    if($success){
      echo '<span>Consuta enviada</span>';
    }
    else{
      echo '<span>F</span>';
    }

  }
  ?>

</body>

</html>