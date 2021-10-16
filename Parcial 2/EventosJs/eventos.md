<div style = "text-align: justify"> 

<div style = "text-align: center"> 
<font size="5">

# __Event Bubbling__ </div>

</font>

<font size="4">

__¿Que es burbujear?__

</font>

El flujo de eventos DOM (flujo de eventos) tiene tres etapas: __etapa de captura de eventos, etapa de destino, etapa de burbujeo de eventos.__

__Captura de eventos (event capturing):__ La comprension popular es que cuando el mouse hace click o activa el evento DOM, el navegador comenzara desde el nodo raiz __de afuera hacia adentro.__ Para la propagacion de eventos, es decir, si se hace click en el elemento secundario, si el elemento primario registra el evento correspondiente a traves de la captura de eventos, el evento vinculado al elemento primario se activara primero.

__Evento burbujeante (dubbed bubbling):__ Contrariamente a la captura de eventos, la secuencia de burbujeo de eventos es __ de adentro hacia afuera.__ Propague el evento hasta el nodo raiz.

La secuencia de activacion del flujo de eventos estandar DOM: es __atrapa primero y luego burbujea.__ Es decir, cuando se desencadena el evento DOM, el evento se capturara primero y el evento se burbujeara a traves de la propagacion del evento despues de capturar la fuente del evento.

<font size="4">

__addEventListener()metodo__

</font>

Este metodo establece un detector de eventos, y cuando ocurre un evento, la operacion se realiza a traves de los parametros establecidos. La sintaxis es:

<div style = "text-align: center">

__addEventListener(event, function, useCapture)__

</div>

Parametro __event__ es obligatorio. Significa que los eventos monitoreados, como click, inicio tactic, etc., son eventos que no tenian prefijo antes.

Parametro __function__ tambien es obligatorio, lo que significa que la funcion que se llamara despues de que se active el evento puede ser una funcion definida externamente o una funcion anonima.

Parametro __useCapture__ es opcional, complete __true o false__, se utiliza para describir si el evento esta burbujeando o capturando, verdadero significa capturar y el valor predeterminado falso significa burbujear.

<font size="4">

__Eliminar escucha de eventos__

</font>

Si desea eliminar el detector de eventos agregado por addEventListener(), use _removeEventListener(), la sintaxis es:

<div style = "text-align: center">

__removeEventListener(event, function)__

</div>

Los parametros son los mismos que addEventListener().

<font size="4">

__La diferencia especifica entre burbujear y capturar__

</font>

__HTML__

    <div id="div1">

    <div id="div2"></div>

    </div>

__JavaScript__

    <script>
        var div1 = document.getElementById("div1");
        var div2 = document.getElementById("div2");
        div1.addEventListener('click',function(){
                         console.log ("div1 - fase de captura")
        },true);
        div2.addEventListener('click',function(){
                         console.log ("div2 - fase de captura")
        },true);
        div1.addEventListener('click',function(){
                         console.log ("div1 - fase de burbujeo")
        });
        div2.addEventListener('click',function(){
                         console.log ("div2 - fase de burbujeo")
        });
    </script>

<div style = "text-align: center">
<font size="4">

__Resultado de salida (el resultado de la ejecución cuando se hace clic en div2)__

</font>



![](https://programmerclick.com/images/268/75c1af7211775b07d5414b2ffd485b2c.png)

</div>

<font size="4">

__Solucion__

</font>

    function stopBubble(e) {
            if (e && e.stopPropagation) {
                                 e.stopPropagation (); // Por lo tanto, admite el método stopPropagation () del W3C 
            } else {
                                 window.event.cancelBubble = true; // De lo contrario, necesitamos usar IE para cancelar el burbujeo de eventos 
            }
    }

<div style = "text-align: center"> 

![](https://programmerclick.com/images/267/2ababcdd0d0eb142b2535c8e444ac78b.png)

</div>