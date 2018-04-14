<?php
require_once("../../app/models/marca.class.php");
try{
    $marca = new Marca;
    if(isset($_POST['insertar'])){
        $_POST = $marca->validateForm($_POST);
        if($marca->setNombre($_POST['Nombre'])){ 
            if($marca->createMarca()){
                Page::showMessage(1, "Se creo la marca", "index.php");
            }else{
                throw new Exception(Database:: getException());

            }      
        }else{
            throw new Exception("Nombre incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/marcaymaterial/create_view.php");
?>