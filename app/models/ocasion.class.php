<?php
class Ocasion extends Validator{
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
			if($this->validateAlphanumeric($value, 1, 60)){
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
    //Obtener Ocasion
    public function getOcasion(){
		$sql = "SELECT IdOcasion, Ocasion FROM ocasion ORDER BY IdOcasion";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    //Insertar Ocasion
    public function createOcasion(){
		$sql = "INSERT INTO ocasion(Ocasion) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readOcasion(){
		$sql = "SELECT Ocasion FROM ocasion WHERE IdOcasion = ?";
		$params = array($this->id);
		$ocasion = Database::getRow($sql, $params);
		if($ocasion){
			$this->nombre = $ocasion['Ocasion'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateOcasion(){
		$sql = "UPDATE ocasion SET Ocasion = ? WHERE IdOcasion = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteOcasion(){
		$sql = "DELETE FROM ocasion WHERE IdOcasion = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>