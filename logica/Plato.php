<?php
class Plato{
    private $idplato,$nombre,$precio,$idchef,$idcategoria;
    function Plato($idplato="",$nombre="",$precio="",$idchef="",$idcategoria=""){
        $this -> idplato =  $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this ->idchef = $idchef;
        $this -> idcategoria = $idcategoria;
    }
    public function getIdplato()
    {
        return $this->idplato;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getIdchef()
    {
        return $this->idchef;
    }

    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    public function setIdplato($idplato)
    {
        $this->idplato = $idplato;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setIdchef($idchef)
    {
        $this->idchef = $idchef;
    }

    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }

 
    
}