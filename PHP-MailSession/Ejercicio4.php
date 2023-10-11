<?php
  session_start();
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Conteo de visitas</h1>
  <span class=>Cuantas veces pasate por aca: </span>

  <?php
      if(array_key_exists("count",$_SESSION)){
        $_SESSION["count"]++;
      }
      else{
        $_SESSION["count"]=1;
      }

    echo "<span class='count'>".$_SESSION["count"]."</span>";

  ?>

</body>

<style>
.count{
  color:blue;
}
</style>
</html>