<?php
require_once("../../app/models/cliente.class.php");
try{
    //Aqui va el codigo para modificar la informacion de la cuenta
    $usuario = new Cliente;
    if($usuario->setId($_SESSION['IdCliente'])){
        if($usuario->readCliente()){
            if(isset($_POST['modificar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombre($_POST['Nombre'])){
                    if($usuario->setApellido($_POST['Apellido'])){
                        if($usuario->setCorreo($_POST['Correo'])){
                            if($usuario->setUsuario($_POST['Usuario'])){
                                if($usuario->setDireccion($_POST['Direccion'])){
                                    if($usuario->updateCliente()){
                                        Page::showMessage(1, "Cuenta moficada", "../inicio/index.php");
                                    }else{
                                        throw new Exception(Database::getException());
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
        }else{
            Page::showMessage(2, "Usuario inexistente", "../inicio/index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "../inicio/index.php");
    }




}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/account/cuentaview.php");
?>