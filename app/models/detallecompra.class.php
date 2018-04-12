<?php
class DetalleCompra extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $cantidad = null;
	private $total = null;
	private $idcompra = null;
	private $idproducto = null;

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
    }
    
    public function setCantidad($value){
		if($this->validateId($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
    }

    public function setTotal($value){
		if($this->validateMoney($value)){
			$this->total = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTotal(){
		return $this->total;
    }
    
    public function setIdCompra($value){
		if($this->validateId($value)){
			$this->idcompra = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdCompra(){
		return $this->idcompra;
    }

    public function setIdProducto($value){
		if($this->validateId($value)){
			$this->idproducto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdProducto(){
		return $this->idproducto;
    }
	

	//Metodos para el manejo del CRUD
	//Insertar detalle compra
    public function createDetCompra(){
		$sql = "INSERT INTO detallecom(Cantidad, Idcompra, Idproducto, Total) VALUES(?, ?, ?, ?)";
		$params = array($this->cantidad, $this->idcompra, $this->idproducto, $this->total);
		return Database::executeRow($sql, $params);
    }
    //Leer detalle compra
    public function readDetCompra(){
		$sql = "SELECT Cantidad, Idcompra, Idproducto, Total FROM detallecom WHERE Iddetalle = ?";
		$params = array($this->id);
		$detalle = Database::getRow($sql, $params);
		if($detalle){
			$this->cantidad = $detalle['Cantidad'];
            $this->idcompra = $detalle['Idcompra'];
            $this->idproducto = $detalle['Idproducto'];
			$this->total = $detalle['Total'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar detalle compra
    public function updateDetCompra(){
		$sql = "UPDATE detallecom SET Cantidad = ?, Idcompra = ?, Idproducto = ?, Total = ? WHERE Iddetalle = ?";
		$params = array($this->cantidad, $this->idcompra, $this->idproducto, $this->total, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar detalle compra
	public function deleteDetCompra(){
		$sql = "DELETE FROM detallecom WHERE Iddetalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>