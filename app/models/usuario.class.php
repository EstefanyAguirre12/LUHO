<?php
class Usuario extends Validator{
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
        $this->clave = $value;
        return true;
    }else{
        return false;
    }
}
public function getContrasena(){
    return $this->clave;
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
 public function checkUsuario(){
    $sql = "SELECT IdUsuario FROM usuario WHERE Usuario = ?";
    $params = array($this->usuario);
    $data = Database::getRow($sql, $params);
    if($data){
        $this->id = $data['IdUsuario'];
        return true;
    }else{
        return false;
    }
}
public function checkContra(){
    $sql = "SELECT Contrasena FROM usuario WHERE IdUsuario = ?";
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
    $sql = "UPDATE usuario SET Contrasena = ? WHERE IdUsuario = ?";
    $params = array($hash, $this->id);
    return Database::executeRow($sql, $params);
}

public function logOut(){
    return session_destroy();
}
 public function getUsuarios(){
    $sql = "SELECT IdUsuario, Usuario, TipoUsuario, Nombre, Direccion, Correo, Contrasena, Apellido FROM usuario where TipoUsuario=2 ORDER BY Apellido";
    $params = array(null);
    return Database::getRows($sql, $params);
}
public function getClientes(){
    $sql = "SELECT IdUsuario, Usuario, TipoUsuario, Nombre, Direccion, Correo, Contrasena, Apellido FROM usuario where TipoUsuario=1 ORDER BY Apellido";
    $params = array(null);
    return Database::getRows($sql, $params);
}
public function getGeneros(){
    $sql = "SELECT IdTipo, Tipo FROM tipousuario ORDER BY Tipo";
    $params = array(null);
    return Database::getRows($sql, $params);
}

public function searchUsuario($value){
    $sql = "SELECT * FROM usuario WHERE Usuario LIKE ? OR Nombre LIKE ? and TipoUsuario=2 ORDER BY Usuario";
    $params = array("%$value%", "%$value%" );
    return Database::getRows($sql, $params);
}

public function createUsuario(){
	$hash = password_hash($this->clave, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuario(IdUsuario, Usuario, TipoUsuario, Nombre, Direccion, Correo, Apellido, Contrasena) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    $params = array($this->id, $this->usuario, $this->tipousuario, $this->nombre,  $this->direccion, $this->correo, $this->apellido, $hash);
    return Database::executeRow($sql, $params);    
}
public function readUsuario(){
    $sql = "SELECT Usuario, TipoUsuario, Nombre, IdUsuario, Direccion, Correo, Contrasena, Apellido FROM usuario WHERE IdUsuario = ?";
    $params = array($this->id);
    $user = Database::getRow($sql, $params);
    if($user){
        $this->usuario = $user['Usuario'];
        $this->tipousuario = $user['TipoUsuario'];
        $this->nombre = $user['Nombre'];
        $this->idusuario = $user['IdUsuario'];
        $this->direccion = $user['Direccion'];
        $this->correo = $user['Correo'];
        $this->contrasena = $user['Contrasena'];
        $this->apellido = $user['Apellido'];
        return true;
    }else{
        return null;
    }
}
public function updateUsuario(){
    $sql = "UPDATE usuario SET Usuario = ?, Nombre = ?, Direccion = ?, Correo = ?, Apellido = ? WHERE IdUsuario = ?";
    $params = array($this->usuario, $this->nombre, $this->direccion, $this->correo, $this->apellido, $this->id);
    return Database::executeRow($sql, $params);
}
public function deleteUsuario(){
    $sql = "DELETE FROM usuario WHERE IdUsuario = ?";
    $params = array($this->id);
    return Database::executeRow($sql, $params);
}
}

?>