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
    
    function registrar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> categoriaDAO -> registrar());
        $this -> conexion -> cerrar();
    }
    
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> categoriaDAO -> consultarTodos());
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Categoria($registro[0], $registro[1]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
}

