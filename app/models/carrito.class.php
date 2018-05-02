<?php
class Carrito extends Validator{
    private $id = null;
    private $idcliente = null;
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

    public function setIdCliente($value){
        if($this->validateId($value)){
            $this->idcliente = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getIdCliente(){
			return $this->idcliente;
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
		$sql = "SELECT IdCarrito, p.Nombre, p.Costo, c.Cantidad FROM carrito c, producto p where p.IdProducto = c.IdProducto and c.IdCliente=?";
		$params = array($this->id);
		return Database::getRows($sql, $params);
    }

       //Buscar carrito con parametros
       public function searchCarrito($value){
		$sql = "SELECT * FROM carrito c, producto p WHERE c.IdProducto = p.IdProducto and c.IdCliente=? and (Nombre LIKE ? OR costo LIKE ?) ORDER BY Nombre";
		$params = array($this->id,"%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar carrito
    public function createCarrito(){
		$sql = "INSERT INTO carrito(IdCliente, IdProducto, Cantidad) VALUES(?, ?, ?)";
		$params = array($this->idcliente, $this->idproducto, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer carrito
    public function readCarrito(){
		$sql = "SELECT IdCliente, IdProducto, Cantidad FROM carrito WHERE IdCarrito = ?";
		$params = array($this->id);
		$carro = Database::getRow($sql, $params);
		if($carro){
			$this->idcliente = $carro['IdCliente'];
            $this->idproducto = $carro['IdProducto'];
            $this->cantidad = $carro['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar carrito
    public function updateCarrito(){
		$sql = "UPDATE carrito SET IdCliente= ?, IdProducto= ?, Cantidad= ? WHERE IdCarrito = ?";
		$params = array($this->idcliente, $this->idproducto, $this->cantidad, $this->id);
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