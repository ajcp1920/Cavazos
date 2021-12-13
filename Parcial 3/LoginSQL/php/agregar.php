<?php
$vidform        = $_POST['id'];
$vnombre_comp  = $_POST['nom'];
$vnumero_tel = $_POST['num_tel'];
$vdireccion = $_POST['direccion'];
$vciudad    = $_POST['ciudad'];
$vestado  = $_POST['estado'];
$vcodigo_postal   = $_POST['codigo_postal'];
$vcorreo   = $_POST['correo'];
$vdetalles   = $_POST['detalles'];
$vTipo      = $_POST['tipoOperacion'];

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
                  SET nombre_comp = ?, numero_tel = ?, direccion  = ?, ciudad = ?, estado=?, codigo_postal = ? , correo=?, detalles=?";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(1, $vnombre_comp);
        $stmt->bindParam(2, $vnumero_tel);
        $stmt->bindParam(3, $vdireccion);
        $stmt->bindParam(4, $vciudad);
        $stmt->bindParam(5, $vestado);
        $stmt->bindParam(6, $vcodigo_postal);
        $stmt->bindParam(7, $vcorreo);
        $stmt->bindParam(8, $vdetalles);
    } else {
        $query = "UPDATE formulario 
                  SET nombre_comp = ?, numero_tel = ?, direccion  = ?, ciudad = ?, estado=?, codigo_postal = ? , correo=?, detalles=?
                  WHERE idform = ?";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(1, $vnombre_comp);
        $stmt->bindParam(2, $vnumero_tel);
        $stmt->bindParam(3, $vdireccion);
        $stmt->bindParam(4, $vciudad);
        $stmt->bindParam(5, $vestado);
        $stmt->bindParam(6, $vcodigo_postal);
        $stmt->bindParam(7, $vcorreo);
        $stmt->bindParam(8, $vdetalles);
        $stmt->bindParam(9, $vidform);
        
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
            $row['informacion']= $vnombre_comp;
            $row['mensaje']    = "Registro Modificado exitosamente";
            $row['detalle']    = $vidform;
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
