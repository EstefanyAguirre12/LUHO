<?php
class Carrito extends Validator{
    private $id = null;
    private $idusuario = null;
    private $idproducto = null;
    private $cantidad = null;

    //Métodos para sobrecarga de propiedades
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

    public function setIdUsuario($value){
        if($this->validateId($value)){
            $this->idusuario = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getIdUsuario(){
			return $this->idusuario;
    }
    
    public function setIdProducto($value){
        if($this->validateId($value)){
            $this->idproducto = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getIdProducto(){
			return $this->idproducto;
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
    
    
    //Metodos CRUD
    //Obtener carrito
    public function getCarrito(){
		$sql = "SELECT IdCarrito, IdUsuario, IdProducto, Cantidad FROM carrito ORDER BY IdCarrito";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    //Insertar carrito
    public function createCarrito(){
		$sql = "INSERT INTO carrito(IdUsuario, IdProducto, Cantidad) VALUES(?, ?, ?)";
		$params = array($this->idusuario, $this->idproducto, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer carrito
    public function readCarrito(){
		$sql = "SELECT IdUsuario, IdProducto, Cantidad FROM carrito WHERE IdCarrito = ?";
		$params = array($this->id);
		$carro = Database::getRow($sql, $params);
		if($carro){
			$this->idusuario = $carro['IdUsuario'];
            $this->idproducto = $carro['IdProducto'];
            $this->cantidad = $carro['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar carrito
    public function updateCarrito(){
		$sql = "UPDATE carrito SET IdUsuario= ?, IdProducto= ?, Cantidad= ? WHERE IdCarrito = ?";
		$params = array($this->idusuario, $this->idproducto, $this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar carrito
	public function deleteCarrito(){
		$sql = "DELETE FROM carrito WHERE IdCarrito = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>