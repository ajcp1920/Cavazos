
<div style = "text-align: justify"> 

<div style = "text-align: center"> 
<font size="5">

# Formularios para html </div>

</font>

Los formularios son los elementos en los que se integran los botones y las áreas de texto que se utilizan para que los usuarios introduzcan sus datos o que puedan elegir entre varias opciones. Veamos las etiquetas que se utilizan para la creación de formularios en HTML5.

<font size="4">

__Etiquetas para la creación de formularios__

</font>

El principio y final de un formulario se define con las etiquetas `<form> y </form>`. Dentro de las etiquetas de apertura y cierre de form se pueden incluir diferentes elementos que son enviados para ser procesados por el servidor web. HTML5 dispone de un gran número de elementos de formulario como puedes ver en la siguiente tabla:

|Elemento   |Descripcion|
|--------|--------|
|    `<form>`   |    Define un formulario    |
|    `<fieldset>`    |    Permite organizar en grupos los campos de un formulario    |
| `<legend>` | Representa el titulo de un `<fieldset>` |
| `<label>` | Representa el titulo de un elemento de control de un formulario |
| `<input>` | Se usa para crear controles interactivos que reciben datos del usuario |
| `<button>` | Representa un boton |
| `<option>` | Representa una opcion en un elemento `<select>` o `<datalist>` |
| `<select>` | Representa un elemento de control que permite la seleccion entre un conjunto de opciones |
| `<optgroup>` | Representa un conjunto de opciones, agrupadas logicamente |
| `<datalist>` | Representa un elemento de control que permite la seleccion entre un conjunto de opciones `<option>` |
| `<textarea>` | Representa un elemento de control de edicion de texto multilinea |
| `<output>` | Representa el resultado de un calculo | 

<font size="4">

__Tipos de inputs__

</font>

Algunos de los inputs o controles más utilizados son los siguientes: button, checkbox, color, date, email, file, image, month, number, password, radio, range, search, submit, tel, text, time, url y week. 

<font size="4">

__Atributos para la validación de campos en los formularios__

</font>
La validación de los datos introducidos por los usuarios en los campos de los formularios es esencial para ofrecer al usuario información sobre los datos que se están solicitando. 

Gracias a los nuevos atributos que se introdujeron en HTML5 no es necesario utilizar JavaScript obligatoriamente para la validación de los campos ya que se validan de forma automática al pulsar en el botón de tipo submit. En la siguiente tabla se destacan los atributos más utilizados.

| Atributo | Ejemplo |
|--------|--------|
| placeholder |    placeholder=”Indica tu nombre”   |
|    required  |    required=”true” o required  |
| pattern | pattern=”[a-z]{1,5}” |
| min | min=”1” |
| max | max=”100” |
| step | step=”2” (saltos en un rango de números: 0, 2, 4…) |
| disabled | disabled=”true” o disabled |
| autofocus | autofocus=”true” o autofocus |
| autocomplete	 | autocomplete=”true” o autocomplete |

<font size="4">

__Atributo Pattern y expresiones regulares__

</font>

El atributo pattern nos permite definir nuestras propias reglas para validar el valor de entrada de los campos usando expresiones regulares o regexp (contracción de las palabras inglesas regular expression).

Veamos un resumen de algunos de los caracteres que nos ayudan a construir expresiones regulares:

| Clase de caracteres |  |
|--------|--------|
| . |   Cualquier carácter excepto salto de línea   |
|  [abc]  |   Cualquiera de los caracteres entre corchetes  |
|[^abc]|   Que NO sea cualquiera de los caracteres entre corchetes   |
|   [a-g]  |  Cualquier carácter entre a y g (en minúscula)  |
| (a I b) |   a o b   |
|   __Anclas__   |     |
| ^abc |  Comienzo de una línea    |
|   abc$   |  Final de una línea   |
| __Caracteres específicos__ |      |
|   \w\ d \s   |   Palabra, dígito, espacio en blanco  |
| \W \D \S |   	Que NO sea palabra, dígito o espacio en blanco   |
|   \t \n \r   |  Tabulador, salto de línea, retorno de carro   |
| __Cuantificadores__ |      |
|   a* a+ a?   |  0 o más veces, 1 o más veces, 0 o 1 vez   |
| a{5} a{2,} |   Solo 5, 2 o más   |
|   a{1,3}   |  Entre 1 y 3   |

<div style = "text-align: right"> 
<font size="1"> Arturo Cavazos 18100158 </font> </div> 
</div>