<?php
require_once("../../app/models/carrito.class.php");
try{
	//Aqui va el codigo para buscar algo en el carrito
    $carrito = new Carrito;
    	if($carrito->setId($_SESSION['IdCliente'])){
			if(isset($_POST['buscar'])){
       			 $_POST = $carrito->validateForm($_POST);
					$data = $carrito->searchCompra($_POST['Buscar']);
						if($data){
							$rows = count($data);
								Page::showMessage(4, "Se encontraron $rows resuldatos", null);
				}else{
					Page::showMessage(4, "No se encontraron resultados", null);
						$data = $carrito->getCompra();
				}
		}else{
			$data = $carrito->getCompra();
		}
			if($data){
				require_once("../../app/views/public/compras/indexview.php");
	}else{
		Page::showMessage(3, "No hay marcas disponibles", "create.php");
	}
}else{
    Page::showMessage(2, "Usuario incorrecto", "../inicio/index.php");
}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}

?>