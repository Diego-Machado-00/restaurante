<?php
<<<<<<< HEAD
require 'persistencia/ChefDAO.php';
require_once 'persistencia/Conexion.php';

class Chef extends Persona {
    private $tarjetaprofesional;
    private $chefDAO;
    private $conexion;
    
    function getTarjetaProfesional(){
        return $this -> tarjetaprofesional;
    }
    
    function Chef($idchef="", $nombre="", $apellido="", $correo="", $clave="", $tarjetaprofesional=""){
        $this -> tarjetaprofesional = $tarjetaprofesional;
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
        $this -> conexion = new Conexion();
        $this -> chefDAO = new ChefDAO($idchef, $nombre, $apellido, $correo, $clave, $tarjetaprofesional);
=======
class Chef extends Persona{
    private $tarjetaprofesional;
    function Chef($id="",$nombre="",$apellido="",$correo="",$clave="",$tarjetaprofesional=""){
        $this -> tarjetaprofesional = $tarjetaprofesional;
        $this -> Persona($id, $nombre, $apellido, $correo, $clave);
>>>>>>> carpetalogica
    }
    
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> chefDAO -> autenticar());
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
        $this -> conexion -> ejecutar($this -> chefDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
<<<<<<< HEAD
        $this -> idchef = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> correo = $resultado[3];
        $this -> tarjetaprofesional = $resultado[4];
        $this -> conexion -> cerrar();
    }
    
    function registrar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> chefDAO -> registrar());
        $this -> conexion -> cerrar();
    }
    
    function existeCorreo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> chefDAO -> existeCorreo());
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
        $this -> conexion -> ejecutar($this -> chefDAO -> consultarTodos());
        $resultados = array();
        $i=0;
        while(($registro = $this -> conexion -> extraer()) != null){
            $resultados[$i] = new Chef($registro[0], $registro[1], $registro[2], "", $registro[3], $registro[4]);
            $i++;
        }
        $this -> conexion -> cerrar();
        return $resultados;
    }
    
}
=======
        $this -> id = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> correo = $resultado[3];
        $this -> conexion -> cerrar();
    }
    function getTarjeta(){
       return $this -> tarjetaprofesional;
       
    } function setTarjeta($tarjetaprofesional){
        $this -> tarjetaprofesional=$tarjetaprofesional;
        
    }
}
?>
>>>>>>> carpetalogica
