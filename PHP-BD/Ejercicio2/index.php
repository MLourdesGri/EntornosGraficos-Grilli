<html>
<body>
  <h1>Ciudades</h1>
  <a href="./create_city.php">Crear nueva ciudad</a>
  <a href="./city_pagination.php?page=0">Ver con paginacion</a>
    <table>

    <tr>
      <th>id</th>
      <th>ciudad</th>
      <th>pais</th>
      <th>habitantes</th>
      <th>superficie</th>
      <th>tieneMetro</th>
    </tr>

    <?php
      include('./db_connection.php');
      $ResultSet = mysqli_query($link, "Select * from ciudades order by id");
      mysqli_close($link);
      while($row=mysqli_fetch_array($ResultSet)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['ciudad']."</td>";
        echo "<td>".$row['pais']."</td>";
        echo "<td>".$row['habitantes']."</td>";
        echo "<td>".$row['superficie']."</td>";
        echo "<td>".$row['tieneMetro']."</td>";
        echo "<td>". "<a href='./edit_city.php?id=".$row['id']."'> editar </a>"."</td>";
        echo "</tr>";
      }
    ?>

    </table>

</body>

<style>
table{
  border-spacing: 30px;
}
</style>
</html>