<?php
require_once("../../app/models/cliente.class.php");
try{
	$object = new Cliente;
	if($object->getClientes()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setUsuario($_POST['Usuario'])){
				if($object->checkCliente()){
					if($object->setContrasena($_POST['Clave'])){
						if($object->checkContra()){
							$_SESSION['IdCliente'] = $object->getId();
							$_SESSION['Usuario'] = $object->getUsuario();
							Page::showMessage(1, "Autenticación correcta", "../principal/index.php");
						}else{
							throw new Exception("Clave inexistente");
						}
					}else{
						throw new Exception("Clave menor a 6 caracteres");
					}
				}else{
					throw new Exception("Usuario inexistente");
				}
			}else{
				throw new Exception("Usuario incorrecto");
			}
		}
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "registro.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/account/loginview.php");
?>