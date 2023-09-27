# Ejercicio 1

Indicar si los siguientes códigos son equivalentes.

```php
<?php
$a = array( 'color' => 'rojo',
            'sabor' => 'dulce',
            'forma' => 'redonda',
            'nombre' => 'manzana',
            4
        );
?>

<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>

```

Si, son equivalentes. Son dos maneras distintas de crear un array, el array $a resultante es el mismo.