<?php 
require_once("../app/models/cliente.class.php");
//aqui empieza el try 
try{
    // aqui son if que controlan que si existe la variable , el usuario y si la contraseña es igual
    if(isset($_POST['cambiar'])){
        $usuario = new Cliente;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId($_SESSION['IdCliente'])){
            if($_POST['clave1'] == $_POST['clave2']){
                if($usuario->setClave($_POST['clave1'])){
                    if($usuario->checkPassword()){
                        if($_POST['clave1'] != $_POST['clave_nueva_1']){
                        if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){
                            if($usuario->setClave($_POST['clave_nueva_1'])){
                                if($_POST['clave_nueva_1'] != $_SESSION['Correo']){
                                if($usuario->changePassword()){
                                    $usuario->setId($_SESSION['IdCliente']);
                                    $usuario->Cactualizado();
                                    Page::showMessage(1, "Clave cambiada", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("La contraseña no puede ser igual al correo :)");
                            }
                        }else{
                                throw new Exception("Clave nueva menor a 8 caracteres");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                throw new Exception("Claves actuales iguales a la clave nueva");
            }
        }
                    else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("Clave actual menor a 8 caracteres");
                }
            }else{
                throw new Exception("Claves actuales diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/vistas/public/actualizarC/actualizarC_view.php");

?>