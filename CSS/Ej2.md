## Ejercicio 2: Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

He separado el codigo original para analizarlo por partes.
```html
<style>
    p#normal {
        font-family: arial,helvetica;
        font-size: 11px;
        font-weight: bold;
    }
</style>
<p id="normal">Este es un párrafo</p>
```
Este código se aplica a la etiqueta `<p>` con `id="normal"`, aplicantedole las siguientes reglas:
- fuente del parrafo arial, y si no se le pude aplicar esa fuente se aplica helvetica
- el tamaño de letra de 11 píxeles
- texot en negrita


```html
<style>
    *#destacado {
        border-style: solid;
        border-color: blue;
        border-width: 2px;
    }
</style>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
```

Este código se aplica a todas las etiquetas que tienen el `id="destacado"` que es este caso son una etiqueta  `<p>` y una etiqueta `<table>`. Se le asignara ambas un borde sólido, de dos pixeles y de color azul

```html
<style>
    #distinto {
        background-color: #9EC7EB;
        color: red;
    }
</style>
<p id="distinto">Este es el último párrafo</p>
```
Este código se aplica a cualquier elemento con la con `id="distinto"`, asignandole un color de letra rojo y un color de fondo de #9EC7EB (un tono de celeste en hexadecimal)