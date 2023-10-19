<?php
  include_once('./db_connection.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name=$_POST['nombre'];
    $pais=$_POST['pais'];
    $habitantes=$_POST['habitantes'];
    $superficie=$_POST['superficie'];
    $tieneMetro=isset($_POST['tieneMetro']) ? 1: 0;

    $stmt=$link->prepare(
      "insert into ciudades (ciudad, pais, habitantes, superficie, tieneMetro) values (?,?,?,?,?)"
    );
    $stmt->bind_param('ssidi', $name, $pais, $habitantes, $superficie, $tieneMetro);
    $stmt->execute();
    mysqli_close($link);

    header("Location: index.php");
  }

?>


<html>
  <body>
    <h1>Nueva ciudad</h1>

    <form method="POST">
      <label>Nombre:</label>
      <input required name="nombre" type="text">
      </br>

      <label>Pais:</label>
      <input required name="pais" type="text">
      </br>

      <label>Habitantes:</label>
      <input required name="habitantes" type="number">
      </br>

      <label>Superficie:</label>
      <input required name="superficie" type="number">
      </br>

      <label>Tiene Metro:</label>
      <input  name="tieneMetro" type="checkbox">
      </br>

      <a href="..">cancelar</a>
      <button>Guardar</button>

    </form>
  </body>
</html>
