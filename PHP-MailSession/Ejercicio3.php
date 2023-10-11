<!-- Escribir un script para que un visitante recomiende el sitio a un amigo. -->
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Sitio recomendable</h1>

  <form method="post" action="index.php">
    <label>Tu nombre.</label>
    <input name="name" type="text" required></input><br>
    <label>Email de tu amigo</label>
    <input name="email" type="email" required></input><br>
    <button>Enviar</button>

  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['email'];
    $subject = "Recomendacion de " . $_POST['name'];
    $body = "<p>Tu amigo te a recomedado nuestros sitio.
            Por favor veni a <a href='https://www.recomendable.com'>nuestro sitio</a></p>";
  
    $success= mail($to, $subject, $body);
    if($success){
      echo '<span>Ya enviamos a tu amigo el mail, muchas gracias</span>';
    }
    else{
      echo '<span>Algo salio mal :(</span>';
    }

  }
  ?>

</body>

</html>