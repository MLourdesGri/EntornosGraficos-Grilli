# Ejercicio 1
## Completar:
Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función:

`mysqli_connect()` 

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
- Host
- Usuario
- Contraseña 

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función:

`mysqli_select_db()`

Esta función debe pasar como parámetro
- Nombre de la base de datos 
- Nombre de la conexion (obtenida con `mysqli_connect()`)*

La función `mysqli_query()` se utiliza para 
realizar una consulta a la base de datos elegida
y requiere como parámetros
- Nombre de la conexion 
- Query en SQL

La cláusula `or die()` se utiliza para 
terminar la ejecucion de un script y mostrar un mensaje de error en caso de que haya algun problema. Por ejemplo:
```php
mysqli_connect(host, usuario, contraseña, base_datos) or die("Mensaje de error");
````

La función `mysqli_error()` se puede usar para 
obtener información sobre el último error que  ocurrió en una operación de base de datos.

Por ejemplo:
```php
$error = mysqli_error($conexion);
```
donde `$conexion` es la variable que contiene la instancia de la conexion a la base de datos.

Si la función `mysqli_query()` es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo `$vResultado`, y a continuación se puede ejecutar el siguiente código

```php
<?php
    // Recorre cada fila del resultado utilizando mysqli_fetch_array()
    while ($fila = mysqli_fetch_array($vResultado))
    {
?>
 <!-- Accede a cada valor de cada columna usando indices numericos -->
        <tr> 
         <td><?php echo ($fila[0]); ?></td>
         <td><?php echo ($fila[1]); ?></td>
         <td><?php echo ($fila[2]); ?></td>
        </tr>
        <tr>
         <td colspan="5">
<?php
    }
    mysqli_free_result($vResultado); // Libera la memoria asociada al resultado
    mysqli_close($link); // Cierro la conexion con la base de datos
?>
```









