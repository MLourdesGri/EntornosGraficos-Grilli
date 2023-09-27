# Ejecicio 1

En el siguiente codigo identificar:
- Las variables y su tipo
- Los operadores
- Las funciones y sus parametros
- Las estructuras de control
- Cual es la salida por pantalla

```php
<?php
function doble($i) {
    return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
    $d += 4;
}
if (is_string($a)) {
    echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?>
```

## Las variables y su tipo
- $a: booleano
- $b: string
- $c: string
- $d: entero
- $f: entero
- $g: entero

## Los operadores
- x * y : multipicacion
- x = y : asignacion
- x += y : asignacion con incremento
- x? y : z : operador ternario
- ++x : pre-incremeto
- x++ : post-incremento

## Las funciones y sus parametros
Funcion *double*: recibe como parametro un valor  $i al cual se le debe poder aplicar el operador *, es decir, es un numero.

Funciones propias del lenguaje: *gettype*, *is_string* y *is_int*: Detalles en [la documentacion oficial](https://www.php.net/docs.php).

Palabra reservada *echo*: parece ser una funcion pero en realidad es una construccion del lenguaje, no es una funcion.

## Las estructuras de control
La unica estructura de control que se puede ver en este fragmento de codigo es el *if* para los condicionales.

## La salida por pantalla
La salida por pantalla es:
```
booleanstringstringinteger1xyzxyz184444
```