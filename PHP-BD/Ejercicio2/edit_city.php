<?php
  include_once('./db_connection.php');

  if($_SERVER['REQUEST_METHOD']==='GET'){
    $stmt=$link->prepare(
      "select * from ciudades where id=?"
    );
    $id=$_GET['id'];
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $city=$stmt->get_result()->fetch_assoc();
    mysqli_close($link);

  }
  else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(array_key_exists('delete', $_POST)){
      $stmt=$link->prepare(
        "delete from ciudades where id=?"
      );
      $id=$_POST['id'];
      $stmt->bind_param('i', $id);
      $stmt->execute();
      mysqli_close($link);
      header("Location: index.php");
      return;
    }

    $id=$_POST['id'];
    $name=$_POST['nombre'];
    $pais=$_POST['pais'];
    $habitantes=$_POST['habitantes'];
    $superficie=$_POST['superficie'];
    $tieneMetro=isset($_POST['tieneMetro']) ? 1: 0;

    $stmt=$link->prepare(
      "update ciudades set ciudad=?, pais=?, habitantes=?, superficie=?, tieneMetro=? where id=?"
    );
    $stmt->bind_param('ssidii', $name, $pais, $habitantes, $superficie, $tieneMetro, $id);
    $stmt->execute();
    mysqli_close($link);

    header("Location: index.php");
    return;
  }

?>


<html>
  <body>
    <h1>Editar ciudad <? echo $_GET["id"]?> </h1>

    <form method="POST">
      <input hidden name="id" value='<? echo $_GET["id"]?>' >

      <label>Nombre:</label>
      <input required name="nombre" type="text" value='<?echo $city['ciudad']?>' >

      </br>

      <label>Pais:</label>
      <input required name="pais" type="text" value='<?echo $city['pais']?>' >
      </br>

      <label>Habitantes:</label>
      <input required name="habitantes" type="number" value='<?echo $city['habitantes']?>' >
      </br>

      <label>Superficie:</label>
      <input required name="superficie" type="number" value='<?echo $city['superficie']?>' >
      </br>

      <label>Tiene Metro:</label>
      <input  name="tieneMetro" type="checkbox" <?if($city['tieneMetro'])echo 'checked';?> >
      </br>

      <a href="..">cancelar</a>
      <button type="submit">Guardar</button>
      <button name='delete'>Borrar</button>

    </form>
  </body>
</html>
