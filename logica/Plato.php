<?php
require 'persistencia/PlatoDAO.php';
require_once 'persistencia/Conexion.php';

class Plato{
    private $idplato;
    private $nombre;
    private $precio;
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
    
    function getCategoria(){
        return $this -> categoria_idcategoria;
    }
    
    function Plato($idplato="", $nombre="", $precio="", $categoria_idcategoria=""){
        $this -> idplato = $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> categoria_idcategoria = $categoria_idcategoria;
        $this -> conexion = new Conexion();
        $this -> platoDAO = new PlatoDAO($idplato, $nombre, $precio, $categoria_idcategoria);
    }
    
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> consultarTodos());
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Plato($registro[0], $registro[1], $registro[2],$registro[3]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idplato = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> precio = $resultado[2];
        $this -> categoria_idcategoria = $resultado[3];
        $this -> conexion -> cerrar();
    }
    
    function buscarPlato($filtro){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> buscarPlato($filtro));
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Plato($registro[0], $registro[1], $registro[2], $registro[3]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }

}