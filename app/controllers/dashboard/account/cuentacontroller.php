<?php
require_once("../../app/models/usuario.class.php");
try{
    $usuario = new Usuario;
    if($usuario->setId($_SESSION['IdUsuario'])){
        if($usuario->readUsuario()){
            if(isset($_POST['modificar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombre($_POST['Nombre'])){
                    if($usuario->setApellido($_POST['Apellido'])){
                        if($usuario->setCorreo($_POST['Correo'])){
                            if($usuario->setUsuario($_POST['Usuario'])){
                                if($usuario->setDireccion($_POST['Direccion'])){
                                    if($usuario->updateUsuario()){
                                        Page::showMessage(1, "Usuario moficado", "../inicio/index.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Clave menor a 6 caracteres");
                                }
                            }else{
                                throw new Exception("Alias incorrecto");
                            }
                        }else{
                            throw new Exception("Correo incorrecto");
                        }
                    }else{
                        throw new Exception("Apellidos incorrectos");
                    }
                }else{
                    throw new Exception("Nombres incorrectos");
                }
            }
        }else{
            Page::showMessage(2, "Usuario inexistente", "../inicio/index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "../inicio/index.php");
    }




}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/cuentaview.php");
?>