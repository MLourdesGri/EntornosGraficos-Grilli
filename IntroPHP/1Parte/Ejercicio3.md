# Ejercicio 3
Explicar para qué se utiliza el siguiente código;

## a)

```php
<html>
<head><title>Documento 1</title></head>
<body>
<?php
echo "<table width = 90% border = '1' >";
$row = 5;
$col = 2;
for ($r = 1; $r <= $row; $r++) {
    echo "<tr>";
    for ($c = 1; $c <= $col;$c++) {
        echo "<td>&nbsp;</td>\n";
    }   
    echo "</tr>\n";
}
echo "</table>\n";
?>
</body></html>
```

Este codigo genera un HTML el cual contiene una tabla. 
Esta tablas tiene sus celdas vacias, pero la cantidad de filas y columnas se determina por los valores de $row y $col. Basicamente la tabla se genera dinamicamante en el servidor antes de ser enviada al cliente.

## b)

```php
<html>
<head><title>Documento 2</title></head>
<body>
<?php
    if (!isset($_POST['submit'])) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
    </form>
<?php
}
else {
    $age = $_POST['age'];
    if ($age >= 21) {
        echo 'Mayor de edad';
    }
    else {
        echo 'Menor de edad';
    }
}
?>
</body></html>
```

Este codigo mostrara dos pantallas diferentes dependiendo de como se realize la request http. Cuando un usuario navega inicialemnte a la pagina lo hara con el metodo GET por lo que !isset($_POST['submit']) sera true y se mostrar el primer formulario que permite ingresar la edad.

El formulario se envia hacia el mismo archivo php, y se enviara con POST con los valores de age y submit. Es por esto que no se mostrara el formulario, sino el texto generado en el else. El codigo que esta en el else muestra la edad ingresada en el formulario es de un mayor de edad o no.