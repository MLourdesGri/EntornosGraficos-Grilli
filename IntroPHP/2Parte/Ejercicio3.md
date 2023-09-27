# Ejercitación 3

## En cada caso, indicar las salidas correspondientes.

a-
```php
<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds] 
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>
```
La salida es:
Has entrado en esta pagina a las 16 horas, con 35 minutos y 47 segundos, del 22/09/2023

NOTA: la salida es de acuerdo a cuando se ejecuta el código.

b-
```php
<?php
function sumar($sumando1,$sumando2){ 
 $suma=$sumando1+$sumando2; 
 echo $sumando1."+".$sumando2."=".$suma; 
} 
sumar(5,6);
?>
```
La salida es:
5+6=11