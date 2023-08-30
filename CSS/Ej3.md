# Ejercicio 3 - Analizar el siguiente código señalando declaraciones y aplicaciones de reglas, y su efecto.

```css
/* style.css */
p.quitar { 
    color: red; 
}
*.desarrollo { 
    font-size: 8px; 
}
.importante {
    font-size: 20px; 
}
```

```html
<!-- index.html -->
<p class="desarrollo">
  En este primer párrafo trataremos lo siguiente:
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
  Este párrafo debe ser quitado de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p>
  En este otro párrafo trataremos otro tema:<br />
  xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
  Y este es el párrafo más importante de la obra…
  <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

Para empezar se le asigna un color de letra rojo a todas las etiquetas que posean una clase con valor "quitar" (En nuestro caso son las dos útlimas etiquetas `<p>` y la `<h1>`).
A todas las etiquetas con class="desarrollo", que esten dentro de cualquier otra etiqueta se les dará un tamaño de letra de 8 pixeles (En este caso solo se le aplica a la primer etiqueta `<p>`)
Luego a todas las etiquetas que tengan una clase "importante" se les dará un tamaño de letra de 20 pixeles (En este caso se aplicará solo a las dos últimas etiquetas `<p>`)