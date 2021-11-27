<!DOCTYPE html>
<html lang="es">
<?php
session_start();
if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header("Location: ./login.html");
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Descripción">
    <meta name="author" content="Contenido">
    <title>Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='./css/ModalHeaderColor.css' />

    <link rel="stylesheet" href="./css/formulario.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/index.js"></script>
</head>

<body>
    <div id="contenedorPrin" class="toggled">
        <!-- Contenido -->
        <div id="contenedorConte">
            <div class="container-fluid">
                <div class="row encabezado">
                    <div class="col-xs-6 col-sm-6 enca1">
                        <a href="#botonMenu" class="btn btn-default btn-lg" id="botonMenu">
                            <i class="fa fa-bars"></i></a>
                    </div>

                    <div class="col-xs-6 col-sm-6 enca2">
                        <button type="button" class="btn btn-default btn-lg" id="botonUsuario"><?php echo $_SESSION['login']; ?><i class="fa fa-user"></i></button>
                        <button type="button" class="btn btn-danger btn-lg" id="botonSalir">Cerrar Sesion<i class="fa fa-sign-out"></i></button>
                    </div>
                </div>

                <div class="row contenido">


                    <form class="form">

                        <div class="row">
                        </div>

                        <div class="container">
                            <form class="form">

                                <p class="uno"></p>
                                <h1>Datos para envio de Paquetes de Mercado Libre</h1>
                                </p>

                                <div style="text-align: center"></div>
                                <div class="mb-3">
                                    <label for="nombrecompleto" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombrecompleto" placeholder="Ej. Arturo de Jesus Cavazos Pastrana">
                                </div>

                                <div class="mb-3">
                                    <label for="numerotel" class="form-label">Numero telefonico</label>
                                    <input type="text" class="form-control" id="numerotel" placeholder="Ej. (+52) 897 107 4895">
                                </div>

                                <div class="mb-3">
                                    <label for="Direccion" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" placeholder="Ej. Independencia Col. centro #403">
                                </div>

                                <div class="mb-3">
                                    <label for="ciudad" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="ciudad" placeholder="Ej. Cd. Mier">
                                </div>

                                <div class="mb-3">
                                    <label for="estado" class="form-label">Seleccione el Estado</label>
                                    <select class="form-select" aria-label="Seleccione el Estado">

                                        <option selected>Seleccionar</option>
                                        <option value="1">Aguascalientes</option>
                                        <option value="2">Baja California</option>
                                        <option value="3">Baja California Sur</option>
                                        <option value="4">Campeche</option>
                                        <option value="5">Chiapas</option>
                                        <option value="6">Chihuahua</option>
                                        <option value="7">Ciudad de México</option>
                                        <option value="8">Coahuila</option>
                                        <option value="9">Colima</option>
                                        <option value="10">Durango</option>
                                        <option value="11">Estado de México</option>
                                        <option value="12">Guanajuato</option>
                                        <option value="13">Guerrero</option>
                                        <option value="14">Hidalgo</option>
                                        <option value="15">Jalisco</option>
                                        <option value="16">Michoacán</option>
                                        <option value="17">Morelos</option>
                                        <option value="18">Nayarit</option>
                                        <option value="19">Nuevo León</option>
                                        <option value="20">Oaxaca</option>
                                        <option value="21">Puebla</option>
                                        <option value="22">Querétaro</option>
                                        <option value="23">Quintana Roo</option>
                                        <option value="24">San Luis Potosí</option>
                                        <option value="25">Sinaloa</option>
                                        <option value="26">Sonora</option>
                                        <option value="27">Tabasco</option>
                                        <option value="28">Tamaulipas</option>
                                        <option value="29">Tlaxcala</option>
                                        <option value="30">Veracruz</option>
                                        <option value="31">Yucatá</option>
                                        <option value="32">Zacateacas</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="cp" class="form-label">Codigo Postal</label>
                                    <input type="text" class="form-control" id="cp" placeholder="Ej. 88390">
                                </div>

                                <div class="mb-3">
                                    <label for="Correo" class="form-label">Correo Electronico</label>
                                    <input type="text" class="form-control" id="correo" placeholder="ejemplo@gmail.com">
                                </div>

                                <div class="mb-3">
                                    <label for="Comentarios" class="form-label">Detalles de domicilio</label>
                                    <textarea class="form-control" id="formcomentarios" rows="3" placeholder="Ej. Color amarilla, con una barda, etc."></textarea>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="ckbxterminos">
                                    <label class="form-check-label" for="terminos">Acepto los terminos y condiciones</label>
                                    <link href="">
                                </div>

                                <button type="submit" class="btn btn-primary">Confirmar datos</button>
                            </form>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>