<?php
class Categoria extends Validator{
    private $id = null;
    private $categoria = null;
    private $genero = null;
    
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
    
    public function setCategoria($value){
			if($this->validateAlphanumeric($value, 1, 60)){
				$this->categoria = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCategoria(){
			return $this->categoria;
		}
    
    public function setGenero($value){
		if($this->validateAlphanumeric($value, 1)){
			$this->genero = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getGenero(){
		return $this->genero;
    }
    
    //Metodos CRUD
    //Obtener categoria
    public function getCategoria(){
		$sql = "SELECT IdCategoria, Categoria, Genero FROM categoria ORDER BY Categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    //Buscar categoria con parametros
    public function searchCategoria($value){
		$sql = "SELECT * FROM categoria WHERE Categoria LIKE ? OR Genero LIKE ? ORDER BY Categoria";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createCategoria(){
		$sql = "INSERT INTO categoria(Categoria, Genero) VALUES(?, ?)";
		$params = array($this->categoria, $this->genero);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readCategoria(){
		$sql = "SELECT Categoria, Genero FROM categoria WHERE IdCategoria = ?";
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
    //Modificar categoria
    public function updateCategoria(){
		$sql = "UPDATE categoria SET Categoria = ?, Genero = ? WHERE IdCategoria = ?";
		$params = array($this->categoria, $this->genero, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteCategoria(){
		$sql = "DELETE FROM categoria WHERE IdCategoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>