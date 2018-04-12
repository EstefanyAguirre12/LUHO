<?php
class talla extends validator{
    private $id = null;
    private $tipoenvio = null;

    //Metodos para sobrecarga de propiedades
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

    public function getTipoenvio($value){
        if($this->validateAlphabetic($value)){
            $this->tipoenvio = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getTipoenvio(){
        return $this->tipoenvio;
    }
}
?>