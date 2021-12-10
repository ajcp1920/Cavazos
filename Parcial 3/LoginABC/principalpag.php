<!DOCTYPE html>
<?php 

    if(isset($_SESSION['usuario'])) {
        $UsuarioIngresado = $_SESSION['usuario'];
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <style>
        body{
            background-image: url(image/wallpaper.jpg);
            
            height: 100%;
        }

        
        .container{
            width: 100%;
            height: 80%;
            max-width: 800px;
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
            background: lightyellow;
            text-align: center;
            padding: 20px;
        }

        .container h1{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 50px;
            color: black;
            font-weight: 100;
            margin-top: 20px;
        }

        .container h4{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            color: black;
            font-weight: 100;
            margin-top: 20px;
        }


        .container form{
            color: white;
            text-align: left;
        }

        .container a{
            display: block;
            width: 50%;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid black;
            color: blue;
            text-align: center;
            text-decoration: none;
        }

        .container a:hover{
            color: black;
            background: white;
        }

        .line-input{
            max-width: 350px;
            display: flex;
            border-bottom: 1px solid white;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 6px;
            position: relative;
        }


        .line-input input{
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
            color: black;
            border-style: none;
            outline: 0px;
            margin-left: 10px;
            font-size: 16px;
            width: 100%;
            font-weight: 300;
        }

        .container button{
            display: block;
            margin-left: 44%;
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid black;
            background: lightyellow;
            color: blue;
            text-align: center;
            text-decoration: none;
        }

        .container button:hover{
            color: black;
            background: white;
        }   
    </style>
</head>
<body>
   
    <div class="container">
        <h1>Bienvenido 
            <?php 
                echo $UsuarioIngresado;
            ?>
        </h1>
        <br><br>
        <h4>Consulta de datos almacenados</h4>
        
        <center><table class="table table-striped table-dark">
	    <tr align="center">
		    <th width = 10%>ID</th>
		    <th width = 10%>Nombre Completo</th>
		    <th width = 10%>Numero celular</th>
		    <th width = 10%>Direccion</th>
            <th width = 10%>Ciudad</th>
            <th width = 10%>Estado</th>
            <th width = 10%>Codigo postal</th>
            <th width = 10%>Correo Electronico</th>
            <th width = 10%>Detalles</th>
	    </tr></center>
        <?php
            require_once "conexion.php";
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion->exec("SET CHARACTER SET utf8");

            $consulta = "SELECT * FROM formulario";
            $resultado=$conexion->prepare($consulta);
            $resultado->execute(array());
            $i = 0;
            while ( $fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $idform = $fila['idform'];
                $Nombrecomp = $fila['Nombrecomp'];
                $numerotel = $fila['numerotel'];
                $direccion = $fila['direccion']; 
                $ciudad = $fila['ciudad'];
                $estado = $fila['estado']; 
                $codigo_postal = $fila['codigo_postal']; 
                $correo = $fila['correo'];
                $detalles = $fila['detalles'];
	            

	            $i++;

        ?>
        <tr align="center">
        <td><?php echo $idform; ?></td>
        <td><?php echo $Nombrecomp; ?></td>
        <td><?php echo $numerotel; ?></td>
        <td><?php echo $direccion; ?></td>
        <td><?php echo $ciudad; ?></td>
        <td><?php echo $estado; ?></td>
        <td><?php echo $codigo_postal; ?></td>
        <td><?php echo $correo; ?></td>
        <td><?php echo $detalles; ?></td>
        </tr>
        <?php } $resultado->closeCursor();?>
        </table>
        
        <br>
    <div class="form">
        <div id="Insertar">
            <form method="POST" action="Insertar.php">
                <h4 align="center">Agregar Datos para envio</h4>
                <div class="nombre line-input">
                    <input type="text" name="nombre" placeholder = "Nombre Completo"><br />
                </div>
                <div class="numerotel line-input">
                    <input type="text" name="numerotel" placeholder = "Numero celular"><br />
                </div>
                <div class="direccion line-input">
                    <input type="text" name="direccion" placeholder = "Direccion"><br /><br>
                </div>
                <div class="ciudad line-input">
                    <input type="text" name="ciudad" placeholder = "Ciudad"><br />
                </div>
                <div class="estado line-input">
                    <input type="text" name="estado" placeholder = "Estado"><br />
                </div>
                <div class="codigopostal line-input">
                    <input type="text" name="codigopostal" placeholder = "Codigo Postal"><br />
                </div>
                <div class="correo line-input">
                    <input type="text" name="correo" placeholder = "Correo Electronico"><br />
                </div>
                <div class="detalles line-input">
                    <input type="text" name="detalles" placeholder = "Detalles domicilio"><br />
                </div>
	            <button type="submit" name="insert" value = "Insertar">Agregar</button>
            </form>
        </div>
        <br>
        <div id="Eliminar">
            <form method="POST" action="Eliminar.php">
                <h4 align="center">Eliminar usuario</h4>
                <div class="id line-input">
                    <input type="text" name="idBorrar" placeholder = "Ingrese ID">
                </div>
                <button type="submit" name="eliminar" value = "Eliminar" onclick="return ConfirmDelete()">Eliminar</button>
            </form>
        </div>
    </div>
    <a href="cerrar.php">Cerrar sesion</a>
    </div>
    <script src="js/ConfirmDel.js"></script>
</body>
</html>