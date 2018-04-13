<?php
require_once("../app/models/categoria.class.php");
try{
    $categoria = new  Categoria;
    $categorias = $categoria->getCategorias();
    if($categorias){
        require_once("../app/views/")
    }
}
?>