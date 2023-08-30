# Ejercicio 1: Responder 

## 1. Qué es CSS y para qué se usa?

CSS (Cascading Style Sheets) es un lenguaje de hojas de estilo utilizado para definir la presentación visual de un documento HTML. En otras palabras, se utiliza para dar estilo a la apariencia de una página web.
Podemos usarlo para darle una apariencia propia a nuestra pagina en HTML. Además, el CSS también ayuda a mejorar la accesibilidad web y la experiencia del usuario, ya que permite controlar cómo se presentan los elementos visuales en diferentes dispositivos y tamaños de pantalla.


## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan? 
Las reglas de declaración de estilo se componen de dos partes principales:
- *selector*: sirve para identificar el o los elemento HTML a los que se le aplicacara el estilo
- *delcaracion*: se compone de una o varias propiedades y sus valores correspondientes. Las propiedades son los aspectos visuales que se desean cambiar, como el color de fondo, el tamaño de fuente, la fuente y la altura de línea.

Se escriben con la siguiente sintaxis:
```css
<selector>{
    <declaracion>
}
```

Por ejemplo, si se desea cambiar el color de fondo de un encabezado H1 a rojo, la regla de declaración de estilo podría ser así:
```css
h1{
    background-color: red;
}
```


## 3. Cuáles son las tres formas de dar estilo a un documento? 

Existen tres formas de incluir CSS en un documento HTML:
- CSS externo: En el HTML debemos incluir una referencia al archivo de hoja de estilos dentro del elemento `<link>`
- CSS interno: Se define dentro de la etiqueta `<style>` de una pagina
- CSS en linea: Se puede usar un estilo en linea, para aplicar un estilo unico para un solo elemento. Los estilos en linea se definen dentro del atributo `style` del elemento en cuestion.

## 4. Cuáles son los distintos tipos de selectores más utilizados?  Ejemplifique cada uno. 

A continuacion muestro ejemplos de los 4 selectores mas usados:
```css
/* Selector de elementos  */
h1{
    color: blue;
}

/* Selector de clase  */
.miClase { 
    font-size: 1px ;
}

/* Selector id  */
#id {
    background: red; 
}

/* Selector universal  */
* {
    margin:3000px ;
}
```

## 5. Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos? 

Una pseudoclase en CSS es una palabra clave que se añade a los selectores y que especifica un estado especial del elemento seleccionado. Las mas utilizadas aplicadas a vinculos son `:link` y `:visit`.
- `:link` se utiliza para seleccionar enlaces que aún no han sido visitados por el usuario, es decir, enlaces que el usuario aún no ha hecho clic en ellos.
- `:visited` se utiliza para seleccionar enlaces que ya han sido visitados por el usuario, es decir, enlaces que el usuario ya ha hecho clic en ellos.

## 6. Qué es la herencia? 

La herencia en CSS es un mecanismo mediante el cual las propiedades de estilo aplicadas a un elemento se transmiten a sus elementos hijos. Esto significa que, si se define una propiedad de estilo en un elemento padre, todos los elementos hijos pueden heredar esa propiedad a menos que se especifique lo contrario.

Por ejemplo, si se define un color de texto en un elemento padre `<div>`, todos los elementos `<p>` que estén dentro de ese `<div>` heredarán ese color de texto a menos que se especifique un color diferente para los elementos `<p>`.

La herencia en CSS funciona de acuerdo con una jerarquía definida de elementos, en la que los elementos más internos o hijos heredan propiedades de los elementos más externos o padres. En general, los elementos más cercanos al elemento padre heredan las propiedades de estilo de forma más directa que los elementos más lejanos.

Es importante tener en cuenta que no todas las propiedades de estilo son heredadas. Por ejemplo, las propiedades de posición, tamaño y margen no se heredan, ya que su valor depende de la posición del elemento en relación con el documento y no de la posición de sus elementos padres.

## 7. En qué consiste el proceso denominado cascada?

La cascada CSS es el proceso que determina las propiedades que se asignarán a cada elemento de una página. Cuando tienes varias reglas CSS que afectan a un mismo elemento, todas ellas deben converger en una serie de estilos en base a las reglas de especificidad, al orden en el que aparecen y a su importancia.