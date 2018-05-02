<?php
require_once("../../app/models/cliente.class.php");
try{
    $usuario = new Cliente;
    if(isset($_POST['crear'])){
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setNombre($_POST['Nombre'])){
            if($usuario->setApellido($_POST['Apellido'])){
                if($usuario->setCorreo($_POST['Correo'])){
                    if($usuario->setUsuario($_POST['Usuario'])){
                        if($usuario->setDireccion($_POST['Direccion'])){
                                if($_POST['clave1'] == $_POST['clave2']){
                                    if($usuario->setContrasena($_POST['clave1'])){
                                        if($usuario->createCliente()){
                                            Page::showMessage(1, "¡Ya puedes iniciar sesion!", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Clave menor a 6 caracteres");
                                    }
                                }else{
                                throw new Exception("Claves diferentes");
                            }
                        }else{
                            throw new Exception("Direccion incorrecta");
                        }
                    }else{
                        throw new Exception("Usuario incorrecto");
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
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/account/registroview.php");
?>