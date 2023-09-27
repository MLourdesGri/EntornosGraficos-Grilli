# Ejercicio 2

Indicar si los siguientes códigos son equivalentes.

### a)
Si, son equivalentes. Aunque usen distintas estructuras de control todos los framentos tiene la misma salida
```php 
<?php
$i = 1;
while ($i <= 10) {
    print $i++;
}
?>

<?php
$i = 1;
while ($i <= 10):
    print $i;
    $i++;
endwhile;
?>

<?php
$i = 0;
do {
    print ++$i;
} while ($i<10);
?>
```

### b)
Como en el caso anterior, estos fragmentos de codigo son equivalentes. La primera es la manera correcta de usar el for, el resto no.
```php
<?php
for ($i = 1; $i <= 10; $i++) {
    print $i;
}
?>

<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>

<?php
for ($i = 1; ;$i++) {
    if ($i > 10) {
    break;  
    }
    print $i;
}
?>

<?php
$i = 1;
for (;;) {
    if ($i > 10) {
    break;
    }
    print $i;
    $i++;
}
?>
```

### c)
Estos dos fragemtos son equivalentes, solo que uno usa un switch y el otro multiples if en serie.
```php
<?php
// le doy algun valor a $i
if ($i == 0) {
print "i equals 0";
} elseif ($i == 1) {
print "i equals 1";
} elseif ($i == 2) {
print "i equals 2";
}

<?php
// le doy algun valor a $i
switch ($i) {
case 0:
print "i equals 0";
break;
case 1:
print "i equals 1";
break;
case 2:
print "i equals 2";
break;
}
?>
?>

```


