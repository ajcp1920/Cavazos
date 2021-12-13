<?php
$TerminoBusqueda=$_GET['term'];
$distaDatos = array();

$hostname = 'localhost';
$database = 'login_regiser_db';
$username = 'root';
$password = '';


try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT idform,nombre_comp FROM formulario
                            WHERE nombre_comp LIKE '%".$TerminoBusqueda."%' ORDER BY nombre ASC");
    $stmt->execute();

    while($row = $stmt->fetch()) {
    $listaDatos[] =  $row['idform'].' '.$row['nombre_comp'];
    }
} catch(PDOException $e) {
    $listaDatos[] =  $e->getMessage();
}

echo json_encode($listaDatos);
?>