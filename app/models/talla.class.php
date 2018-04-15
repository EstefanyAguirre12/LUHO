<?php
class talla extends validator{
    private $id = null;
    private $talla = null;

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

    public function getTalla($value){
		if($this->validateAlphanumeric($value, 1, 50)){
            $this->talla = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getTalla(){
        return $this->talla;
    }
}
?>