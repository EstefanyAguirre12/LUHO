<?php
require_once("../../app/models/comentario.class.php");
try{
	//Aqui va el codigo para eliminar un comentario
	if(isset($_GET['id'])){
		$comentario = new Comentario;
		if($comentario->setId($_GET['id'])){
			if($comentario->readComentario()){
				if(isset($_POST['eliminar'])){
					if($comentario->deleteComentario()){
                        Page::showMessage(1, "Comentario", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Comentario inexistente");
			}
		}else{
			throw new Exception("Comentario incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un comentario", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/marca/delete_view.php");
?>