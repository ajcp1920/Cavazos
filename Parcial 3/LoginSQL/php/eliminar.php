<?php
$idform = $_POST['idform'];

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

$sql = "DELETE FROM formulario WHERE idform = ?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $idform);

 if($stmt->execute()){
       $row['resultado']  = '0';
       $row['informacion']= 'Eliminado';
       $row['mensaje']    = 'Eliminado';
       $row['detalle']    = "Registro Borrado";
} else {
       $row['resultado']  = '2';
       $row['informacion']= 'Error Execute';
       $row['mensaje']    = 'Error';
       $row['detalle']    = "Error al ejectar delete";
}

$encoded_row = array_map('utf8_encode',$row);
echo json_encode($encoded_row);
?>