<?php
$Termino = $_GET['term'];

//$Termino = 'G';

$dbHost     = "localhost";
$dbName     = "login_register_db";
$dbUsername = "root";
$dbPassword = "";
$listaDatos = array();

// Regresa un array de objetos para el Autocomplete

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    $data['label'] = $row['Err'];
    $data['value'] = $db->connect_error;
    array_push($listaDatos, $data);
} else {

    $query = $db->query("SELECT * FROM formulario WHERE nombre_completo LIKE '%".$Termino."%' ORDER BY nombre ASC");
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){

        $datosreg['nombre_comp'] = $row['nombre_comp'];
        $datosreg['numero_tel'] = $row['numero_tel'];
        $datosreg['direccion'] = $row['direccion'];
        $datosreg['ciudad']     = $row['ciudad'];
        $datosreg['estado']  = $row['estado'];
        $datosreg['codigo_postal'] = $row['codigo_postal'];
        $datosreg['correo'] = $row['correo'];
        $datosreg['detalles'] = $row['detalles'];

        $data['label'] = $row['nombre_completo'];
        $data['value'] = $datosreg;
        array_push($listaDatos, $data);
        }
    }
}

echo json_encode($listaDatos);
?>