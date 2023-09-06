# Ejercicio 4 - Analizar los siguientes códigos y comparar sus efectos. Explicar:

Dadas las siguientes declaraciones:

```css
* {color:green; } 
a:link {color:gray } 
a:visited{color:blue } 
a:hover{color:fuchsia } 
a:active {color:red } 
p {font-family: arial,helvetica;font-size: 10px;color:black; }
.contenido{font-size: 14px;font-weight: bold; }
```

```html
<body>
  <p class="contenido" style="font-weight: normal;">
    Este es un texto ...............
  </p>
  <table>
    <tr>
      <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
      <td><a href="http://www.google.com.ar">con un enlace</a></td>
    </tr>
  </table>
</body>
```

```html
<body class="contenido">
  <p>Este es un texto................</p>
  <table>
    <tr>
      <td>Y esta es una tabla.......</td>
    </tr>
    <tr>
      <td><a href="http://www.google.com.ar">con un enlace</a></td>
    </tr>
  </table>
</body>
```

- `*{color:green;}` Le da a todo el texto del documento un color verde.
- `a:link {color:gray}` Hace que todoas las etiquetas `<a>`, cuando NO haya sido visitado el enlace, tengan un color de letra gris.
- `a:visited{color:blue}` Hace que todoas las etiquetas `<a>`, cuando SI haya sido visitado el enlace, tengan un color de letra azul.
- `a:hover{color:fuchsia}` Hace que cuando se pasa el cursor por arriba de una etiqueta `<a>`, el color del texto del enlace cambie a fucsia.
- `a:active {color:red }` Hace que cuando un enlace se active, se cambie el color de letra de este a rojo
- `p {font-family: arial,helvetica;font-size: 10px;color:black;}` Aplicaria una fuente de letra arial y en su defecto helvetica, tamaño de letra de 10 pixeles y da un color negro a todas las etiquetas `<p>`
- `.contenido{font-size: 14px;font-weight: bold;}` Asigna a todas las etiquetas con la clase "contenido" un tamaño de letra de 14 pixeles y letra negrita.

## Primer código

Para comenzar se le asigna un color de letra verde a todos los textos del documento.
Luego, nos encontramos con una etiqueta `<p>` con la clase "contenido", que a su vez tiene un atributo style="font-weight: normal;".
En este caso primero se le aplicarían los estilos especificados en '_', después los especificados a nivel de etiqueta 'p', luego los especificados a nivel de clase '.contenido' y por útlimo los especificados con el atributo style, por lo que visualmente veremos el párrafo "Este es un texto ..............." con un color de letra negro, con un tipo de letra norma, con una fuente de letra "arial,helvetica" y un tamaño de letra de 14 pixeles.
Algo similar ocurre con las etiquetas `<a>`, ya que primero se le aplicaran las propiedades globales (color:green) y las propiedades especificadas, haciendo que los enlaces se vean en gris cuando no fueron visitados, en azul cuando si lo fueron, en fucsia cuando se pasa el cursor por encima y rojo cuando están activos.
El resto de etiquetas solo se ven afectadas por los estilos definidos con '_', por lo cual el texto que se encuentra en la tabla tendrá un color verde.

## Segundo código

En este caso también se asigna un color de letra verde a todos los textos del documento, en este código, es la etiqueta `<body>` la que cuenta con las clase "contenido", y dentro de esta encontramos una etiqueta `<p>` sin ninguna clase, una etiqueta `<table>` y dentro de esta una etiqueta `<a>`
El texto dentro de la etiqueta `<p>` tendrá un color de letra negro, un tamaño de letra de 10 pixeles, una fuente de letra "arial, helvetica" y estará en negrita.
El texto dentro de la etiqueta `<table>` tendrá un color de letra negro, un tamaño de letra de 14 píxeles y estará en negrita.
El texto dentro de la etiqueta `<a>` tendrá un tamaño de letra de 14 píxeles, estará en negrita pero el color de este será gris cuando no fue visitado, azul cuando si lo fue, fuscia cuando se pasa el cursor por encima de este y rojo cuando está activo.
