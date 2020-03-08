<?php
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
    
}