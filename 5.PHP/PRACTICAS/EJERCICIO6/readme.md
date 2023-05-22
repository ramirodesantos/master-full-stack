# Actividad5: Superglobals y formularios

## Descripción 📋 

1. 
2. A partir de la Actividad de la lección 3 (index_p2.php) hacer un buscador de productos por título

## Enunciado 📒 


1. En calculadora.php:

Crear una calculadora básica en la que haya 2 elementos <input> donde meter números, y un elemento <select> donde elegir la operación entre + - x / y resto(%).
El resultado debe aparecer en un <div> que esté en la misma página que la calculadora.
Si el segundo número que se envíen en la calculadora es 0, y se está enviando el operador división o resto. Mostrar un mensaje: "Error"


2. A partir de la Actividad de la lección 3 (index_p2.php) hacer un buscador de productos por título.
2.1 Coger el código de la actividad3, index_p2.php y copiarlo en el index.php de este ejercicio.
2.2 Maquetar un formulario sencillo de búsqueda de texto con:
 - petición get y action que envíe la información al mismo index.php 
 - un input tipo "search".
 - un input tipo submit para buscar
2.3 Recoger la información y filtrar la variable $productos

  - Comprobar si existe la variable de busqueda GET correspondiente.
  - Si se realiza la búsqueda de un producto, se debe buscar si ese string introducido se encuentra en los campos "titulo" de todos los productos. 
    Si hay coincidencia, ese producto se guarda en un array de resultados. Luego ese array será sobre el que hagamos foreach para mostrar los productos filtrados.
  - La búsqueda NO tiene que ser sensible a mayúsculas.

    Si busco "o" ---> debe traer todos los productos que tengan una "o" en su título
    Si busco "Leno" ---> debe traer todos los productos que tengan una "Leno" en su título

Recomendaciones: 
- El código HTML no tiene que ser apenas modificado. La funcionalidad de filtrado debe ir arriba del todo de index.php
- Meter el código que se encargue de filtrar los datos en una función