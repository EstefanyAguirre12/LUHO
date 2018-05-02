<?php
require_once("../../app/models/producto.class.php");
try{
	if(isset($_GET['id'])){
		$producto = new Producto;
		if($producto->setIdcategoria($_GET['id'])){
			$productos = $producto->getCategoriaNombre();
			if($productos){
				require_once("../../app/views/public/producto/productoview.php");
			}else{
				throw new Exception("No hay productos disponibles");
			}
		}else{
			throw new Exception("Categoría incorrecta");
		}
	}else{
		throw new Exception("Seleccione categoría");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>