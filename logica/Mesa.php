<?php
<<<<<<< HEAD
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
=======
class Mesa{
   private $idmesa,$nombre,$numpersonas;

    function Mesa($idmesa="",$nombre="",$numpersonas=""){
        $this -> idmesa = $idmesa;
        $this -> nombre = $nombre;
        $this ->numpersonas = $numpersonas;
        
    }
    public function getIdmesa()
    {
        return $this->idmesa;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getNumpersonas()
    {
        return $this->numpersonas;
    }
    
    public function setIdmesa($idmesa)
    {
        $this->idmesa = $idmesa;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function setNumpersonas($numpersonas)
    {
        $this->numpersonas = $numpersonas;
>>>>>>> carpetalogica
    }
    
}