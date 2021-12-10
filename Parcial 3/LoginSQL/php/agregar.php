<?php
$vId        = $_POST['id'];
$vNombre    = $_POST['nom'];
$vNumerotel = $_POST['numtel'];
$vDireccion = $_POST['direc'];
$vCiudad     = $_POST['cd'];
$vEstado  = $_POST['est'];
$vCodigo_postal   = $_POST['cp'];
$vCorreo   = $_POST['email'];
$vDetalles   = $_POST['detalle'];
$vTipo      = $_POST['tip'];

$hostname = 'localhost';
$database = 'login_register_db';
$username = 'root';
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch(PDOException $e) {
    $row['resultado']  = '1';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Exeption';
    $row['detalle']    = $e->getMessage();
}


try {
    if ($vTipo==1) {
        $query = "INSERT INTO formulario
                  SET nombre_completo = ?, numero_tel = ?, direccion  = ?, ciudad = ?, estado=?, codigo_postal = ? , correo=?, detalles=?";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(1, $vNombre);
        $stmt->bindParam(2, $vNumerotel);
        $stmt->bindParam(3, $vDireccion);
        $stmt->bindParam(4, $vCiudad);
        $stmt->bindParam(5, $vEstado);
        $stmt->bindParam(6, $vCodigo_postal);
        $stmt->bindParam(7, $vCorreo);
        $stmt->bindParam(8, $vDetalles);
    } else {
        $query = "UPDATE formulario
                  nombre_completo = ?, numero_tel = ?, direccion  = ?, ciudad = ?, estado=?, codigo_postal = ? , correo=?, detalles=?
                  WHERE idform = ?";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(1, $vNombre);
        $stmt->bindParam(2, $vNumerotel);
        $stmt->bindParam(3, $vDireccion);
        $stmt->bindParam(4, $vCiudad);
        $stmt->bindParam(5, $vEstado);
        $stmt->bindParam(6, $vCodigo_postal);
        $stmt->bindParam(7, $vCorreo);
        $stmt->bindParam(8, $vDetalles);
        $stmt->bindParam(8, $vId);
        
    }

   if ($stmt->execute()) {

        if ($vTipo==1) {
            $stmt = $dbh->prepare("select LAST_INSERT_ID() as consecutivo");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $row['resultado']  = '0';
            $row['informacion']= 'Exito';
            $row['mensaje']    = "Registro Insertado exitosamente";
            $row['detalle']    = $result['consecutivo'];
        } else {
            $row['resultado']  = '0';
            $row['informacion']= $vNombre;
            $row['mensaje']    = "Registro Modificado exitosamente";
            $row['detalle']    = $vId;
       }
   } else {
        $row['resultado']  = '2';
        $row['informacion']= 'Error DB';
        $row['mensaje']    = 'Error Ejecucion de sentencia sql';
        $row['detalle']    = 'Error al hacer sentecia de insercion';
   }

} catch(PDOException $exception) {
    $row['resultado']  = '3';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Error de Exepcion';
    $row['detalle']    =  $exception->getMessage();
}


$encoded_row = array_map('utf8_encode',$row);
echo json_encode($encoded_row);
?>
