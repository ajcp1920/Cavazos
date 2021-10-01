<div style = "text-align: justify"> 

<div style = "text-align: center"> 
<font size="5">

# __Modelo de Cajas__ </div>

</font>

<font size="4">

__¿Que es un modelo de cajas?__

</font>

El modelo de caja es la manera en que se representan todos los elementos HTML en una pagina. Cada elemento genera una caja, el comportamiento de esa caja depende de su clasificacion: si es de linea o de bloque.

A todas las cajas se les puede aplicar las siguientes propiedades: __width__, __height__, __padding__, __margin__, __border__, __background__. Lo particular de este concepto es que por defecto el __width__ se refiere al **ancho del contenido** de un elemento (no al ancho total, de borde a borde).

En la siguiente imagen se muestra como se comporta cada una de las propiedades:

<div style = "text-align: center"> 

![](https://www.laurachuburu.com.ar/img/tutoriales/css/modelo-de-caja.png) 

</div>

Para calcular el ancho total de un elemento es necesario sumar el ancho, mas los dos __padding__ (Izquierda y derecha), mas los bordes (izquierda y derecha). En cuanto a los valores verticales pasa lo mismo, pero en diseño web generalmente nos preocupa mas definir los anchos de los elementos ya que las alturas estan dadas en general por el contenido de cada elemento.

Existe una propiedad nueva (__CSS3__) que modifica este concepto y si la aplicamos, se considera el ancho del elemento a la distancia entre los bordes. Esta propiedad es __box-sizing:border-box__.

* El **background** (imagen o color) ocupa todo el elemento desde los bordes. 
* El __margin__ es la distancia desde el borde de un elemento hacia otro.
* El __padding__ es la distancia desde el borde hacia el contenido.

Para que un elemento acepte las propiedades __width, height, padding y margin__ tiene que ser de bloque. Si la etiqueta no es bloque originalmente, se puede modificar su condicion con otra propiedad CSS: __display__

<font size="4">

## __Medidas Flexibles__

</font>

Existen propiedades que definen el valor maximo o minimo, estas permiten mayor flexibilidad y se usan especialmente en los sitios responsive:
* __Max-width:__ ancho maximo. El elemento no puede ser mas ancho que el valor especificado pero si puede achicarse.
* __Min-width:__ ancho minimo. El elemento no puede ser mas angosto que el valor especificado pero si puede agrandarse.
* __Max-height:__ alto maximo. El elemento no puede ser mas alto que el valor especificado pero si puede achicarse.
* __Min-height:__ alto minimo. El elemento no puede ser mas bajo que el valor especificado pero si puede agrandarse.

<font size="4">

### __Partes de un Modelo de Caja__

</font>

Al hacer una caja de tipo en CSS tenemos los siguientes elementos:

* El __contenido de la caja (o content box):__ El area donde se muestra el contenido, cuyo tamaño puede cambiarse utilizando propiedades como __width y height__.

* El __relleno de la caja (o padding box):__ El relleno es espacio en blanco alrededor del contenido; es posible controlar su tamaño usando la propiedad __padding__ y otras propiedades relacionadas.

* El __borde de la caja (o border box):__ El borde de la caja envuelve el contenido y el de relleno. Es posible controlar su tamaño y estilo utilizando la propiedad __border__ y otras propiedades relacionadas.

* El __margen de la caja (o margin box):__ El margen es la capa mas externa. Envuelve el contenido, el relleno y el borde como espacio en blanco entre la caja y otros elementos. Es posible controlar su tamaño usando la propiedad __margin__ y otras propiedades relacionadas.

El diagrama siguiente muestra estas capas:

<div style = "text-align: center"> 

![](https://mdn.mozillademos.org/files/16558/box-model.png) 

</div>

<div style = "text-align: right"> 
<font size="1"> Arturo Cavazos 18100158 </font> </div> 
</div>