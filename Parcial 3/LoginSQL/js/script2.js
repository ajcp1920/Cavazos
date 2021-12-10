var tipoOperacion=0;

$('document').ready(function () {


    $("#b_consultar").click(function () {
        $('input').val('');
        var vidu = prompt("ID de Usuario:");


        $.post('./php/buscar.php',
                {idUsuario: vidu},
                function (ret) {
                if (ret['resultado'] != 0) {

                console.log("Error");

                $('#modalMensaje .modal-header').addClass('modal-header-danger');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text(ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                });
                }
                else {

                console.log(ret);
                console.log(ret.detalle);
                console.log(ret.detalle.nombre_completo);
                



                $('#idform').val(ret.detalle.idform);
                $('#nombre_completo').val(ret.detalle.nombre_completo);
                $('#numero_tel').val(ret.detalle.num_tel);
                $('#direccion').val(ret.detalle.direccion);
                $('#ciudad').val(ret.detalle.ciudad);
                $('#estado').val(ret.detalle.estado);
                $('#codigo_postal').val(ret.detalle.codigo_postal);
                $('#correo').val(ret.detalle.correo);
                $('#detalles').val(ret.detalle.detalles);

                $('#modalMensaje .modal-header').addClass('modal-header-success');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text("Nombre: "+ret.detalle.nombre+' '+ret.detalle.apPaterno);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#myModal .modal-header').removeClass('modal-header-success');
                });

                $('#b_nuevo').prop("disabled", false);    //Enabled
                $('#b_grabar').prop("disabled", true);    //Disabled
                $('#b_eliminar').prop("disabled", false); //Enabled
                $('#b_modificar').prop("disabled", false); //Enabled
            }
        },'json');

    });


    $("#b_limpiar").click(function () {
        $('input').val('');
        $('.form-control').prop("disabled", true);
        $('#b_nuevo').prop("disabled", false);
        $('#b_grabar').prop("disabled", true);
        $('#b_eliminar').prop("disabled", true);
        $('#b_consultar').prop("disabled", false);
        $('#b_modificar').prop("disabled", true);
    });



    $("#b_nuevo").click(function () {
        tipoOperacion = 1;
        $('input').val('');
        $('#b_nuevo').prop("disabled", true);
        $('#b_grabar').prop("disabled", false);
        $('#b_eliminar').prop("disabled", true);
        $('#b_consultar').prop("disabled", true);

        $('.form-control').prop("disabled", false);
        $('#idform').prop("disabled", true);
        $("#nombre_completo").focus();
    });

    $("#b_modificar").click(function () {
        tipoOperacion = 2;
        // $('input').val('');
        $('#b_nuevo').prop("disabled", true);
        $('#b_grabar').prop("disabled", false);
        $('#b_eliminar').prop("disabled", true);
        $('#b_modificar').prop("disabled", true);
        $('#b_consultar').prop("disabled", true);

        $('.form-control').prop("disabled", false);
        $('#idUsuario').prop("disabled", true);
        $("#nombre").focus();
    });


    $("#b_grabar").click(function () {
        var vid = $('#idform').val();
        var vnom = $('#nombre_completo').val();
        var vtel = $('#numero_tel').val();
        var vdir = $('#direccion').val();
        var vcit = $('#ciudad').val();
        var vest = $('#estado').val();
        var vcp = $('#codigo_postal').val();
        var vcor = $('#correo').val();
        var vdet = $('#detalles').val();

        if (vnom=="" || vtel=="" || vdir=="" || vcit=="" || vest=="" || vcp=="" || vcor=="" || vdet=="") {
            console.log("Falto capturar informacion");
            $('#modalMensaje .modal-header').addClass('modal-header-danger');
            $('#modalMensaje .modal-header h2').text("Formulario Incompleto");
            $('#modalMensaje .modal-body h3').text("Debe capturar todos los campos");
            $('#modalMensaje').modal();
            $("#modalMensaje").on('shown.bs.modal', function () {
                $('#botonCerrar').focus();
            });
            $("#modalMensaje").on('hidden.bs.modal', function () {
                $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                $("#nombre").focus();
            });


        } else {
        $.post('./php/agregar.php',
                {id: vid, nom: vnom, num_tel: vtel, direccion: vdir, ciudad: vcit, estado: vest, codigo_postal: vcp,correo: vcor, detalles: vdet,tipoOperacion: tipoOperacion},
                function (ret) {

                if (ret.resultado!= 0) {

                console.log('Error Insercion');

                $('#modalMensaje .modal-header').addClass('modal-header-danger');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text(ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                });
                }
                else {
                $('#idform').val(ret.detalle);

                $('#modalMensaje .modal-header').addClass('modal-header-success');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text("Usuario : "+ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#myModal .modal-header').removeClass('modal-header-success');
                });

                $('#b_nuevo').prop("disabled", false);     //Enabled
                $('#b_grabar').prop("disabled", true);     //Disabled
                $('#b_eliminar').prop("disabled", false);  //Enabled
                $('#b_modificar').prop("disabled", false); //Enabled
                $('#b_consultar').prop("disabled", false); //Enabled
            }
        },'json');

        $('.form-control').prop("disabled", true);
        $('#b_nuevo').prop("disabled",true);
        $('#b_grabar').prop("disabled",false);
        $('#b_eliminar').prop("disabled",true);
        $('#b_modificar').prop("disabled",true);
        $("#nombre").focus();
        }
    });



    $('#b_eliminar').click( function() {
        var vid = $('#idform').val();

        if (confirm('Borrar')) {
            $.post('../php/eliminar.php',
            {idform: vid},
            function (ret) {
                alert("Borrado");
            },'json');

            $('input').val('');
            $('.form-control').prop("disabled", true);
            $('#b_nuevo').prop("disabled", false);
            $('#b_grabar').prop("disabled", true);
            $('#b_eliminar').prop("disabled", true);
        } else {
            alert("No se borra");
        }
    });

});