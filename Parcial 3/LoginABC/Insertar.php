<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "conexion.php";
    if(isset($_POST["insert"])){
        $Nombrecomp = $_POST["nombre"];
        $numerotel = $_POST["numerotel"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $estado = $_POST["estado"];
        $codigo_postal = $_POST["codigopostal"];
        $correo = $_POST["correo"];
        $detalles = $_POST["detalles"];
        $statement = $conexion->prepare("INSERT INTO formulario (idform,Nombrecomp,numerotel,direccion,ciudad,estado,codigo_postal,correo,detalles) 
        VALUES(null, :Nombrecomp, :numerotel, :direccion, :ciudad, :estado, :codigo_postal, :correo, :detalles)");
        $statement->execute(array(

            ':Nombrecomp'=> $Nombrecomp,
            ':numerotel' => $numerotel,
            ':direccion' => $direccion,
            ':ciudad' => $ciudad,
            ':estado' => $estado,
            ':codigo_postal' => $codigo_postal,
            ':correo' => $correo,
            ':detalles' => $detalles
        ));
        
        if ($statement){
            $statement->closeCursor();
            header('location: principal.php');
        }
    }
}

?>