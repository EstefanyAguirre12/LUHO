<?php
require_once("../../app/models/ocasion.class.php");
try{
    $ocasion = new Ocasion;
    if(isset($_POST['crear'])){
        $_POST = $ocasion->validateForm($_POST);
        if($ocasion->setNombre($_POST['Nombre'])){
                                if($ocasion->createOcasion()){
                                    Page::showMessage(1, "Usuario creado", "");
                                }else{
                                    throw new Exception(Database::getException());
                                }
        }else{
            throw new Exception("Nombres incorrectos");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/ocasion/createview.php");
?>

