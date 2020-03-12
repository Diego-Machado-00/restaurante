<?php
require 'persistencia/ClienteDAO.php';
require_once 'persistencia/Conexion.php';

class Cliente extends Persona{
    private $estado;
    private $cedula;
    private $clienteDAO;
    private $conexion;
    
    function getCedula(){
        return $this -> cedula;
    }
    
    function getEstado(){
        return $this -> estado;
    }
    
    function Cliente($id="", $nombre="", $apellido="", $correo="", $clave="", $estado="", $cedula=""){
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
        $this -> cedula = $cedula;
        $this -> estado = $estado;
        $this -> conexion = new Conexion();
        $this -> clienteDAO = new clienteDAO($id, $nombre, $apellido, $correo, $clave , $estado , $cedula);  
    }
    function buscarCliente($filtro){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> buscarCliente($filtro));
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Cliente($registro[0], $registro[1], $registro[2], "", "", $registro[3],$registro[4]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> autenticar());
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
        $this -> conexion -> ejecutar($this -> clienteDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> id = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> correo = $resultado[3];
        $this -> estado = $resultado[4];
        $this -> cedula = $resultado[5];
        $this -> conexion -> cerrar();
    }
    
    function registrar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> registrar());
        $this -> conexion -> cerrar();
    }
    
    function existeCorreo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> existeCorreo());
        if($this -> conexion -> numFilas() == 0){
            $this -> conexion -> cerrar();
            return false;
        } else {
            $this -> conexion -> cerrar();
            return true;
        }
    }
    
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> consultarTodos());
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Cliente($registro[0], $registro[1], $registro[2], $registro[3], "", $registro[4], $registro[5]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
}

       

?>

