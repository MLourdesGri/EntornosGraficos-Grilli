# Ejercitación 1 - Responder el siguiente cuestionario

## 1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?

HTML son las siglas de *HyperText Markup Language* (lenguaje de marcado de hipertexto), es un lenguaje que se usa para indicar la estructura basica de una pagina web. Este usa distintas etiquetas para indicar los distintos elementos del sitio; estos elementos pueden ser titulos, subitulos, parrafos, imagenes, metadatos, etc.

Su version incial fue creada en 1991, con el fin de crear un sistema de hipertexto que les permitiera a los investigadores CERN intercambiar informacion facilmente. Recien en 1995 se publico **HTML 2.0**, que fue la primera estandarizacion del lenguaje. Dos años después, en 1997, se generaron dos nuevas versiones: a principios de año se publicó la versión **HTML 3.2** y, a finales del mismo año, se publicó la actualización **HTML 4.0**. Posteriormente, a finales del año 1999, se publicó una nueva especificación oficial: la versión **HTML 4.01**. Desde el año 2014, **HTML 5** es estándar y, aunque siguen surgiendo nuevas modificaciones y actualizaciones, los cambios son mínimos y fáciles de asimilar. Por ejemplo, una de las últimas recomendaciones es **HTML 5.3**, que salió a principios del 2021, pero no significó un cambio traumático. 


## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?
Para la creación de documentos con HTML, el W3C recomienda seguir los siguientes principios básicos:

* **Estructura:** Es importante utilizar una estructura clara y semántica en el documento HTML, utilizando etiquetas adecuadas para cada sección y contenido. La estructura debe reflejar la jerarquía y relación entre los diferentes elementos del contenido.
* **Separación de presentación y contenido:** El HTML debe utilizarse para definir el contenido y la estructura del documento, mientras que el diseño y la presentación deben ser controlados a través de CSS (Cascading Style Sheets).
* **Accesibilidad:** El documento HTML debe ser accesible para todos los usuarios, independientemente de su discapacidad o dispositivo de acceso. Esto incluye el uso de etiquetas adecuadas para describir el contenido, el uso de atributos alt en las imágenes, el uso de enlaces de texto descriptivos, entre otros.
* **Validación:** Es importante validar el código HTML para asegurarse de que cumple con los estándares definidos por el W3C y que no contiene errores. La validación ayuda a garantizar la interoperabilidad entre diferentes navegadores y dispositivos.
* **Optimización:** Es importante optimizar el documento HTML para mejorar su rendimiento y velocidad de carga. Esto incluye el uso de etiquetas semánticas y ligereza en la carga de recursos, entre otros aspectos.

Siguiendo estos principios básicos, se puede garantizar que el documento HTML sea accesible, interoperable y fácil de mantener y actualizar en el futuro.

## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?

Un elemento o atributo pasa a estar **desaprobado** cuando se desaconseja su uso, eso puede deberse a que es una etiquera desactualizada para la cual hay una alternativa mejor. Las funcionalidaes desaprobadas no son elimindas directamente por los navegadores, ya que esto romperia muchos sitios que la utilizan; pero que una etiqueta este desaprobada indica que dentro de poco sera obsoleta.

Un elemento o atributo es **obsoleto** cuando se retira oficialmente del estandar y ya no sera soportado por los navegadores. En algunos casos, se puede utilizar una etiqueta alternativa para reemplazar la funcionalidad de la etiqueta obsoleta.

        
## 4. ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

El DTD (Document Type Definition) es la definicion de los elementos y atributos validos un documento HTML y la forma en la que estos se pueden anidar. Basicamente es un conjunto de reglas que define la estructura del documento.

Hay 3 DTDs para HTML 4.01:
* **Strict DTD**: Este DTD define una estructura de documento muy estricta, en la que sólo se permiten elementos y atributos que están definidos en la especificación HTML 4.01. Este DTD se utiliza para documentos HTML que se ajustan estrictamente a las normas del lenguaje.
* **Transitional DTD**: Este DTD es una versión más flexible del Strict DTD, que permite la inclusión de elementos y atributos que están en desuso en HTML 4.01, pero que aún se utilizan en muchos documentos HTML existentes. Este DTD se utiliza para documentos HTML que aún utilizan elementos y atributos obsoletos, pero que aún necesitan ser visualizados correctamente.
* **Frameset DTD**: Este DTD se utiliza para documentos HTML que utilizan marcos (frames) para dividir la pantalla en varias áreas. El Frameset DTD es una variante del Transitional DTD que incluye elementos y atributos adicionales para permitir la creación y manejo de marcos.


## 5. ¿Qué son los metadatos y cómo se especifican en HTML?
Son ítems descriptivos cruciales sobre la propia web, siendo utilizado en diferentes contextos, pero especialmente al momento de informar sobre el concepto general de la página. Por ejemplo, un metadato importante es indicar que la pagina esta codificada con UTF-8, o que el autor es tal persona.

Para indicar este dato en el HTML se utiliza la etiqueta `<meta>` , la cual debe estar dentro de `<head>`.
```html
<!--Asi es como se especifica un metadato-->
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Julian Butti">
</head> 
```
