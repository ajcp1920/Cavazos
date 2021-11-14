$(document).ready(function(){
$("#botonAjax").click(presionBoton);

function presionBoton(){
    var parnum=$("#num").val();

    $.get("conversor.php",{num: parnum}, llegadaDatos);
}

function llegadaDatos(datos){
    $('#resultado').html('<h3>El cambio de Fahreinheit a Centigrados es ' + datos + '</h3');
}
});