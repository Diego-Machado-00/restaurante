<?php
require 'persistencia/PlatoDAO.php';
require_once 'persistencia/Conexion.php';

class Plato{
    private $idplato;
    private $nombre;
    private $precio;
    private $categoria_idcategoria;
    private $foto;
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
    
    function getFoto(){
        return $this -> foto;
    }
    
    
    function Plato($idplato="", $nombre="", $precio="", $categoria_idcategoria="", $foto=""){
        $this -> idplato = $idplato;
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> categoria_idcategoria = $categoria_idcategoria;
        $this -> foto = $foto;
        $this -> conexion = new Conexion();
        $this -> platoDAO = new PlatoDAO($idplato, $nombre, $precio, $categoria_idcategoria, $foto);
    }
    
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> consultarTodos());
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Plato($registro[0], $registro[1], $registro[2],$registro[3],$registro[4]);
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
        $this -> foto = $resultado[4];
        $this -> conexion -> cerrar();
    }
    
    function buscarPlato($filtro){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> buscarPlato($filtro));
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Plato($registro[0], $registro[1], $registro[2], $registro[3], $registro[4]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
    function registrar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> platoDAO -> registrar());
        $this -> conexion -> cerrar();
    }

}