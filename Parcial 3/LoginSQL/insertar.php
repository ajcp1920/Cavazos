<?php
$host = 'localhost';
$dbname = 'login_register_db';
$username = 'root';
$password = '';

$nombre = $_POST['nombrecompleto'];
$numero_tel = $_POST['numerotel'] ;
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$codigo_postal = $_POST['cp'];
$correo = $_POST['correo'];
$detalles = $_POST['formcomentarios'];

$con = mysqli_connect($host,$username,$password,$dbname);
$cmm = ("INSERT INTO formulario (nombre_comp,numero_tel,direccion,ciudad,estado,codigo_postal,correo
detalles) values ('$nombre','$numero_tel','$direccion','$ciudad','$estado','$codigo_postal','$correo','$detalles')" );

$resultado = mysqli_query($con,$cmm);

if($resultado){
    echo "<script>alert('Datos almacenados')</script>";
    header("Location: formulario.php");
}else{
    echo "<script>alert('Error')</script>";
    header("Location: formulario.php");
}
?>
