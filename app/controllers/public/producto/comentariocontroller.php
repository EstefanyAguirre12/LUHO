<?php
require_once("../../app/models/comentario.class.php");
try{
    $comentario = new Comentario;
    if(isset($_POST['crear'])){
        $_POST = $comentario->validateForm($_POST);
        if($comentario->setComentario($_POST['Comentario'])){ 
            if($comentario->createComentario()){
                Page::showMessage(1, "Tu mensaje se ha creado", "index.php");
            }else{
                throw new Exception(Database:: getException());

            }      
        }else{
            throw new Exception("Mensaje Incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/marca/create_view.php");
?>