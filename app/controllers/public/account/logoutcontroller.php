<?php
require_once("../../app/models/cliente.class.php");
//Este es el codigo para cerrar la sesion
$object = new Cliente;
    if($object->logOut()){
        Page::showMessage(1, "Autenticación eliminada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>