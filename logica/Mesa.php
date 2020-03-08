<?php
require 'persistencia/MesaDAO.php';
require_once 'persistencia/Conexion.php';

class Mesa{
    private $idmesa;
    private $nombre;
    private $numero_personas;
    private $mesaDAO;
    private $conexion;
    
    function getIdmesa(){
        return $this -> idmesa;
    }
    
    function getNombre(){
        return $this -> nombre;
    }
    
    function getNpersonas(){
        return $this -> numero_personas;
    }
    
    function Mesa($idmesa="", $nombre="", $numero_personas=""){
        $this -> idmesa = $idmesa;
        $this -> nombre = $nombre;
        $this -> numero_personas = $numero_personas;
        $this -> conexion = new Conexion();
        $this -> mesaDAO = new MesaDAO($idmesa, $nombre, $numero_personas);
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> mesaDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> idmesa = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> numero_personas = $resultado[2];
        $this -> conexion -> cerrar();
    }
    
}