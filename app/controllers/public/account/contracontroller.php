<?php
require_once("../../app/models/cliente.class.php");
try{
    //Aqui va el codigo para cambiar contrasena
    if(isset($_POST['modificar'])){
        $usuario = new Cliente;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId($_SESSION['IdCliente'])){
            if($_POST['clave1'] == $_POST['clave2']){
                if($usuario->setContrasena($_POST['clave1'])){
                    if($usuario->checkContra()){
                        if($_POST['clave1'] == $_POST['clave2']){
                            if($usuario->setContrasena($_POST['clave1'])){
                                if($usuario->changePassword()){
                                    Page::showMessage(1, "Clave cambiada", "../inicio/index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Clave nueva menor a 6 caracteres");
                            }
                        }else{
                            throw new Exception("Claves diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("Clave menor a 6 caracteres");
                }
            }else{
                throw new Exception("Claves diferentes");
            }
        }else{
            Page::showMessage(2, "Cliente incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/public/account/contraview.php");
?>