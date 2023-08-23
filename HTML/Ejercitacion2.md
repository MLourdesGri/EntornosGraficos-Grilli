# Ejercitación 2

HTML está compuesto por un conjunto de elementos que son la base de su estructura. Los elementos están compuestos por dos tags (el de apertura y el de cierre) y el contenido en el medio (con excepción de los elementos vacíos ). Cada tag puede tener atributos(proporcionan ciertas características como altura, ancho, color, etc.) y eventos (asocian un scriptque se ejecuta cuando el evento ocurre).
 
Analizar los siguientes segmentos de código indicando en qué sección del documento HTML se colocan, cuál es el efecto que producen y señalar cada uno de los elementos, etiquetas, y atributos(nombre y valor), aclarando si es obligatorio.

---

<br>

## A-
```html
<!-- Código controlado el día 12/08/2009 -->
```
Este fragmento de codigo es simplemente un comentario, puede ubicarse en cualquier lugar del documento HTML. No tiene ningun efecto en el sitio que se renderiza en el navegado, es mas que nada un nota para el programador. 

<br>

## B- 
```html
<div id="bloque1">Contenido del bloque1</div>
```
En este extracto se declara un `<div>`, es decir una division o seccion en el HTML. Esta seccion contiene el texto *"Contenido del bloque1"*, el cual sera renderizado en la pantalla del navegador en el lugar donde fue declarada la division; vale aclarar que el texto no es en si obligatorio y un `<div>` puede contener a otros elementos HTML. Ademas tiene un id *"bloque1"* el cual no es extrictamente necesario pero puede que sea utilizado para agregar estilos a este elemento usando CSS. Este tag debe ser usado dentro del elemento `<body>`.

<br>

## C-
```html
<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32"longdesc="detalles.htm" />
```
La etiqueta `<img/>` es utlizada para colocar una imagen, se coloca dentro del `<body>` y tiene varios atributos:
- `src` (en este caso no tiene valor), es necesario para indicar que imagen se muestra
- `alt` cuyo valor es *"lugar imagen"*, necesario para mostrar un texto alternativo cuando no carga la imagen, no es obligarotio pero es buena practica para mejorar la accesibilidad y SEO
- `id` cuyo valor es *"im1"*, no es obligarotio
- `name` cuyo valor es *"im1"*, no es obligatorio
- `width` (ancho) cuyo valor es *"32"*
- `height` (altura) cuyo valor es *"32"*,
- `longdesc` (descripcion detallada) cuyo valor es *"detalles.htm"*, no es obligatorio y actualmente esta obsoleto.

<br>

## D- 
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```
La etiqueta `<meta>` se usa para declarar metadatos, se usa dentro de `<head>`. En este caso se pueden ver los siguientes atributos:
- `lang` cuyo valor es *"es"*, para indicar el lenguaje. Es opcional.
- `name` cuyo valor es *"keywords"* que indica al nombre del metadato. Se puede se puede omitir si el metadato que queremos indicar ya tiene un atributo (ej: `lang`), pero sino es obligatorio.
- `content` que toma los valores *"casa, compra, venta, alquiler"* y luego *"16-Sep-2019 7:49 PM"*, indica el valor de un metadato especifivo. Dependeindo de que metadato se trate puede ser obligatorio o no.
- `http-equiv` cuyo valor es *"expires"*, sirve para indicar una "directiva pragma", es decir una indicacion para el interptrete de HTML. Es opcional. Se llama asi porque todos los valores que puede tomar son headers http.

<br>

## E-
```html
<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML </a>
```
La etiqueta `<a>` o *"anchor"* indica un hipervinculo dentro del `<body>`. Muestra los siguientes atributos:
- `href` que indica la url a la que navega ese hipervinculo, en este caso es *"http://www.e-style.com.ar/resumen.html"*. Es obligatorio.
- `type` indica el tipo de contenido al que apunta la url, en este caso toma el valor de *"text/html"*. Es opcional.
- `hreflang` indica en que idioma esta el contendio de la url, en este caso toma el valor *"es"*. Es opcional.
- `charset` indica el codificado de caracters del contenido de la url, en este caso *"utf-8"*. Es opcional.
- `rel` (relationship) indicar la relación entre la página actual y la página del url. Puede tener un impacto en el SEO y la accesibilidad de la página web, por lo tanto se debe utilizar con precaución y solo cuando sea necesario. En este daso toma el valor *"help"*.

<br>

## F-
```html
<table width="200" summary="Datos correspondientes al ejercicio vencido">
    <caption align="top"> Título </caption>
    <tr>
        <th scope="col">&nbsp;</th>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">C</th>
    </tr>
    <tr>
        <th scope="row">1º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th scope="row">2º</th>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
```

Este fragmento tiene muchas etiquetas realcionadas entre si.

Primero de todo hay un etiqueta `<table>` la cual permite mostrar una tabla en el `<body>`.Tiene los squientes atributos:
- `width` (ancho) con valor *"200"*. Opcional. 
- `summary` (resumen) con el valor *"Datos correspondientes al ejercicio vencido"*. Opcional.

Luego esta `<caption>` que proporciona un titulo para la tabla, se debe usar dentor de `<table>`. En el codigo en cuestion solo muestra un atributo:
- `align` con valor *"top"*, indica que el titulo va en al parte superior de la tabla. No es obligatorio.

Despues esta `<tr>` que define una fila de una tabla. Debe estar dentro de `<table>`. No muestra atributos.

Finalmente estan las celdas de la tabla. Por un lado esta `<th>` para las celdas del encabazado y por el otro `<td>` para las celdas de datos. Estas etiquetas se deben usar dentro de `<tr>`. Ambas tiene un solo atributo:
- `scope` indica con que otras celdas esta relacionada una celda. Por ejemplo cuando toma el valor *"col"* en el primer `<th>` indica que esa celda es el encabedado de toda su columna, mientras que cuando toma el valor *"row"* en el primer `<td>` indica que ese dato esta relacionado con todos los otros datos de la fila.