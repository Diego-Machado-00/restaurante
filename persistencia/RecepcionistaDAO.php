<?php
require 'persistencia/RecepcionistaDAO.php';
require_once 'persistencia/Conexion.php';

class Recepcionista extends Persona {
    private $recepcionistaDAO;
    private $conexion;
    
    function Recepcionista($id="", $nombre="", $apellido="", $correo="", $clave=""){
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
        $this -> conexion = new Conexion();
        $this -> recepcionistaDAO = new RecepcionistaDAO($id, $nombre, $apellido, $correo, $clave);
    }
    
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> recepcionistaDAO -> autenticar());
        if($this -> conexion -> numFilas() == 1){
            $resultado = $this -> conexion -> extraer();
            $this -> id = $resultado[0];
            $this -> conexion -> cerrar();
            return true;
        } else {
            $this -> conexion -> cerrar();
            return false;
        }
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> recepcionistaDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> id = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> correo = $resultado[3];
        $this -> conexion -> cerrar();
    }
    
}