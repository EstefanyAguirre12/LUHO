<?php 
class Comentario extends validator{
    private $id = null;
    private $idproducto = null;
    private $idcomentario = null;
    private $idcliente = null;
    private $estado = null;
    private $comentario = null; 

    //Metodos para sobrecarga de las propiedades
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

    public function setIdComentario($value){
        if($this->validateId($value)){                     //No se cual poner!
            $this->idcomentario = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdComentario(){
        return $this->idcomentario;
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

    public function setEstado($value){
        if($this->validateInt($value)){
            $this->estado = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getEstado(){
        return $this->estado;
    }

    public function setComentario($value){
        if($this->validateAlphaNumeric($value)){
            $this->comentario = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getComentario(){
        return $this->comentario;
    }



    //Metodos CRUD
    // obtener comentarios
	public function getComentarios(){
		$sql = "SELECT * FROM comentarios ORDER BY Comentario";
		$params = array(null);
		return Database::getRows($sql, $params);
        }
        //buscar comentario
		public function searchComentario($value){ 
			$sql = "SELECT * FROM comentario WHERE Comentario LIKE ?  ORDER BY Comentario";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
        }

        public function getProductos(){
			$sql = "SELECT IdProducto, Nombre FROM producto ORDER BY Nombre";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
    //Insertar comentario
    public function createComentario(){
		$sql = "INSERT INTO comentario(IdProducto,IdCliente,Estado,Comentario) VALUES(?,?,?,?)";
		$params = array($this->idproducto,$this->idcliente,$this->estado,$this->comentario);
		return Database::executeRow($sql, $params);
    }
    //Leer comentario
    public function readComentario(){
		$sql = "SELECT IdComentario, IdProducto, IdCliente, Estado, Comentario FROM comentario WHERE IdComentario = ?";
		$params = array($this->id);
		$comentario = Database::getRow($sql, $params);
		if($comentario){
            $this->idcomentario = $comentario['IdComentario'];
            $this->idproducto = $comentario['IdProducto'];
            $this->idcliente = $comentario['IdCliente'];
            $this->estado = $comentario['Estado'];
            $this->comentario = $comentario['Comentario'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar comentario
    public function updateComentario(){
		$sql = "UPDATE comentario SET IdProducto = ?, IdCliente = ?, Estado = ?, Comentario = ? WHERE IdComentario = ?";
        $params = array($this->idproducto, $this->idcliente, $this->estado, $this->comentario, $this->id);
        
		return Database::executeRow($sql, $params);
    }
    //Eliminar comentario
	public function deleteOferta(){
		$sql = "DELETE FROM Comentario WHERE IdComentario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}

?>