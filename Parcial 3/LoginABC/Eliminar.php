<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "conexion.php";
    if(isset($_POST["eliminar"])){
        $borrarid = $_POST["idBorrar"];
        try{

            $sql = "DELETE FROM formulario WHERE idform=:idBorrar";

            $statement = $conexion->prepare($sql);
            
            $statement->execute(array(":idBorrar"=>$borrarid));

            if ($statement){
                $statement->closeCursor();
                header('location: principal.php');
            }

        }catch(PDOException $errorcon){
            echo "Error: " . $errorcon->getMessage();
        }
    }
}

?>