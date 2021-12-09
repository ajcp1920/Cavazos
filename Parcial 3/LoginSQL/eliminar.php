<?php
$host = 'localhost';
$dbname = 'login_register_db';
$username = 'root';
$password = '';

$nombre_comp_eliminar = $_POST['nombrecompleto'];

$con = mysqli_connect($host,$username,$password,$dbname);
$cmm = "DELETE FROM formulario where nombre_comp = '$nombre_comp_eliminar'";

$resultado_Eliminar = mysqli_query($con,$cmm);

if($resultado_Eliminar){
    echo "<script> alert('se ha eliminado con exito');</script>";
    header("Location: consulta.php");
}else{
    echo "<script>alert('Error al eliminar datos');</script>";
    header("Location: formulario.php");
}
?>
