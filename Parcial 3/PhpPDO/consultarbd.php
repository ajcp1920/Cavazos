<?php
include "conectarbd.php";

try{
    $queryStr="select * from Usuario";
    $query=$con->prepare($queryStr);
    $query->execute();
    while($row = $query->fetch()) {
        echo $row['id'].'-'.
            $row['pass'].'<br>';
    }
    $query->closeCursor();
}catch(PDOException $e){
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

try{
    $queryStr="select * from Datos";
    $query=$con->prepare($queryStr);
    $query->execute();
    while($row = $query->fetch()){
        echo $row['nomcom'].'-'.
        $row['numerotel'].'-'.
        $row['direccion'].'-'.
        $row['ciudad'].'-'.
        $row['estado'].'-'.
        $row['codpos'].'-'.
        $row['email'].'-'.
        $row['comentariosextras'].'<br>';
    }
    $query->closeCursor();
}catch(PDOException $e){
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

?>
