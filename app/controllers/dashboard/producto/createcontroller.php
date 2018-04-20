<?php
require_once("../../app/models/producto.class.php");
try{
    $producto = new Producto;
    if(isset($_POST['crear'])){
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
                                                        if($producto->setImagen($_FILES['imag'])){
                                                            if($producto->createProducto()){
                                                                Page::showMessage(1, "Producto creado", "index.php");
                                                            }else{
                                                                if($producto->unsetImagen()){
                                                                    throw new Exception(Database::getException());
                                                                }else{
                                                                    throw new Exception("Elimine la imagen manualmente");
                                                                }
                                                            }
                                                            
                                                        }else{
                                                            throw new Exception($producto->getImageError());
                                                        }
                                                    }else{
                                                        throw new Exception("Seleccione una imagen");
                                                    }
                    
                                                }else{
                                                    throw new Exception("Estado incorrecto");
                                                }
                                            }else{
                                                throw new Exception("Estado incorrecto");
                                            }
                    
                                        }else{
                                            throw new Exception("Estado incorrecto");
                                        }
                                    }else{
                                        throw new Exception("Estado incorrecto");
                                    }
                                }else{
                                    throw new Exception("Estado incorrecto");
                                }
                        }else{
                            throw new Exception("Estado incorrecto");
                        }
                    }else{
                        throw new Exception("Estado incorrecto");
                    }
                    }else{
                        throw new Exception("Seleccione una categoría");
                    }
                }else{
                    throw new Exception("Descripción incorrecta");
                }
            }else{
                throw new Exception("Precio incorrecto");
            }
        }else{
            throw new Exception("Nombre incorrecto");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/createview.php");
?>
