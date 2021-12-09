<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'principalpag.php';
    }else{
        header ('location: login.php');
    }
        
?>