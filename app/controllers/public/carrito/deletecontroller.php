<?php
require_once("../../app/models/carrito.class.php");
try{
	//Este es el codigo para poder eliminar algo del carrito
	if(isset($_GET['id'])){
		$carro = new Carrito;
		if($carro->setId($_GET['id'])){
			if($carro->readCarrito()){
				if(isset($_POST['eliminar'])){
					if($carro->deleteCarrito()){
                        Page::showMessage(1, "Categoria eliminada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Categoría inexistente");
			}
		}else{
			throw new Exception("Categoría incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione categoría", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/public/carrito/deleteview.php");
?>