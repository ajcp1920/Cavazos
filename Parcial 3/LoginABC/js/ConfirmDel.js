function ConfirmDelete(){
    var respuesta=confirm("¿Esta seguro que desea eliminar a este usuario?");
    if(respuesta==true){
        return true;
    }
    else{
        return false;
    }
}