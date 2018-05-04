<?php
require_once("../../app/models/carrito.class.php");
try{
    $carrito = new Carrito;
    if($carrito->setId($_SESSION['IdCliente'])){

	if(isset($_POST['buscar'])){
        $_POST = $carrito->validateForm($_POST);
        
		$data = $carrito->searchCarrito($_POST['Buscar']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $carrito->getCarrito();
		}
	}else{
		$data = $carrito->getCarrito();
	}
	if($data){
		require_once("../../app/views/public/carrito/indexview.php");
	}else{
		Page::showMessage(3, "tu carrito esta vacio.", "../principal/index.php");
	}
		
}else{
    Page::showMessage(2, "Usuario incorrecto", "../inicio/index.php");
}
$compra = new Carrito;
	if($compra->setId($_SESSION['IdCliente'])){
			if(isset($_POST['modificar'])){
					if($compra->updateCarrito()){
						Page::showMessage(1, "marca modificada", "index.php");
					}else{
						throw new Exception(Database::getException());
					}
			}
	
	}else{
		Page::showMessage(2, "marca incorrecta", "index.php");
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>