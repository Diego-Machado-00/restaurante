<?php

require 'persistencia/CategoriaDAO.php';
require_once 'persistencia/Conexion.php';

class Categoria{
    private $idcategoria;
    private $nombre;
    private $categoriaDAO;
    private $conexion;
    
    function getIdcategoria(){
        return $this -> idcategoria;
    }
    
    function getNombre(){
        return $this -> nombre;
    }
    
    
    function Categoria($idcategoria="", $nombre=""){
        $this -> idcategoria = $idcategoria;
        $this -> nombre = $nombre;
        $this -> conexion = new Conexion();
        $this -> categoriaDAO = new CategoriaDAO($idcategoria, $nombre);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> categoriaDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idcategoria = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> conexion -> cerrar();
    }
    
}

