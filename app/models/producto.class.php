<?php
class producto extends validator{
    private $id = null;
    private $cantidad = null;
    private $costo = null;
    private $descripcion = null;
    private $detalles = null;
    private $idcategoria = null;
    private $idmarca = null;
    private $idmaterial = null;
    private $idocasion = null;
    private $idtalla = null;
    private $img = null;
    private $modelo = null;
    private $nombre = null; 

    //Metodos para sobre cargar de las propiedades
    public function setId($value){
        if($this->validateId($value)){
            $this->id = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getId(){
        return $this->id;
    }

    public function setCosto($value){
        if($this->validateMoney($value,2)){
            $this->costo = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getCosto(){
        return $this->costo;
    }

    public function setCantidad($value){
        if($this->validateInt($value)){
            $this->cantidad = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getCantidad(){
        return $this->cantidad;
    }

    public function setDescripcion($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->descripcion = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDetalles($value){
        if($this->validateAlphanumeric($value, 1, 100)){
            $this->detalles = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDetalles(){
        return $this->detalles;
    }

    public function setIdcategoria($value){
        if($this->validateId($value)){
            $this->idcategoria = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdcategoria(){
        return $this->idcategoria;
    }

    public function setIdmarca($value){
        if($this->validateId($value)){
            $this->idmarca = $value;
            return true; 
        }
        else{
            return false;
        }
    }
    public function getIdmarca(){
        return $this->idmarca;
    }

    public function setIdmaterial($value){
        if($this->validateId($value)){
            $this->idmaterial = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdmaterial(){
        return $this->idmaterial;
    }

    public function setIdocasion($value){
        if($this->validateId($value)){
            $this->idocasion = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdocasion(){
        return $this->idocasion;
    }

    public function setIdTalla($value){
        if($this->validateId($value)){
            $this->idtalla = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdTalla(){
        return $this->idtalla;
    }


   
    public function setImagen($file){
		if($this->validateImage($file, $this->img, "../../web/img/productos/", 500, 500)){
			$this->img = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->img;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/productos/".$this->img)){
			$this->img = null;
			return true;
		}else{
			return false;
		}
	}

    public function setModelo($value){
        if($this->validateAlphanumeric($value, 1, 50)){
            $this->modelo = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function setNombre($value){
        if($this->validateAlphanumeric($value, 1, 50)){
            $this->nombre = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function getCategoria(){
        $sql = "SELECT IdCategoria, Categoria FROM categoria ORDER BY Categoria";
        $params = array(null);
        return Database::getRows($sql, $params);
    }

    public function getMarca(){
        $sql = "SELECT IdMarca, Marca FROM marca ORDER BY Marca";
        $params = array(null);
        return Database::getRows($sql, $params);
    }

    public function getMaterial(){
        $sql = "SELECT IdMaterial, Material FROM material ORDER BY Material";
        $params = array(null);
        return Database::getRows($sql, $params);
    }

    public function getOcasion(){
        $sql = "SELECT IdOcasion, Ocasion FROM ocasion ORDER BY Ocasion";
        $params = array(null);
        return Database::getRows($sql, $params);
    }

    public function getTallas(){
        $sql = "SELECT IdTalla, Talla FROM talla ORDER BY Talla";
        $params = array(null);
        return Database::getRows($sql, $params);
    }

      
public function createProducto(){
    $sql = "INSERT INTO producto(Nombre, Modelo, Img, IdTalla, IdProducto, IdOcasion, IdMaterial, IdMarca, IdCategoria, Detalles, Descripcion, Costo, Cantidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($this->$nombre, $this->$modelo, $this->$img, $this->idtalla, $this->id, $this->idocasion, $this->idmaterial, $this->idmarca, $this->idcategoria, $this->detalles, $this->descripcion, $this->costo, $this->$cantidad);
    return Database::executeRow($sql, $params);
}
public function readProduct(){
    $sql = "SELECT Nombre, Modelo, Img, IdTalla, IdProducto, IdOcasion, IdMaterial, IdMarca, IdCategoria, Detalles, Descripcion, Costo, Cantidad FROM producto WHERE IdProducto = ?";
    $params = array($this->id);
    $producto = Database::getRow($sql, $params);
    if($producto){
        $this->nombre = $producto['Nombre'];
        $this->modelo = $prodcuto['Modelo'];
        $this->img = $producto['Img'];
        $this->idtalla = $producto['IdTalla'];
        $this->id = $producto['IdProducto'];
        $this->idocasion = $producto['IdOcasion'];
        $this->idmaterial = $producto['IdMaterial'];
        $this->idmarca = $producto['IdMarca'];
        $this->idcategoria = $producto['IdCategoria'];
        $this->detalles = $producto['Detalles'];
        $this->descripcion = $producto['Descripcion'];
        $this->costo = $producto['Costo'];
        $this->cantidad = $producto['Cantidad'];
        return true;
    }
    else{
        return null;
    }
}
public function updateProducto(){
    $ql = "UPDATE producto SET Nombre = ?, Modelo = ?, Img = ?, IdTalla = ?, IdOcasion = ?, IdMaterial = ?, IdMarca = ?, IdCategoria = ?, Detalles = ?, Descripcion = ?, Costo = ?, Cantidad = ? WHERE IdProducto = ?";
    $params = array($this->$nombre, $this->$modelo, $this->$img, $this->$idtalla, $this->$idocasion, $this->$idmaterial, $this->$idmarca, $this->$idcategoria, $this->$detalles, $this->$descripcion, $this->$costo, $this->$cantidad, $this->$id);
    return Database::executeRow($sql, $params);
}
public function deleteProducto(){
    $sql = "DELETE FROM producto WHERE IdProducto = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}

}
?>