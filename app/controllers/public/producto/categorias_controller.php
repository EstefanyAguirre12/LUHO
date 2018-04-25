<?php
require_once("../../app/models/categoria.class.php");
try{
	$categoria = new Categoria;
	$categorias = $categoria->getCategoria();
	if($categorias){
		require_once("../../app/views/public/templates/page.class.php");
	}else{
		Page::showMessage(3, "No hay categorías disponibles", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>