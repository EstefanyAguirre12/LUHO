<?php
require_once("../../app/models/producto.class.php");
try{
	//Aqui va el codigo de busqueda de productos
	if(isset($_GET['id'])){
		$producto = new Producto;
		if($producto->setIdcategoria($_GET['id'])){
			if(isset($_GET['busqueda'])){
				if($producto->setBusqueda($_GET['busqueda'])){
					$productos = $producto->getCategoriaNombre();
					if($productos){
						require_once("../../app/views/public/producto/productoview.php");
					}else{
						Page::showMessage(3, "No hay productos disponibles", "index.php?id=" . $_GET['id']);
					}
				}else{
					Page::showMessage(3, "Busqueda incorrecta", "index.php?id=" . $_GET['id']);
				}
			}else{
				$productos = $producto->getCategoriaNombre();
				if($productos){
					require_once("../../app/views/public/producto/productoview.php");
				}else{
					Page::showMessage(3, "No hay productos disponibles", "../principal/index.php");
				}
			}
		}else{
			Page::showMessage(3, "Categoria incorrecta", "../principal/index.php");
		}
	}else{
		Page::showMessage(3, "Seleccione categoria", "../principal/index.php");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>