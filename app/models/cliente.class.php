<?php
class Cliente extends Validator{
    private $id = null;
    private $usuario = null;
    private $tipousuario = null;
    private $nombre = null;
    private $direccion = null;
    private $correo = null;
    private $contrasena = null;
    private $apellido = null;

//Metodos para sobrecarga de propiedades
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

public function setUsuario($value){
    if($this->validateAlphanumeric($value, 1, 60)){
        $this->usuario = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getUsuario(){
    return $this->usuario;
}

public function setTipousuario($value){
    if($this->validateId($value)){
        $this->tipousuario = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getTipousuario(){
    return $this->tipousuario;
}

public function setNombre($value){
    if($this->validateAlphabetic($value, 1, 50)){
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

public function setDireccion($value){
    if($this->validateAlphanumeric($value, 1, 60)){
        $this->direccion = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getDireccion(){
    return $this->direccion;
}

public function setCorreo($value){
    if($this->validateEmail($value)){
        $this->correo = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getCorreo(){
    return $this->correo;
}

public function setContrasena($value){
    if($this->validatePassword($value)){
        $this->contrasena = $value;
        return true;
    }else{
        return false;
    }
}
public function getContrasena(){
    return $this->contrasena;
}

public function setApellido($value){
    if($this->validateAlphabetic($value, 1, 60)){
        $this->apellido = $value;
        return true;
    }
    else{
        return false;
    }
}
public function getApellido(){
    return $this->apellido;
}

 //Metodo para manejar el CRUD
 public function checkCliente(){
    $sql = "SELECT IdCliente FROM cliente WHERE Usuario = ?";
    $params = array($this->usuario);
    $data = Database::getRow($sql, $params);
    if($data){
        $this->id = $data['IdCliente'];
        return true;
    }else{
        return false;
    }
}
public function checkContra(){
    $sql = "SELECT Contrasena FROM cliente WHERE IdCliente = ?";
    $params = array($this->id);
    $data = Database::getRow($sql, $params);
    if(password_verify($this->contrasena, $data['Contrasena'])){
        return true;
    }else{
        return false;
    }
}

public function changePassword(){
    $hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE cliente SET Contrasena = ? WHERE IdCliente = ?";
    $params = array($hash, $this->id);
    return Database::executeRow($sql, $params);
}

public function logOut(){
    return session_destroy();
}
 public function getClientes(){
    $sql = "SELECT IdCliente, Usuario, Nombre, Direccion, Correo, Contrasena, Apellido FROM cliente ORDER BY Apellido";
    $params = array(null);
    return Database::getRows($sql, $params);
}

public function searchCliente($value){
    $sql = "SELECT * FROM cliente WHERE Usuario LIKE ? OR Nombre LIKE ?  ORDER BY Usuario";
    $params = array("%$value%", "%$value%" );
    return Database::getRows($sql, $params);
}

public function createCliente(){
	$hash = password_hash($this->contrasena, PASSWORD_DEFAULT);
    $sql = "INSERT INTO cliente(IdCliente, Usuario, Nombre, Direccion, Correo, Apellido, Contrasena) VALUES( ?, ?, ?, ?, ?, ?, ?)";
    $params = array($this->id, $this->usuario, $this->nombre,  $this->direccion, $this->correo, $this->apellido, $hash);
    return Database::executeRow($sql, $params);    
}
public function readCliente(){
    $sql = "SELECT Usuario, Nombre, IdCliente, Direccion, Correo, Contrasena, Apellido FROM cliente WHERE IdCliente = ?";
    $params = array($this->id);
    $user = Database::getRow($sql, $params);
    if($user){
        $this->usuario = $user['Usuario'];
        $this->nombre = $user['Nombre'];
        $this->idusuario = $user['IdCliente'];
        $this->direccion = $user['Direccion'];
        $this->correo = $user['Correo'];
        $this->contrasena = $user['Contrasena'];
        $this->apellido = $user['Apellido'];
        return true;
    }else{
        return null;
    }
}
public function updateCliente(){
    $sql = "UPDATE cliente SET Usuario = ?, Nombre = ?, Direccion = ?, Correo = ?, Apellido = ? WHERE IdCliente = ?";
    $params = array($this->usuario, $this->nombre, $this->direccion, $this->correo, $this->apellido, $this->id);
    return Database::executeRow($sql, $params);
}
public function deleteCliente(){
    $sql = "DELETE FROM cliente WHERE IdCliente = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}
}

?>