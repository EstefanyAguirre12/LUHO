<?php
require_once("../../app/models/producto.class.php");
require_once("../../app/models/carrito.class.php");
require_once("../../app/models/valoracion.class.php");
require_once("../../app/models/comentario.class.php");

try{
    //Aqui va el codigo para comentar productos
	if(isset($_GET['id'])){
		$producto = new Producto;
		if($producto->setId($_GET['id'])){
			if($producto->readProductos()){
				$coment = new Comentario;
				$comenta = $coment->getComentarios();
				if($comenta){
					require_once("../../app/views/public/producto/detalleview.php");
				}else{
				}

			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		throw new Exception("Seleccione producto");
	}
	//Aqui va el codigo para agregar items al carrito
	$carrito = new Carrito;
	$carrito->setIdCliente($_SESSION['IdCliente']);
	$cuenta = $carrito->getCuenta();
	if($cuenta){
		if(isset($_POST['agregar'])){
			$_POST = $carrito->validateForm($_POST);
			if(isset($_GET['id'])){
				if($carrito->setIdProducto($_GET['id'])){
					if($carrito->setIdCliente($_SESSION['IdCliente'])){
						if($carrito->setCantidad($_POST['cantidad'])){ 
							if($carrito->createCarrito()){
								Page::showMessage(1, "Se agrego a tu carrito", "../carrito/index.php");
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
	}else{
		if($carrito->setIdCliente($_SESSION['IdCliente'])){
			if($carrito->createCuenta()){
				$carrito->setIdCliente($_SESSION['IdCliente']);
				$cuenta = $carrito->getCuenta();
				if($cuenta){
					if(isset($_POST['agregar'])){
						$_POST = $carrito->validateForm($_POST);
						if(isset($_GET['id'])){
							if($carrito->setIdProducto($_GET['id'])){
								if($carrito->setIdCliente($_SESSION['IdCliente'])){
									if($carrito->setCantidad($_POST['cantidad'])){ 
										if($carrito->createCarrito()){
											Page::showMessage(1, "Se agrego a tu carrito", "../carrito/index.php");
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
				}
			}else{
				throw new Exception(Database:: getException());
			}  
		}
		else{

		}
	}

	
    //Aqui va el codigo para comentar un producto
	if(isset($_POST['comentario'])){
		$coment = new Comentario;
		$_POST = $coment->validateForm($_POST);
		if(isset($_GET['id'])){
			if($coment->setIdProducto($_GET['id'])){
				if($coment->setIdCliente($_SESSION['IdCliente'])){
        			if($coment->setComentario($_POST['coment'])){ 
						if($coment->createComentario()){
							Page::showMessage(1, "Se agrego a tu coment", null);
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
    //Aqui va el codigo para poder hacer la valoracion a un producto
	if(isset($_POST['valor'])){
		if(isset($_GET['id'])){
			$valor = new Valoracion;
				$_POST = $valor->validateForm($_POST);
					if($valor->setIdCliente($_SESSION['IdCliente'])){
						if($valor->setIdProducto($_GET['id'])){
							if($valor->setValoracion($_POST['valoracion'])){ 
								if($valor->createValoracion()){
									Page::showMessage(1, "Gracias por calificar nuestros productos", "../principal/index.php");
							}else{
								throw new Exception(Database:: getException());
							}  
					}else{
						throw new Exception("Cantidad incorrecto");
					}   
			}else{
				throw new Exception("Producto incorrecto");
			}
	}else{
		throw new Exception("Seleccione producto");
		}
}else{
    Page::showMessage(2, "Usuario incorrecto");
	}
}
if(isset($_POST['crear'])){
	$_POST = $comentario->validateForm($_POST);
		if($comentario->setComentario($_POST['Comentario'])){ 
			if($comentario->createComentario()){
				Page::showMessage(1, "Tu mensaje se ha creado", "index.php");
		}else{
			throw new Exception(Database:: getException());
		}      
	}else{
		throw new Exception("Mensaje Incorrecto");
	}        
}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
require_once("../../app/views/public/producto/detalleview.php");
?>