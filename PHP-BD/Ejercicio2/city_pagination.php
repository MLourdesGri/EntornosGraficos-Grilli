<html>
<body>
  <h1>Ciudades</h1>
  <a href="./create_city.php">Crear nueva ciudad</a>
  <a href="./index.php">Ver sin paginacion</a>
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
      $page_size=5;
      $page=( $_GET['page']) ? (int)$_GET['page'] : 0 ;

      $ResultSet_count = mysqli_query($link, "Select count(*) as total from ciudades");
      $total= mysqli_fetch_array($ResultSet_count)["total"];

      $stmt=$link->prepare(
        "select * from ciudades order by id limit ?,?"
      );
      $stmt->bind_param('ii', $page,$page_size);
      $stmt->execute();
      $ResultSet=$stmt->get_result();
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
      <tr>
        <td></td>
        <td>
        <a href="./city_pagination.php?page=<? echo $page-$page_size?>" <? if($page==0){echo 'hidden';} ?> > << </a>
        </td>
        <td>
          <a href="./city_pagination.php?page=<? echo $page+$page_size?>" <? if($page+$page_size+1>$total){echo 'hidden';} ?>  >  >> </a>
        </td>
    </tr>
    </table>

</body>

<style>
table{
  border-spacing: 30px;
}
</style>
</html>