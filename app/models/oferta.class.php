<?php 
class oferta extends validator{
    private $id = null;
    private $descripcion = null;
    private $descuento = null;
    private $idproducto = null;

    //Metodos para sobrecarga de las propiedades
    public function setId($value){
        if($this->validate($value)){
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

    public function setDescripcion($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->descripcion = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescuento($value){
        if($this->validateMoney($value)){                     //No se cual poner!
            $this->descuento = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDescuento(){
        return $this->descuento;
    }

    public function setIdproducto($value){
        if($this->validate($value)){
            $this->idproducto = $value;
            return true;
        }
        false{
            return false;
        }
    }
    public function getIdproducto(){
        return $this->idproducto;
    }

}

?>