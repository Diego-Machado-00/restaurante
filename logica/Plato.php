<?php
<<<<<<< HEAD
require 'persistencia/PlatoDAO.php';
require_once 'persistencia/Conexion.php';

class Plato{
    private $idplato;
    private $nombre;
    private $precio;
    private $chef_idchef;
    private $categoria_idcategoria;
    private $platoDAO;
    private $conexion;
    
    function getIdplato(){
        return $this -> idplato;
    }
    
    function getNombre(){
        return $this -> nombre;
    }
    function getPrecio(){
        return $this -> precio;
    }
    
    function getChef(){
        return $this -> chef_idchef;
    }
    function getCategoria(){
        return $this -> categoria_idcategoria;
    }
    function Plato($idplato="", $nombre="", $precio="", $chef_idchef="", $categoria_idcategoria=""){
        $this -> idplato = $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> chef_idchef = $chef_idchef;
        $this -> categoria_idcategoria = $categoria_idcategoria;
        $this -> conexion = new Conexion();
        $this -> platoDAO = new PlatoDAO($idplato, $nombre, $precio, $chef_idchef, $categoria_idcategoria);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idplato = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> precio = $resultado[2];
        $this -> chef_idchef = $resultado[3];
        $this -> categoria_idcategoria = $resultado[4];
        $this -> conexion -> cerrar();
    }
=======
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

 
>>>>>>> carpetalogica
    
}