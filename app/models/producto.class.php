<?php
class producto extends validator{
    private $id = null;
    private $costo = null;
    private $descripcion = null;
    private $detalles = null;
    private $idcategoria = null;
    private $idmarca = null;
    private $idmaterial = null;
    private $idocasion = null;
    private $idtalla = null;
    private $idtipoenvio = null;
    private $img = null;
    private $modelo = null;
    private $nombre = null; 

    //Metodos para sobre cargar de las propiedades
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

    public function setCosto($value){
        if($this->validate($value,2)){
            $this->costo = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getCosto(){
        return $this->costo;
    }

    public function setDescripcion($value){
        if($this->validateAlphanumeric($value, 1, 60)){
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

    public function setDetalles($value){
        if($this->validateAlphanumeric($value, 1, 60)){
            $this->detalles = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getDetalles(){
        return $this->detalles;
    }

    public function setIdcategoria($value){
        if($this->validate($value)){
            $this->idcategoria = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdcategoria(){
        return $this->idcategoria;
    }

    public function setIdmarca($value){
        if($this->validate($value)){
            $this->idmarca = $value;
            return true; 
        }
        else{
            return false;
        }
    }
    public function getIdmarca(){
        return $this->idmarca;
    }

    public function setIdmaterial($value){
        if($this->validate($value)){
            $this->idmaterial = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdmaterial(){
        return $this->idmaterial;
    }

    public function setIdocasion($value){
        if($this->validate($value)){
            $this->idocasion = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdocasion(){
        return $this->idocasion;
    }

    public function setIdtalla($value){
        if($this->vaidate($value)){
            $this->idtalla = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdtalla($value){
        return $this->idtalla;
    }

    public function setIdtipoenvio($value){
        if($this->validate($value)){
            $this->idtipoenvio = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getIdtipoenvio(){
        return $this->idtipoenvio;
    }

    public function setImg($value){
        if($this->validateAplhanumeric($value)){
            $this->img = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getImg(){
        return $this->img;
    }

    public function setModelo($value){
        if($this->vaidateAlphanumeric($value)){
            $this->modelo = $value;
            return true;
        }
        else{
            return false;
        }
    }
    public function getModelo(){
        return $this->modleo;
    }

    public function setNombre($value){
        if($this->validateAlphabetic($value)){
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


}
?>