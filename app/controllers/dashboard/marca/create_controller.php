<?php
require_once("../../app/models/marca.class.php");
try{
    //Este es el codigo para crear una nueva marca
    $marca = new Marca;
    if(isset($_POST['crear'])){
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
require_once("../../app/views/dashboard/marca/create_view.php");
?>