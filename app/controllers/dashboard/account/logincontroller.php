<?php
require_once("../../app/models/usuario.class.php");
try{
	//Este es el codigo para el login
	$object = new Usuario;
	$_SESSION['intentos'] = 0;
	if($object->getUsuarios()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setUsuario($_POST['Usuario'])){
				if($object->checkUsuario()){
					if($object->setContrasena($_POST['Clave'])){
						if($object->checkContra()){
							$_SESSION['IdUsuario'] = $object->getId();
							$_SESSION['Usuario'] = $object->getUsuario();
							$_SESSION['cargo'] = $object->getCargo();
							$_SESSION['Contrasena'] = $object->getContrasena();
							Page::showMessage(1, "Autenticación correcta", "../inicio/index.php");
						}else{
							$_SESSION['intentos'] += 1;
							throw new Exception("Clave inexistente");
						}
					}else{
						$_SESSION['intentos'] += 1;  
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
	if($_SESSION['intentos'] >= 3) {
		Page::showMessage(3, "No hay usuarios disponibles", "registro.php");
	 }
	 else {
	 }  
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/loginview.php");
?>