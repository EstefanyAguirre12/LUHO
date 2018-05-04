<?php
require_once("../../app/models/categoria.class.php");
try{
	//Aqui va el codigo para categoria masculina y femenina
	$categoria = new Categoria;
		$categoriasF = $categoria->getCategoriaF();
			$categoriasM = $categoria->getCategoriaM();
				if($categoriasF){
					require_once("../../app/views/public/menu/menuview.php");
			}else{
					Page::showMessage(3, "No hay categorías disponibles", null);
			}
					if($categoriasM){
						require_once("../../app/views/public/menu/menuview.php");
		}else{
						Page::showMessage(3, "No hay categorías disponibles", null);
	}
	}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>