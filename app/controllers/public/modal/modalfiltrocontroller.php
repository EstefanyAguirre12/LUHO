<?php
require_once("../../app/models/producto.class.php");
try{
	//Aqui va el codigo para hacer un filtro
		$filtro = new Producto;
			$marca = $filtro->getMarca();
				$ocasion = $filtro->getOcasion();
					if($marca){
						require_once("../../app/views/public/sections/modalfiltroview.php");
				}else{
					Page::showMessage(3, "No hay categorías disponibles", null);
				}
					if($ocasion){
						require_once("../../app/views/public/sections/modalfiltroview.php");
				}else{
					Page::showMessage(3, "No hay categorías disponibles", null);
				}
	}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>