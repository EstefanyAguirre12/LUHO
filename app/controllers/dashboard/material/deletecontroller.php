<?php
require_once("../../app/models/material.class.php");
try{
	if(isset($_GET['id'])){
		$material = new Material;
		if($material->setId($_GET['id'])){
			if($material->readTalla()){
				if(isset($_POST['eliminar'])){
					if($material->deleteTalla()){
                        Page::showMessage(1, "Material eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Material inexistente");
			}
		}else{
			throw new Exception("Material incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione Material", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/material/deleteview.php");
?>