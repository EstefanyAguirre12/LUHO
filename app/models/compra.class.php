<?php
class Compra extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $fecha = null;
	private $idusuario = null;

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
	
	public function setFecha($value){
		if($this->validateAlphanumeric($value, 9, 10)){
			$this->fecha = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setIdUsuario($value){
		if($this->validateId($value)){
			$this->idusuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdUsuario(){
		return $this->idusuario;
	}

	//Metodos para el manejo del CRUD
	//Insertar compra
    public function createCompra(){
		$sql = "INSERT INTO compra(Fecha, Idusuario) VALUES(?, ?)";
		$params = array($this->fecha, $this->idusuario);
		return Database::executeRow($sql, $params);
    }
    //Leer compra
    public function readCompra(){
		$sql = "SELECT Fecha, Idusuario FROM compra WHERE Idcompra = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->categoria = $categoria['Categoria'];
			$this->genero = $categoria['Genero'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar compra
    public function updateCompra(){
		$sql = "UPDATE categoria SET Categoria = ?, Genero = ? WHERE IdCategoria = ?";
		$params = array($this->categoria, $this->genero, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar compra
	public function deleteCompra(){
		$sql = "DELETE FROM categoria WHERE IdCategoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>