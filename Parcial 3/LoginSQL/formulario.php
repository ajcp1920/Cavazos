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
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<body>
<div class="container">
        <form class="form-register" action="insertar.php" method="POST">

            <p class="uno"></p>
            <h1>Datos para envio de Paquetes de Mercado Libre</h1>
            </p>

            <div style="text-align: center"></div>
            <div class="mb-3">
                <label for="nombrecompleto" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombrecompleto" id="nombrecompleto" placeholder="Ej. Arturo de Jesus Cavazos Pastrana" required>
            </div>

            <div class="mb-3">
                <label for="numerotel" class="form-label">Numero telefonico</label>
                <input type="text" class="form-control" name="numerotel" id="numerotel" placeholder="Ej. (+52) 897 107 4895" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ej. Independencia Col. centro #403" required>
            </div>

            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ej. Cd. Mier" required>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Ingrese su Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" placeholder="Tamaulipas" required>
            </div>

            <div class="mb-3">
                <label for="cp" class="form-label">Codigo Postal</label>
                <input type="text" class="form-control" name="cp" id="cp" placeholder="Ej. 88390" required>
            </div>

            <div class="mb-3">
                <label for="Correo" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@gmail.com" required>
            </div>

            <div class="mb-3">
                <label for="formcomentarios" class="form-label">Detalles de domicilio</label>
                <textarea class="form-control" name="formcomentarios" id="formcomentarios" rows="3" placeholder="Ej. Color amarilla, con una barda, etc." required></textarea>
            </div>

            <input class="botons" type="submit" value="Capturar">
        </form>
        </form>
    </div>
    <div>
        <a href="php/cerrar_sesion.php"><button>Cerrar Sesion</button></a>
    </div>
</body>

</html>