<?php
$hostname='localhost';
$database='FormualarioEnLinea';
$username='root';
$password='';

try{
    $con = new PDO("mysql:host=$hostname;dbname=$FormularioEnLinea",$username,$password);
} catch(PDOException $e){
    echo "Error de conexion a la base de datos";
    echo $e->getMessage();
    exit();
}

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>