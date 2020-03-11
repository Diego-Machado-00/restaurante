<?php
<<<<<<< HEAD
require 'persistencia/ClienteDAO.php';
require_once 'persistencia/Conexion.php';

class Cliente extends Persona {
    private $estado;
    private $cedula;
    private $clienteDAO;
    private $conexion;
    
    function getEstado(){
        return $this -> estado;
    }
    
    function getCedula(){
        return $this -> cedula;
    }
    
    function Cliente($id="", $nombre="", $apellido="", $correo="", $clave="", $estado="", $cedula=""){
        $this -> estado = $estado;
        $this -> cedula = $cedula;
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
        $this -> conexion = new Conexion();
        $this -> clienteDAO = new ClienteDAO($id, $nombre, $apellido, $correo, $clave, $estado, $cedula);
    }
    
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> clienteDAO -> autenticar());
=======
class Cliente extends Persona{
    function Cliente($id="", $nombre="", $apellido="", $correo="", $clave=""){
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
    }
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> autenticar());
>>>>>>> carpetalogica
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
<<<<<<< HEAD
        $this -> conexion -> ejecutar($this -> clienteDAO -> consultar());
=======
        $this -> conexion -> ejecutar($this -> administradorDAO -> consultar());
>>>>>>> carpetalogica
        $resultado = $this -> conexion -> extraer();
        $this -> id = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> correo = $resultado[3];
<<<<<<< HEAD
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
            $resultados[$i] = new Cliente($registro[0], $registro[1], $registro[2], "", $registro[3], $registro[4]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
}
=======
        $this -> conexion -> cerrar();
    }
}
?>
>>>>>>> carpetalogica
