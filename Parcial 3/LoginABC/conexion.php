<?php
    
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
    }catch(PDOException $error){
        echo "Error: " . $error->getMessage();
    }

?>