<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Por favor debes iniciar sesion");
        window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>

<html lang="es">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.min.css">
    <script src="./resources/jquery/jquery-1.11.3.min.js"></script>
    <script src="./resources/jqueryui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="./resources/jqueryui/jquery-ui.theme.min.css" />
    <script src="./resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script2.js"></script>
    <title>Formulario</title>


<body>
<style>
        body {
            background-image: url(images/wallpaper.jpg);
            background-size: cover;
            height: 100%;
        }
    </style>
    
    <div class="container">
        <form class="form-register" action="insertar.php" method="POST">

            <p class="uno"></p>
            <h1>Datos para envio de Paquetes de Mercado Libre</h1>
            </p>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button id="b_limpiar" type="button" class="btn btn-primary">Limpiar</button>
                    <button id="b_nuevo" type="button" class="btn btn-primary">Nuevo</button>
                    <button id="b_grabar" type="button" class="btn btn-primary" disabled>Grabar</button>
                    <button id="b_eliminar" type="button" class="btn btn-primary" disabled>Eliminar</button>
                    <button id="b_consultar" type="button" class="btn btn-primary">Consultar</button>
                    <button id="b_modificar" type="button" class="btn btn-primary" disabled>Modificar</button>
                </div>
                <div class="row">
                    <div class="form-group col-xs-4">
                        <label for="idform" class="control-label">ID</label>
                        <input id="idform" type="text" class="form-control" placeholder="00" disabled />
                    </div>
                    <div class="form-group col-xs-8">
                        <label for="nombre_completo">Nombre Completo</label>
                        <input id="nombre_completo" type="text" class="form-control" placeholder="Ej. Arturo de Jesus Cavazos Pastrana" disabled />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-7">
                        <label for="numero_tel">Numero telefonico</label>
                        <input id="numero_tel" type="text" class="form-control" placeholder="Ej. (+52) 897 107 4895" disabled />
                    </div>
                    <div class="form-group col-xs-5">
                        <label for="direccion">Direccion</label>
                        <input id="direccion" type="text" class="form-control" placeholder="Ej. Independencia Col. centro #403" disabled />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-7">
                        <label for="ciudad">Ciudad</label>
                        <input id="ciudad" type="text" class="form-control" placeholder="Ej. Cd. Mier" disabled />
                    </div>
                    <div class="form-group col-xs-5">
                        <label for="estado">Ingrese su Estado</label>
                        <input id="estado" type="text" class="form-control" placeholder="Ej. Tamaulipas" disabled />
                    </div>
                </div>
                <div class="form-group col-xs-5">
                    <label for="codigo_postal">Codigo Postal</label>
                    <input id="codigo_postal" type="text" class="form-control" placeholder="Ej. 88390" disabled />
                </div>
                <div class="form-group col-xs-5">
                    <label for="correo">Correo Electronico</label>
                    <input id="correo" type="text" class="form-control" placeholder="ejemplo@gmail.com" disabled />
                </div>
                <div class="form-group col-xs-5">
                    <label for="detalles">Detalles del domicilio</label>
                    <input id="detalles" type="text" class="form-control" placeholder="Ej. Color amarilla, con una barda, etc." disabled />
                </div>
        </form>
    </div>
    <div>
        <a href="php/cerrar_sesion.php"><button>Cerrar Sesion</button></a>
    </div>
</body>

</html>