<?php
class Material extends Validator{
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
    
    //Insertar Material
    public function createMaterial(){
		$sql = "INSERT INTO material(Material) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Material
    public function readMaterial(){
		$sql = "SELECT Material FROM material WHERE IdMaterial = ?";
		$params = array($this->id);
		$material = Database::getRow($sql, $params);
		if($material){
			$this->nombre = $material['Material'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Material
    public function updateMaterial(){
		$sql = "UPDATE material SET Material = ? WHERE IdMaterial = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Material
	public function deleteMaterial(){
		$sql = "DELETE FROM material WHERE IdMaterial = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>