<?php
require_once("../../app/models/producto.class.php");
try{
    if(isset($_GET['id'])){
        $producto = new Producto;
        if($producto->setId($_GET['id'])){
            if($producto->readProducto()){
                if(isset($_POST['modificar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setNombre($_POST['Nombre'])){
                        if($producto->setModelo($_POST['Modelo'])){
                            if($producto->setDescripcion($_POST['Descripcion'])){
                                if($producto->setDetalles($_POST['Det'])){
                                    if($producto->setCosto($_POST['Costo'])){
                                        if($producto->setCantidad($_POST['Cantidad'])){         
                                            if($producto->setIdcategoria($_POST['Categoria'])){     
                                                if($producto->setIdmarca($_POST['Marca'])){
                                                    if($producto->setIdmaterial($_POST['Material'])){
                                                        if($producto->setIdocasion($_POST['Ocasion'])){
                                                            if($producto->setIdTalla($_POST['Talla'])){
                                                                    if(is_uploaded_file($_FILES['imag']['tmp_name'])){
                                                                        if(!$producto->setImagen($_FILES['imag'])){
                                                                            throw new Exception($producto->getImageError());
                                                                        }
                                                                    }           if($producto->updateProducto()){
                                                                            Page::showMessage(1, "Producto modificado", "index.php");
                                                                        }else{
                                                                            // if($producto->unsetImagen()){
                                                                            //     throw new Exception(Database::getException());
                                                                            // }else{
                                                                            //     throw new Exception("Elimine la imagen manualmente");
                                                                            // }
                                                                        }
                                                                        
                                                                //     }else{
                                                                //         throw new Exception($producto->getImageError());
                                                                //     }
                                                                // }else{
                                                                //     throw new Exception("Seleccione una imagen");
                                                                // }
                                                                
                                                            }else{
                                                                throw new Exception("Talla incorrecta");
                                                            }
                                                        }else{
                                                            throw new Exception("Ocasion incorrecta");
                                                        }
                                                    }else{
                                                        throw new Exception("Material incorrecta");
                                                    }
                                                }else{
                                                    throw new Exception("Marca incorrecta");
                                                }
                                            }else{
                                                throw new Exception("Categoria incorrecta");
                                            }
                                    }else{
                                        throw new Exception("Cantidad incorrecta");
                                    }
                                }else{
                                    throw new Exception("Costo incorrecto");
                                }
                                }else{
                                    throw new Exception("Detalle incorrecto");
                                }
                            }else{
                                throw new Exception("Descripción incorrecta");
                            }
                        }else{
                            throw new Exception("Modelo incorrecta");
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Ocasion inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Ocasion incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione ocasion", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/updateview.php");
?>
