<?php
require_once("../../app/models/producto.class.php");
require_once("../../app/models/carrito.class.php");
try{
	if(isset($_GET['id'])){
		$valor = new Valoracion;
		if($producto->setId($_GET['id'])){
			if($producto->readProductos()){
				require_once("../../app/views/public/producto/detalleview.php");
			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		throw new Exception("Seleccione producto");
	}


	if(isset($_POST['agregar'])){
		$carrito = new Carrito;
		$_POST = $carrito->validateForm($_POST);
		if(isset($_GET['id'])){
			if($carrito->setIdProducto($_GET['id'])){
				if($carrito->setIdCliente($_SESSION['IdCliente'])){
        			if($carrito->setCantidad($_POST['cantidad'])){ 
						if($carrito->createCarrito()){
							Page::showMessage(1, "Se agrego a tu carrito", "index.php");
						}else{
							throw new Exception(Database:: getException());
						}  
					}else{
						throw new Exception("Cantidad incorrecto");
					}   
				}else{
					throw new Exception("No has iniciado sesion");
        		}        
	}else{
		throw new Exception("Producto incorrecto");
	}
}else{
	throw new Exception("Seleccione producto");
}
	}

	
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
?>