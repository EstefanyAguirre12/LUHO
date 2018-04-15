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
    private $idtipoenvio = null;
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

    public function setIdtalla($value){
        if($this->validateId($value)){
            $this->idtalla = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdtalla($value){
        return $this->idtalla;
    }

    public function setIdtipoenvio($value){
        if($this->validateId($value)){
            $this->idtipoenvio = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdtipoenvio(){
        return $this->idtipoenvio;
    }

    public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/categorias/", 300, 300)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/categorias/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
    }
    
    public function setImg($value){
        if($this->validateAplhanumeric($value)){
            $this->img = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getImg(){
        return $this->img;
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
        return $this->modleo;
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

public function createProducto(){
    $sql = "INSERT INTO producto(Nombre, Modelo, Img, IdTipoEnvio, IdTalla, IdProducto, IdOcasion, IdMaterial, IdMarca, IdCategoria, Detalles, Descripcion, Costo, Cantidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($this->$nombre, $this->$modelo, $this->$img, $this->idtipoenvio, $this->idtalla, $this->id, $this->idocasion, $this->idmaterial, $this->idmarca, $this->idcategoria, $this->detalles, $this->descripcion, $this->costo, $this->$cantidad);
    return Database::executeRow($sql, $params);
}
public function readProduct(){
    $sql = "SELECT Nombre, Modelo, Img, IdTipoEnvio, IdTalla, IdProducto, IdOcasion, IdMaterial, IdMarca, IdCategoria, Detalles, Descripcion, Costo, Cantidad FROM producto WHERE IdProducto = ?";
    $params = array($this->id);
    $producto = Database::getRow($sql, $params);
    if($producto){
        $this->nombre = $producto['Nombre'];
        $this->modelo = $prodcuto['Modelo'];
        $this->img = $producto['Img'];
        $this->idtipoenvio = $producto['IdTipoEnvio'];
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
    $ql = "UPDATE producto SET Nombre = ?, Modelo = ?, Img = ?, IdTipoEnvio = ?, IdTalla = ?, IdOcasion = ?, IdMaterial = ?, IdMarca = ?, IdCategoria = ?, Detalles = ?, Descripcion = ?, Costo = ?, Cantidad = ? WHERE IdProducto = ?";
    $params = array($this->$nombre, $this->$modelo, $this->$img, $this->$idtipoenvio, $this->$idtalla, $this->$idocasion, $this->$idmaterial, $this->$idmarca, $this->$idcategoria, $this->$detalles, $this->$descripcion, $this->$costo, $this->$cantidad, $this->$id);
    return Database::executeRow($sql, $params);
}
public function deleteProducto(){
    $sql = "DELETE FROM producto WHERE IdProdcuto = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}

}
?>