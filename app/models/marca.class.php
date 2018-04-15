<?php
class Marca extends Validator{
    private $id = null;
    private $nombre = null;
    
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
    
    public function setNombre($value){
			if($this->validateAlphanumeric($value, 1, 50)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
    
    //Metodos CRUD
    
    //Insertar marca
    public function createMarca(){
		$sql = "INSERT INTO marca(Marca) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer marca
    public function readMarca(){
		$sql = "SELECT Marca FROM marca WHERE IdMarca = ?";
		$params = array($this->id);
		$marca = Database::getRow($sql, $params);
		if($marca){
			$this->nombre = $marca['Marca'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar marca
    public function updateMarca(){
		$sql = "UPDATE marca SET Marca = ? WHERE IdMarca = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar marca
	public function deleteMarca(){
		$sql = "DELETE FROM marca WHERE IdMarca = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>